<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\RegistrationNotification;
use App\Notifications\UserRegisteredNotification;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'turn' => 'required',
            'campus' => 'required',
            'comission' => 'required',
            'year' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'turn_id' => $data['turn'],
            'campus_id' => $data['campus'],
            'comission' => $data['comission'],
            'year' => $data['year'],
            'course_year' => $data['course_year'],
            'semester' => $data['semester'],
            'validated' => false
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param Request|\Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        Session::flash('register-success',
            'Gracias por registrarte. 
            Un administrador debe validar tu cuenta antes de que puedas iniciar sesión.'
        );

        return $this->registered($request, $user) ?: redirect($this->redirectPath());
    }

    /**
     * The user has been registered.
     *
     * @param Request $request
     * @param User $user
     */
    public function registered(Request $request, $user)
    {
        $user->notify(new UserRegisteredNotification($user));

        foreach (User::admins() as $user) {
            $user->notify(new RegistrationNotification());
        }
    }
}

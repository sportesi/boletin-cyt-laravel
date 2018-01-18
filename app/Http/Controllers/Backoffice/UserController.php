<?php

namespace App\Http\Controllers\Backoffice;

use App\Campus;
use App\Http\Controllers\Controller;
use App\Role;
use App\Turn;
use App\User;
use Faker\Generator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->get('course')) {
            $users = User::where([
                'turn_id' => $request->get('course')['turn_id'],
                'campus_id' => $request->get('course')['campus_id'],
                'comission' => $request->get('course')['comission'],
                'year' => $request->get('course')['year'],
                'semester' => $request->get('course')['semester'],
                'course_year' => $request->get('course')['course_year'],
            ])->get();
        } else {
            $users = User::orderBy('id', 'desc')->get();
        }

        return view('backoffice.user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.user.edit', [
            'user' => new User(),
            'campuses' => Campus::all(),
            'turns' => Turn::all(),
            'roles' => Role::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Generator $generator
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Generator $generator, Request $request)
    {
        try {
            $user = User::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'turn_id' => $request->get('turn'),
                'campus_id' => $request->get('campus'),
                'comission' => $request->get('comission'),
                'year' => $request->get('year'),
                'course_year' => $request->get('course_year'),
                'semester' => $request->get('semester'),
                'password' => bcrypt($generator->password()),
                'validated' => true,
            ]);
            $user->attachRole(Role::find($request->get('role')));
        } catch (\Exception $exception) {
            dd($exception);
        }

        return redirect()->route('backoffice.user.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backoffice.user.edit', [
            'user' => User::find($id),
            'campuses' => Campus::all(),
            'turns' => Turn::all(),
            'roles' => Role::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $user = User::find($id);

            $user->name = $request->get('name');
            $user->email = $request->get('email');
            $user->turn_id = $request->get('turn');
            $user->campus_id = $request->get('campus');
            $user->comission = $request->get('comission');
            $user->year = $request->get('year');
            $user->course_year = $request->get('course_year');
            $user->semester = $request->get('semester');
            $user->validated = $request->get('validated') === 'on';
            $user->detachRoles();
            $user->attachRole(Role::find($request->get('role')));

            $user->save();
            $request->session()->flash('success', '¡Usuario actualizado!');
        } catch (\Exception $exception) {
            $request->session()->flash('success', 'Oh oh... algo ha ocurrido. Intente nuevamente.');
        }

        return redirect()->route('backoffice.user.edit', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (Auth::user()->hasRole('admin')) {
            $user->delete();
        }

        return redirect()->route('backoffice.user.index');
    }
}

<?php

namespace App\Http\Controllers\Backoffice;

use App\Campus;
use App\Http\Controllers\Controller;
use App\Turn;
use App\User;
use Faker\Generator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

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
            User::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'turn_id' => $request->get('turn'),
                'campus_id' => $request->get('campus'),
                'comission' => $request->get('comission'),
                'year' => $request->get('year'),
                'password' => bcrypt($generator->password()),
                'validated' => true,
            ]);
        } catch (\Exception $exception) {
            dd($exception);
        }

        return redirect()->route('bo.users');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $campuses = Campus::all();
        $turns = Turn::all();

        return view('backoffice.user.edit', [
            'user' => $user,
            'campuses' => $campuses,
            'turns' => $turns,
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
            $user->validated = $request->get('validated') === 'on';

            $user->save();
            $request->session()->flash('success', '¡Usuario actualizado!');
        } catch (\Exception $exception) {
            $request->session()->flash('success', 'Oh oh... algo ha ocurrido. Intente nuevamente.');
        }

        return redirect()->route('bo.users.edit', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

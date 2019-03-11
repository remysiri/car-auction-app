<?php

namespace GTImports\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use GTImports\User;
use GTImports\Role;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Role::where('name', 'gebruiker')->first()->users()->get();
        return view ('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'postcode' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'gender' => 'string|max:10',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:30|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role_id' => 'required',
        ]);

        $user = User::create([
            'name' => $request['name'],
            'lastname' => $request['lastname'],
            'street' => $request['street'],
            'postcode' => $request['postcode'],
            'city' => $request['city'],
            'country' => $request['country'],
            'gender' => $request['gender'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'username' => $request['username'],
        ]);
        $user
            ->roles()
            ->attach($request['role_id']);

        Session::flash('success_msg', 'Gebruiker successvol toegevoegd!');

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);

        return view('users.edit', ['users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'postcode' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'gender' => 'string|max:10',
            'email' => 'required|string|email|max:255|exists:users',
            'username' => 'required|string|max:30|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'role_id' => 'required',
        ]);

        $user = User::find($id, [
            'name' => $request['name'],
            'lastname' => $request['lastname'],
            'street' => $request['street'],
            'postcode' => $request['postcode'],
            'city' => $request['city'],
            'country' => $request['country'],
            'gender' => $request['gender'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'username' => $request['username'],
        ]);
        $user
            ->update()
            ->roles()
            ->attach($request['role_id']);


        Session::flash('success_msg', 'Gebruiker successvol updated!');

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        Session::flash('success_msg', 'Gebruiker successvol verwijderd!');

        return redirect()->route('users.index');
    }
}

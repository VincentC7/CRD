<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.profil', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        abort_unless(auth()->user()->can('modify', $user), 404);
        return view('user.edit', compact('user'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        abort_unless(auth()->user()->can('modify', $user), 404);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $description = $_POST['description'];

        if (isset($name) && $name!="") {
            $validated = $request->validate([
                'name' => 'required|string|max:255|unique:users']);
            $user->update($validated);
        }
        if (isset($email) && $email !="") {
            $validated = $request->validate([
                'email' => 'required|string|email|max:255|unique:users'
            ]);
            $user->update($validated);
        }

        if (isset($password) && $password!="") {
            $validated = $request->validate([
                'password' => 'string|min:6|confirmed'
            ]);
            $user->update($validated);
        }

        if (isset($description) && $description!="") {
            $validated = $request->validate([
                'description' => 'required|string|max:255'
            ]);
            $user->update($validated);
        }



        return view('user.profil', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function userList() {
        return view('userlist',['users'=>User::all()]);
    }

    public function promoteAdmin($us) {
        $user = User::findOrFail($us);
        if (Auth::user()->admin==1 && $user->admin==0) {
            $user->admin=1;
            $user->save();
            return back();
        } else {
            return redirect(URL::to('/'));
        }
    }

    public function displayProfile($us) {
        $admin = Auth::user()->admin==1;
        return view('user.profil',['user'=>User::findOrFail($us), 'admin'=>$admin]);
    }


}

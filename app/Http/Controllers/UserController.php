<?php
/**
 * Created by PhpStorm.
 * User: geny17u
 * Date: 07/02/2019
 * Time: 10:23
 */

namespace App\Http\Controllers;


use App\User;

class UserController extends Controller
{

    public function userList() {
        return view('userlist',['users'=>User::all()]);
    }

}
<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function signInAdmin(LoginRequest $req) {
        $login = $req->login;
        $password = $req->password;

       $users = DB::table('users')->get();

        foreach ($users as $user) {
            if($user->login === $login && Hash::check($password, $user->password)) {
                $items = DB::table('applications')->get();
                return view('pages.admin.admin', compact('items'));
            }
        }
        // DB::table('users')->insert(['login' => $login, 'password' => Hash::make($password)]);
        // dd($req->password);
    }
}

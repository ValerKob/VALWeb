<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicationCotroller extends Controller
{
    public function addApplications(ApplicationRequest $req) {
        if($req->check == 3) {
            $addApp = 0;
            return view('pages.main.index', compact('addApp'));
        } else {
            $name = $req->name;
            $email = $req->email;
            $phone = $req->phone;
            $text = $req->text;

            if($name === NULL) {
                $addApp = 1;
                return view('pages.main.index', compact('addApp'));
            }

            if($phone === NULL) {
                $addApp = 2;
                return view('pages.main.index', compact('addApp'));
            }

            if($email === NULL) {
                $email = 'НЕ УКАЗАН';
            }

            if($text === NULL) {
                $text = 'НЕ УКАЗАН';
            }

            DB::table('applications')->insert(['name' => $name, 'email' => $email, 'phone' => $phone, 'text' => $text]);

            $addApp = 3;
            return view('pages.main.index', compact('addApp'));
        }
    }
}

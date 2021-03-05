<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\QUser;

class UserController extends Controller
{
    public function login (Request $request) {
        $passport_id = $request -> get('passport_id');
        $password = $request -> get('password');
        $users = QUser::all()
            ->where('passport_id', '=', $passport_id)
            ->where('password', '=', $password);
        if (count($users) > 0) {
            return response()->json('Login success');
        } else {
            return  response()->json('Passport id or Password wrong');
        }
    }

    public function register (Request $request) {
        $users = new QUser($request->all());
        $users->save();
        return response()->json('success');
    }
}

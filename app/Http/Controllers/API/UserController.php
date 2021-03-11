<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\QUser;
use App\Geographies;
use App\Provinces;
use App\Amphures;
use App\Districts;

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

    public function get_province (Request $request) {
        $province = Provinces::all();
        return response()->json($province);
    }

    public function post_province (Request $request) {
        $id = $request -> get('id');
        $province = Provinces::find($id);
        return response()->json($province);
    }

    public function get_amphure (Request $request) {
        $amphure = Amphures::all();
        return response()->json($amphure);
    }

    public function post_amphure (Request $request) {
        $province_id = $request -> get('province_id');
        $amphure = Amphures::all()->where('province_id', '=', $province_id);
        return response()->json($amphure);
    }

    public function get_district (Request $request) {
        $discrict = Districts::all();
        return response()->json($discrict);
    }

    public function post_district (Request $request) {
        $amphure_id = $request -> get('amphure_id');
        $discrict = Districts::all()->where('amphure_id', '=', $amphure_id);
        return response()->json($discrict);
    }

    public function register (Request $request) {
        $users = new QUser($request->all());
        $users->save();
        return response()->json('success');
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\QAddUser;

class QAddUserController extends Controller
{
    public function index () {
        $users = QAddUser::all();
        return response()->json($users);
    }

    public function create (Request $request) {
        $users = new QAddUser($request->all());
        $users->save();
        return response()->json('success');
    }

    public function show (Request $request, $id) {
        $users = QAddUser::find($id);
        return response()->json($users);
    }

    public function update (Request $request, $id) {
        $users = QAddUser::find($id);
        $users -> update($request -> all());
        return response()->json($users);
    }

    public function destroy ($id) {
        $users = QAddUser::find($id);
        $users -> delete();
        return response()->json("delete id: $id success");
    }
}

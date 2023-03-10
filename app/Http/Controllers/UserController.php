<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;

class UserController extends Controller
{
    public function getAllUsers(){
        $users = Users::take(10)->get();
        return $users;
    }

    public function insertUser() {
        $users = new Users;
        $users->name = 'julian';
        $users->save();

        return "usuario Guardado";
    }
}

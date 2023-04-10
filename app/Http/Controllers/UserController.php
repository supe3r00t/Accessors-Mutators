<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
 {
    //
    public function index($id){


        $user = User::find($id);

     return $user->name;
    }

    public function store(){

        User::create([

            'name'=>'alwh6',
            'email'=>'assse@yah7oo.com',
            'password'=>Hash::make('1234567'),
        ]);


        return response('تم اضافة انسيلت للقاعدة');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function index()
    {
        // $user = new User();
        // var_dump($user);
        // DB::table('users_reg')->insert([
        //     'user_name' => 'baljka',
        //     'email' => 'baljka092@gmail.com',
        //     'user_password' => 'root'
        // ]);

        // DB::update('update users_reg set user_name = ? where user_id = 1', ['Baljinnyam']);
        // $users = DB::select('select*from users_reg');
        // return $users;
        // return view('wel');
    }
}

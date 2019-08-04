<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aboutcontroller extends Controller
{
    public function about()
    {

        $users = User::all();

        dd($users->count());
        return view('profile', ['users' => '$users']);
}

<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['name' => 'glitter', 'email' => 'gl@example.com', 'role' => 'Admin'],
            ['name' => 'sparkle', 'email' => 'sp@example.com', 'role' => 'Cashier'],
            ['name' => 'bob', 'email' => 'bb@example.com', 'role' => 'Cashier'],
            ['name' => 'frank', 'email' => 'fr@example.com', 'role' => 'Manager'],
            ['name' => 'ocean', 'email' => 'oc@example.com', 'role' => 'Cashier'],
        ];

        return view('users', ['users' => $users]);
    }
}
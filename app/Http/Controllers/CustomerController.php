<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['name' => 'Patrick Archie', 'email' => 'ps@gmail.com', 'phone' => '09123456789'],
            ['name' => 'Silayan Calabia', 'email' => 'sc@gmail.com', 'phone' => '09234567890'],
            ['name' => 'Patrick Calabia', 'email' => 'pc@gmail.com', 'phone' => '09345678901'],
            ['name' => 'Archie Silayan', 'email' => 'as@gmail.com', 'phone' => '09456789012'],
            ['name' => 'Patrick Silayam', 'email' => 'ps@gmail.com', 'phone' => '09567890123'],
        ];

        return view('customers', ['customers' => $customers]);
    }
}
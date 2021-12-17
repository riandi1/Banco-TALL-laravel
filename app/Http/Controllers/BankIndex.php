<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankIndex extends Controller
{
    public function bank()
    {
        return view('bank.inicio');
    }
}

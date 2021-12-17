<?php

namespace App\Http\Controllers;

use App\Models\creditcard;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CreditcardController extends Controller
{
    public function index()
    {
        $creditcards = creditcard::with('user')->where('user_id',auth()->user()->id)->get();
        foreach ($creditcards as $key => $value) {
            $array = explode("-", $value->number);
            $fecha= Carbon::parse($value->expire)->format('m/y');
        }
        return view('dashboard',compact('creditcards','array','fecha'));
    }
}

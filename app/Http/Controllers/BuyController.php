<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyController extends Controller
{
    public function __invoke()
    {
        return view('buy.index');
    }
}

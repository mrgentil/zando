<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepairController extends Controller
{
    public function index()
    {
        return view('repair.index');
    }
}

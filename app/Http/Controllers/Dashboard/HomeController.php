<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Phone;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke()
    {
        $all = Phone::query()->where('user_id', auth()->user()->id)->count();
        $active = Phone::query()->where('user_id', auth()->user()->id)->where('status', true)->count();
        $pending = $all - $active;
        return view('dashboard.index', compact('all', 'active', 'pending'));
    }
}

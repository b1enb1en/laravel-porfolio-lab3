<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PorfolioController extends Controller
{
    public function index(): View
    {
        return view('Portfolio');
    }
}

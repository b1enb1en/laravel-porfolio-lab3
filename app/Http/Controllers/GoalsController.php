<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class GoalsController extends Controller
{
    public function index(): View
    {
        return view('Goals');
    }
}

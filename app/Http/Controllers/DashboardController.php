<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('website.pages.dashboard.index', [
            'title' => 'Dashboard',
            'titleContent' => 'Dasboard',
            'li_1' => 'Dashboard',
            'subTitleContent' => 'Dev',
        ]);
    }
}

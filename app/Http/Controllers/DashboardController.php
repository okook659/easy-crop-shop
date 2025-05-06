<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    public function index()
{
    $labels = ['Janvier', 'Février', 'Mars', 'Avril'];
    $data = [120, 150, 180, 90];

    return view('dashboard', [
        'labels' => $labels,
        'data' => $data
    ]);
}

}

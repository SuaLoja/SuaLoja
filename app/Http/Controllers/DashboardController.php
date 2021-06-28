<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

class DashboardController extends Controller
{
    public function index()
    {
        return Response::view('dashboard.index');
    }
}

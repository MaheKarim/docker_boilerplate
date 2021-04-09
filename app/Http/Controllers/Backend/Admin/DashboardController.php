<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Home Page Code Here 
    public function home_page( ) 
    {
        return view('backend.admin.home');
    }
}

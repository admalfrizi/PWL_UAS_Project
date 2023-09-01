<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function make()
    {
        
        return view('screen.admin_dashboard.make_barang');

    }
}

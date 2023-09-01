<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Barang;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::user()->name == "admin"){

            $barangs = Barang::all();

            return view('screen.admin_dashboard.dashboard', compact('barangs'));

        } else {

            $barangs = Barang::all();

            return view('screen.home', compact('barangs'));

            session()->forget("cart");

        }
    }
}

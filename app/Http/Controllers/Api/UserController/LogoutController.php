<?php

namespace App\Http\Controllers\Api\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function __invoke()
    {
        Auth::user()->tokens()->delete();
        return response()->json(['message' => 'User successfully signed out']);
    }

}
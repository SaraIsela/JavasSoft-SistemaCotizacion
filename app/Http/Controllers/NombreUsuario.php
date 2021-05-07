<?php

namespace App\Http\Controllers;

use App\RegistrarUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NombreUsuario extends Controller
{
    public function index()
    {
        $user=Auth::user();
        return view('layout', compact('user'));
    }
}
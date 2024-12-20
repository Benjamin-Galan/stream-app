<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function registro()
    {
        return view('pages.registro');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function membresia()
    {
        return view('pages.mebresia');
    }

    public function pago()
    {
        return view('pages.pago');
    }

    public function inicio()
    {
        return view('welcome');
    }
}

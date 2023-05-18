<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PsyHomeController extends Controller
{
    public function index()
    {
        // Code pour gérer la logique de la page "psyHome"
        return view('psyHome');
    }
}

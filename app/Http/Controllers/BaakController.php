<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaakController extends Controller
{
    public function index()
    {
        return view('baak.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use Illuminate\http\Request;

class mahasiswacontroller extends Controller
{
    /**
     * display a listing of the resource
     *
     * @return \Illuminate\http\Response
     */
    public function index()
    {
        return view('mahasiswa.index');
    }
}
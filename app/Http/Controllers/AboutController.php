<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return '
            Nim  : 2241720214 <br>
            Nama : Muhammad Naufal Kurniawan
        ';
    }
}

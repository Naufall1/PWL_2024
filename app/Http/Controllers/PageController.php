<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        return '
            Nim  : 2241720214 <br>
            Nama : Muhammad Naufal Kurniawan
        ';
    }
    public function article($id){
        return 'Halaman Artikel dengan ID '.$id;
    }
}

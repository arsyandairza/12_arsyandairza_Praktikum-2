<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(){
        echo'Selamat Datang';
    }

    function about(){
        return '2141720089-Ryan Syaputra A.W';
    }

    function articles($id){
        echo"Halaman Artikel dengan ID : " .$id;
    }
}

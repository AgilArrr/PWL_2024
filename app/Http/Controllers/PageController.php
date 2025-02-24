<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }
    public function about(){
        return "Nama: Abdillah Agil Arbiansyah, NIM: 2341720130";
    }
    public function articles($id){
        return "Halaman artikel dengan ID".$id;
    }
}

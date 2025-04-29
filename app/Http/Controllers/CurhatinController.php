<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurhatinController extends Controller
{
    // Pembuka Halaman Navbar
    public function beranda(){
        return view("beranda");
    }

    public function curhat_dulu_yuk(){
        return view("curhat_dulu_yuk");
    }

    public function intip_cerita_orang(){
        return view("intip_cerita_orang");
    }

    public function kenalin_kami(){
        return view("kenalin_kami");
    }

    public function ada_saran(){
        return view("ada_saran");
    }
    // Penutup Halaman Navbar
}

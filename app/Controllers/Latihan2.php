<?php

namespace App\Controllers;

class Latihan2 extends BaseController
{
    public function index()
    {
        echo "ini controller Latihan2 method index";
    }

    public function about($nama = '', $umur = 0)
    {
        echo "hallo nama $nama, usia saya $umur tahun";
    }
}

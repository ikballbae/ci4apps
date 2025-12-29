<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function latihan1()
    {
        echo "Ini adalah method latihan pada controller Home";
    }
}

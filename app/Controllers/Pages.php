<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Institut Widya Pratama'
        ];  
        echo view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us'
        ];
        echo view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'contact',
            'alamat' => [
                [
                    'type' => 'rumah',
                    'alamat' => 'Wiradesa Pekalongan',
                    'hp' => '08123456789'
                ],
                [
                    'type' => 'kantor',
                    'alamat' => 'Jl. Patriot No. 25 Pekalongan',
                    'hp' => '08198765432'
                ]
            ]
        ];
        echo view('pages/contact', $data);
    }
}
<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view(
            'home',
            [
                'title' => 'Halaman Abot',
                'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi halaman ini.'
            ]
        );
    }
}

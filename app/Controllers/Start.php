<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Start extends Controller
{
    public function getIndex(): string
    {
        return view('templates/header')
            . view('templates/boards')
            . view('templates/footer');
    }
}

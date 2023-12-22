<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Neu extends Controller
{
    public function getIndex(): string
    {
        return view('templates/header')
            . view('templates/creation')
            . view('templates/footer');
    }
}

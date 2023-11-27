<?php

namespace App\Controllers;
use App\Models\Bioskop;
use App\Models\Film;

class Home extends BaseController
{
    public function index(): string
    {
        $modelBioskop =  new Bioskop();
        $modelFilm = new Film();

        $data = [
            'title' => 'list bioskop',
            'bioskop' => $modelBioskop->findAll(),
            'film' => $modelFilm->findAll(),
        ];
        return view('home', $data);
    }
}

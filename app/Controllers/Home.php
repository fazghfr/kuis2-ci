<?php

namespace App\Controllers;

use App\Models\Bioskop;
use App\Models\Film;

class Home extends BaseController
{
    public function index(): string
    {
        $modelBioskop = new Bioskop();
        $modelFilm = new Film();

        // Assuming 'film_title' is the column based on which you want distinct records
        $distinctFilms = $modelFilm
            ->select('title, picture_url')
            ->groupBy('title, picture_url')
            ->findAll(25, 0); 

        $data = [
            'title' => 'List Bioskop',
            'bioskop' => $modelBioskop->findAll(),
            'film' => $distinctFilms,
        ];

        return view('home', $data);
    }
}

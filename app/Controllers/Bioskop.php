<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Bioskop extends BaseController
{
    public function index($id)
    {
        $modelBioskop =  new \App\Models\Bioskop();
        $modelFilm = new \App\Models\Film();

        $data = [
            'title' => 'list bioskop',
            'bioskop' => $modelBioskop->find($id),
            'film' => $modelFilm->where('bioskop_id', $id)->findAll(),
        ];
        return view('getAll', $data);
    }
}

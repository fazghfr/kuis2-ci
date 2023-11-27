<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class About extends BaseController
{
    public function index()
    {
        $modelBioskop = new \App\Models\Bioskop;

        $data = [
            'title' => 'list bioskop',
            'bioskop' => $modelBioskop->findAll()
        ];

        return view('about', $data);
    }

    public function getSpesific($id)
    {
        $modelBioskop = new \App\Models\Bioskop;
        $data = [
            'title' => 'Specific Bioskop',
            'bioskop' => $modelBioskop->find($id)
        ];

        return view('about_spesific', $data);
    }
}

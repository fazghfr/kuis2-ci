<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Film extends BaseController
{
    public function index()
    {
        
    }

    public function buy($id){
        //TODO : to be extra safe, pass in the bioskop's data aswell. idea :  add another parameter bioskopid = x
        // with that, it can be sure
        // find all schedule 
        $jadwalModel = new \App\Models\Jadwal;
        $filmModel = new \App\Models\Film;
        $bioskopId = $this->request->getVar('bioskopid');

        $data = [
            'jadwal' => $jadwalModel->where('film_id', $id)->findAll(),
            'film' => $filmModel->where('id', $id)->findAll(),
            'idbioskop' => $bioskopId
        ];

        // pass the data to view

        return view('pesan_tiket', $data);
    }
}

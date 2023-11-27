<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Bioskop;
use App\Models\Film;
use App\Models\Jadwal;

class Seat extends BaseController
{
    public function index()
    {
        //
    }

    public function reserve()
    {
        $bioskopId = $this->request->getVar('bioskopid');
        $jadwalId = $this->request->getVar('jadwalid');
        $filmid = $this->request->getVar('filmid');

        $bioskopModel = new Bioskop();
        $filmModel = new Film();
        $jadwalModel = new Jadwal();

        // Find models by id
        $bioskop = $bioskopModel->find($bioskopId);
        $film = $filmModel->find($filmid);
        $jadwal = $jadwalModel->find($jadwalId);

        $data = [
            'bioskop' => $bioskop,
            'film' => $film,
            'jadwal' => $jadwal
        ];

        return view('select_seat', $data);
    }
    
    public function save()
    {
        $selectedSeats = $this->request->getPost('seats');

        // Get the length of the selected seats array
        $selectedSeatsCount = count($selectedSeats);


        $bioskopId = $this->request->getVar('bioskopid');
        $jadwalId = $this->request->getVar('jadwalid');
        $filmid = $this->request->getVar('filmid');

        $bioskopModel = new Bioskop();
        $filmModel = new Film();
        $jadwalModel = new Jadwal();

        // Find models by id
        $bioskop = $bioskopModel->find($bioskopId);
        $film = $filmModel->find($filmid);
        $jadwal = $jadwalModel->find($jadwalId);

        // Perform actions with the selected seats, such as updating the database

        // TODO : store to db. for now, let it be. (not my jobdesc)

        $data = [
            'bioskop' => $bioskop,
            'film' => $film,
            'jadwal' => $jadwal,
            'jumlah_tiket' => $selectedSeatsCount,
            'ticketprice' => 50000
        ];

        return view('payment', $data);
    }
}

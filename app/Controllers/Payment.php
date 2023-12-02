<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Payment extends BaseController
{
    public function form()
    {
        $bioskop = $this->request->getGet('bioskop');
        $film = $this->request->getGet('film');
        $jadwal = $this->request->getGet('jadwal');

        // Find models by id
        $bioskopModel = new \App\Models\Bioskop();
        $filmModel = new \App\Models\Film();
        $jadwalModel = new \App\Models\Jadwal();

        $bioskopData = $bioskopModel->find($bioskop);
        $filmData = $filmModel->find($film);
        $jadwalData = $jadwalModel->find($jadwal);
        $jumlah_tiket = $this->request->getGet('jumlah_tiket');
        $paymentMethod = $this->request->getGet('paymentMethod');

        $data = [
            'bioskop' => $bioskopData,
            'film' => $filmData,
            'jadwal' => $jadwalData,
            'jumlah_tiket' => $jumlah_tiket,
            'paymentMethod' => $paymentMethod
        ];
        return view('dataform', $data);
    }

    public function savedata()
    {
        $bioskopId = $this->request->getPost('bioskop');
        $filmId = $this->request->getPost('film');
        $jadwalId = $this->request->getPost('jadwal');
        $jumlah_tiket = $this->request->getPost('jumlah_tiket');
        $paymentMethod = $this->request->getPost('paymentMethod');
        $email = $this->request->getPost('email');

        $orderModel = new \App\Models\Order();

        $data = [
            'bioskop_id' => $bioskopId,
            'film_id' => $filmId,
            'jadwal_id' => $jadwalId,
            'jumlah_tiket' => $jumlah_tiket,
            'payment_method' => $paymentMethod,
            'email' => $email
        ];

        $orderModel->insert($data);
        return redirect('/');
    }
}
        
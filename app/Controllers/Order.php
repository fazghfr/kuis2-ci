<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Order extends BaseController
{
    public function index()
    {
        $orderModel = new \App\Models\Order();

        // Retrieve the order data from the database
        $orders = $orderModel->findAll();

        $data['orders'] = [];

        foreach ($orders as $order) {
            // Retrieve the related data from their respective models
            $bioskopModel = new \App\Models\Bioskop();
            $filmModel = new \App\Models\Film();
            $jadwalModel = new \App\Models\Jadwal();

            $bioskop = $bioskopModel->find($order['bioskop_id']);
            $film = $filmModel->find($order['film_id']);
            $jadwal = $jadwalModel->find($order['jadwal_id']);

            // Prepare the data to be passed to the view
            $data['orders'][] = [
                'bioskop' => $bioskop,
                'film' => $film,
                'jadwal' => $jadwal,
                'jumlah_tiket' => $order['jumlah_tiket'],
                'payment_method' => $order['payment_method'],
                'email' => $order['email']
            ];
        }

        return view('history', $data);
    }
}

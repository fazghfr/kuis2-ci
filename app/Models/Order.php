<?php

namespace App\Models;

use CodeIgniter\Model;

class Order extends Model
{
    protected $table            = 'order';
    protected $primaryKey       = 'order_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['bioskop_id', 'film_id', 'jadwal_id', 'jumlah_tiket', 'payment_method', 'email'];
}

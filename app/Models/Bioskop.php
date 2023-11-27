<?php

namespace App\Models;

use CodeIgniter\Model;

class Bioskop extends Model
{
    protected $table      = 'bioskop';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['nama', 'lokasi'];
}

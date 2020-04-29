<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudprintModel extends Model
{

    protected $table      = 'warga';
    protected $primaryKey = 'id';


    protected $allowedFields = ['nama', 'alamat', 'notelp', 'gambar'];


    public function getWarga()
    {

        return $this->findAll();
    }
}

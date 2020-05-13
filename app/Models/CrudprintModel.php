<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudprintModel extends Model
{

    protected $table      = 'warga';
    protected $primaryKey = 'id';


    protected $allowedFields = ['nama', 'alamat', 'notelp', 'gambar', 'updated_at'];


    public function getWarga()
    {
        return $this->findAll();
    }

    public function delData($id)
    {
        $model = new CrudprintModel();
        $del = $model->delete($id);

        return $del;
    }

    public function getLimits()
    {
        $model = new CrudprintModel();
        $limits = $model->limit(31, 20);

        return $limits;
    }

    public function getHitungSemuaBaris()
    {
        $jmlbaris = $this->table($this->table)->countAll();

        return $jmlbaris;
    }
}

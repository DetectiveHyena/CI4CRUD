<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CrudprintModel;


class Crudprint extends BaseController
{
	public function index()
	{
		$model = new CrudprintModel();

		$wargas = $model->getWarga();

		$data = [
			'wargas'  => $wargas,
			'title' => 'CRUD DATA PADA CI 4.',
		];

		echo view('header', $data);
		echo view('index', $data);
		echo view('footer');
	}

	public function createform()
	{
		helper('form', 'url');
		$data = [
			'title' => 'FORM TAMBAH DATA PADA CI 4.',
		];

		echo view('header', $data);
		echo view('createform');
		echo view('footer');
	}

	public function create()
	{
		helper('form');
		$model = new CrudprintModel();

		$data = [
			'title' => 'CRUD DATA PADA CI 4.',
		];

		if (!$this->validate([
			'nama' => 'required|min_length[3]|max_length[30]',
			'alamat'  => 'required',
			'notelp'  => 'required'
		])) {
			echo view('header', $data);
			echo view('createform');
			echo view('footer');
		} else {
			$model->save([

				'nama' => $this->request->getVar('nama'),
				'alamat' => $this->request->getVar('alamat'),
				'notelp' => $this->request->getVar('notelp'),
				'gambar' => 'defa.jpg'

			]);
		}
		$session = session();
        $session->setFlashdata('success', 'Data Baru Sudah Masuk..');
        return redirect()->to('/');
	}

	//--------------------------------------------------------------------

}

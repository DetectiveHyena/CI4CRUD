<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CrudprintModel;

class Crudprint extends BaseController
{
	public function index()
	{
		helper('form', 'url');
		$model = new CrudprintModel();
		$pager = \Config\Services::pager();
		$wargas = $model->getWarga();
		$jmldata = $model->getHitungSemuaBaris();

		$data = [
			'wargas'  => $model->paginate(4, 'bootstrap'),
			'title' => 'CRUD DATA PADA CI 4.',
			'jmldata' => $jmldata,
			'pager' => $model->pager
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
		helper('form', 'url');
		$data = [
			'title' => 'TAMBAH DATA PADA CI 4.',
		];


		if ($this->request->getMethod() == 'post') {

			// Validasi 
			$rules = [
				'nama' => 'required|min_length[3]|max_length[30]',
				'alamat'  => 'required',
				'notelp'  => 'required'
			];
			if (!$this->validate($rules)) {
				$data['validation'] = $this->validator;
			} else {

				$model = new CrudprintModel();
				$data = [
					'nama' => $this->request->getVar('nama'),
					'alamat' => $this->request->getVar('alamat'),
					'notelp' => $this->request->getVar('notelp'),
					'gambar' => 'defa.jpg'
				];

				$model->save($data);
				$session = session();
				$session->setFlashdata('success', 'Data Baru Sudah Masuk..');
				return redirect()->to('/');
			}
		}
		echo view('header', $data);
		echo view('createform');
		echo view('footer');
	}

	public function datadetail($id)
	{
		helper('form', 'url');

		$model = new CrudprintModel();
		$detailwarga = $model->find($id);

		//var_dump($detailwarga);

		$data = [
			'detailwarga' => $detailwarga,
			'title' => 'DETAIL RECORD DATA PADA CI 4.',
		];

		echo view('header', $data);
		echo view('datadetail', $data);
		echo view('footer');
	}

	public function edit($id)
	{
		helper('form', 'url');

		$model = new CrudprintModel();
		$editwarga = $model->find($id);

		$data = [
			'editwarga' => $editwarga,
			'title' => 'EDIT RECORD DATA PADA CI 4.',
		];

		echo view('header', $data);
		echo view('editdata', $data);
		echo view('footer');
	}

	public function updates($id)
	{

		helper('form', 'url');
		$model = new CrudprintModel();
		$editwarga = $model->find($id);
		$data = [
			'editwarga' => $editwarga,
			'title' => 'UPDATES RECORD DATA PADA CI 4.'
		];

		if ($this->request->getMethod() == 'post') {
			// validation 
			$rules = [
				'nama'  => 'required',
				'alamat'  => 'required',
				'notelp'  => 'required',
				'gambar' => 'max_size[gambar,808]|mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]'
			];

			if (!$this->validate($rules)) {
				$data['validation'] = $this->validator;
			} else {

				$nama = $this->request->getVar('nama');
				$alamat = $this->request->getVar('alamat');
				$notelp = $this->request->getVar('notelp');
				$avatar = $this->request->getFile('gambar');



				$avatar->move(ROOTPATH . 'public/assets/images');

				$gambarlama = $editwarga['gambar'];
				if ($gambarlama != 'defa.jpg') {
					unlink(ROOTPATH . 'public/assets/images/' . $gambarlama);
				}

				$data = [

					'nama' => $nama,
					'alamat' => $alamat,
					'notelp' => $notelp,
					'gambar' => $avatar->getName(),

				];

				$model->update($id, $data);
				$session = session();
				$session->setFlashdata('success', 'Data Berhasil Diupdate..');
				return redirect()->to('/');
			}
		}
		echo view('header', $data);
		echo view('editdata', $data);
		echo view('footer');
	}

	public function caridata($cari = null)
	{
		$db = \Config\Database::connect();
		$cari = $this->request->getPost('cari');

		if ($cari == null) {
			return redirect()->to('/');
		}

		if ($cari == null) {
			return redirect()->to('/');
		}

		$builder = $db->table('warga');
		$builder->like('nama', $cari);
		$builder->orLike('alamat', $cari);
		$query = $builder->get();
		$hasilcari = $query->getResultArray();

		$data['title'] = 'SEARCH   DATA PADA CI 4.';
		$data['hasilcari'] = $hasilcari;


		echo view('header', $data);
		echo view('search', $data);
		echo view('footer');
	}


	public function deletedata($id)
	{
		$model = new CrudprintModel();

		$deletes = $model->delData($id);

		if ($deletes) {
			$session = session();
			session()->setFlashdata('warning', '1 Data Berhasil Dihapus..');
			return redirect()->to('/');
		}
	}


	//--------------------------------------------------------------------
}

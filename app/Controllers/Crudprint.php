<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CrudprintModel;


class Crudprint extends BaseController
{
	public function index()
	{
		helper('url');
		$model = new CrudprintModel();

		$wargas = $model->getWarga();

		$data = [
			'wargas'  => $wargas,
			'title' => 'CRUD DATA PADA CI 4.',
		];

		echo view('header', $data);
		echo view('index', $data);
		echo view('footer');

		//return view('welcome_message');
	}

	//--------------------------------------------------------------------

}

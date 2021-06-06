<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;

class MahasiswaController extends BaseController
{
	public function index()
	{
		//
		$mahasiswa = new MahasiswaModel();
		$datamhs = $mahasiswa->get()->getResultArray();
		// dd($datamhs);
		return view('mahasiswa/index', ['mahasiswa' => $datamhs]);
	}

	public function store()
	{
		$nim = $this->request->getVar('nim');
		$nama = $this->request->getVar('nama');
		$prodi = $this->request->getVar('program-studi');

		$mahasiswa = new MahasiswaModel();
		$mahasiswa->insert([
			'nim' => $nim,
			'nama_mahasiswa' => $nama,
			'prodi' => $prodi
		]);

		return redirect('/');
	}

	public function delete($id)
	{
		$mahasiswa = new MahasiswaModel();
		$mahasiswa->delete($id);
		return redirect('/');
	}
}

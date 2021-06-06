<?php

namespace App\Database\Seeds;

use App\Models\MahasiswaModel;
use CodeIgniter\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
	public function run()
	{
		//
		$dataMahasiswa = [
			[
				"nim" => "1800018190",
				"nama_mahasiswa" => "Andri Nur Hidayatulloh",
				"prodi" => "Teknik Informatika"
			],
			[
				"nim" => "1800018380",
				"nama_mahasiswa" => "Diky Nugraha Difiera",
				"prodi" => "Teknik Informatika"
			],
			[
				"nim" => "1800018221",
				"nama_mahasiswa" => "Ferhat Muhamad Yasin",
				"prodi" => "Teknik Informatika"
			]
		];

		$this->db->table('mahasiswa')->insertBatch($dataMahasiswa);
		
	}
}

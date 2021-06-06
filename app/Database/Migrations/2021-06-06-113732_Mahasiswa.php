<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MahasiswaSeeder extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'auto_increment' => true
			],
			'nim' => [
				'type' => 'VARCHAR',
				'constraint' => 11
			],
			'nama_mahasiswa' => [
				'type' => 'VARCHAR',
				'constraint' => 256
			],
			'prodi' => [
				'type' => 'VARCHAR',
				'constraint' => 128
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('mahasiswa');
	}

	public function down()
	{
		//
		$this->forge->dropTable('mahasiswa');
	}
}

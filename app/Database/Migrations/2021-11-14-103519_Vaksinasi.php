<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Vaksinasi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'no_batch'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 11,
				'auto_increment' => true,
			],
			'nik'       => [
				'type'       => 'BIGINT',
				'constraint' => '16',
				'uniq' => true
			],
			'nama' => [
				'type' => 'VARCHAR',
				'constraint'     => '100'
			],
			'jenis_kelamin' => [
				'type' => 'VARCHAR',
				'constraint'     => '15'
			],
			'usia' => [
				'type' => 'INT',
				'constraint'     => '3'
			],
			'kategori' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => true,
			],
			'dosis' => [
				'type' => 'INT',
				'constraint'     => '1'
			],
			'jenis_vaksin' => [
				'type' => 'VARCHAR',
				'constraint'     => '100'
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true
			]
		]);
		$this->forge->addKey('no_batch', true);
		$this->forge->createTable('vaksinasi');
	}

	public function down()
	{
		$this->forge->dropTable('vaksinasi');
	}
}
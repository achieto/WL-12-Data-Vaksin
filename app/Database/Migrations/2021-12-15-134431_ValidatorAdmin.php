<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ValidatorAdmin extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'username'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '30',
				'auto_increment' => true,
			],
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '35',
			],
			'admin' => [
				'type'           => 'VARCHAR',
				'constraint'     => '35',
			],
			'role' => [
				'type'           => 'VARCHAR',
				'constraint'     => '35',
			]
		]);
		$this->forge->addKey('username', true);
		$this->forge->createTable('ValidatorAdmin');
	}
	public function down()
	{
		$this->forge->dropTable('ValidatorAdmin');
	}
}
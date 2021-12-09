<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SuperAdmin extends Migration
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
		]);
		$this->forge->addKey('username', true);
		$this->forge->createTable('loginsuper');
	}

	public function down()
	{
		$this->forge->dropTable('loginsuper');
	}
}
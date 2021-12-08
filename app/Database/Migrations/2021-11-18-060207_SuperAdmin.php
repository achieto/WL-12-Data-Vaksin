<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SuperAdmin extends Migration
{
	
	public function up()
	{
		$this->forge->addField([
			'id'				=> [
				'type'           => 'INT',
				'constraint'     => 11,
				'auto_increment' => true,
			],
			'username'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '30',
			],
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '8',
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '35',
			],
			
			
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('loginsuper');
	}

	public function down()
	{
		$this->forge->dropTable('loginsuper');
	}
}
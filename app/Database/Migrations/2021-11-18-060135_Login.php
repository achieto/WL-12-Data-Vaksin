<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;
class Login extends Migration
{
	public function up()
	{
		$this->forge->addField([
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
		$this->forge->addPrimaryKey('username', true);
		$this->forge->createTable('login');
	}

	public function down()
	{
		$this->forge->dropTable('login');
	}
}
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
				'constraint'     => '100',
			],
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
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
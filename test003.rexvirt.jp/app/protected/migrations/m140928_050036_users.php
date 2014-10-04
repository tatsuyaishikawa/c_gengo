<?php

class m140928_050036_users extends CDbMigration
{
	/*
	public function up()
	{
	}

	public function down()
	{
		echo "m140928_050036_users does not support migration down.\n";
		return false;
	}
	*/

	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	$this->createTable('users',array(
		'bookd_id'=>'integer primary key',
		'book_title'=>'string NOT NULL',
		'category'=>'string',
		'author'=>'string',
		'status'=>'string',
		));
	}

	public function safeDown()
	{
	$this->dropTable('users');
	}
}

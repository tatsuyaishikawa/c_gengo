<?php

class m140928_054827_sessio extends CDbMigration
{
	/*
	public function up()
	{
	}

	public function down()
	{
		echo "m140928_054827_sessio does not support migration down.\n";
		return false;
	}
	*/
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
 	$this->createTable('sessios',array(
		'id'=>'integer',
		'name'=>'string',
		'data'=>'text',
		));
	}

	public function safeDown()
	{
	$this->dropTable('sessions');
	}
}

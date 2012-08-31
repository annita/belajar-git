<?php

class Department extends AppModel
{
	public $useTable = 'Divisions';
	public $primaryKey = 'id';
	
	public $hasMany = array(
		'Person' => array(
	 		'className' => 'Peoples',
	 		'foreignKey' => 'division_id'
	 		));
}

?>
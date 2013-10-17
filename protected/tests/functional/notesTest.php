<?php

class notesTest extends WebTestCase
{
	public $fixtures=array(
		'notes'=>'notes',
	);

	public function testShow()
	{
		$this->open('?r=notes/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=notes/create');
	}

	public function testUpdate()
	{
		$this->open('?r=notes/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=notes/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=notes/index');
	}

	public function testAdmin()
	{
		$this->open('?r=notes/admin');
	}
}

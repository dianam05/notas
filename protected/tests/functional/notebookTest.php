<?php

class notebookTest extends WebTestCase
{
	public $fixtures=array(
		'notebooks'=>'notebook',
	);

	public function testShow()
	{
		$this->open('?r=notebook/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=notebook/create');
	}

	public function testUpdate()
	{
		$this->open('?r=notebook/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=notebook/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=notebook/index');
	}

	public function testAdmin()
	{
		$this->open('?r=notebook/admin');
	}
}

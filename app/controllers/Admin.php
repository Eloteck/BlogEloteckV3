<?php

class Admin extends Controller
{
	public function __construct()
	{
		if (!isset($_SESSION['pseudo']))
		{
			echo "Vous ne pouvez pas accéder au panel admin si vous n'êtes pas admin !";
			header('Location:../home');
		}
	}

	public function index()
	{
		$this->view('admin/index');
	}

	public function write()
	{
		$this->view('admin/write');
	}

}

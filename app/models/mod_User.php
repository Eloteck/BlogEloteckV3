<?php

class mod_User extends Database
{
	public function __construct()
	{
		parent::__construct();
	}

	public function logIn($username, $passwd)
	{
		$db = $this->db;

		$request = "SELECT * FROM users WHERE username=:username AND passwd=:passwd";
		$prep = $db->prepare($request);
		$prep->execute(array('username' => $username, 'passwd' => $passwd));

		$result = $prep->fetch();		
		return $result;
	}
}
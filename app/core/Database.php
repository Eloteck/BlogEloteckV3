<?php

class Database
{
	public function connectDb()
	{
		$access = require_once '../app/config/database.php';

		$host = $access['host'];
		$user = $access['user'];
		$password = $access['passwd'];
		$bdd = $access['database'];
		
		try {
			$cnx = new PDO('mysql:host='.$host.';dbname='.$bdd, $user, $password);
			$cnx->query('SET NAMES UTF8');
			$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $e) {
			echo 'Échec lors de la connexion : ' . $e->getMessage();
		}
		return $cnx;
	}
}
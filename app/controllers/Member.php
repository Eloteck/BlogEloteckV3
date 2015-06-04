<?php

class Member extends Controller
{
	public function login($error = '')
	{
		if (!isset($_SESSION['pseudo']))
		{	
			if (isset($_POST['username']) && isset($_POST['passwd']))
			{
				$salt = require_once '../app/config/salt.php';

				$username = htmlentities($_POST['username']);
				$passwd = hash('sha256', md5($salt['prefix'] . $_POST['passwd'] . $salt['suffix']));

				$send = $this->model('mod_User');
				$nbAccount = $send->logIn($username, $passwd);

				if ($nbAccount) {
					$_SESSION['pseudo'] = $username;
					header('Location:../home');
				}
				else{
					$this->view('login', array('error' => 'Erreur de connexion. Veuillez vérifier vos identifiants.'));
				}
			}
			else
			{
				$this->view('login');
			}
		}
		else{
			header('Location:../home');
		}
	}

	public function logout()
	{
		session_destroy();
		header('Location:../home');
	}
}
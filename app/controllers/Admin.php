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
		if (isset($_POST['article_title']) && isset($_POST['article_url']) && isset($_POST['article_img']) && isset($_POST['article_content']) && isset($_POST['article_tags']) && isset($_POST['article_category']))
		{
			$send = $this->model('mod_Article');
			$verif = $send->sendArticle($_POST['article_title'], $_POST['article_url'], $_POST['article_img'], $_POST['article_content'], $_POST['article_tags'], $_POST['article_category']);

			if ($verif == true) {
				$this->view('admin/write', array('success' => 'Votre article a bien été publié ! <a href="article/'.$_POST['article_url'].'">Lien vers l\'article</a>'));
			}
			else{
				$this->view('admin/write', array('error' => 'Oops, tout ne s\'est pas bien passer. Veuillez rééssayer.'));
			}
		}
		else{
			$this->view('admin/write');
		}
	}

}

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
			$_POST['article_title'] = htmlentities(addslashes($_POST['article_title']));
			$_POST['article_url'] = htmlentities(addslashes($_POST['article_url']));
			$_POST['article_img'] = htmlentities(addslashes($_POST['article_img']));
			$_POST['article_tags'] = htmlentities(addslashes($_POST['article_tags']));
			$_POST['article_category'] = htmlentities(addslashes($_POST['article_category']));
			$_POST['article_content'] = addslashes($_POST['article_content']);

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

	public function editArticle($url='')
	{
		if (!$url) {
			header('Location:../../error.php');
		}
		else{
			$model = $this->model('mod_Article');

			$message = NULL;

			if (isset($_POST['article_title']) && isset($_POST['article_url']) && isset($_POST['article_img']) && isset($_POST['article_content']) && isset($_POST['article_tags']) && isset($_POST['article_category']))
			{

				$_POST['article_title'] = htmlentities(addslashes($_POST['article_title']));
				$_POST['article_url'] = htmlentities(addslashes($_POST['article_url']));
				$_POST['article_img'] = htmlentities(addslashes($_POST['article_img']));
				$_POST['article_tags'] = htmlentities(addslashes($_POST['article_tags']));
				$_POST['article_category'] = htmlentities(addslashes($_POST['article_category']));
				$_POST['article_content'] = addslashes($_POST['article_content']);

				$verif = $model->updateArticle($url, $_POST['article_title'], $_POST['article_url'], $_POST['article_img'], $_POST['article_content'], $_POST['article_tags'], $_POST['article_category']);
				
				if ($verif == true) {
					$message = 'Votre article a bien été modifié ! <a href="article/'.$_POST['article_url'].'">Lien vers l\'article</a>';
				}
				else{
					$message = 'Oops, tout ne s\'est pas bien passer. Veuillez rééssayer.';
				}
			}

			$article_content = $model->getArticleFromUrl($url);
			$this->view('admin/editArticle', ['message' => $message, 'url' => $url, 'article' => $article_content]);
		}
	}

	public function articleList()
	{
		$list = $this->model('mod_Article');
		$articles = $list->getArticles();


		$this->view('admin/list', $articles);
	}

}

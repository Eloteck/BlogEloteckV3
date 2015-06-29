<?php

class Home extends Controller
{
	public function index($page = 1)
	{
		$config = require_once '../app/config/home.php';

		$article = $this->model('mod_Article'); //require the model
		$articles = $article->getArticlesByNumber(($page - 1) * $config['articlePerPage'], $config['articlePerPage']); //récupérer les articles
		
		$nb = $article->getNbArticle();
		$nbPage = ceil($nb[0] / $config['articlePerPage']); //Nombre de pages d'articles en fonction du nb d'article par page

		foreach ($articles as $key => $article) { //Date layout
			$cut_day_hour = explode(' ', $article['creation_date']);
			$day = explode('-', $cut_day_hour[0]);
			$hour = explode(':', $cut_day_hour[1]);

			$articles[$key]['creation_date'] = 'Publié le '.$day[2].'/'.$day[1].' à '.$hour[0].'h'.$hour[1];
			
                        require_once '../app/plugins/truncate/truncate.php';
			$articles[$key]['content'] = truncate($articles[$key]['content'], 200);
		}

		if ($page == 1) {
			$pageLinks = array(
				'page'=>$page,
				'next'=>$page + 1,
				'last'=>$nbPage
			);
		}
		elseif ($page == $nbPage) {
			$pageLinks = array(
				'first' => 1,
				'previous'=>$page - 1,
				'page'=>$page
			);
		}
		else{
			$pageLinks = array(
				'first' => 1,
				'previous'=>$page - 1,
				'page'=>$page,
				'next'=>$page + 1,
				'last'=>$nbPage
			);
		}

		$this->view('home', ['article' => $articles, 'pages' => $nbPage, 'pageLinks' => $pageLinks]);
	}
}
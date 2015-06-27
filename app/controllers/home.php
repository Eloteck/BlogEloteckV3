<?php

class Home extends Controller
{
	public function index()
	{
		$article = $this->model('mod_Article'); //require the model
		$articles = $article->getArticlesByNumber(10);

		foreach ($articles as $key => $article) { //Date layout
			$cut_day_hour = explode(' ', $article['creation_date']);
			$day = explode('-', $cut_day_hour[0]);
			$hour = explode(':', $cut_day_hour[1]);

			$articles[$key]['creation_date'] = 'Publié le '.$day[2].'/'.$day[1].' à '.$hour[0].'h'.$hour[1];
			
                        require_once '../app/plugins/truncate/truncate.php';
			$articles[$key]['content'] = truncate($articles[$key]['content'], 200);
		}
		$this->view('home', $articles);
	}
}
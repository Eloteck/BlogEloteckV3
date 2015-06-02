<?php

class Article extends Controller
{
	public function index($url = '')
	{
		if (isset($url)){
			$getArticle = $this->model('mod_Article'); //require the model
			$article = $getArticle->getArticleFromUrl($url);

			if (count($article)) {
				$cut_day_hour = explode(' ', $article[0]['creation_date']);
				$day = explode('-', $cut_day_hour[0]);
				$hour = explode(':', $cut_day_hour[1]);
				$article[0]['creation_date'] = 'Publié le '.$day[2].'/'.$day[1].' à '.$hour[0].'h'.$hour[1];
				
				$this->view('article', $article);
			}
			else{
				$this->view('error');
			}
		}
		else{
			$this->view('error');
		}
	}
}
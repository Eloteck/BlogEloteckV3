<?php

class mod_Article extends Database
{

	public function __construct()
	{
		parent::__construct();
	}

	public function getArticlesByNumber($nbArticles)
	{
		$db = $this->db;

		$request = "SELECT * FROM articles ORDER BY creation_date DESC LIMIT 0,".$nbArticles;
		$prep = $db->prepare($request);
		$prep->execute();

		$result = $prep->fetchAll();
		return $result;
	}

	public function getArticleFromUrl($url)
	{
		$db = $this->db;

		$request = "SELECT * FROM articles WHERE url='".$url."'";
		$prep = $db->prepare($request);
		$prep->execute();

		$result = $prep->fetchAll();
		return $result;
	}

	public function sendArticle($title, $url, $img, $content, $tags, $category)
	{
		$db = $this->db;

		$request = "INSERT INTO articles (title, content, tags, url, img, category) VALUES ('".$title."', '".$content."', '".$tags."', '".$url."', '".$img."', '".$category."')";
		$prep = $db->prepare($request);
		$verif = $prep->execute();

		return $verif;
	}

	public function getArticles()
	{
		$db = $this->db;

		$request = "SELECT * FROM articles ORDER BY creation_date";
		$prep = $db->prepare($request);
		$prep->execute();

		$result = $prep->fetchAll();
		return $result;
	}

	public function getArticlesByTags($tags)
	{
		$db = $this->db;

		$request = "SELECT * FROM articles WHERE title LIKE '%".$tags."%' OR tags LIKE '%".$tags."%' ORDER BY creation_date";
		$prep = $db->prepare($request);
		$prep->execute();

		$result = $prep->fetchAll();
		return $result;
	}
	
	public function updateArticle($url_active, $title, $url, $img, $content, $tags, $category)
	{
		$request = "UPDATE articles SET title='".$title."', content='".$content."', tags='".$tags."', url='".$url."', img='".$img."', category='".$category."' WHERE url='".$url_active."' ";

		$db = $this->db;
		$prep = $db->prepare($request);
		$result = $prep->execute();

		return $result;
	}

}
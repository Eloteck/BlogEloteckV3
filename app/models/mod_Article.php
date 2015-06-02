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
}
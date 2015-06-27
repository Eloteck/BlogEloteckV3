<?php $title = "Liste des articles" ?>
<div class="article-list box">
	<div class="box-content">
		<h1>Liste des articles</h1>
		<a href="admin/write" class="button">Nouvel article</a>
		<ul>
			<?php foreach ($data as $key => $article) : ?>
				<li><a href="article/<?= $data[$key]['url'] ?>"><?= $data[$key]['title'] ?></a> - <a href="admin/editArticle/<?= $data[$key]['url'] ?>">Modifier</a> - <a href="admin/deleteArticle/<?= $data[$key]['url'] ?>">Supprimer</a></li>
			<?php endforeach ?>
		</ul>
	</div>
</div>
<?php $title = "Liste des articles" ?>
<div class="article-list box">
	<div class="box-content">
		<h1>Liste des articles</h1>
		<ul>
			<?php foreach ($data as $key => $article) : ?>
				<li><a href="article/<?= $data[$key]['url'] ?>"><?= $data[$key]['title'] ?></a> - <a href="admin/editArticle/<?= $data[$key]['url'] ?>">Modifier</a></li>
			<?php endforeach ?>
		</ul>
	</div>
</div>
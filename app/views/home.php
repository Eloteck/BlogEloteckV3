<?php $title = 'Accueil' ?>

<?php foreach ($data as $key => $new): ?>
	<div class="article box">
		<img src='<?= $new['img'] ?>' alt="Miniature"/>
		<div class="article-content">
			<h2><?= $new['title'] ?></h2>
			<p class="article-date"><?= $new['creation_date'] ?></p>
			<p class="article-content"><?= $new['content'] ?>[...]</p>
			<a href="article/<?= $new['url'] ?>" class="article-link">Lire l'article</a>
		</div>
	</div>
<?php endforeach ?>

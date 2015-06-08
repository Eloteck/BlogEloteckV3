<?php $title = 'Recherche : ' .$_POST['search'] ?>

<?php foreach ($data as $key => $new): ?>
	<div class="article box">
		<img src='<?= $new['img'] ?>' alt="Miniature"/>
		<div class="article-content">
			<h2><?= $new['title'] ?></h2>
			<div class="article-info">
				<p class="article-date"><?= $new['creation_date'] ?></p>
				<div class="void"></div>
				<p class="article-tags"><?= $new['tags'] ?></p>
				<div class="void"></div>
				<p class="article-category"><?= $new['category'] ?></p>
			</div>
			<div class="article-text"><?= $new['content'] ?></div>
			<a href="article/<?= $new['url'] ?>" class="article-link">Lire l'article</a>
		</div>
	</div>
<?php endforeach ?>

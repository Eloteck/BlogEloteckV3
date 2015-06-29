<?php $title = 'Accueil' ?>

<?php foreach ($data['article'] as $key => $new): ?>
	
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

<section class="article-nb-page box">
	<?php if (isset($data['pageLinks']['first'])): ?>
		<a href="/<?=$data['pageLinks']['first']?>" class="navigation">Première page</a>
		<a href="/<?=$data['pageLinks']['previous']?>" class="navigation">Précédent</a>
	<?php endif ?>
			<span><?=$data['pageLinks']['page']?></span>
	<?php if (isset($data['pageLinks']['last'])) : ?>
		<a href="/<?=$data['pageLinks']['next']?>" class="navigation">Suivant</a>
		<a href="/<?=$data['pageLinks']['last']?>" class="navigation">Dernière page</a>
	<?php endif ?>
</section>

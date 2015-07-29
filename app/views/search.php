<?php $title = 'Recherche : ' .$_GET['search'] ?>

<section class="search-result box">
	<div class="box-content">
		<h1>Recherche</h1>
		<?php if (isset($data['result']) && $data['result'] == 0): ?>
			<p>Nous n'avons pas trouvé ce que vous cherchez. :(</p>

		<?php elseif (isset($data['result']) && $data['result'] > 0): ?>
			<?php if ($data['result'] == 1): ?>
				<p><?=$data['result'] ?> Résultat trouvé</p>
			<?php else: ?>
				<p><?=$data['result'] ?> Résultats trouvés</p>
			<?php endif ?>
	</div>
</section>
			<?php foreach ($data['articles'] as $key => $new): ?>
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
		<?php endif ?>
	</div>
</section>

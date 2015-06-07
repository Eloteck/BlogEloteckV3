<?php $title = $data[0]['title'] ?>
<div class="article box">
	<img src='<?= $data[0]['img'] ?>' alt="Miniature"/>
	<div class="article-content">
		<h2><?= $data[0]['title'] ?></h2>
		<div class="article-info">
			<p class="article-date"><?= $data[0]['creation_date'] ?></p>
			<div class="void"></div>
			<p class="article-tags"><?= $data[0]['tags'] ?></p>
			<div class="void"></div>
			<p class="article-category"><?= $data[0]['category'] ?></p>
		</div>
		<p><?= $data[0]['content'] ?></p>

		<div id="disqus_thread"></div>
	</div>
</div>
<?php $title = $data[0]['title'] ?>
<?php foreach ($data as $key => $new): ?>
	<div class="article box">
		<img src='<?= $new['img'] ?>' alt="Miniature"/>
		<div class="article-content">
			<h2><?= $new['title'] ?></h2>
			<p><i><?= $new['creation_date'] ?></i></p>
			<p><?= $new['content'] ?></p>
		</div>
	</div>
<?php endforeach ?>

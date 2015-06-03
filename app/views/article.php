<?php $title = $data[0]['title'] ?>
<div class="article box">
	<img src='<?= $data[0]['img'] ?>' alt="Miniature"/>
	<div class="article-content">
		<h2><?= $data[0]['title'] ?></h2>
		<p><i><?= $data[0]['creation_date'] ?></i></p>
		<p><?= $data[0]['content'] ?></p>
	</div>
</div>
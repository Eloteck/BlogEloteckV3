<div class="about box">
	<div class="pp">
		<img src="<?= $column['img']?>"/>
	</div>
	<div class="box-content">
		<h2>Eloteck</h2>
		<p><?= $column['desc']?></p>
	</div>
</div>
<div class="last_tweets box">
	<div class="box-content">
		<h2>Derniers tweets</h2>
		<?php require_once '../app/plugins/Elo_tweets/Elo_tweets.php'; ?>
		<a href="http://twitter.com/Eloteck" target="_blank">@Eloteck</a>
	</div>
</div>
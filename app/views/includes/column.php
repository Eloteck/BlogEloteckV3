<div class="about box">
	<div class="pp">
		<img src="<?= $column['img']?>"/>
	</div>
	<div class="box-content">
		<div class="user-info">	
			<h2>Eloteck</h2>
			<p><?= $column['desc']?></p>
			<p class='user-location'><?= $column['location']?></P>
		</div>
	</div>
</div>

<div class="search box">
	<div class="box-content">
		<h2>Rechercher</h2>
		<form method="GET" action="article/search">
			<?php if (isset($_GET['search'])): ?>
				<input type="search" name="search" class="search-input" placeholder="Rechercher" value="<?= $_GET['search'] ?>"/>
			<?php else: ?>
				<input type="search" name="search" class="search-input" placeholder="Rechercher" />
			<?php endif ?>
		</form>
	</div>
</div>

<div class="find-me box">
	<div class="box-content">
		<h2>Me retrouver</h2>
		<ul>
			<li><a href="http://twitter.com/eloteck" target="_blank"><img src="img/twitter50.png"/></a></li>
			<li><a href="http://youtube.com/EloteckGaming" target="_blank"><img src="img/youtube50.png"/></a></li>
			<li><a href="http://github.com/Eloteck" target="_blank"><img src="img/github50.png"/></a></li>
		</ul>
	</div>
</div>

<div class="last_tweets box">
	<div class="box-content">
		<h2>Derniers tweets</h2>
		<?php require_once '../app/plugins/Elo_tweets/Elo_tweets.php'; ?>
	</div>
</div>
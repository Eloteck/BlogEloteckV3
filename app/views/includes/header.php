<header class='princ_header'>
	<div class="header_content">
		<h1><?= $app['title']?></h1>
	</div>
	<nav class='menu'>
		<ul class='menu_content'>
			<li class="hamburger">
				<div class="menu-icon">
			 		<span class="bar"></span>
				</div>
				<ul class="deroul-menu">
					<li><a href="index.php">Accueil</a></li>
					<li><a href="articles">Articles</a></li>
					<li><a href="contact">Contact</a></li>
					<li><a href="member/login">Connexion</a></li>
					<li><a href="member/logout">Déconnexion</a></li>
					<?php if (isset($_SESSION['pseudo'])): ?>
					<li><a href="test">Test</a></li>
					<?php endif ?>
				</ul>
			</li>
		</ul>
	</nav>
</header>
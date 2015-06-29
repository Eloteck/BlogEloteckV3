<?php $title="Connexion" ?>
<div class="login-form box">
	<div class="box-content">
		<div class="form">
			<h1>Connexion</h1>
			<form method="POST" action="member/login">
				<?php if (isset($data['error'])) :?>
					<div class="error-message"><?= $data['error'] ?></div>
				<?php endif ?>
				<input type="text" name="username" for="username" placeholder="Nom d'utilisateur" required />
				<input type="password" name="passwd" placeholder="Mot de passe" required />
				<input type="submit" name="submit" value="Connexion" class="button" required />
			</form>
		</div>
		<img src="img/shield.png" class="shield">
	</div>
</div>
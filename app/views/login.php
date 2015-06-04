<?php $title="Connexion" ?>
<div class="login-form box">
	<div class="box-content">
		<h1>Connexion</h1>
		<?php if (isset($data['error'])) :?>
			<div class="error-message"><?= $data['error'] ?></div>
		<?php endif ?>
		<form method="POST" action="member/login">
			<input type="text" name="username" placeholder="Nom d'utilisateur" required />
			<input type="password" name="passwd" placeholder="Mot de passe" required />
			<input type="submit" name="submit" value="Connexion" required />
		</form>
	</div>
</div>
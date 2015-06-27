<?php $title="Supprimer un article" ?>
<section class='admin_index box'>
	<div class='box-content'>
	<?php if ($data['conf'] == 'true'): ?>
		<p class="success-message"><?= $data['message'] ?></p>
		<a href="admin/articleList">Revenir à la liste des articles</a>
	<?php else: ?>
		<h1>Supprimer un article</h1>
		<p><b>Supprimer un article est un acte irréversible.</b></p>
		<p>Êtes-vous sûr de vouloir supprimer cet article ? <i><?= $data['article'][0]['title'] ?></i></p>
		<form method="POST" action="admin/deleteArticle/<?= $data['url']?>">
			<input type="hidden" name="conf" value="">
			<input type="submit" value="Oui, supprimer" class="red button" />
		</form>
	<?php endif ?>
	</div>
</section>
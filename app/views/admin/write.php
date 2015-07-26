<?php $title="Ecrire un article" ?>
<section class='write-article box'>
	<div class='box-content'>
		<h1>Ecrire un article</h1>
		<?php if (isset($data['success'])) : ?>
			<div class="success-message">
				<?= $data['success'] ?>
			</div>
		<?php endif ?>
		<form method="POST" action="admin/write">
			<input type="text" name="article_title" placeholder="Titre de l'article" required/>
			<input type="text" name="article_url" placeholder="URL de l'article" required/>
			<input type="text" name="article_img" placeholder="Image de l'article" required/>

			<textarea name="article_content" id="editor"></textarea>

			<input type="text" name="article_tags" placeholder="Tags" required/>
			<input type="text" name="article_category" placeholder="Category" required/>

			<input type="submit" value="Envoyer" class="green button" />
		</form>
		<input type="submit" value="Prévisualiser" id="preview-button" class="button" />

		<div id="preview_area"></div>
	</div>
</section>
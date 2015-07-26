<?php $title="Ecrire un article" ?>
<section class='admin_index box'>
	<div class='box-content'>
		<h1>Modifier un article</h1>
		<?php if (!is_null($data['message'])) : ?>
			<div class="success-message">
				<?= $data['message'] ?>
			</div>
		<?php endif ?>

		<form method="POST" action="admin/editArticle/<?= $data['url']?>">
			<input type="text" name="article_title" placeholder="Titre de l'article" value="<?= $data['article'][0]['title'] ?>" required/>
			<input type="text" name="article_url" placeholder="URL de l'article" value="<?= $data['article'][0]['url'] ?>" required/>
			<input type="text" name="article_img" placeholder="Image de l'article" value="<?= $data['article'][0]['img'] ?>" required/>
			
			<textarea id="editor" name="article_content"><?= $data['article'][0]['content'] ?></textarea>
			
			<input type="text" name="article_tags" placeholder="Tags" value="<?= $data['article'][0]['tags'] ?>" required/>
			<input type="text" name="article_category" placeholder="Category" value="<?= $data['article'][0]['category'] ?>" required/>
			
			<input type="submit" value="Envoyer" class="green button" />
		</form>

		<input type="submit" value="Prévisualiser" id="preview-button" class="button" />
		<div id="preview_area"></div>


	</div>
</section>
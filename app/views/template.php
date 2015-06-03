<html>
	<?php require_once '../app/views/includes/head.php'; ?>
<body>
	<?php require_once '../app/views/includes/header.php'; ?>
	<main class="princ_main">
		<div class="content">
			<?= $content ?>
		</div>
		<div class="void"></div>
		<section class="column">
			<?php require_once '../app/views/includes/column.php'; ?>
		</section>
	</main>
	<?php require_once '../app/views/includes/footer.php'; ?>
</body>
</html>
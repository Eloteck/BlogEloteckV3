<head>
	<meta charset="UTF-8" />
	<title>Eloteck.fr - <?= $title ?></title>
	<base href="/BlogEloteckV3/public/">
	<!-- load my css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	
	<!-- load external css-->
	<!-- EloTweets-->
	<link rel="stylesheet" type="text/css" href="css/Elo_tweets.css">

	<?php if (isset($_SESSION['pseudo'])): ?>
		<!-- trumbowig (if connected-->
		<link rel="stylesheet" href="bower_components/trumbowyg/dist/ui/trumbowyg.min.css">
	<?php endif ?>
</head>
<head>
	<meta charset="UTF-8" />
	<title>Eloteck.fr - <?= $title ?></title>
	<base href="/BlogEloteckV3/public/">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/Elo_tweets.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

	<script type="text/javascript">
	    /* * * CONFIGURATION VARIABLES * * */
	    var disqus_shortname = "<?= $app['disqus']?>";
	    
	    /* * * DON'T EDIT BELOW THIS LINE * * */
	    (function() {
	        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
	        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
	        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	    })();
	</script>
	<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
</head>
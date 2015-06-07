<!-- Load jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


<!-- Load Disqus -->
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
<noscript>Veuillez activer javascript pour voir les <a href="https://disqus.com/?ref_noscript" rel="nofollow">commentaires.</a></noscript>


<!-- Load trumbowyg if connected -->
<?php if (isset($_SESSION['pseudo'])): ?>
	<script src="../app/plugins/ckeditor/ckeditor.js"></script>
	<script>
        // Replace the <textarea id="editor1"> with a CKEditor instance, using default configuration.
        CKEDITOR.replace( 'editor' );
    </script>
<?php endif ?>
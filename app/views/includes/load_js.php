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


<!-- Load scEditor if connected -->
<?php if (isset($_SESSION['pseudo'])): ?>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="../app/plugins/scEditor/minified/jquery.sceditor.bbcode.min.js"></script>

    <script>
        $(function() {
            // Replace all textarea's
            // with SCEditor
            $("textarea").sceditor({
                plugins: "xhtml",
            style: "minified/jquery.sceditor.default.min.css"
            });
        });
    </script>
<?php endif ?>
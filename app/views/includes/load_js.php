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

<!-- Load Twitter share button -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<!-- Load scEditor if connected -->
<?php if (isset($_SESSION['pseudo'])): ?>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script type="text/javascript" src="widgets/scEditor/minified/jquery.sceditor.bbcode.min.js"></script>

    <script>
        $(function() {
            // Replace all textarea's
            // with SCEditor
            $("#editor").sceditor({
                plugins: "xhtml",
            style: "minified/jquery.sceditor.default.min.css"
            });
        });
    </script>
<?php endif ?>
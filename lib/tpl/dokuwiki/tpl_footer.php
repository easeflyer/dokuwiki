<?php
/**
 * Template footer, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<!-- ********** FOOTER ********** -->
<div id="dokuwiki__footer"><div class="pad">
    <?php tpl_license(''); // license text ?>

    <div class="buttons">
        <?php
            tpl_license('button', true, false, false); // license button, no wrapper
            $target = ($conf['target']['extern']) ? 'target="'.$conf['target']['extern'].'"' : '';
        ?>
	<a href="http://creativecommons.org/licenses/by-nc-sa/4.0/deed.zh" title="知识共享协议" <?php echo $target?>>
	<img src="http://www.ushow.org/lib/exe/fetch.php?media=wiki:80x15.png" /></a>
        <a href="http://www.php.net" title="Powered by PHP" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-php.gif" width="80" height="15" alt="Powered by PHP" /></a>
        <a href="http://validator.w3.org/check/referer" title="Valid HTML5" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-html5.png" width="80" height="15" alt="Valid HTML5" /></a>
        <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3" title="Valid CSS" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-css.png" width="80" height="15" alt="Valid CSS" /></a>
        <a href="http://dokuwiki.org/" title="Driven by DokuWiki" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-dw.png" width="80" height="15" alt="Driven by DokuWiki" /></a>
    </div>
</div></div>
<!-- google 分析 -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82842196-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- / google 分析 -->
<!-- /footer -->

<?php
tpl_includeFile('footer.html');

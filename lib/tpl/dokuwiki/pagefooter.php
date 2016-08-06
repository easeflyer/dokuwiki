<?php
/**
* 多说评论框
* hasPage() 用于判断，包含 $pages 数组中的字符串的页面，将不显示评论。
*/
function hasPage(){
	$pages = array("id=start","do=admin");
	foreach($pages as $page)
		if(strpos($_SERVER["QUERY_STRING"],$page)!==false) return true;
	if(empty($_SERVER["QUERY_STRING"])) return true;
	return false;
}
?>
<?php if(!hasPage()): ?>
<!-- google adsense start -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ushow文章自适应 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-0367096149744981"
     data-ad-slot="6071049251"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- google adsense end -->
<!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="<?php echo hsc($ID) ?>"
	 data-title="<?php echo hsc($ID) ?>" data-url="http://www.ushow.org/doku.php?id=<?php echo hsc($ID) ?>"></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"ushow"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- 多说公共JS代码 end -->

<?php endif; ?>

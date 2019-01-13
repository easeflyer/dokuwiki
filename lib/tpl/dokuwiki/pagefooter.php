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
<!-- 畅言 start -->
<!--PC和WAP自适应版-->
<?php global $INFO; ?>
<div id="SOHUCS" sid="<?php echo $INFO['id']; ?>"></div> 
<script type="text/javascript"> 
(function(){ 
var appid = 'cytjueSwG'; 
var conf = 'prod_05011160d014ac58c6e1f9fe7363604f'; 
var width = window.innerWidth || document.documentElement.clientWidth; 
if (width < 960) { 
window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); } else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("http://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); } })(); </script>
<!-- 畅言 end -->

<?php endif; ?>

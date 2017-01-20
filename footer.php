<?php /* footer.php */ 
	$Base_URL = constant('Base_URL');
	$CDN_prefix = constant('CDN_prefix');
?>

	<footer class="footer">
		<h3 class="footer-h3">&copy; <?php echo date("Y"); ?> LAW OFFICE OF TIMOTHY PAUL DAWSON</h3>
		<nav class="footer-nav">
			<ul class="footer-ul">
				<li class="footer-li">
					<a class="footer-a" href="/" title="Homepage">Home</a>
				</li>
				<li class="footer-li">
					<a class="footer-a" href="/practices" title="See Our Areas of Practice">Areas of Practice</a>
				</li>
				<li class="footer-li">
					<a class="footer-a" href="/contact" title="Contact the Law Office of Timothy Paul Dawson">Contact</a>
				</li>
				<li class="footer-li">
					<a class="footer-a" href="/sitemap" title="Site map">Site map</a>
				</li>
			</ul>
		</nav>
	</footer>
	<script type="text/javascript" src="<?php echo $CDN_prefix; ?>js/dawson.js"></script>
	<script type="text/javascript">
		var _gaq=_gaq||[];_gaq.push(['_setAccount','UA-47446455-1']);_gaq.push(['_setDomainName','attorneydawson.org']);_gaq.push(['_trackPageview']);(function(){var ga=document.createElement('script');ga.type='text/javascript';ga.async=true;ga.src=('https:'==document.location.protocol?'https://ssl':'http://www')+'.google-analytics.com/ga.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})();
	</script>
</body>
</html>
<?php /* temp.php */
	session_start();
	define("Base_URL", "http://attorneydawson.org/");
	define("CDN_prefix", "http://attorneydawson.org/");
	$Base_URL = constant('Base_URL');
	$CDN_prefix = constant('CDN_prefix');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <meta name="google-site-verification" content="0K27I-ADVNlGoboQd3BVgxFBh1qfWvNmy1JbTS9kMdo" />
	<base href="<?php echo $Base_URL; ?>" />
	<?php echo $extra_meta; ?>
	<title>Law Office of Timothy Paul Dawson</title>
	<link href="<?php echo $Base_URL . $page_canonical; ?>" rel="canonical" class="jsIgnore" />
	<link type="image/x-icon" href="<?php echo $CDN_prefix; ?>img/favicon.bmp" rel="icon" />
	<link type="image/x-icon" href="<?php echo $CDN_prefix; ?>img/favicon.bmp" rel="shortcut icon" />
	<link type="text/css" href="http://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet" class="jsIgnore" />
	<link type="text/css" href="<?php echo $CDN_prefix; ?>css/styles.css" rel="stylesheet" />
    <link href="humans.txt" rel="author" />
</head>
<body>
	<header class="header">
		<h1 class="header-h1">Law Office of Timothy Paul Dawson</h1>
		<nav class="header-nav">
			<ul class="header-ul">
				<li class="header-li">
					<a class="header-a" id="navHome" href="#" title="Homepage">Home</a>
				</li>
				<li class="header-li">
					<a class="header-a" id="navPractices" href="#" title="See Our Areas of Practice">Areas of Practice</a>
				</li>
				<li class="header-li">
					<a class="header-a" id="navContact" href="#" title="Contact the Law Office of Timothy Paul Dawson">Contact</a>
				</li>
			</ul>
		</nav>
	</header>
	<section class="content">
		<article class="content-article">
			<section class="content-section" style="min-height: 140px;">
				<p class="content-p">
					<img src="img/tim-dawson.jpg" class="content-img" alt="" />
					Please hang in there while we finish up our content! See some details below!
				</p>
			</section>
			<section class="content-section">
				<div class="content-div content-div-3">
					<ul class="content-ul">
						<li class="content-li content-li-title">Areas of Expertise</li>
						<li class="content-li"><a class="content-li-a" href="#">Accidents</a></li>
						<li class="content-li"><a class="content-li-a" href="#">Auto Accidents</a></li>
						<li class="content-li"><a class="content-li-a" href="#">Criminal</a></li>
						<li class="content-li"><a class="content-li-a" href="#">Estate Planning</a></li>
						<li class="content-li"><a class="content-li-a" href="#">Personal Injury &amp;<br />Property Damage</a></li>
						<li class="content-li"><a class="content-li-a" href="#">Probate, Wills &amp; Estates</a></li>
					</ul>
				</div>
				<div class="content-div content-div-3">
					<ul class="content-ul">
						<li class="content-li content-li-title">Services</li>
						<li class="content-li"><a class="content-li-a" href="#">Civil Litigation</a></li>
						<li class="content-li"><a class="content-li-a" href="#">Litigation &amp; Hearings</a></li>
						<li class="content-li"><a class="content-li-a" href="#">Personal Injury</a></li>
						<li class="content-li"><a class="content-li-a" href="#">Wills</a></li>
					</ul>
				</div>
				<div class="content-div content-div-3 content-div-phone">
					<span class="content-span-consult">Call for a FREE consultation!</span>
					<a href="tel:+17245275717" class="contain-span-phone">724-527-5717</a>
				</div>
			</section>
			<hr class="content-hr" />
			<section class="content-section">
				<div class="content-div content-div-2">
					<address class="content-address">
						Law Office of Timothy Paul Dawson<br />
						189 Main Street<br />
						Adamsburg, PA 15611
					</address>
				</div>
				<div class="content-div content-div-2">
					<em>Office Hours:</em><br />
					Monday - Friday: 8:30 a.m. - 4:30 p.m.<br />
					Evening and Weekend Hours by Appointment
				</div>
			</section>
			<section class="content-section">
				<p class="content-p">
					<strong><em>Proudly Serving Pittsburgh and It's Surrounding Counties Since 1985!</em></strong>
				</p>
			</section>
		</article>
	</section>
	<script type="text/javascript">
		var _gaq=_gaq||[];_gaq.push(['_setAccount','UA-47446455-1']);_gaq.push(['_setDomainName','attorneydawson.org']);_gaq.push(['_trackPageview']);(function(){var ga=document.createElement('script');ga.type='text/javascript';ga.async=true;ga.src=('https:'==document.location.protocol?'https://ssl':'http://www')+'.google-analytics.com/ga.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})();
	</script>
</body>
</html>
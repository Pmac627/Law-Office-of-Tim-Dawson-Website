<?php /* header.php */
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
<body itemscope itemtype ="http://schema.org/Attorney">
	<header class="header">
		<h1 class="header-h1" itemprop="name">Law Office of Timothy Paul Dawson</h1>
		<nav class="header-nav">
			<ul class="header-ul">
				<li class="header-li">
					<a class="header-a" id="navHome" href="<?php echo $Base_URL; ?>" title="Homepage">Home</a>
				</li>
				<li class="header-li">
					<a class="header-a" id="navPractices" href="<?php echo $Base_URL; ?>practices" title="See Our Areas of Practice">Areas of Practice</a>
				</li>
				<li class="header-li">
					<a class="header-a" id="navContact" href="<?php echo $Base_URL; ?>contact" title="Contact the Law Office of Timothy Paul Dawson">Contact</a>
				</li>
			</ul>
		</nav>
	</header>

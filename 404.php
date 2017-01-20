<?php /* 404.php */
	$page_canonical = "404";
	$extra_meta = "<meta http-equiv='Refresh' content='7; URL=/home' />
		<meta name='robots' content='noindex,nofollow' />
	";
	require_once('header.php');
	$Base_URL = constant('Base_URL');
	$CDN_prefix = constant('CDN_prefix');
?>
	<section class="content">
		<article class="content-article">
			<section class="content-section">
				<h1 class="content-title">That page does not exist!</h1>
				<h2 class="content-subtitle">A blasted 404 error...</h2>
				<p class="content-p">
					The link you clicked or url you typed in leads to this dead end.
					You will be redirected back to the homepage in 7 seconds.
				</p>
			</section>
		</article>
	</section>
<?php
	require_once('footer.php');
?>
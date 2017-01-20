<?php /* success.php */
	$successMethod = $_SESSION['successMethod'];
	switch($successMethod) {
		case 'EMAIL':
			$successMethod = "Emailing";
			break;
		case 'PHONE':
			$successMethod = "Calling";
			break;
		default:
			$successMethod = "Calling";
			break;
	}
	$page_canonical = "success";
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
				<h1 class="content-title">Thank you for your contact request!</h1>
				<h2 class="content-subtitle">Help Will Be <?php echo $successMethod; ?> You Soon!</h2>
				<p class="content-p">
					Your request for contact has been sent to the Law Office of Timothy Paul Dawson.<br />
					You will be redirected back to the homepage in 7 seconds.
				</p>
			</section>
		</article>
	</section>
<?php
	require_once('footer.php');
?>
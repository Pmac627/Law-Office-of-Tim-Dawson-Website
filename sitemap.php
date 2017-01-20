<?php /* 404.php */
	$page_canonical = "sitemap";
	require_once('header.php');
	$Base_URL = constant('Base_URL');
	$CDN_prefix = constant('CDN_prefix');
?>
	<section class="content">
		<article class="content-article">
			<section class="content-section">
				<h1 class="content-title">Sitemap</h1>
				<p class="content-p">
                    <ul class="content-ul">
						<li class="content-li"><a class="content-li-a" href="<?php echo $Base_URL; ?>">Home</a></li>
						<li class="content-li"><a class="content-li-a" href="<?php echo $Base_URL; ?>practices">Areas of Practice</a></li>
                        <li class="content-li">
                            <ul class="content-ul">
                                <li class="content-li"><a class="content-li-a" href="<?php echo $Base_URL; ?>practices#Accidents-Personal-Injury">Accidents &amp; Personal Injury</a></li>
                                <li class="content-li"><a class="content-li-a" href="<?php echo $Base_URL; ?>practices#Auto-Accidents">Auto Accidents</a></li>
                                <li class="content-li"><a class="content-li-a" href="<?php echo $Base_URL; ?>practices#Criminal">Criminal</a></li>
                                <li class="content-li"><a class="content-li-a" href="<?php echo $Base_URL; ?>practices#Civil-Litigation">Civil Litigation</a></li>
                                <li class="content-li"><a class="content-li-a" href="<?php echo $Base_URL; ?>practices#Property-Damage">Property Damage</a></li>
                                <li class="content-li"><a class="content-li-a" href="<?php echo $Base_URL; ?>practices#Probate-Wills-Estates">Probate, Wills &amp; Estates</a></li>
                            </ul>
                        </li>
						<li class="content-li"><a class="content-li-a" href="<?php echo $Base_URL; ?>contact">Contact</a></li>
					</ul>
				</p>
			</section>
		</article>
	</section>
<?php
	require_once('footer.php');
?>
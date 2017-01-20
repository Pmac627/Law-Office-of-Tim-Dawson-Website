<?php /* contact.php */
	$errName = $_SESSION['errName'];
	$errPhone = $_SESSION['errPhone'];
	$errEmail = $_SESSION['errEmail'];
	$errMethod = $_SESSION['errMethod'];
	$errPage = $_SESSION['errPage'];
	
	$page_canonical = "contact.php";
	require_once('header.php');
	$Base_URL = constant('Base_URL');
	$CDN_prefix = constant('CDN_prefix');
?>
	<section class="content">
		<article class="content-article">
			<section class="content-section">
				<h1 class="content-title">Contact</h1>
				<p class="content-p" itemprop="description">
					Attorney Dawson has a 24/7 Answering Service, a convenient office on Main Street in Adamsburg with free parking, 
                    and a Secretary/Legal Assistant on staff from 9 AM to 5 PM. 
				</p>
				<p class="content-p">
					Please use the map and driving directions links to locate our office. Attorney Dawson will meet with clients at 
					more convenient locations based on each client's needs.
				</p>
			</section>
			<section class="content-section">
				<div class="content-div content-div-2">
					<h2 class="content-subtitle">By Phone</h2>
					<p class="content-p">
						<a href="tel:+17245275717" class="contain-span-phone contact-page" itemprop="telephone">724-527-5717</a>
					</p>
					<h2 class="content-subtitle">By Email</h2>
					<p class="content-p">
                        <a href="mailto:bossdaws@aol.com" itemprop="email">bossdaws@aol.com</a>
					</p>
					<h2 class="content-subtitle">By Website</h2>
					<form class="content-p" id="contact" method="post" action="process" accept-charset="utf-8" autocomplete="on">
						<div class="form-row">
							<label for="name" class="form-label">Full Name</label><?php echo $errName; ?>
						</div>
						<div class="form-row">
							<input type="text" id="name" name="name" form="contact" placeholder="e.g. John Doe" required="required" class="form-input" />
						</div>
						<div class="form-row">
							<label for="phone" class="form-label">Phone Number</label><?php echo $errPhone; ?>
						</div>
						<div class="form-row">
							<input type="tel" id="phone" name="phone" form="contact" placeholder="e.g. 724-555-4321" pattern="[0-9]{3,3}-[0-9]{3,3}-[0-9]{4,4}" required="required" maxlength="12" class="form-input" />
						</div>
						<div class="form-row">
							<label for="email" class="form-label">Email</label><?php echo $errEmail; ?>
						</div>
						<div class="form-row">
							<input type="email" id="email" name="email" form="contact" placeholder="e.g. johndoe@gmail.com" required="required" class="form-input" />
						</div>
						<div class="form-row">
							<label for="method" class="form-label">Best Contact Method</label><?php echo $errMethod; ?>
						</div>
						<div class="form-row">
							<div class="form-div-left">
								<select id="method" name="method" form="contact" required="required" class="form-select">
									<option value="" selected="selected">--SELECT--</option>
									<option value="PHONE">By Phone</option>
									<option value="EMAIL">By Email</option>
								</select>
							</div>
							<div class="form-div-right">
								<button type="submit" form="contact" class="form-button" id="form-submit">Submit</button>
								<button type="button" form="contact" class="form-button" id="form-reset" onClick="areYouSure()">Reset</button>
								<button type="reset" form="contact" class="form-hidden" id="reset">Reset</button>
							</div>
						</div>
						<?php echo $errPage; ?>
					</form>
				</div>
				<div class="content-div content-div-2">
					<h2 class="content-subtitle">By Mail</h2>
					<address class="content-address" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
						Law Office of Timothy Paul Dawson<br />
						<span itemprop="streetAddress">189 Main Street</span><br />
						<span itemprop="addressLocality">Adamsburg</span>,<span itemprop="addressRegion">Pa</span> <span itemprop="postalCode">15611</span>
					</address>
					<h2 class="content-subtitle">In Person</h2>
					<p class="content-p">
						<em>Office Hours:</em><br />
                        <time>
                            <meta itemprop="dayOfWeek" content="Monday" />
                            <meta itemprop="dayOfWeek" content="Tuesday" />
                            <meta itemprop="dayOfWeek" content="Wednesday" />
                            <meta itemprop="dayOfWeek" content="Thursday" />
                            <meta itemprop="dayOfWeek" content="Friday" />
                            Monday - Friday: <span itemprop="opens">9:00 a.m.</span> - <span itemprop="closes">5:00 p.m.</span><br />
                            Evening and Weekend Hours by Appointment
                        </time><br />
						<iframe class="contact-iframe" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=189+Main+St,+Adamsburg,+PA+15611&amp;aq=0&amp;oq=189+Main+St+Adamsburg,+PA+15611&amp;sll=41.117935,-77.604698&amp;sspn=4.91575,10.821533&amp;ie=UTF8&amp;hq=&amp;hnear=189+Main+St,+Manor,+Pennsylvania+15665&amp;t=h&amp;ll=40.310785,-79.655406&amp;spn=0.004909,0.006437&amp;z=16&amp;output=embed"></iframe>
						<br />
						<small>
							<a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=189+Main+St,+Adamsburg,+PA+15611&amp;aq=0&amp;oq=189+Main+St+Adamsburg,+PA+15611&amp;sll=41.117935,-77.604698&amp;sspn=4.91575,10.821533&amp;ie=UTF8&amp;hq=&amp;hnear=189+Main+St,+Manor,+Pennsylvania+15665&amp;t=h&amp;ll=40.310785,-79.655406&amp;spn=0.004909,0.006437&amp;z=16" target="_blank" style="color:#0000FF;text-align:left" itemprop="maps">View Larger Map</a>
						</small>
					</p>
				</div>
			</section>
		</article>
	</section>
<?php
	require_once('footer.php');
?>
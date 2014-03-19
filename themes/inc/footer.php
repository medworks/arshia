<?php

$address = GetSettingValue('Address',0);
$tel = GetSettingValue('Tell_Number',0);
$fax = GetSettingValue('Fax_Number',0);
$Contact_Email = GetSettingValue('Contact_Email',0);

$about = GetSettingValue('About_System',0);
$about = (mb_strlen($about)>250) ? mb_substr($about,0,250,"UTF-8")."..." : $about;
$about = strip_tags($about);

$gplus = GetSettingValue('Gplus_Add',0);
$facebook = GetSettingValue('FaceBook_Add',0);
$twitter = GetSettingValue('Twitter_Add',0);
$rss = GetSettingValue('Rss_Add',0);

$html=<<<cd

<div class="footer_push"></div>
		</div><!-- END content_container-->
		<footer class="footer_container">
			<!-- <div class="footer-social_container cwidth_container">
				<div class="footer-social_wrapper cwidth_wrapper">
					<div class="footer-social cwidth">
						<div class="col-1-1">
							<div class="col">
								<ul class="timeline">
									<li class="tweet">طراحی کامل به صورت ریسپانسیو <a href="#">رسپانسیو چیست</a></li>
									<li class="tweet">بکارگیری آخرین متدهای سئو <a href="#">سئو چیست</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<div class="footer-widgets_container cwidth_container">
				<div class="footer-widgets_wrapper cwidth_wrapper">
					<div class="footer-widgets cwidth">
						<div class="col-1-3">
							<div class="col">
								<section id="ffwidgetcontact-4" class="widget clearfix ffWidgetContact">
									<h3 class="widget_title">تماس با ما</h3>
									<div class="address">
										<strong>آدرس:</strong> <span>{$address}</span>
									</div>
									<div class="tel">
										<strong>تلفن:</strong> <span style="display:inline-block;direction:ltr;">{$tel}</span>
									</div>
									<div class="fax">
										<strong>فاکس:</strong> <span style="display:inline-block;direction:ltr;">{$fax}</span>
									</div>
									<div class="email">
										<strong>ایمیل:</strong> <a href="mailto:{$Contact_Email}" target="_blank"><span>{$Contact_Email}</span></a>
									</div>
								</section>
							</div>
						</div>
						<div class="col-1-3">
							<div class="col">
								<section id="recent-posts-5" class="widget clearfix widget_recent_entries">
									<h3 class="widget_title">درباره ما</h3>
									<a href="about-us.html"><p>{$about}</p></a>
									<!-- <ul>
										<li>
											<a href="#">خبر دو</a>
											<span class="post-date">تیر 21, 1392</span>
										</li>
										<li>
											<a href="#">خبر یک</a>
											<span class="post-date">آذز 19, 1392</span>
										</li>
									</ul> -->
								</section>
							</div>
						</div>
						<div class="col-1-3">
							<div class="col">
								<section id="ffwidgetsocial-4" class="widget clearfix ffWidgetSocial">
									<h3 class="widget_title">پیگیری ما در</h3>
									<div class="social_icons clearfix">
										<a href="https://{$twitter}" class="social_icon zocial-twitter"></a>
										<a href="https://{$facebook}" class="social_icon zocial-facebook"></a>
										<a href="https://{$gplus}" class="social_icon zocial-google-plus"></a>
										<a href="http://{$rss}" class="social_icon zocial-rss"></a>
										<a href="#" class="social_icon zocial-linkedin"></a>
										<a href="#" class="social_icon zocial-dribbble"></a>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom_container cwidth_container">
				<div class="footer-bottom_wrapper cwidth_wrapper">
					<div class="footer-bottom cwidth">
						<div class="col-1-1">
							<div class="col">
								<div class="footer-bottom_content clearfix">
									<a class="logo_footer" href="./">
										<img src="themes/images/logo_footer.png" alt="Arshia">
									</a>
									<div class="footer-bottom_left ltr">
										© Copyright 2013 by Arshia. All Rights Reserved. Designed by <a href="http://www.mediateq.ir" target="_blank">Mediateq</a>
									</div>
									<div class="footer-bottom_right">
										<div class="footer_links">
											<a href="./">Home</a>
											<a href="gallery.html">Gallery</a>
											<a href="contact.html">Contact</a>
											<a href="about-us.html">About</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div class="jqres"></div>
	</div><!-- END BOXED -->
	
</body>
</html>

cd;
echo $html;
?>
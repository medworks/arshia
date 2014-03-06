<?php
	include_once("classes/functions.php");
	include_once("classes/seo.php");
	$seo = Seo::GetSeo();	

	$tel = GetSettingValue('Tell_Number',0);
	$Contact_Email = GetSettingValue('Contact_Email',0);

	$gplus = GetSettingValue('Gplus_Add',0);
	$facebook = GetSettingValue('FaceBook_Add',0);
	$twitter = GetSettingValue('Twitter_Add',0);
	$rss = GetSettingValue('Rss_Add',0);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl" lang="fa-IR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="generator" content="Mediateq">
	
	<title><?php echo $seo->Site_Title;?></title>

	<link rel="shortcut icon" href="./favicon.ico">

	<link rel="stylesheet" href="themes/css/flick.css" type="text/css" media="all">
	<link rel="stylesheet" href="themes/css/wp.css" type="text/css" media="all">
	<!--[if IE]>
		<link rel='stylesheet' href='themes/css/ie.css' type='text/css' media='all' />
	<![endif]-->
	<link rel="stylesheet" href="themes/css/styles.css" type="text/css" media="all">
	<link rel="stylesheet" href="themes/css/style_pack.css" type="text/css" media="all">
	<link rel="stylesheet" href="themes/css/settings.css" type="text/css" media="all">
	<link rel="stylesheet" href="themes/css/dynamic-captions.css" type="text/css" media="all">
	<link rel="stylesheet" href="themes/css/static-captions.css" type="text/css" media="all">
	<link rel="stylesheet" href="themes/css/style.css" type="text/css" media="all">
	<style type="text/css">
		body{ 
			font-family: 'Open Sans', Arial, sans-serif !important;
		}
		input, 
		textarea, 
		.search_top_overlay input[type=text], 
		.blog-post-1_container.post_format_quote .featured_quote .quote_author, 
		.blockquote-2 .blockquote_author{ 
			font-family: 'Open Sans', Arial, sans-serif;
		}
		.navigation-1 .top-menu-item-a,
		.navigation-2 a{ 
			font-family: Helvetica, sans-serif, Arial, sans-serif;
		}
		blockquote,
		.blog-post-1_container.post_format_quote .featured_quote,
		.testimonial-2 .testimonial_content,
		.testimonial-3 .testimonial_content,
		.blockquote-2,
		.latest_tweet .latest_tweet_text,
		.footer-social .timeline{ 
			font-family: Georgia, serif, Arial, sans-serif;
		}
		body.layout_boxed{ 
			background-color: #F5D29D;
		}
		body.layout_boxed{ 
			background-image: url(http://rawofnature.com/demfile/sn/wp/wp-content/themes/sentinel/images/boxed_wood.jpg);
			background-size: auto;
			background-position: left top;
			background-repeat: repeat;
		}
	</style>
	<link rel="stylesheet" href="themes/css/retina.css" type="text/css" media="all">
	<link rel="stylesheet" href="themes/css/responsive.css" type="text/css" media="all">
	<link rel="stylesheet" href="themes/css/fonts.css" type="text/css" media="all">
	<link rel="stylesheet" href="themes/css/blue.css" type="text/css" media="all">
	<link rel="stylesheet" href="themes/css/jquery.bxslider.css" type="text/css" media="all">
	<link rel="stylesheet" href="themes/css/magnific-popup.css" type="text/css" media="all">
	<link rel="stylesheet" href="themes/css/magnific-popup-anim.css" type="text/css" media="all">
	<link rel="stylesheet" href="themes/css/font-awesome.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="themes/css/entypo.css" type="text/css" media="all">
	<link rel="stylesheet" href="themes/css/zocial.css" type="text/css" media="all">
	<link rel="stylesheet" href="themes/css/colorpicker.css" type="text/css" media="all">
	
	<script type="text/javascript" src="themes/js/jquery.js"></script>
	<script type="text/javascript" src="themes/js/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="themes/js/scrollTo.js"></script>
	<script type="text/javascript" src="themes/js/jquery.form.min.js"></script>
	
	<script type="text/javascript">
		/* <![CDATA[ */
		var mailchimpSF = {"ajax_url":".\/"};
		/* ]]> */
	</script>

	<script type="text/javascript" src="themes/js/mailchimp.js"></script>
	<script type="text/javascript" src="themes/js/jquery.ui.core.min.js"></script>
	<script type="text/javascript" src="themes/js/datepicker.js"></script>
	
	<script type="text/javascript">
		/* <![CDATA[ */
		var dot_irecommendthis = {"ajaxurl":".\/"};
		/* ]]> */
	</script>

	<script type="text/javascript" src="themes/js/dot_irecommendthis.js"></script>
	<script type="text/javascript" src="themes/js/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="themes/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="themes/js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="themes/js/jquery.caroufredsel.min.js"></script>
	<script type="text/javascript" src="themes/js/colorpicker.js"></script>

	<script type="text/javascript" src="themes/js/scripts.js"></script>
	<script type="text/javascript" src="themes/js/packery.pkgd.min.js"></script>
	<script type="text/javascript" src="themes/js/shortcodes.js"></script>
	<script type="text/javascript" src="themes/js/imagesloaded.min.js"></script>
	<script type="text/javascript" src="themes/js/global.js"></script>
	<script type="text/javascript" src="themes/js/magnific-popup.js"></script>
	<script type="text/javascript" src="themes/js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="themes/js/jquery.gmaps.js"></script>
	<script type="text/javascript" src="themes/js/jquery.countdown.js"></script>
	<script type="text/javascript" src="themes/js/jquery.countdown_init.js"></script>
	<script type="text/javascript" src="themes/js/retina-1.1.0-ff-updt.min.js"></script>
	<script type="text/javascript" src="themes/js/cookie.js"></script>

	<style type="text/css">
		.recentcomments a{
			display:inline !important;
			padding:0 !important;
			margin:0 !important;
		}
	</style>
</head>
<body class="home page page-id-675 page-template-default layout_fullwidth js-comp-ver-3.6.14.1 vc_responsive">
	<div id="layout_width" class="fullwidth">
		<div class="content_container">
			<div class="header-2_container cwidth_container">
				<div class="header-2_wrapper cwidth_wrapper">
					<div class="header-2 clearfix cwidth">
						<div class="col-1-1">
							<div class="col">
								<div class="header-2_content clearfix">
									<div class="contact_info">
										Call Us: <?php echo $tel; ?> - Mail: <a href="mailto:<?php echo $Contact_Email; ?>"><?php echo $Contact_Email; ?></a>
									</div>
									<div class="header_right">
										<div class="social_links">
											<a href="https://<?php echo $twitter; ?>" class="social_link icon-twitter"></a>
											<a href="https://<?php echo $facebook; ?>" class="social_link icon-facebook"></a>
											<a href="https://<?php echo $gplus; ?>" class="social_link icon-google-plus"></a>
											<a href="http://<?php echo $rss; ?>" class="social_link icon-rss"></a>
											<a href="#" class="social_link icon-linkedin"></a>
											<a href="#" class="social_link icon-dribbble"></a>
										</div>						
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<header class="header_main_wrapper" data-position="fixed">
				<div class="header-1_container cwidth_container">
					<div class="header-1_wrapper cwidth_wrapper">
						<div class="header-1 cwidth">
							<div class="col-1-5 left">
								<div class="col">
									<a href="./" class="logo">
										<img width="148" height="31" src="themes/images/logo.png" data-at2x="themes/images/logo@2x.png" alt="media">
									</a>
								</div>
							</div>
							<div class="col-4-5">
								<div class="col">
									<nav class="navigation-1_container">
										<div class="navigation-1_wrapper">
											<div class="navigation-1 fallback clearfix">
												<div class="navigation-desktop">
													<div class="menu-navigation-container">
														<ul id="menu-navigation-desktop" class="menu">
															<li class="menu-item menu-item-type-custom menu-item-object-custom current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item menu-item-688 top-menu-item has-sub-menu">
																<a href="./" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">صفحه اصلی</span> </span></span></a>
															</li>
															<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item menu-item-585 top-menu-item has-sub-menu">
																<a href="construction.html" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت</span> </span></span></a>
															</li>
															<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item menu-item-585 top-menu-item has-sub-menu">
																<a href="regeneration.html" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بازسازی</span> </span></span></a>
															</li>
															<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item menu-item-585 top-menu-item has-sub-menu">
																<a href="research.html" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تحقیقات</span> </span></span></a>
															</li>
															<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item menu-item-585 top-menu-item has-sub-menu">
																<a href="#" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">گالری</span> </span></span></a>
																 <ul class="sub-menu">
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="#" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت</span> </span></span></a>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="#" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بازسازی</span> </span></span></a>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="#" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تحقیقات</span> </span></span></a>
																	</li>
																</ul>
															</li>
															<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item menu-item-585 top-menu-item has-sub-menu">
																<a href="documentation.html" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">فرم درخواست مستندات</span> </span></span></a>
															</li>
															<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item menu-item-162 top-menu-item has-sub-menu">
																<a href="contact.html" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تماس با ما</span> </span></span></a>
															</li>
															<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item menu-item-119 top-menu-item has-sub-menu">
																<a href="about-us.html" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">درباره ما</span> </span></span></a>
															</li>
														</ul>
													</div>
													<div class="clear"></div>
												</div>			
												<div class="search_top_button"></div>
											</div>
										</div>
									</nav>
									<!-- Mobile Nav -->
									<nav class="navigation-2_container" style="display: none;">
										<div class="navigation-2_wrapper">
											<div class="navigation-2 clearfix" style="top: 36px;">
												<div class="mobile_nav_button noselect"></div>
												<div class="navigation-mobile" style="top: 54px;">
													<div class="cwidth_wrapper">
														<div class="menu-navigation-container">
															<ul id="menu-navigation-mobile" class="menu">
																<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item menu-item-688 top-menu-item has-sub-menu">
																	<a href="./" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">صفحه اصلی</span> </span></span></a>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item menu-item-585 top-menu-item has-sub-menu">
																	<a href="construction.html" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت</span> </span></span></a>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item menu-item-585 top-menu-item has-sub-menu">
																	<a href="regeneration.html" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بازسازی</span> </span></span></a>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item menu-item-585 top-menu-item has-sub-menu">
																	<a href="research.html" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تحقیقات</span> </span></span></a>
																</li>
																<li class="menu-item menu-item-type-taxonomy menu-item-object-portfolio-category menu-item-has-children menu-item menu-item-206 top-menu-item has-sub-menu">
																	<a href="#" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">گالری</span> </span></span></a>
																	<ul class="sub-menu">
																		<li class="menu-item menu-item-type-taxonomy menu-item-object-portfolio-category menu-item menu-item-33">
																			<a href="#"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت</span> </span></span></a>
																		</li>
																		<li class="menu-item menu-item-type-taxonomy menu-item-object-portfolio-category menu-item menu-item-208">
																			<a href="#"><span class="item_wrapper"><span class="item"><span class="item_name">بازسازی</span> </span></span></a>
																		</li>
																		<li class="menu-item menu-item-type-taxonomy menu-item-object-portfolio-category menu-item menu-item-207">
																			<a href="#"><span class="item_wrapper"><span class="item"><span class="item_name">تحقیقات</span> </span></span></a>
																		</li>
																	</ul>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item menu-item-689 top-menu-item">
																	<a href="contact.html" class="top-menu-item-a"><span class="item_wrapper"><span class="item"><span class="item_name">تماس با ما</span> </span></span></a>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item menu-item-119 top-menu-item has-sub-menu">
																	<a href="about-us.html" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">درباره ما</span> </span></span></a>
																</li>
															</ul>
														</div>
														<div class="clear"></div>
													</div>
												</div><!-- /navigation-mobile -->
											</div>
										</div>
									</nav>
									<!-- END Mobile Nav -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="search_top_overlay">
					<div class="cwidth_wrapper">
						<form method="get" class="searchform clearfix" action="">
							<button class="searchbutton">
								<i class="search_top_overlay_button"></i>
							</button>
							<div class="search_top_close"></div>
							<p><input type="text" class="searchfield nooutline" name="s" autocomplete="off" placeholder="جستجو..."></p>
						</form>
					</div>
				</div>
			</header>
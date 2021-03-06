<?php
header('Content-Type: text/html; charset=UTF-8');
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
	<meta name="google-site-verification" content="zRGZMhJemg0Oqr68VEDkUOqMVB0a4Xenlu-XV0ZMwxM" />
	<meta name="generator" content="Mediateq">
	<meta name="description" content="<?php echo $seo->Site_Describtion;?>" />
	<meta name="keywords" content="<?php echo $seo->Site_KeyWords;?>" />

	<title><?php echo $seo->Site_Title;?></title>

	<link rel="shortcut icon" href="./favicon.ico">

	<link rel="stylesheet" href="themes/css/flick.css" type="text/css" media="all">
	<link href="themes/css/zebra_pagination.css" rel="stylesheet" />
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
		/* body.layout_boxed{ 
			background-image: url(http://rawofnature.com/demfile/sn/wp/wp-content/themes/sentinel/images/boxed_wood.jpg);
			background-size: auto;
			background-position: left top;
			background-repeat: repeat;
		} */
		body.layout_boxed{ 
			background-color: #303436;
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
	<!-- <script type="text/javascript" src="themes/js/datepicker.js"></script> -->
	
	<script type="text/javascript">
		/* <![CDATA[ */
		var dot_irecommendthis = {"ajaxurl":".\/"};
		/* ]]> */
	</script>

	<!-- <script type="text/javascript" src="themes/js/dot_irecommendthis.js"></script> -->
	<script type="text/javascript" src="themes/js/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="themes/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="themes/js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="themes/js/jquery.caroufredsel.min.js"></script>

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
	
	<!-- <script type="text/javascript" src="themes/js/cookie.js"></script> -->

	<style type="text/css">
		.recentcomments a{
			display:inline !important;
			padding:0 !important;
			margin:0 !important;
		}
	</style>
</head>
<body class="home page page-id-675 page-template-default wpb-js-composer js-comp-ver-3.6.14.1 vc_responsive layout_boxed">
	<div id="layout_width" class="fullwidth">
		<div class="content_container">
			<div class="header-2_container cwidth_container">
				<div class="header-2_wrapper cwidth_wrapper">
					<div class="header-2 clearfix cwidth">
						<div class="col-1-1">
							<div class="col">
								<div class="header-2_content clearfix">
									<div class="contact_info">
										Call Us: <a href="javascript:void(0);" style="font-family:'bmitra' !important"><?php echo $tel; ?></a> - Mail: <a href="mailto:info@arshia-co.com" target="_blank"><?php echo $Contact_Email; ?></a>
									</div>
									<!-- <div style="float:left;margin-left:220px">
										<a href="./" class="logo">
											<img width="148" height="31" src="themes/images/logo.png" data-at2x="themes/images/logo@2x.png" alt="media">
										</a>
									</div> -->
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
			<header class="header_main_wrapper header_compact" data-position="static" style="position: static; top: 0px;">
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
														<?php 
															$full_name = $_SERVER['REQUEST_URI'];
														    $name_array = explode('/',$full_name);
														    $count = count($name_array);
														    $page_name = $name_array[$count-1];
														?>
														<ul id="menu-navigation-desktop" class="menu">
															<li class="<?php echo ($page_name=='')?'current-menu-item':'';?> menu-item menu-item-type-custom menu-item-object-custom current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item menu-item-688 top-menu-item has-sub-menu">
																<a href="./" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">صفحه اصلی</span> </span></span></a>
															</li>
															<!-- پمپهای اسکرو -->
															<li class="<?php echo ($page_name=='construction.html')?'current-menu-item':'';?> menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item menu-item-585 top-menu-item has-sub-menu">
																<a href="javascript:void(0);" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">پمپهای اسکرو</span> </span></span></a>
																<ul class="sub-menu">
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">پروژها</span> </span></span></a>
																		<ul class="sub-menu">
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">پمپ اسکرو سوخت مایع توربین گازی GE-F9</span> </span></span></a>
																				<ul class="sub-menu">
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage1.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">اسکروها</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage2.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">پوسته</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage3.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">دنده تایمینگ</span> </span></span></a>
																					</li>
																				</ul>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">پمپ اسکرو سوخت مایع توربین گازی V94.2</span> </span></span></a>
																				<ul class="sub-menu">
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage4.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">اسکروها</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage5.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">پوسته</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage6.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بوشها</span> </span></span></a>
																					</li>
																				</ul>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">پمپ اسکرو سوخت مایع توربین های بخار</span> </span></span></a>
																				<ul class="sub-menu">
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage7.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">اسکروها</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage8.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">پوسته</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage9.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بوشها</span> </span></span></a>
																					</li>
																				</ul>
																			</li>
																		</ul>
																		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																			<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">برنامه های آتی</span> </span></span></a>
																			<ul class="sub-menu">
																				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																					<a href="menupage10.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">راه اندازی آزمایشگاه پیشرفته تست انواع پمپها وکمپرسورهای اسکرو</span> </span></span></a>
																				</li>
																				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																					<a href="menupage11.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت کمپرسورهای اسکرو</span> </span></span></a>
																				</li>
																				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																					<a href="menupage12.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">طراحی پمپ و کمپرسور براساس نیاز مشتری</span> </span></span></a>
																				</li>
																			</ul>
																		</li>
																		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																			<a href="menupage13.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تجهیزات و امکانات</span> </span></span></a>
																		</li>
																		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																			<a href="menupage14.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تاییدیه ها و سوابق</span> </span></span></a>
																		</li>
																	</li>
																</ul>
															</li>
															<!-- END پمپها و کمپرسورهای اسکرو -->
															<!-- سوخت پاش توربینها -->
															<li class="<?php echo ($page_name=='construction.html')?'current-menu-item':'';?> menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item menu-item-585 top-menu-item has-sub-menu">
																<a href="javascript:void(0);" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">سوخت پاش توربینها</span> </span></span></a>
																<ul class="sub-menu">
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">پروژها</span> </span></span></a>
																		<ul class="sub-menu">
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">سوخت پاش مایع توربین گازی V94.2</span> </span></span></a>
																				<ul class="sub-menu">
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage15.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تست و ردیف چینی</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage16.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بازسازی و تعمیر</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage17.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت و تولید</span> </span></span></a>
																					</li>
																				</ul>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">سوخت پاش مایع توربین گازی MHI</span> </span></span></a>
																				<ul class="sub-menu">
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage18.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تست و ردیف چینی</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage19.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بازسازی و تعمیر</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage20.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت و تولید</span> </span></span></a>
																					</li>
																				</ul>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">سوخت پاش مایع توربین گازی GE-F9</span> </span></span></a>
																				<ul class="sub-menu">
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage21.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تست و ردیف چینی</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage22.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بازسازی و تعمیر</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage23.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت و تولید</span> </span></span></a>
																					</li>
																				</ul>
																			</li>
																		</ul>
																		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																			<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">برنامه های آتی</span> </span></span></a>
																			<ul class="sub-menu">
																				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																					<a href="menupage24.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت مجموعه کامل سوخت پاش مایع توربینهای V94.2 (اسپایدر و نازل دیفیوژن)</span> </span></span></a>
																				</li>
																			</ul>
																		</li>
																		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																			<a href="menupage25.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تجهیزات و امکانات</span> </span></span></a>
																		</li>
																		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																			<a href="menupage26.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تاییدیه ها و سوابق</span> </span></span></a>
																		</li>
																	</li>
																</ul>
															</li>
															<!-- END سوخت پاش توربینها -->
															<!-- بازسازی قطعات داغ -->
															<li class="<?php echo ($page_name=='construction.html')?'current-menu-item':'';?> menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item menu-item-585 top-menu-item has-sub-menu">
																<a href="javascript:void(0);" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بازسازی قطعات داغ</span> </span></span></a>
																<ul class="sub-menu">
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">پروژها</span> </span></span></a>
																		<ul class="sub-menu">
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="menupage27.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">V94.2</span> </span></span></a>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="menupage28.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">GE-F9</span> </span></span></a>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="menupage29.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">GE-F5</span> </span></span></a>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="menupage30.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">MHI</span> </span></span></a>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="menupage31.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">FIAT</span> </span></span></a>
																			</li>
																		</ul>
																		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																			<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">برنامه های آتی</span> </span></span></a>
																			<ul class="sub-menu">
																				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																					<a href="menupage32.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بازسازی پره های متحرک</span> </span></span></a>
																				</li>
																				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																					<a href="menupage33.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بازسازی اینر کیسینگ V94.2</span> </span></span></a>
																				</li>
																				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																					<a href="menupage34.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بازسازی میکسینگ چمبر</span> </span></span></a>
																				</li>
																				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																					<a href="menupage35.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تهیه کوره اتمسفر محافظ</span> </span></span></a>
																				</li>
																				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																					<a href="menupage36.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تهیه میکروسکپ الکترونی</span> </span></span></a>
																				</li>
																				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																					<a href="menupage37.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تهیه تجهیزات پیشرفته سوراخکاری پره </span> </span></span></a>
																				</li>
																			</ul>
																		</li>
																		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																			<a href="menupage38.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تجهیزات و امکانات</span> </span></span></a>
																		</li>
																		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																			<a href="menupage39.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تاییدیه ها و سوابق</span> </span></span></a>
																		</li>
																	</li>
																</ul>
															</li>
															<!-- END بازسازی قطعات داغ -->
															<!--  سایر پروژه ها -->
															<li class="<?php echo ($page_name=='construction.html')?'current-menu-item':'';?> menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item menu-item-585 top-menu-item has-sub-menu">
																<a href="javascript:void(0);" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">سایر پروژه ها</span> </span></span></a>
																<ul class="sub-menu">
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="menupage40.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت آب بند پره های توربین V94.2</span> </span></span></a>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="menupage41.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تست و رفع عیب سرووالوها</span> </span></span></a>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="menupage42.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت منیفولد گاز توربین GE-F9</span> </span></span></a>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="menupage43.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت رگلاتوروالو سمپلینگ</span> </span></span></a>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="menupage44.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت چک والوهای سوخت توربین GE-F5</span> </span></span></a>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="menupage45.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت و بازسازی پمپهای دنده ای سوخت مایع توربین GE-F5</span> </span></span></a>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="menupage46.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت پمپ گریز از مرکز صنایع غذایی</span> </span></span></a>
																	</li>
																</ul>
															</li>
															<!-- END  سایر پروژه ها -->
															<!-- ارشیا در یک نگاه -->
															<li class="<?php echo ($page_name=='about-us.html')?'current-menu-item':'';?> menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item menu-item-119 top-menu-item has-sub-menu">
																<a href="javascript:void(0);" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ارشیا در یک نگاه</span> </span></span></a>
																<ul class="sub-menu">
																	<!-- <li class="<?php echo ($page_name=='about-us.html')?'current-menu-item':'';?> menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item menu-item-119 top-menu-item has-sub-menu">
																		<a href="about-us.html" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">درباره ما</span> </span></span></a>
																	</li> -->
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">رویدادها</span> </span></span></a>
																		<ul class="sub-menu">
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="conference.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">همایشها</span> </span></span></a>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="visits.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بازدیدها</span> </span></span></a>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="articles.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">مقالات</span> </span></span></a>
																			</li>
																		</ul>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="history.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تاریخچه</span> </span></span></a>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بیانیه های راهبردی</span> </span></span></a>
																		<ul class="sub-menu">
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="mission.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">راهبرد</span> </span></span></a>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="view.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">چشم انداز</span> </span></span></a>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="values.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ارزشها</span> </span></span></a>
																			</li>
																		</ul>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="organizationchart.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">چارت سازمانی</span> </span></span></a>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="managers.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">هیئت مدیره</span> </span></span></a>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="contact.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">پیشنهاد و انتقاد</span> </span></span></a>
																	</li>
																</ul>
															</li>
															<!-- END ارشیا در یک نگاه -->
															<!-- <li class="<?php echo ($page_name=='contact.html')?'current-menu-item':'';?> menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item menu-item-162 top-menu-item has-sub-menu">
																<a href="contact.html" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تماس با ما</span> </span></span></a>
															</li> -->
														</ul>
													</div>
													<div class="clear"></div>
												</div>			
												<!--<div class="search_top_button"></div> -->
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
																<li class="<?php echo ($page_name=='')?'current-menu-item':'';?> menu-item menu-item-type-custom menu-item-object-custom current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item menu-item-688 top-menu-item has-sub-menu">
																<a href="./" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">صفحه اصلی</span> </span></span></a>
															</li>
															<!-- پمپهای اسکرو -->
															<li class="<?php echo ($page_name=='construction.html')?'current-menu-item':'';?> menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item menu-item-585 top-menu-item has-sub-menu">
																<a href="javascript:void(0);" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">پمپهای اسکرو</span> </span></span></a>
																<ul class="sub-menu">
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">پروژها</span> </span></span></a>
																		<ul class="sub-menu">
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">پمپ اسکرو سوخت مایع توربین گازی GE-F9</span> </span></span></a>
																				<ul class="sub-menu">
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage1.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">اسکروها</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage2.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">پوسته</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage3.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">دنده تایمینگ</span> </span></span></a>
																					</li>
																				</ul>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">پمپ اسکرو سوخت مایع توربین گازی V94.2</span> </span></span></a>
																				<ul class="sub-menu">
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage4.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">اسکروها</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage5.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">پوسته</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage6.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بوشها</span> </span></span></a>
																					</li>
																				</ul>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">پمپ اسکرو سوخت مایع توربین های بخار</span> </span></span></a>
																				<ul class="sub-menu">
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage7.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">اسکروها</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage8.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">پوسته</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage9.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بوشها</span> </span></span></a>
																					</li>
																				</ul>
																			</li>
																		</ul>
																		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																			<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">برنامه های آتی</span> </span></span></a>
																			<ul class="sub-menu">
																				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																					<a href="menupage10.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">راه اندازی آزمایشگاه پیشرفته تست انواع پمپها وکمپرسورهای اسکرو</span> </span></span></a>
																				</li>
																				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																					<a href="menupage11.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت کمپرسورهای اسکرو</span> </span></span></a>
																				</li>
																				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																					<a href="menupage12.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">طراحی پمپ و کمپرسور براساس نیاز مشتری</span> </span></span></a>
																				</li>
																			</ul>
																		</li>
																		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																			<a href="menupage13.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تجهیزات و امکانات</span> </span></span></a>
																		</li>
																		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																			<a href="menupage14.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تاییدیه ها و سوابق</span> </span></span></a>
																		</li>
																	</li>
																</ul>
															</li>
															<!-- END پمپها و کمپرسورهای اسکرو -->
															<!-- سوخت پاش توربینها -->
															<li class="<?php echo ($page_name=='construction.html')?'current-menu-item':'';?> menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item menu-item-585 top-menu-item has-sub-menu">
																<a href="javascript:void(0);" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">سوخت پاش توربینها</span> </span></span></a>
																<ul class="sub-menu">
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">پروژها</span> </span></span></a>
																		<ul class="sub-menu">
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">سوخت پاش مایع توربین گازی V94.2</span> </span></span></a>
																				<ul class="sub-menu">
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage15.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تست و ردیف چینی</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage16.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بازسازی و تعمیر</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage17.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت و تولید</span> </span></span></a>
																					</li>
																				</ul>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">سوخت پاش مایع توربین گازی MHI</span> </span></span></a>
																				<ul class="sub-menu">
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage18.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تست و ردیف چینی</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage19.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بازسازی و تعمیر</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage20.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت و تولید</span> </span></span></a>
																					</li>
																				</ul>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">سوخت پاش مایع توربین گازی GE-F9</span> </span></span></a>
																				<ul class="sub-menu">
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage21.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تست و ردیف چینی</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage22.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بازسازی و تعمیر</span> </span></span></a>
																					</li>
																					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																						<a href="menupage23.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت و تولید</span> </span></span></a>
																					</li>
																				</ul>
																			</li>
																		</ul>
																		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																			<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">برنامه های آتی</span> </span></span></a>
																			<ul class="sub-menu">
																				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																					<a href="menupage24.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت مجموعه کامل سوخت پاش مایع توربینهای V94.2 (اسپایدر و نازل دیفیوژن)</span> </span></span></a>
																				</li>
																			</ul>
																		</li>
																		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																			<a href="menupage25.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تجهیزات و امکانات</span> </span></span></a>
																		</li>
																		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																			<a href="menupage26.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تاییدیه ها و سوابق</span> </span></span></a>
																		</li>
																	</li>
																</ul>
															</li>
															<!-- END سوخت پاش توربینها -->
															<!-- بازسازی قطعات داغ -->
															<li class="<?php echo ($page_name=='construction.html')?'current-menu-item':'';?> menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item menu-item-585 top-menu-item has-sub-menu">
																<a href="javascript:void(0);" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بازسازی قطعات داغ</span> </span></span></a>
																<ul class="sub-menu">
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">پروژها</span> </span></span></a>
																		<ul class="sub-menu">
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="menupage27.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">V94.2</span> </span></span></a>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="menupage28.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">GE-F9</span> </span></span></a>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="menupage29.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">GE-F5</span> </span></span></a>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="menupage30.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">MHI</span> </span></span></a>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="menupage31.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">FIAT</span> </span></span></a>
																			</li>
																		</ul>
																		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																			<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">برنامه های آتی</span> </span></span></a>
																			<ul class="sub-menu">
																				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																					<a href="menupage32.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بازسازی پره های متحرک</span> </span></span></a>
																				</li>
																				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																					<a href="menupage33.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بازسازی اینر کیسینگ V94.2</span> </span></span></a>
																				</li>
																				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																					<a href="menupage34.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بازسازی میکسینگ چمبر</span> </span></span></a>
																				</li>
																				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																					<a href="menupage35.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تهیه کوره اتمسفر محافظ</span> </span></span></a>
																				</li>
																				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																					<a href="menupage36.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تهیه میکروسکپ الکترونی</span> </span></span></a>
																				</li>
																				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																					<a href="menupage37.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تهیه تجهیزات پیشرفته سوراخکاری پره </span> </span></span></a>
																				</li>
																			</ul>
																		</li>
																		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																			<a href="menupage38.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تجهیزات و امکانات</span> </span></span></a>
																		</li>
																		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																			<a href="menupage39.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تاییدیه ها و سوابق</span> </span></span></a>
																		</li>
																	</li>
																</ul>
															</li>
															<!-- END بازسازی قطعات داغ -->
															<!--  سایر پروژه ها -->
															<li class="<?php echo ($page_name=='construction.html')?'current-menu-item':'';?> menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item menu-item-585 top-menu-item has-sub-menu">
																<a href="javascript:void(0);" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">سایر پروژه ها</span> </span></span></a>
																<ul class="sub-menu">
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="menupage40.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت آب بند پره های توربین V94.2</span> </span></span></a>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="menupage41.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تست و رفع عیب سرووالوها</span> </span></span></a>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="menupage42.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت منیفولد گاز توربین GE-F9</span> </span></span></a>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="menupage43.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت رگلاتوروالو سمپلینگ</span> </span></span></a>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="menupage44.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت چک والوهای سوخت توربین GE-F5</span> </span></span></a>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="menupage45.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت و بازسازی پمپهای دنده ای سوخت مایع توربین GE-F5</span> </span></span></a>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="menupage46.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ساخت پمپ گریز از مرکز صنایع غذایی</span> </span></span></a>
																	</li>
																</ul>
															</li>
															<!-- END  سایر پروژه ها -->
															<!-- ارشیا در یک نگاه -->
															<li class="<?php echo ($page_name=='about-us.html')?'current-menu-item':'';?> menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item menu-item-119 top-menu-item has-sub-menu">
																<a href="javascript:void(0);" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ارشیا در یک نگاه</span> </span></span></a>
																<ul class="sub-menu">
																	<!-- <li class="<?php echo ($page_name=='about-us.html')?'current-menu-item':'';?> menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item menu-item-119 top-menu-item has-sub-menu">
																		<a href="about-us.html" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">درباره ما</span> </span></span></a>
																	</li> -->
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">رویدادها</span> </span></span></a>
																		<ul class="sub-menu">
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="conference.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">همایشها</span> </span></span></a>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="visits.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بازدیدها</span> </span></span></a>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="articles.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">مقالات</span> </span></span></a>
																			</li>
																		</ul>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="history.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تاریخچه</span> </span></span></a>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="javascript:void(0);" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">بیانیه های راهبردی</span> </span></span></a>
																		<ul class="sub-menu">
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="mission.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">راهبرد</span> </span></span></a>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="view.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">چشم انداز</span> </span></span></a>
																			</li>
																			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																				<a href="values.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">ارزشها</span> </span></span></a>
																			</li>
																		</ul>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="organizationchart.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">چارت سازمانی</span> </span></span></a>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="managers.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">هیئت مدیره</span> </span></span></a>
																	</li>
																	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item menu-item-594 has-sub-menu">
																		<a href="contact.html" class="has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">پیشنهاد و انتقاد</span> </span></span></a>
																	</li>
																</ul>
															</li>
															<!-- END ارشیا در یک نگاه -->
															<!-- <li class="<?php echo ($page_name=='contact.html')?'current-menu-item':'';?> menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item menu-item-162 top-menu-item has-sub-menu">
																<a href="contact.html" class="top-menu-item-a has-sub-menu-a"><span class="item_wrapper"><span class="item"><span class="item_name">تماس با ما</span> </span></span></a>
															</li> -->
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
					 <form action="search.html" method="post" name="frmsearch" class="searchform clearfix">
					    <button class="searchbutton">
						  <i class="search_top_overlay_button"></i>
					    </button> 
						<div class="search_top_close"></div>
						<p>
							<input class="searchfield nooutline" name="searchtxt" id="header-search-input" type="text" autocomplete="off" placeholder="عبارت مورد نظرتان را تایپ سپس اینتر نمایید...">						
							<input type="hidden" name="mark" value="search" />
						</p>
					 </form>						
					</div>
				</div>
			</header>
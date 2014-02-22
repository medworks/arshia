<?php
	include_once("config.php");
	include_once("classes/functions.php");
	if (GetPageName($_GET['item'],$_GET['act'])){
	        echo include_once GetPageName($_GET['item'],$_GET['act']);
	}
	else{
    $db = Database::GetDatabase();  	
    $slides = $db->SelectAll("slides","*");	
	$construct = $db->Select("allparts","*","part =  3");
	$conspic = $db->Select("uploadcenter","*","address LIKE '__1%'",null,"0","1");	
	$consbody = mb_substr($construct["detail"],0,150,"UTF-8")."...";
	$consbody = strip_tags($consbody);
	
	$reconstruct = $db->Select("allparts","*","part =  2");
	$reconspic = $db->Select("uploadcenter","*","address LIKE '_1%'",null,"0","1");	
	$reconsbody = mb_substr($reconstruct["detail"],0,150,"UTF-8")."...";
	$reconsbody = strip_tags($reconsbody);
	
	$research = $db->Select("allparts","*","part =  1");
	$respic = $db->Select("uploadcenter","*","address LIKE '1%'",null,"0","1");	
	$resbody = mb_substr($research["detail"],0,150,"UTF-8")."...";
	$resbody = strip_tags($resbody);
	
$html=<<<cd
<div class="top_content">
	<section class="slider-1_container">
		<div class="slider-1_wrapper">
			<!-- START REVOLUTION SLIDER 4.0.4 fullwidth mode -->
			<div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#fafafa;padding:0px;margin-top:0px;margin-bottom:0px;max-height:451px;">
				<div id="rev_slider_3_1" class="rev_slider fullwidthabanner" style="display:none;max-height:451px;height:451;">
					<ul>	<!-- SLIDE  -->
cd;
foreach($slides as $key=>$val){
$html.=<<<cd
<!-- fade , zoomout , flyin -->
<li data-transition="flyin" data-slotamount="7" data-masterspeed="300">
							<!-- MAIN IMAGE -->
							<img src="{$val[image]}" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
							<!-- LAYERS -->
							<!-- LAYER NR. 1 -->
							<div class="tp-caption sentinel-medium-700-black lfr tp-resizeme" data-x="0" data-y="128" data-speed="300" data-start="1600" data-easing="Power3.easeInOut" data-endspeed="300" style="z-index: 2">{$val["subject"]}</div>
							<!-- LAYER NR. 2 -->
							<div class="tp-caption sentinel-small-600-black lfr tp-resizeme" data-x="0" data-y="203" data-speed="300" data-start="2000" data-easing="Power3.easeInOut" data-endspeed="300" style="z-index: 3">{$val["body"]}</div>							
							<!-- LAYER NR. 4 -->
							<!--
							<div class="tp-caption lfl" data-x="595" data-y="51" data-speed="300" data-start="1200" data-easing="Power3.easeInOut" data-endspeed="300" style="z-index: 5"><img src="themes/images/others/slider_1_browser.png" alt=""></div>
							-->
							<!-- LAYER NR. 5 -->
							<!--
							<div class="tp-caption lfl" data-x="476" data-y="194" data-speed="300" data-start="800" data-easing="Power3.easeInOut" data-endspeed="300" style="z-index: 6"><img src="themes/images/others/slider_1_tablet.png" alt=""></div>
							-->
							<!-- LAYER NR. 6 -->
							<!--
							<div class="tp-caption lfl" data-x="407" data-y="304" data-speed="300" data-start="400" data-easing="Power3.easeInOut" data-endspeed="300" style="z-index: 7"><img src="themes/images/others/slider_1_phone.png" alt=""></div>
							-->
						</li>
cd;
}
$html.=<<<cd
					</ul>
				</div>
			</div>			
			<script type="text/javascript">
				var tpj=jQuery;				
				tpj.noConflict();				
				var revapi3;
				
				tpj(document).ready(function() {
								
				if(tpj('#rev_slider_3_1').revolution == undefined)
					revslider_showDoubleJqueryError('#rev_slider_3_1');
				else
				   revapi3 = tpj('#rev_slider_3_1').show().revolution(
					{
						delay:9000,
						startwidth:1100,
						startheight:451,
						hideThumbs:200,
						
						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:3,
						
						navigationType:"none",
						navigationArrows:"solo",
						navigationStyle:"round",
						
						touchenabled:"on",
						onHoverStop:"on",
						
						navigationHAlign:"center",
						navigationVAlign:"bottom",
						navigationHOffset:0,
						navigationVOffset:20,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,
								
						shadow:0,
						fullWidth:"on",
						fullScreen:"off",

						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,

						
						shuffle:"off",
						
						autoHeight:"off",						
						forceFullWidth:"off",						
												
						hideThumbsOnMobile:"off",
						hideBulletsOnMobile:"off",
						hideArrowsOnMobile:"off",
						hideThumbsUnderResolution:0,
						
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0,
						videoJsPath:"http://rawofnature.com/demfile/sn/wp/wp-content/plugins/revslider/rs-plugin/videojs/",
						fullScreenOffsetContainer: ""	
					});
				
				});	//ready	
			</script>
			<!-- END REVOLUTION SLIDER -->
		</div>
		</section>
			<div class="main_content_container cwidth_container">
				<div class="main_content_wrapper cwidth_wrapper">
					<div class="main_content cwidth">
						<div class="col-1-1">
							<div class="col">
								<div class="grid">
									<div class="col-content">
										<div class="col">
											<article id="post-675" class="post-675 page type-page status-publish hentry page-1_container main_column">
												<div class="page-1_wrapper">
													<div class="page-1 content_cols_eq">
														<div class="post_content">
															<div class="grid ">
																<div class="col-1-3">
																	<div class="col">
																		<div class="text_icon_expand_item_wrapper ">
																			<a class="text_icon_expand_item" href="#">
																				<span class="text_icon_expand_item_inner">
																					<span class="text_icon_expand_image_wrapper">
																						<img class="text_icon_expand_image" src="./constructpics/{$conspic[image]}" alt="{$conspic[subject]}">
																					</span>
																					<span class="tie_icon_wrapper">
																						<span class="tie_icon icon-legal"></span>
																					</span>
																					<span class="tie_content">
																						<span class="tie_text">{$consbody}</span>
																						<span class="sc_button sc_button_round sc_button_small sc_button_green">نمایش جزئیات</span>
																					</span>		
																					<span class="tie_subtitle">ساخت</span>																					
																					<span class="tie_title">ساخت</span>
																				</span>
																			</a>
																		</div>
																	</div>
																</div>
																<div class="col-1-3">
																	<div class="col">
																		<div class="text_icon_expand_item_wrapper ">
																			<a class="text_icon_expand_item" href="#">
																				<span class="text_icon_expand_item_inner">
																					<span class="text_icon_expand_image_wrapper">
																						<img class="text_icon_expand_image" src="./reconstructpics/{$reconspic[image]}" alt="{$reconspic[subject]}">
																					</span>
																					<span class="tie_icon_wrapper">
																						<span class="tie_icon icon-retweet"></span>
																					</span>
																					<span class="tie_content">
																						<span class="tie_text">{$reconsbody}</span>
																						<span class="sc_button sc_button_round sc_button_small sc_button_green">نمایش جزئیات</span>
																					</span>
																					<span class="tie_subtitle">بازسازی</span>
																					<span class="tie_title">بازسازی</span>
																				</span>
																			</a>
																		</div>
																	</div>
																</div>
																<div class="col-1-3">
																	<div class="col">
																		<div class="text_icon_expand_item_wrapper ">
																			<a class="text_icon_expand_item" href="#">
																				<span class="text_icon_expand_item_inner">
																					<span class="text_icon_expand_image_wrapper">
																						<img class="text_icon_expand_image" src="./researchpics/{$respic[image]}" alt="{$respic[subject]}">
																					</span>
																					<span class="tie_icon_wrapper">
																						<span class="tie_icon icon-search"></span>
																					</span>
																					<span class="tie_content">
																						<span class="tie_text">{$resbody}</span>
																						<span class="sc_button sc_button_round sc_button_small sc_button_green">نمایش جزئیات</span>
																					</span>
																					<span class="tie_subtitle">تحقیقات</span>
																					<span class="tie_title">تحقیقات</span>
																				</span>
																			</a>
																		</div>
																	</div>
																</div>
																<!-- <div class="col-1-4">
																	<div class="col">
																		<div class="text_icon_expand_item_wrapper ">
																			<a class="text_icon_expand_item" href="#">
																				<span class="text_icon_expand_item_inner">
																					<span class="text_icon_expand_image_wrapper">
																						<img class="text_icon_expand_image" src="themes/images/others/92c95ef0f217568e1ffb365e594d4150_blog_flower-615-339-c.jpg" alt="">
																					</span>
																					<span class="tie_icon_wrapper">
																						<span class="tie_icon icon-desktop"></span>
																					</span>
																					<span class="tie_content">
																						<span class="tie_text">سایت کاملا ریسپانسیو می باشد، سایت رسپانسیو سایتی سایتی است که بر روی تمامی دیوایس ها با رزولوشن های مختلف به صورت بهینه و مطلوب عمل میکند. از آخرین متدها برای بالا بردن رنکینگ و سئو استفاده شده است.</span>
																						<span class="sc_button sc_button_round sc_button_small sc_button_green">نمایش جزئیات</span>
																					</span>
																					<span class="tie_subtitle">سایت ریسپانسیو</span>
																					<span class="tie_title">سایت به صورت کامل رسپانسیو می باشد</span>
																				</span>
																			</a>
																		</div>
																	</div>
																</div> -->
															</div>				
															<div class="grid ">
																<div class="col-1-1">
																	<div class="col">
																		<h3 style="text-align:right;"></h3>
																	</div>
																</div>
															</div>
															<div class="grid ">
																<div class="col-1-1 ">
																	<div class="col">
																		<div class="recent_posts_slider_wrapper clearfix ">
																			<div class="clearfix rps_controls">
																				<a href="" class="btn_prev">Prev</a><a href="" class="btn_next">Next</a>
																			</div>
																			<ul class="recent_posts_slider clearfix" data-num-columns="4" data-image-width="280" data-autoslide-interval="2500" data-autoslide-stop-click="yes">
																				<li>
																					<div class="rps_slide">
																						<div class="rps_image_wrapper">
																							<img src="themes/images/others/bf1631f1ba680635e05d9d28bb509f1a_bridge-280-188-c.jpg" alt="" class="rps_image">
																							<div class="rps_image_hover">
																								<div class="rps_image_controls clearfix">
																									<a href="#" class="rps_image_link"></a>
																									<a class="rps_image_zoom" data-effect="mfp-zoom-in" href="themes/images/others/bridge.jpg"></a>
																								</div>
																							</div>
																						</div>
																						<div class="rps_content">
																							<!-- <div class="rps_like_wrapper"><a href="#" class="dot-irecommendthis" id="dot-irecommendthis-194" title="Recommend this"><span class="dot-irecommendthis-count">26</span> <span class="dot-irecommendthis-suffix"></span></a></div> -->
																							<h3 class="rps_title"><a href="#">رزمه چهار</a></h3>
																							<div class="rps_date">فروردین 18, 1392</div>
																						</div>
																					</div>
																				</li>
																				<li>
																					<div class="rps_slide">
																						<div class="rps_image_wrapper">
																							<img src="themes/images/others/c8a76aa244780f50869f55419be8cdb6_lightroom-280-188-c.jpg" alt="" class="rps_image">
																							<div class="rps_image_hover">
																								<div class="rps_image_controls clearfix">
																									<a href="#" class="rps_image_link"></a>
																									<a class="rps_image_zoom" data-effect="mfp-zoom-in" href="themes/images/others/lightroom.jpg"></a>
																								</div>
																							</div>
																						</div>
																						<div class="rps_content">
																							<!-- <div class="rps_like_wrapper">
																								<a href="#" class="dot-irecommendthis" id="dot-irecommendthis-187" title="Recommend this"><span class="dot-irecommendthis-count">20</span> <span class="dot-irecommendthis-suffix"></span></a>
																							</div> -->
																							<h3 class="rps_title">
																								<a href="#">رزومه سه</a>
																							</h3>
																							<div class="rps_date">تیر 18, 1392</div>
																						</div>
																					</div>
																				</li>
																				<li>
																					<div class="rps_slide">
																						<div class="rps_image_wrapper">
																							<img src="themes/images/others/4e2175a4b7567f0b678d1e7137dc6cc9_beach-280-188-c.jpg" alt="" class="rps_image">
																							<div class="rps_image_hover">
																								<div class="rps_image_controls clearfix">
																									<a href="#" class="rps_image_link"></a>
																									<a class="rps_image_zoom" data-effect="mfp-zoom-in" href="themes/images/others/beach.jpg"></a>
																								</div>
																							</div>
																						</div>
																						<div class="rps_content">
																							<!-- <div class="rps_like_wrapper">
																								<a href="#" class="dot-irecommendthis" id="dot-irecommendthis-192" title="Recommend this"><span class="dot-irecommendthis-count">45</span> <span class="dot-irecommendthis-suffix"></span></a>
																							</div> -->
																							<h3 class="rps_title"><a href="#">رزومه دو</a></h3>
																							<div class="rps_date">اردیبهشت 18, 1392</div>
																						</div>
																					</div>
																				</li>
																				<li>
																					<div class="rps_slide">
																						<div class="rps_image_wrapper">
																							<img src="themes/images/others/80c9ef192567f5c0682735eb3644ea2a_keyb-280-188-c.jpg" alt="" class="rps_image">
																							<div class="rps_image_hover">
																								<div class="rps_image_controls clearfix">
																									<a href="#" class="rps_image_link"></a>
																									<a class="rps_image_zoom" data-effect="mfp-zoom-in" href="themes/images/others/keyb.jpg"></a>
																								</div>
																							</div>
																						</div>
																						<div class="rps_content">
																							<!-- <div class="rps_like_wrapper">
																								<a href="#" class="dot-irecommendthis" id="dot-irecommendthis-191" title="Recommend this"><span class="dot-irecommendthis-count">22</span> <span class="dot-irecommendthis-suffix"></span></a>
																							</div> -->
																							<h3 class="rps_title">
																								<a href="#">رزومه یک</a>
																							</h3>
																							<div class="rps_date">خرداد 18, 1392</div>
																						</div>
																					</div>
																				</li>
																				<li>
																					<div class="rps_slide">
																						<div class="rps_image_wrapper">
																							<img src="themes/images/others/bf1631f1ba680635e05d9d28bb509f1a_bridge-280-188-c.jpg" alt="" class="rps_image">
																							<div class="rps_image_hover">
																								<div class="rps_image_controls clearfix">
																									<a href="#" class="rps_image_link"></a>
																									<a class="rps_image_zoom" data-effect="mfp-zoom-in" href="themes/images/others/bridge.jpg"></a>
																								</div>
																							</div>
																						</div>
																						<div class="rps_content">
																							<!-- <div class="rps_like_wrapper"><a href="#" class="dot-irecommendthis" id="dot-irecommendthis-194" title="Recommend this"><span class="dot-irecommendthis-count">26</span> <span class="dot-irecommendthis-suffix"></span></a></div> -->
																							<h3 class="rps_title"><a href="#">رزمه پنج</a></h3>
																							<div class="rps_date">فروردین 18, 1392</div>
																						</div>
																					</div>
																				</li>
																				<li>
																					<div class="rps_slide">
																						<div class="rps_image_wrapper">
																							<img src="themes/images/others/c8a76aa244780f50869f55419be8cdb6_lightroom-280-188-c.jpg" alt="" class="rps_image">
																							<div class="rps_image_hover">
																								<div class="rps_image_controls clearfix">
																									<a href="#" class="rps_image_link"></a>
																									<a class="rps_image_zoom" data-effect="mfp-zoom-in" href="themes/images/others/lightroom.jpg"></a>
																								</div>
																							</div>
																						</div>
																						<div class="rps_content">
																							<!-- <div class="rps_like_wrapper">
																								<a href="#" class="dot-irecommendthis" id="dot-irecommendthis-187" title="Recommend this"><span class="dot-irecommendthis-count">20</span> <span class="dot-irecommendthis-suffix"></span></a>
																							</div> -->
																							<h3 class="rps_title">
																								<a href="#">رزومه شش</a>
																							</h3>
																							<div class="rps_date">تیر 18, 1392</div>
																						</div>
																					</div>
																				</li>
																				<li>
																					<div class="rps_slide">
																						<div class="rps_image_wrapper">
																							<img src="themes/images/others/4e2175a4b7567f0b678d1e7137dc6cc9_beach-280-188-c.jpg" alt="" class="rps_image">
																							<div class="rps_image_hover">
																								<div class="rps_image_controls clearfix">
																									<a href="#" class="rps_image_link"></a>
																									<a class="rps_image_zoom" data-effect="mfp-zoom-in" href="themes/images/others/beach.jpg"></a>
																								</div>
																							</div>
																						</div>
																						<div class="rps_content">
																							<!-- <div class="rps_like_wrapper">
																								<a href="#" class="dot-irecommendthis" id="dot-irecommendthis-192" title="Recommend this"><span class="dot-irecommendthis-count">45</span> <span class="dot-irecommendthis-suffix"></span></a>
																							</div> -->
																							<h3 class="rps_title"><a href="#">رزومه هفت</a></h3>
																							<div class="rps_date">اردیبهشت 18, 1392</div>
																						</div>
																					</div>
																				</li>
																				<li>
																					<div class="rps_slide">
																						<div class="rps_image_wrapper">
																							<img src="themes/images/others/80c9ef192567f5c0682735eb3644ea2a_keyb-280-188-c.jpg" alt="" class="rps_image">
																							<div class="rps_image_hover">
																								<div class="rps_image_controls clearfix">
																									<a href="#" class="rps_image_link"></a>
																									<a class="rps_image_zoom" data-effect="mfp-zoom-in" href="themes/images/others/keyb.jpg"></a>
																								</div>
																							</div>
																						</div>
																						<div class="rps_content">
																							<!-- <div class="rps_like_wrapper">
																								<a href="#" class="dot-irecommendthis" id="dot-irecommendthis-191" title="Recommend this"><span class="dot-irecommendthis-count">22</span> <span class="dot-irecommendthis-suffix"></span></a>
																							</div> -->
																							<h3 class="rps_title">
																								<a href="#">رزومه هشت</a>
																							</h3>
																							<div class="rps_date">خرداد 18, 1392</div>
																						</div>
																					</div>
																				</li>
																			</ul>
																		</div>
																		<p><!-- END recent_posts_slider_wrapper --></p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</article>
										</div>
									</div>
									<!-- No sidebar -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
cd;
echo $html;
}
?>
<?php
  include_once("./classes/database.php");  
  $db = Database::GetDatabase();  
  $research = $db->Select("allparts","*","`part`= 3");
  $pics = $db->SelectAll("uploadcenter","*","address LIKE '__1%'");  
$html=<<<cd
	<div class="top_content">
		<div class="main_content_container cwidth_container">
			<div class="main_content_wrapper cwidth_wrapper">
				<div class="main_content cwidth">
					<div class="col-1-1">
						<div class="col">
							<div class="grid">
								<div class="col-content">
									<div class="col">
										<article id="post-192" class="post-192 portfolio type-portfolio status-publish hentry tag-webdesign portfolio-single-1_container main_column">
											<div class="portfolio-single-1_wrapper">
												<div class="portfolio-single-1 content_cols_eq">
													<div class="portfolio_titlebar-2 clearfix">
														<div class="portfolio_titlebar_right">
															<h2 class="post_title">ساخت</h2>
														</div>
														<!-- <div class="portfolio_titlebar_right">
															<div class="portfolio_nav">
																<a href="#" class="portfolio_prev"></a>
																<a href="#" class="portfolio_category"></a>			
																<a href="#" class="portfolio_next"></a>
															</div>
														</div> -->
													</div>
													<div class="grid">
														<div class="col-portfolio-single-left" style="width:70%;">
															<div class="col">
																<div class="featured_area ltr">
																	<ul class="bxslider">
cd;
foreach($pics as $key=>$val)
{
$html.=<<<cd
	<li>
	   <img src="./constructpics/{$val[image]}"  
	   data-at2x="./constructpics/{$val[image]}" 
	   alt="{$val[subject]}" title="{$val[body]}" 
	   data-disable-retina-attrs-resize="false">
	</li>		
cd;
}
$html.=<<<cd
																	</ul>
																</div>
															</div>
														</div>
														<div class="col-portfolio-single-right" style="width:30%;">
															<div class="col">
																<!-- <div class="post_meta clearfix">
																	<div class="post_meta_item post_date">Posted: <strong>November 18, 2013</strong></div>
																	<span class="post_meta_item like_number">
																		<a href="#" class="dot-irecommendthis" id="dot-irecommendthis-192" title="Recommend this">
																			<span class="dot-irecommendthis-count">47</span>
																			<span class="dot-irecommendthis-suffix"></span>
																		</a>
																	</span>
																</div> -->
																<div class="post_content">
																	{$research["detail"]}
																	<!-- <h3>Project Details</h3><table class="table-3"><tbody><tr><td>CLIENT:</td><td></td><td>ThemeForest</td><td></td></tr><tr><td>DATE:</td><td></td><td>April 11, 2013</td><td></td></tr><tr><td>TAGS:</td><td></td><td>Animation, Web Development</td><td></td></tr></tbody></table><a href="http://www.google.com/" class="sc_button sc_button_round sc_button_small sc_button_dark">Launch Project</a> -->
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</article>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
cd;
return $html;
?>
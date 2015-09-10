<?php
  include_once("./config.php");	
  include_once("./classes/functions.php");
  include_once("./classes/database.php");  
  include_once("./lib/Zebra_Pagination.php"); 
  
  $db = Database::GetDatabase();  
  $row = $db->Select("topindex","*","mid = {$_GET['id']}");  
  if ($_GET["id"]==1)
  {
	  $where = " type = 2 AND sid IN (4,5,6,8,9,10,12,13,14) ";
  }
  else
  if ($_GET["id"]==2)
  {
	  $where = " type = 2 AND sid IN (24,25,26,28,29,30,32,33,34) ";
  }
  else
  if ($_GET["id"]==3)
  {
	  $where = " type = 2 AND sid IN (41,42,43,44,45) ";
  }
  else
  if ($_GET["id"]==4)
  {
	  $where = " type = 2 AND sid IN (56,57,58,59,60) ";
  }
  
  $pics = $db->SelectAll("pics","*",$where);  
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
															<h2 class="post_title">{$row["subject"]}</h2>
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
																<div class="featured_area">
																	<ul class="bxslider">
cd;
foreach($pics as $key=>$val)
{
$html.=<<<cd
	<li>
	   <img src="{$val[name]}"  
	   data-at2x="{$val[name]}" 	  
	   data-disable-retina-attrs-resize="false"/>
	   <!-- alt="{$val[subject]}" title="{$val[body]}" -->
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
																	{$row["text"]}
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
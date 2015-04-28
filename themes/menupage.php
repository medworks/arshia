<?php
  include_once("./config.php");	
  include_once("./classes/functions.php");
  include_once("./classes/database.php");  
  include_once("./lib/Zebra_Pagination.php"); 
  
  $db = Database::GetDatabase();  
  $row = $db->Select("menu","*","code = {$_GET['id']}");
  $subject = $db->Select("menusubject","*","mid = {$row['id']}");
  //echo $db->cmd;
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
										<section class="portfolio-cat-1_container main_column">
											<div class="portfolio-cat-1_wrapper">
												<div class="portfolio-cat-1 content_cols_eq">											
													<div class="portfolio_titlebar clearfix">
														<div class="portfolio_titlebar_right">
															<h1>{$row["name"]}</h1>
														</div>														
													</div>
													<div class="portfolio_grid_wrapper">
														<div class="grid" data-portfolio-cols="4">
cd;
	$pics = $db->SelectAll("pics","*","type=2 AND sid = {$subject[id]}");
	//echo $db->cmd;
$html.=<<<cd
															<article class="portfolio type-portfolio status-publish has-post-thumbnail hentry tag-photographs portfolio-post-1_container col-1-4 term-id-16">
																<div class="portfolio-post-1_wrapper col">
																	<div class="portfolio-post-1">
																		<div class="portfolio_image_wrapper">
																			<img src="./{$pics[0][name]}" class="portfolio_image wp-post-image" alt="{$confs[$i]["subject"]}" height="406" width="615" />
																			<a class="portfolio_image_link_big" href="http://prev.freshface.net/file/sn/wp4/portfolio/dolor-sit-amet-consectetur/"></a>
																			<div class="portfolio_image_hover">
																			<div class="portfolio_image_controls clearfix">
																				<a href="#" class="portfolio_image_link"></a>
																			</div>
																		</div>
																	</div>
																	<div class="portfolio_content">
																		<h3 class="portfolio_title" style="font-size:20px">
																			<a href="#">{$subject["text"]}</a>
																		</h3>																		
																	</div>
																</div>
															</article>
cd;
$html.=<<<cd
														</div>
													</div>
													{$pgcodes}
													<div class="pagination-1_container">
														<div class="pagination-1_wrapper">
															<div class="pagination-1">
																<div class="desktop clearfix">
																	
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
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
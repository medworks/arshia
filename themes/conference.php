<?php
  include_once("./config.php");	
  include_once("./classes/functions.php");
  include_once("./classes/database.php");  
  include_once("./lib/Zebra_Pagination.php"); 
  
  $db = Database::GetDatabase();  
  	
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
															<h1>همایش ها</h1>
														</div>
														<!-- <div class="portfolio_titlebar_right">
															<div class="portfolio_sortable_wrapper">
																<a class="sort_title">Sort Portfolio</a>
																<div class="portfolio_sortable">
																	<a class="sort_title" href="#">Sort Portfolio</a>
																	<a data-filter="*" href="#" class="item all item_active">All Works</a><a data-filter=".term-id-11" href="http://prev.freshface.net/file/sn/wp4/portfolio-category/portfolio-4-columns/?t=illustration">Illustration</a><a data-filter=".term-id-16" href="http://prev.freshface.net/file/sn/wp4/portfolio-category/portfolio-4-columns/?t=photographs">Photographs</a><a data-filter=".term-id-10" href="http://prev.freshface.net/file/sn/wp4/portfolio-category/portfolio-4-columns/?t=webdesign">Webdesign</a>			</div>
															</div>
															<div class="portfolio_sortable_count">
																<div class="portfolio_count_number">12</div>			<div> </div>
																<div class="portfolio_sortable_count_title">Projects</div>
															</div>
														</div> -->
													</div>
													<div class="portfolio_grid_wrapper">
														<div class="grid" data-portfolio-cols="4">
cd;
  $records_per_page = 10;
  $pagination = new Zebra_Pagination();
  $pagination->base_url("index.php?item=conference");
  $pagination->navigation_position("right");

  $reccount = $db->CountOf("eventsubject","mid = 1");
  $pagination->records($reccount); 
	
  $pagination->records_per_page($records_per_page);	
  $confs = $db->SelectAll(
				"eventsubject",
				"*",
				"mid = 1",
				"id ASC",
				($pagination->get_page() - 1) * $records_per_page,
				$records_per_page);
				
for($i=0;$i<count($confs);$i++)
{
	$pics = $db->SelectAll("pics","*","type=1 AND sid = {$confs[$i][id]}");
$html.=<<<cd
															<article class="portfolio type-portfolio status-publish has-post-thumbnail hentry tag-photographs portfolio-post-1_container col-1-4 term-id-16">
																<div class="portfolio-post-1_wrapper col">
																	<div class="portfolio-post-1">
																		<div class="portfolio_image_wrapper">
																			<img src="./{$pics[0][name]}" class="portfolio_image wp-post-image" alt="{$confs[$i]["subject"]}" height="406" width="615" />
																			<a class="portfolio_image_link_big" href="http://prev.freshface.net/file/sn/wp4/portfolio/dolor-sit-amet-consectetur/"></a>
																			<div class="portfolio_image_hover">
																			<div class="portfolio_image_controls clearfix">
																				<a href="confview{$confs[$i]["id"]}.html" class="portfolio_image_link"></a>
																			</div>
																		</div>
																	</div>
																	<div class="portfolio_content">
																		<h3 class="portfolio_title" style="font-size:20px">
															<a href="confview{$confs[$i]["id"]}.html">{$confs[$i]["subject"]}</a>
																		</h3>
																		<div class="portfolio_date" style="font-size:15px">فروردین 14 1394</div>
																	</div>
																</div>
															</article>
cd;
}
$pgcodes = $pagination->render(true);
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
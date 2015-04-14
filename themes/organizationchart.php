<?php
  include_once("./classes/database.php");  
  $db = Database::GetDatabase();  
  $research = $db->Select("allparts","*","`part`= 2");
  $pics = $db->SelectAll("uploadcenter","*","address LIKE '_1%'");  
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
															<h2 class="post_title">چارت سازمانی</h2>
														</div>
													</div>
													<div class="grid">
														<div class="col-content">
															<div class="col">
																<section class="blog-cat-1_container main_column">
																		<div class="blog-cat-1_wrapper">
																		<div class="blog-cat-1 content_cols_eq">
																			<article id="post-4544" class="post-4544 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-journal category-notes tag-art tag-branding tag-business tag-creative tag-design blog-post-1_container post_format_default">
																				<div class="blog-post-1_wrapper">
																					<div class="blog-post-1">
																						<div class="grid">
																							<div class="col-blog-post-right">
																								<div class="col">
																									<div class="featured_area">
																										<div class="featured_image_container">
																											<a class="featured_image_wrapper" href="http://prev.freshface.net/file/sn/wp4/wp-content/uploads/2014/06/blog_meet.jpg" data-effect="mfp-zoom-in"><img class="featured_image" src="http://prev.freshface.net/file/sn/wp4/wp-content/uploads/freshizer/2fcf6e1ebb8195def460649838aa198b_blog_meet-1031-c.jpg" alt=""></a>
																										</div>
																									</div>
																									<div class="post_content">
																										<p>توضیحات.</p>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</article>

																		</div>
																	</div>
																</section>
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
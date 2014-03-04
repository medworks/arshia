<?php
$about = GetSettingValue('About_System',0);
$about_pic ="./aboutpic/".GetSettingValue('About_Pic_Name',0);
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
										<article id="post-128" class="post-128 page type-page status-publish hentry page-1_container main_column">
											<div class="page-1_wrapper">
												<div class="page-1 content_cols_eq">
													<div class="featured_area">
														<div class="featured_image_container">
															<a class="featured_image_wrapper" href="{$about_pic}" data-effect="mfp-zoom-in">
																<img class="featured_image" src="{$about_pic}" alt="درباره ما" width="1000px" height="400px">
															</a>
														</div>
													</div>
													<h2 class="post_title">
														درباره ما
													</h2>
													<div class="post_content">
														<p>{$about}</p>
														<!-- <div class="grid ">
															<div class="col-1-1 ">
																<div class="col">
																	<h3 style="text-align:left;">Our Capabilites</h3>
																	<div class="progress_bars-1">
																		<div class="pb_item ">
																			<h3 class="pb_title">Web Design</h3>
																			<div class="pb_bar_wrapper">
																				<div class="pb_bar pb_bar_bg_12" style="width: 65%;">
																					<div class="pb_tooltip">65%</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="progress_bars-1">
																		<div class="pb_item ">
																			<h3 class="pb_title">Programming</h3>
																			<div class="pb_bar_wrapper">
																				<div class="pb_bar pb_bar_bg_12" style="width: 78%;">
																					<div class="pb_tooltip">78%</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="progress_bars-1">
																		<div class="pb_item ">
																			<h3 class="pb_title">Branding</h3>
																			<div class="pb_bar_wrapper">
																				<div class="pb_bar pb_bar_bg_12" style="width: 35%;">
																					<div class="pb_tooltip">35%</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="progress_bars-1">
																		<div class="pb_item ">
																			<h3 class="pb_title">Game Development</h3>
																			<div class="pb_bar_wrapper">
																				<div class="pb_bar pb_bar_bg_12" style="width: 72%;">
																					<div class="pb_tooltip">72%</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="progress_bars-1">
																		<div class="pb_item ">
																			<h3 class="pb_title">HTML Coding</h3>
																			<div class="pb_bar_wrapper">
																				<div class="pb_bar pb_bar_bg_12" style="width: 75%;">
																					<div class="pb_tooltip">75%</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div> -->
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
return $html;
?>
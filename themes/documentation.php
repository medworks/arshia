<?php
  include_once("./config.php");
  include_once("./classes/database.php");
  $db = Database::GetDatabase();
  $rows = $db->SelectAll("docs","*",null,"id DESC");
  $docs = "";
  foreach($rows as $key=>$val)
  {
   $docs .= "{$val['subject']}<input type='checkbox' name='docs' value='{$val[id]}' aria-required='true'/> ";
  }
  
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
									<article id="post-120" class="post-120 page type-page status-publish hentry page-1_container main_column">
										<div class="page-1_wrapper">
											<div class="portfolio_titlebar-2 clearfix" style="margin:0">
												<div class="portfolio_titlebar_right">
													<h2 class="post_title">درخواست مستندات</h2>
												</div>
											</div>
											<div class="page-1 content_cols_eq">
												<div class="post_content">
													<div class="grid ">
														<div class="col-3-3 ">
															<div class="col">
																<div class="">
																	<h3>فرم درخواست مستندات</h3>
																	<div class="wpcf7" id="wpcf7-f211-p120-o1">
																		<form id="request-form" name ="request-form" action="" method="post" class="wpcf7-form" novalidate="novalidate">
																			<p class="half half_first">نام و نام خانوادگی *<br>
																			    <span class="wpcf7-form-control-wrap your-name">
																			    	<input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true">
																			    </span>
																			</p>
																			<p class="half half_last">ایمیل *<br>
																			    <span class="wpcf7-form-control-wrap your-email">
																			    	<input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true">
																			    </span>
																		    </p>
																		    <p class="half half_first">شماره ثابت *<br>
																			    <span class="wpcf7-form-control-wrap your-name">
																			    	<input type="text" name="tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true">
																			    </span>
																			</p>
																			<p class="half half_last">شماره همراه *<br>
																			    <span class="wpcf7-form-control-wrap your-email">
																			    	<input type="text" name="mobile" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true">
																			    </span>
																		    </p>
																		    <p class="half half_first">آدرس *<br>
																			    <span class="wpcf7-form-control-wrap your-name">
																			    	<input type="text" name="address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true">
																			    </span>
																			</p>
																			<p class="half half_last">کد پستی *<br>
																			    <span class="wpcf7-form-control-wrap your-email">
																			    	<input type="text" name="postcode" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true">
																			    </span>
																		    </p>
																			<p class="half half_last" style="margin-bottom:0">انتخاب اسناد<br>
																			    <span class="wpcf7-form-control-wrap your-email"></span>
																		    </p>
																		    <div class='clear'></div>
																			<div>
																				<p class="select-doc">
																					{$docs}	
																				</p>
																			</div>
																		    <div class='clear'></div>
																			<p style="padding-right:10px">توضیحات<br>
																			    <span class="wpcf7-form-control-wrap your-message">
																			    	<textarea name="detail" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"></textarea>
																			    </span>
																			</p>																			
																			<p style="padding-right:10px">
																				<input type="submit" value="ارسال درخواست" class="wpcf7-form-control wpcf7-submit">
																				<input type="hidden" name="mark" value="addreq" />
																			</p>
																			<div class="wpcf7-response-output wpcf7-display-none"></div>
																		</form>
																		<div id="note-request" ></div>
						<script>                           
							jQuery(document).ready(function ($){
                            $("#request-form").submit(function(){

                                $.ajax({
                                    type: "POST",
                                    url: "manager/ajaxcommand.php?request=reg",
                                    data: $("#request-form").serialize(),
                                        success: function(msg)
                                        { 
                                            $("#note-request").ajaxComplete(function(event, request, settings){             
                                                $(this).hide();
                                                $(this).html(msg).slideDown("slow");
                                                //$(this).html(msg);


                                            });
                                        }
                                });
                                return false;
                            });
                        });
                    </script>
																	</div>
																</div>
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
return $html;

?> 
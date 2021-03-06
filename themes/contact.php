<?php
$address = GetSettingValue('Address',0);
$tel = GetSettingValue('Tell_Number',0);
$fax = GetSettingValue('Fax_Number',0);
$cell_phone1 = GetSettingValue('Cell_Phone1',0);
$cell_phone2 = GetSettingValue('Cell_Phone2',0);
$Contact_Email = GetSettingValue('Contact_Email',0);
$html=<<<cd
<div class="top_content">
	<div class="titlebar-3_container cwidth_container ltr">
		<div class="gmap_wrapper" style="height: 415px;">
			<iframe src="https://mapsengine.google.com/map/u/2/embed?mid=z9FVbEWGiKoM.kLwf0PSBpJOc&z=16" width="100%" height="415"></iframe>
		</div>
	</div>
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
											<div class="page-1 content_cols_eq">
												<div class="post_content">
													<div class="grid ">
														<div class="col-2-3 ">
															<div class="col">
																<div class="">
																	<h3>ارسال پیام</h3>
																	<div class="wpcf7" id="wpcf7-f211-p120-o1">
																		<form id="contact-form" name ="contact-form" action="" method="post" class="wpcf7-form" novalidate="novalidate">
																			<p class="half half_first">نام و نام خانوادگی *<br>
																			    <span class="wpcf7-form-control-wrap your-name">
																			    	<input type="text" name="family" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true">
																			    </span>
																			</p>
																			<p class="half half_last">ایمیل *<br>
																			    <span class="wpcf7-form-control-wrap your-email">
																			    	<input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true">
																			    </span>
																		    </p>
																			<p style="padding-right:10px">موضوع<br>
																			    <span class="wpcf7-form-control-wrap your-subject">
																			    	<input type="text" name="subject" value="" size="40" class="wpcf7-form-control wpcf7-text">
																			    </span>
																			</p>
																			<p style="padding-right:10px">پیام<br>
																			    <span class="wpcf7-form-control-wrap your-message">
																			    	<textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"></textarea>
																			    </span>
																			</p>																			
																			<p style="padding-right:10px">
																				<input type="submit" value="ارسال پیام" class="wpcf7-form-control wpcf7-submit">
																			</p>
																			<div class="wpcf7-response-output wpcf7-display-none"></div>
																		</form>
																		<div id="note-contact" ></div>
						<script>                           
							jQuery(document).ready(function ($){
                            $("#contact-form").submit(function(){

                                $.ajax({
                                    type: "POST",
                                    url: "manager/ajaxcommand.php?contact=reg",
                                    data: $("#contact-form").serialize(),
                                        success: function(msg)
                                        { 
                                            $("#note-contact").ajaxComplete(function(event, request, settings){             
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
														<div class="col-1-3 ">
															<div class="col">
																<div class="contact">
																	<h3>اطلاعات تماس</h3>
																	<p style="margin-top:25px;margin-bottom:10px;">
																		<span>آدرس:</span> {$address}
																	</p>
																	<p style="margin-bottom:10px;">
																		<span>تلفن: </span><span style="display:inline-block;direction:ltr;color:#000;">{$tel}</span>
																	</p>
																	<p style="margin-bottom:10px;">
																		<span>فاکس: </span><span style="display:inline-block;direction:ltr;color:#000;">{$fax}</span>
																	</p>
																	<p style="margin-bottom:10px;">
																		<span>ایمیل:</span><a href="mailto:{$Contact_Email}" target="_blank">{$Contact_Email}</a>
																	</p>
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
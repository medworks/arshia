<?php
 include_once("../config.php");
 include_once("../classes/database.php");
 include_once("../classes/messages.php");	
 include_once("../classes/functions.php"); 
 include_once("../classes/login.php");
 $login = Login::GetLogin();
 if (!$login->IsLogged())
 {
	header("Location: ../index.php");
	die(); // solve a security bug
 }
 if ($_GET['item']!="addinfopic")	exit();
 
 $db = Database::GetDatabase();
 
 if ($_POST["mark"]=="addinfopic")
 {
	for($i=0; $i<count($_FILES['pic']['name']); $i++) 
	{
		$tmpFilePath = $_FILES['pic']['tmp_name'][$i];
		if ($tmpFilePath != "")
		{
			$newFilePath = "../infopics/" . $_FILES['pic']['name'][$i];
			$fn = "infopics/" . $_FILES['pic']['name'][$i];
			if(move_uploaded_file($tmpFilePath, $newFilePath)) 
			{
				$fields = array("`type`","`sid`","`name`");
				$values = array("'2'","'{$_POST[cbmenu]}'","'{$fn}'");
				$db->InsertQuery('pics',$fields,$values);				
			}
		}
	}
 }
 
 	
	
$html=<<<ht
	<script type='text/javascript'>
			$(document).ready(function(){		
				$("#frmuploadmgr").validationEngine();			   
			});
		</script>
		<div class="title">
	      <ul>
	        <li><a href="adminpanel.php?item=dashboard&act=do">پیشخوان</a></li>
	        <li><span>مدیریت عکس اطلاعات</span></li>
	      </ul>
	      <div class="badboy"></div>
	    </div>	     
		<div id="message">
			{$msgs}
		</div>
		<style>
	   		.thumbnail{
			    height: 100px;
			    margin: 10px; 
			    float: right;
			}
			#result {
				display:none;
			    border: 1px dotted #cccccc;
			    float: right;
			    margin:0 auto;
			    width: 782px;
			}
	   	</style>
	   	<script>
	   		window.onload = function(){   
		    //Check File API support
		    if(window.File && window.FileList && window.FileReader)
		    {
		        $('#files').live("change", function(event) {
		            var files = event.target.files; //FileList object
		            var output = document.getElementById("result");
		            for(var i = 0; i< files.length; i++)
		            {
		                var file = files[i];
		                //Only pics
		                // if(!file.type.match('image'))
		                if(file.type.match('image.*')){
		                    if(this.files[0].size < 2097152){    
		                  // continue;
		                    var picReader = new FileReader();
		                    picReader.addEventListener("load",function(event){
		                        var picFile = event.target;
		                        var div = document.createElement("div");
		                        div.innerHTML = "<img class='thumbnail' src='" + picFile.result + "'" +
		                                "title='preview image'/>";
		                        output.insertBefore(div,null);            
		                    });
		                    //Read the image
		                    $('#clear, #result').show();
		                    picReader.readAsDataURL(file);
		                    }else{
		                        alert("Image Size is too big. Minimum size is 2MB.");
		                        $(this).val("");
		                    }
		                }else{
		                alert("You can only upload image file.");
		                $(this).val("");
		            }
		            }                               
		           
		        });
		    }
		    else
		    {
		        console.log("Your browser does not support File API");
		    }
		}

		   $('#files').live("click", function() {
		        $('.thumbnail').parent().remove();
		        $('result').hide();
		        $(this).val("");
		    });

		    $('#clear').live("click", function() {
		        $('.thumbnail').parent().remove();
		        $('#result').hide();
		        $('#files').val("");
		        $(this).hide();
		    });

	   	</script>
		<form name="frmuploadmgr" id="frmuploadmgr" class="" action="" method="post" enctype="multipart/form-data" > 			
		   <div class="badboy"></div>
		   <p>
				<label for='pic'>فایل </label>
				<span>*</span>
			</p>
			<div class='upload-file'>
				<input type='file' name='pic[]' class='validate[required] pic ltr' id="files" onChange='showPreview(this);' multiple />  
				<span class='filename'>لطفا عکس مورد نظر را انتخاب نمایید</span>
				<span class='action' style="-webkit-border-radius:0px !important">انتخاب فایل</span>
				<span class='action' id="clear">پاک کردن</span>
			</div>
		   	<div class="badboy"></div>
        	<output id="result"> </output>
		   	<!-- <div id="imgpreview">
				<img id="img" src="" alt="" />				
			</div> -->
		   	<div class="badboy"></div>
			<p>
				<label for="subject">عنوان</label>
				<span></span>
			</p>
			<input type="text" name="subject" class="subject" id="subject" value="{$row[subject]}" />
			<p>
				<label for="body">توضیحات </label>
				<span></span>
			</p>
			<input type="text" name="body" class="subject" id="body" value="{$row[body]}" /> 
			<p>
				<label for="picsadr">محل ذخیره سازی فایل</label>
				<span>*</span>
			</p>
			
			<select  name="cbmenu" id = "cbmenu" style="float:right;width:300px">
	      	<option value="0">انتخاب منو</option>
	      	<option value="0">1) پمپها و کمپرسورهای اسکرو</option>
		      	<option value="0">- پروژه ها</option>
			      	<option value="0">-- پمپ اسکرو سوخت مایع توربین گازی GE-F9</option>
				      	<option value="1">---> اسکروها</option>
				      	<option value="2">---> پوسته</option>
				      	<option value="3">---> دنده تایمینگ</option>
			      	<option value="0">-- پمپ اسکرو سوخت مایع توربین گازی V94.2</option>
			      		<option value="4">---> اسکروها</option>
				      	<option value="5">---> پوسته</option>
				      	<option value="6">---> بوشها</option>
			      	<option value="0">-- پمپ اسکرو سوخت مایع توربینهای بخار</option>
			      		<option value="7">---> اسکروها</option>
				      	<option value="8">---> پوسته</option>
				      	<option value="9">---> بوشها</option>
		      	<option value="0">- برنامه های آتی</option>
			      	<option value="10">--> راه اندازی آزمایشگاه پیشرفته تست انواع پمپها وکمپرسورهای اسکرو</option>
			      	<option value="11">--> ساخت کمپرسورهای اسکرو</option>
			      	<option value="12">--> طراحی پمپ و کمپرسور براساس نیاز مشتری</option>
		      	<option value="13">-> تجهیزات و امکانات</option>
		      	<option value="14">-> تاییدیه ها و سوابق</option>
	      	<option value="0">2) سوخت پاش توربینها</option>
				<option value="0">- پروژه ها</option>
			      	<option value="0">-- سوخت پاش مایع توربین گازی V94.2</option>
				      	<option value="15">---> تست و ردیف چینی</option>
				      	<option value="16">---> بازسازی و تعمیر</option>
				      	<option value="17">---> ساخت و تولید</option>
			      	<option value="0">-- سوخت پاش مایع توربین گازی MHI</option>
			      		<option value="18">---> تست و ردیف چینی</option>
				      	<option value="19">---> بازسازی و تعمیر</option>
				      	<option value="20">---> ساخت و تولید</option>
			      	<option value="0">-- سوخت پاش مایع توربین گازی GE-F9</option>
			      		<option value="21">---> تست و ردیف چینی</option>
				      	<option value="22">---> بازسازی و تعمیر</option>
				      	<option value="23">---> ساخت و تولید</option>
		      	<option value="0">- برنامه های آتی</option>
			      	<option value="24">--> ساخت مجموعه کامل سوخت پاش مایع توربین های V94.2 (اسپایدر و نازل دیفیوژن) </option>
		      	<option value="25">-> تجهیزات و امکانات</option>
		      	<option value="26">-> تاییدیه ها و سوابق</option>
	      	<option value="0">3) بازسازی قطعات داغ</option>
				<option value="0">- پروژه ها</option>
			      	<option value="27">--> V94.2</option>
			      	<option value="28">--> GE-F9</option>
			      	<option value="29">--> GE-F5</option>
			      	<option value="30">--> MHI</option>
			      	<option value="31">--> FIAT</option>
				<option value="0">- برنامه های آتی</option>
			      	<option value="32">--> بازسازی پره های متحرک</option>
			      	<option value="33">--> بازسازی اینر کیسینگ V94.2</option>
			      	<option value="34">--> بازسازی میکسینگ چمبر</option>
			      	<option value="35">--> تهیه کوره اتمسفر محافظ</option>
			      	<option value="36">--> تهیه میکروسکپ الکترونی</option>
			      	<option value="37">--> تهیه تجهیزات پیشرفته سوراخکاری پره</option>
				<option value="38">-> تجهیزات و امکانات</option>
				<option value="39">-> تاییدیه ها و سوابق</option>
	      	<option value="0">4) آب بند پره ها و سایر پروژه ها</option>
				<option value="40">-> ساخت آب بند پره های توربین V94.2</option>
				<option value="41">-> تست و رفع عیب سرووالوها</option>
				<option value="42">-> ساخت منیفولد گاز توربین GE-F9</option>
				<option value="43">-> ساخت رگلاتوروالو سمپلینگ</option>
				<option value="44">-> ساخت چک والوهای سوخت توربین GE-F5</option>
				<option value="45">-> ساخت و بازسازی پمپهای دنده ای سوخت مایع توربین GE-F5</option>
				<option value="46">-> ساخت پمپ گریز از مرکز صنایع غذایی</option>
	    </select>   
			
		   	<div class="badboy"></div>
		   	<br />
			<input type="submit" name="submit" value="ارسال" />	
			<input type="hidden" name="mark" value="addinfopic" />
		</form>
<script type='text/javascript'>
	
		$(document).ready(function(){
		  $("#frminfo").submit(function(e)
		  {
				//e.preventDefault();
				if ($('#cbmenu').val() == 0)
				{
					alert("برای این گزینه امکان درج عکس نمی باشد");
					return true;
				}	
		  });
	    });
	</script>			
ht;
return $html;
?>	
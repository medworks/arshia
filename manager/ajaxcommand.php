<?php
header('Content-Type: text/html; charset=UTF-8');
	include_once("../config.php");
    include_once("../classes/database.php");	
	include_once("../classes/functions.php");		
	$db = Database::GetDatabase();

if ($_GET["news"]=="reg")
{
	$fields = array("`email`","`tel`","`name`");		
	$values = array("'{$_POST[email]}'","'{$_POST[tel]}'","'{$_POST[name]}'");
	
	$name=$_POST['name'];
	$email=$_POST['email'];
    if( strlen($name)>=1 && checkEmail($email))
	{
		if ($db->InsertQuery('usersnews',$fields,$values)){
	    	echo "<div class='notification_ok rtl'>مشخصات شما با موفقیت ثبت شد.</div>";}
		else
		{
			echo "<div class='notification_error rtl'>ثبت مشخصات شما با مشکل مواجه شد! لطفا فیلدها را بررسی نمایید و مجددا تلاش کنید.</div>";
         }	
	} 
	else 
	{
		echo "<div class='notification_error rtl'>ثبت مشخصات شما با مشکل مواجه شد! لطفا فیلدها را بررسی نمایید و مجددا تلاش کنید.</div>";
	}
		 
}

if($_GET["contact"]=="reg"){

	$admin = GetSettingValue('Contact_Email',0);

	$name    = $_POST['family'];
	$email   = $_POST['email'];
	$subject = $_POST['subject'];
	$text    = $_POST['message'];

	$message = "$text";

	if( strlen($name)>=1 && checkEmail($email) && strlen($text)>=1 ){
		if( @mail (
				$admin,
				"$subject",
				$message,
				"From:$name $email" )
		){
			echo "<div class='notification_ok rtl medium'>پیام شما با موفقیت ارسال شد.</div>";

		}else{
			echo "<div class='notification_error rtl'>خطا! پیام شما ارسال نشد لطفا مجددا تلاش نمایید.</div>";

		}
	}else{
		echo "<div class='notification_error rtl'>خطا! لطفا فیلدها را بررسی نمایید و مجددا ارسال کنید!</div>";
	}

}

if($_GET["request"]=="reg"){

	$admin = GetSettingValue('Contact_Email',0);

	$name    = $_POST['name'];
	$email   = $_POST['email'];
	$tel     = $_POST['tel'];
	$mobile  = $_POST['mobile'];
	$address = $_POST['address'];
	$postcode= $_POST['postcode'];
	$detail  = $_POST['detail'];
	$regdate = date('Y-m-d H:i:s');
	$docs    = $_POST['docs'];

	
	$fields = array("`name`","`tel`","`mobile`","`address`","`postcode`","`email`","`detail`","`regdate`");		
	$values = array("'{$name}'","'{$tel}'","'{$mobile}'","'{$address}'","'{$postcode}'","'{$email}'","'{$detail}'","'{$regdate}'");
	

    if( strlen($name)>=1 && checkEmail($email))
	{
		if ($db->InsertQuery('request',$fields,$values)){
	    	echo "<div class='notification_ok rtl'>مشخصات شما با موفقیت ثبت شد.</div>";
			$fields = array("`reqid`","`docid`");
			$reqid = $db->InsertId();
				foreach($docs as $key=>$val)
				{			
				  $values = array("'{$reqid}'","'{$val}'");
				  $db->InsertQuery('docreqs',$fields,$values);
				}
			}
		else
		{
			echo "<div class='notification_error rtl'>ثبت مشخصات شما با مشکل مواجه شد! لطفا فیلدها را بررسی نمایید و مجددا تلاش کنید.</div>";
		//	echo "<br/>",$db->cmd;
        }	
	} 
	else 
	{
		echo "<div class='notification_error rtl'>ثبت مشخصات شما با مشکل مواجه شد! لطفا فیلدها را بررسی نمایید و مجددا تلاش کنید.</div>";
	}
		 

}

 if (isset($_GET["sec"]))
{
	$category = $db->SelectAll("category","*","secid={$_GET[sec]}","id ASC");
	$cbcategory = DbSelectOptionTag("cbcat",$category,"catname",null,null,"select validate[required]");
	echo $cbcategory;
}

if ($_GET["cmd"]=="file")
{
	$pics = "";
	//echo "item is :",$_GET["item"];
    $dir = "../".$_GET["item"];
	$handle=opendir($dir);
    while ($file = readdir($handle))
    {        
         if (!preg_match("/^[.]/",$file,$out, PREG_OFFSET_CAPTURE))
         {             
			 if(is_file("{$dir}/".$file))
			 {                              
					  $dirname = "{$dir}/".basename($file);
					  $filename = basename($file);
					  $exe = substr($filename, strrpos($filename, '.') + 1);
					  $name = substr($filename, 0, strrpos($filename, '.'));
					  $allowedExts = array('jpg','jpeg','png','bmp','gif');

					if(in_array($exe, $allowedExts)){
                      $pics.=<<<cd
					    <li>
							<div class="pic">
								<a class="select" title="انتخاب عکس {$name}">
									<img src="{$dirname}" alt="{$name}" />
									<div class="overlay"></div>
								</a>
							</div>
							<h2><!-- <span class="highlight">نام فایل: </span> --><span class="filename">{$name}</span></h2>
						</li>	   
cd;
					}
			  }
        }
    }
	closedir($handle);
$html.=<<<cd
	<script type='text/javascript'>
		$(document).ready(function(){
			$('.cat-tabs-wrap a.select').click(function(){
	                var srcimg= $(this).children('img').attr('src');
	                $('img#previmage').attr('src',srcimg);
	                
	                var filename= $(this).parent().parent().children('h2').children('span.filename').text();
	                $('#namepreview').html(filename);

	               var size= getImgSize(srcimg);
	               $('#sizepreview').html(size);

	               var ext = $(this).children('img').attr('src').split('.').pop().toLowerCase();
	               $('#typepreview').html(ext);

	               $('#select').click(function(){
	                    var value= srcimg;
	                    $('#selectpic').val(value);
	                    value= value.split('/').reverse()[0];
	                    $('#showadd').val(value);
	               });
	            });
		});
	</script>
cd;
	echo $pics.$html;
	 
}
if($_GET["poll"]=="reg")
{
		$ip = $_SERVER['REMOTE_ADDR'];
		if ($db->CountOf("pollanswers","ip='{$ip}'") == 0)
		{
		    $fields = array("`poid`","`ip`");			
		    $values = array("'{$_POST["poll"]}'","'{$ip}'");
		    if ($db->InsertQuery("pollanswers",$fields,$values))
			  echo "<div class='notification_ok rtl'>نظر شما با موفقیت ثبت شد</div>";
			else
              echo "<div class='notification_error rtl'>ثبت نظر با مشکل مواجه شد  لطفا فیلدها را بررسی نمایید و مجددا تلاش کنید.</div>";			
		}        	
		else 
			echo "<div class='notification_error rtl'>شما قبلا نظر خود را ثبت نموده اید</div>";
}

	if($_GET["isinfo"]=="yes")
	{		
		$row = $db->Select("menusubject","*","mid = {$_GET['mid']}");
		//echo $db->cmd;
		echo $row["text"];		
	}
	
	if ($_GET["action"]=="aboutus")
	{
		$row = $db->Select("history","*","mid = {$_GET['mid']}");
		echo $row["text"];
	}
	
	if ($_GET["action"]=="getindex")
	{
		$row = $db->Select("topindex","*","mid = {$_GET['mid']}");
		echo $row["text"];
	}
	
	if ($_GET["action"]=="data")
	{
		$row = $db->Select("menusubject","*","mid = {$_GET['mid']}");
		echo $row["text"];
	}
	
?>
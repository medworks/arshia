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
 if ($_GET['item']!="addpic")	exit();
 $db = Database::GetDatabase();
 
	$db->cmd = " SELECT e.name,es.id,es.subject,es.mid ,CONCAT(es.subject,'(',e.name,')') as titr FROM events as e , eventsubject as es ".
	           " WHERE e.id = es.mid ";
	//		   echo $db->cmd;
	$res  = $db->RunSQL();
    $rows = array();
    if ($res)
    {
        while($row = mysqli_fetch_array($res)) $rows[] = $row;
    }
	
	$cbtype = DbSelectOptionTag("cbtype",$rows,"titr");
	
$html=<<<ht
	<script type='text/javascript'>
			$(document).ready(function(){		
				$("#frmuploadmgr").validationEngine();			   
			});
		</script>
		<div class="title">
	      <ul>
	        <li><a href="adminpanel.php?item=dashboard&act=do">پیشخوان</a></li>
	        <li><span>مدیریت عکس رویدادها</span></li>
	      </ul>
	      <div class="badboy"></div>
	    </div>	     
		<div id="message">
			{$msgs}
		</div>
		<form name="frmuploadmgr" id="frmuploadmgr" class="" action="" method="post" enctype="multipart/form-data" > 			
		   <div class="badboy"></div>
		   <p>
				<label for='pic'>فایل </label>
				<span>*</span>
			</p>
			<div class='upload-file'>
				<input type='file' name='pic' class='validate[required] pic ltr' id='pic' onChange='showPreview(this);' multiple />  
				<span class='filename'>لطفا عکس مورد نظر را انتخاب نمایید</span>
				<span class='action'>انتخاب فایل</span>
			</div>
		   <div id="imgpreview">
				<img id="img" src="" alt="" />				
			</div>
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
			{$cbtype}
			<br/>
			<input type="submit" name="submit" value="ارسال">	
		</form>
ht;
return $html;
?>	
<?php 
    include_once("../config.php");
    include_once("../classes/database.php");
	include_once("../classes/messages.php");
	include_once("../classes/session.php");	
	include_once("../classes/functions.php");
	include_once("../classes/login.php");
	include_once("../lib/persiandate.php");	
	$login = Login::GetLogin();
	if (!$login->IsLogged())
	{
		header("Location: ../index.php");
		die(); // solve a security bug
	}
	$db = Database::GetDatabase();
	$sess = Session::GetSesstion();	
	$userid = $sess->Get("userid");
	$overall_error = false;
	if ($_GET['item']!="addevent")	exit();
	
	$rows=$db->SelectAll("events","*");
	$cbmenu = DbSelectOptionTag("cbmenu",$rows,"name",NULL,NULL,NULL,NULL,"  منو  ");
	if ($_POST["mark"]== "save")
	{
	    $fields = array("`mid`","`subject`","`text`");
		$_POST["text"] = addslashes($_POST["text"]);		
		$values = array("'{$_POST[cbmenu]}'","'{$_POST[subject]}'","'{$_POST[text]}'");
		
		if (!$db->InsertQuery('eventsubject',$fields,$values)) 
		{
			//$msgs = $msg->ShowError("ثبت اطلاعات با مشکل مواجه شد");
			header('location:?item=eventsmgr&act=do&msg=2');
		} 	
		else 
		{  										
			//$msgs = $msg->ShowSuccess("ثبت اطلاعات با مو??قیت انجام شد");			
			header('location:?item=eventsmgr&act=do&msg=1');
		}	
	}
$msgs = GetMessage($_GET['msg']);	
$html=<<<cd
	<script type='text/javascript'>
		$(document).ready(function(){	   
			$("#frmreseachmgr").validationEngine();			
    });
	</script>
  <div class="title">
      <ul>
        <li><a href="adminpanel.php?item=dashboard&act=do">پیشخوان</a></li>
	    <li><span>رویدادها</span></li>
      </ul>
      <div class="badboy"></div>
  </div>
  <div class="mes" id="message">{$msgs}</div>
  <div class='content'>
	<form name="frmconstructmgr" id="frmconstructmgr" class="" action="" method="post" >
     <p class="note">پر کردن موارد مشخص شده با * الزامی می باشد</p>
	 <div class="badboy"></div>
	 	<p>
         <label for="detail">انتخاب منو </label>
         <span>*</span>
        </p>
        {$cbmenu}             
	 <div class="badboy"></div>
	 <p>
		<label for="subject">عنوان </label>
		<span>*</span>
	</p>
	<input type="text" name="subject" class="validate[required] subject" id="subject" value="{$row[subject]}" />
	 <div class="badboy"></div> 
			         
  	    <p>
         <label for="detail">توضیحات </label>
         <span>*</span>
        </p>
        <textarea cols="50" rows="10" name="text" class="detail" id="text" > {$row[text]}</textarea>  
        <p>     
	     <input type="submit" value="ثبت" class='submit' />
		 <input type="hidden" name = "mark" value="save" />
      	 <input type="reset" value="پاک کردن" class='reset' />
        </p>  
	</form>
	<div class='badboy'></div>	
  </div>    
cd;
return $html;
?>
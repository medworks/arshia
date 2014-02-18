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
	if ($_GET['item']!="researchmgr")	exit();	   
	if ($_POST["mark"]== "save")
	{
	    $fields = array("`detail`","`part`");
		$_POST["detail"] = addslashes($_POST["detail"]);		
		$values = array("'{$_POST[detail]}'","'1'");		
		$count = $db->CountOf("allpart", "`part` = 1");
		if ($count == 0)
		{
			if (!$db->InsertQuery('allpart',$fields,$values)) 
			{
				//$msgs = $msg->ShowError("ثبت اطلاعات با مشکل مواجه شد");
				header('location:?item=researchmgr&act=new&msg=2');
			} 	
			else 
			{  										
				//$msgs = $msg->ShowSuccess("ثبت اطلاعات با مو??قیت انجام شد");			
				header('location:?item=researchmgr&act=new&msg=1');
			}  				 
		}
		else
		{
		   $_POST["detail"] = addslashes($_POST["detail"]);	    
		   $values = array("`detail`"=>"'{$_POST[detail]}'");		
		   if (!$db->UpdateQuery("allpart",$values,array("part='1'")))
		   {
		     header('location:?item=researchmgr&act=new&msg=2');
		   }
		   else
		   {
		     header('location:?item=researchmgr&act=new&msg=1');
		   }		   
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
	    <li><span>مدیریت تحقیقات</span></li>
      </ul>
      <div class="badboy"></div>
  </div>
  <div class="mes" id="message">{$msgs}</div>
  <div class='content'>
	<form name="frmresearchmgr" id="frmresearchmgr" class="" action="" method="post" >
     <p class="note">پر کردن موارد مشخص شده با * الزامی می باشد</p>
	 <div class="badboy"></div>              
  	   <p>
         <label for="detail">توضیحات </label>
         <span>*</span>
       </p>
       <textarea cols="50" rows="10" name="detail" class="detail" id="detail" > {$row[body]}</textarea>       
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
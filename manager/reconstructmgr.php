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
	if ($_GET['item']!="reconstructmgr")	exit();
	$recordcount = $db->CountOf("allparts", "`part` = 2");
	if ($recordcount > 0)
	{
	  $row=$db->Select("allparts","*","part='2'");
	}
	if ($_POST["mark"]== "save")
	{
	    $fields = array("`detail`","`part`");
		$_POST["detail"] = addslashes($_POST["detail"]);		
		$values = array("'{$_POST[detail]}'","'2'");				
		if ($recordcount == 0)
		{
			if (!$db->InsertQuery('allparts',$fields,$values)) 
			{
				//$msgs = $msg->ShowError("ثبت اطلاعات با مشکل مواجه شد");
				header('location:?item=reconstructmgr&act=new&msg=2');
			} 	
			else 
			{  										
				//$msgs = $msg->ShowSuccess("ثبت اطلاعات با مو??قیت انجام شد");			
				header('location:?item=reconstructmgr&act=new&msg=1');
			}  				 
		}
		else
		{
		   $_POST["detail"] = addslashes($_POST["detail"]);	    
		   $values = array("`detail`"=>"'{$_POST[detail]}'");		
		   if (!$db->UpdateQuery("allparts",$values,array("part='2'")))
		   {
		     header('location:?item=reconstructmgr&act=new&msg=2');
		   }
		   else
		   {
		     header('location:?item=reconstructmgr&act=new&msg=1');
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
	    <li><span>مدیریت بازسازی</span></li>
      </ul>
      <div class="badboy"></div>
  </div>
  <div class="mes" id="message">{$msgs}</div>
  <div class='content'>
	<form name="frmreconstructmgr" id="frmreconstructmgr" class="" action="" method="post" >
     <p class="note">پر کردن موارد مشخص شده با * الزامی می باشد</p>
	 <div class="badboy"></div>              
  	   <p>
         <label for="detail">توضیحات </label>
         <span>*</span>
       </p>
       <textarea cols="50" rows="10" name="detail" class="detail" id="detail" > {$row[detail]}</textarea>       
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
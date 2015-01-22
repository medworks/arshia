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
	if ($_GET['item']!="aboutusmgr")	exit();
	$recordcount = $db->CountOf("allparts", "`part` = 3");
	if ($recordcount > 0)
	{
	  $row=$db->Select("allparts","*","part='3'");
	}
	if ($_POST["mark"]== "save")
	{
	    $fields = array("`detail`","`part`");
		$_POST["detail"] = addslashes($_POST["detail"]);		
		$values = array("'{$_POST[detail]}'","'3'");
		if ($recordcount == 0)
		{
			if (!$db->InsertQuery('allparts',$fields,$values)) 
			{
				//$msgs = $msg->ShowError("ثبت اطلاعات با مشکل مواجه شد");
				header('location:?item=aboutusmgr&act=new&msg=2');
			} 	
			else 
			{  										
				//$msgs = $msg->ShowSuccess("ثبت اطلاعات با مو??قیت انجام شد");			
				header('location:?item=aboutusmgr&act=new&msg=1');
			}  				 
		}
		else
		{
		   $_POST["detail"] = addslashes($_POST["detail"]);	    
		   $values = array("`detail`"=>"'{$_POST[detail]}'");		
		   if (!$db->UpdateQuery("allparts",$values,array("part='3'")))
		   {
		     header('location:?item=aboutusmgr&act=new&msg=2');
		   }
		   else
		   {
		     header('location:?item=aboutusmgr&act=new&msg=1');
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
	    <li><span>مدیریت ساخت</span></li>
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
        <select style="float:right;width:300px">
	      	<option value="0">انتخاب منو</option>
	      	<option value="1">-> تاریخچه</option>
	      	<option value="0">- بیانیه های راهبردی</option>
				<option value="2">--> ماموریت</option>
		      	<option value="3">--> چشم انداز</option>
		      	<option value="4">--> ارزشها</option>
	      	<option value="5">-> چارت سازمانی</option>
	      	<option value="6">-> هیئت مدیره</option>
	    </select>              
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
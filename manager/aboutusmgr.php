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
	
	function getelem($id)
	{
	  switch ($id)
	  {
	   case 1:
		return "تاریخچه";
	   break;
	   case 2:
		return "ماموریت";
	   break;
	   case 3:
		return "چشم انداز";
	   break;
	   case 4:
		return "ارزشها";
	   break;
	   case 5:
		return "چارت سازمانی";
	   break;
	   case 6:
		return "هیئت مدیره";
	   break;
	  }
	}
	
	if ($_POST["mark"]== "save")
	{
	    $fields = array("`mid`","`pic`","`text`");
		$_POST["text"] = addslashes($_POST["text"]);		
		$values = array("'{$_POST[cbmenu]}'","'{$_POST[text]}'","'{$_POST[text]}'");
		
			if (!$db->InsertQuery('history',$fields,$values)) 
			{
				header('location:?item=aboutusmgr&act=new&msg=2');
			} 	
			else 
			{  										
				header('location:?item=aboutusmgr&act=new&msg=1');
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
	    <li><span>ارشیا در یک نگاه</span></li>
      </ul>
      <div class="badboy"></div>
  </div>
  <div class="mes" id="message">{$msgs}</div>
  <div class='content'>
	<form name="frminfo" id="frminfo" class="" action="" method="post" enctype="multipart/form-data" >
     <p class="note">پر کردن موارد مشخص شده با * الزامی می باشد</p>
	 <div class="badboy"></div>
	 	<p>
         <label for="detail">انتخاب منو </label>
         <span>*</span>
        </p>
        <select id="cbmenu" style="float:right;width:300px">
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
         <label for="detail">عکس </label>
         <span>*</span>
      </p>
	   <input type='file' name='pic' class='validate[required] pic ltr' id='pic' />
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
	<script type='text/javascript'>
	
		$(document).ready(function(){
		  $("#frminfo").submit(function(e)
		  {
				//e.preventDefault();
				if ($('#cbmenu').val() == 0)
				{
					alert("برای این گزینه امکان درج مطلب نمی باشد.");
					return true;
				}	
		  });
	    });
	</script>	  
cd;
return $html;
?>
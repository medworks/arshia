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
	if ($_GET['item']!="picslist")	exit();
	
	if ($_POST["mark"]== "save")
	{
	    $fields = array("`mid`","`subject`","`text`");
		$_POST["text"] = addslashes($_POST["text"]);		
		$values = array("'{$_POST[cbmenu]}'","'{$_POST[subject]}'","'{$_POST[text]}'");
		
		if (!$db->InsertQuery('eventsubject',$fields,$values)) 
		{
			//$msgs = $msg->ShowError("ثبت اطلاعات با مشکل مواجه شد");
			header('location:?item=editeventsmgr&act=new&msg=2');
		} 	
		else 
		{  										
			//$msgs = $msg->ShowSuccess("ثبت اطلاعات با مو??قیت انجام شد");			
			header('location:?item=editeventsmgr&act=new&msg=1');
		}	
	}

$msgs = GetMessage($_GET['msg']);	

$code=<<<edit
<script type='text/javascript'>
	$(document).ready(function(){	   			
		$('#srhsubmit').click(function(){	
			$('#frmsrh').submit();
			return false;
		});		
	});
</script>	   
					<div class="title">
				      <ul>
				        <li><a href="adminpanel.php?item=dashboard&act=do">پیشخوان</a></li>
					    <li><span>مدیریت رویداد ها</span></li>
				      </ul>
				      <div class="badboy"></div>
				  </div>
                    <div class="Top">                       
						<center>
							<form action="?item=slidesmgr&act=mgr" method="post" id="frmsrh" name="frmsrh">
								
								<input type="hidden" name="mark" value="srhnews" /> 
								{$gridcode} 
							</form>
					   </center>
					</div>

edit;
$html = $code;
return $html;
?>
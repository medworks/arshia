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
	if ($_GET['item']!="picslist")	exit();
	
	$pics = $db->SelectAll("pics","*","type = 1 AND sid='{$_GET['eid']}'");	
	
	if ($_POST["mark"]=="change")
	{
		$getimgs = $_POST["pic"];		
		foreach($getimgs as $key=>$val)
			$imgid[] = $val;
		$imgids = implode(',',$imgid);	
		$db->cmd = " DELETE FROM Pics WHERE id NOT IN ({$imgids}) AND type=1 AND sid={$_GET['eid']}";
		$db->RunSQL();
		
		$values = array("`checked`"=>"'1'");
		$db->UpdateQuery("pics",$values,array("sid='{$_GET[eid]}' AND type=1"));
		header("location:?item=picslist&act=edit&eid={$_GET['eid']}");
	}		

$msgs = GetMessage($_GET['msg']);	

for($i=0;$i < count($pics);$i++)
{
	if ($pics[$i]['checked'])
	{
		$checked = "checked";
	}
	else
	{
		$checked = "";
	}
$html.=<<<cd
	<img src="../{$pics[$i]['name']}" width="64px" height="64px"/>	
	<input type="checkbox" name="pic[]" value="{$pics[$i]['id']}" {$checked}>	
cd;
}
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
							<form action="" method="post" id="frmsrh" name="frmsrh">
								{$html} 
								<input type="submit" name="submit" value="ارسال" /> 
								<input type="hidden" name="mark" value="change" /> 
							</form>
					   </center>
					</div>

edit;
$html = $code;
return $html;
?>
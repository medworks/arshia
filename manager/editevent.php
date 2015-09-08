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
	if ($_GET['item']!="editevent")	exit();
	
	$rows=$db->SelectAll("eventsubject","*");
	$cbmenu = DbSelectOptionTag("cbmenu",$rows,"name",NULL,NULL,NULL,NULL,"  منو  ");
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
$rowsClass = array();
                $colsClass = array();
                $rowCount =($_GET["rec"]=="all" or $_POST["mark"]!="srhcat")?$db->CountAll("eventsubject"):Count($rows);
                for($i = 0; $i < Count($rows); $i++)
                {						
		        $rows[$i]["text"] =(mb_strlen($rows[$i]["text"])>20)?mb_substr($rows[$i]["text"],0,20,"UTF-8")."...":$rows[$i]["text"];
		        $rows[$i]["subject"] =(mb_strlen($rows[$i]["subject"])>20)?mb_substr($rows[$i]["subject"],0,20,"UTF-8")."...":$rows[$i]["subject"];		        
                              
				if ($i % 2==0)
				 {
						$rowsClass[] = "datagridevenrow";
				 }
				else
				{
						$rowsClass[] = "datagridoddrow";
				}
				$rows[$i]["secid"] = GetSectionName($rows[$i]["secid"]);
				$rows[$i]["edit"] = "<a href='?item=editeventsmgr&act=edit&eid={$rows[$i]["id"]}' class='edit-field' " .
						"style='text-decoration:none;'></a>";								
				$rows[$i]["delete"]=<<< del
				<a href="javascript:void(0)"
				onclick="DelMsg('{$rows[$i]['id']}',
					'از حذف این گروه اطمینان دارید؟',
				'?item=editeventsmgr&act=del&pageNo={$_GET[pageNo]}&cid=');"
				 class='del-field' style='text-decoration:none;'></a>
del;
				}
$msgs = GetMessage($_GET['msg']);	
if (!$_GET["pageNo"] or $_GET["pageNo"]<=0) $_GET["pageNo"] = 0;
            if (Count($rows) > 0)
            {                    
                    $gridcode.= DataGrid(array( 							
							"subject"=>"عنوان",
                            "edit"=>"ویرایش",
							"delete"=>"حذف",), $rows, $colsClass, $rowsClass, 10,
                            $_GET["pageNo"], "id", false, true, true, $rowCount,"item=editeventmgr&act=mgr");
                    
            }
$msgs = GetMessage($_GET['msg']);
$list = array("subject"=>"عنوان" );
$combobox = SelectOptionTag("cbsearch",$list,"subject");
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
								<p>جستجو بر اساس {$combobox}							
									<input type="text" name="txtsrh" class="search-form" value="جستجو..." onfocus="if (this.value == 'جستجو...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'جستجو...';}"  />
									<a href="?item=slidesmgr&act=mgr" name="srhsubmit" id="srhsubmit" class="button"> جستجو</a>
									<a href="?item=slidesmgr&act=mgr&rec=all" name="retall" id="retall" class="button"> کلیه اطلاعات</a>
								</p>
								<input type="hidden" name="mark" value="srhnews" /> 
								{$msgs}

								{$gridcode} 
															
							</form>
					   </center>
					</div>

edit;
$html = $code;
return $html;
?>
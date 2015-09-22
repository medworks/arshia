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
	function getfather($db,$table,$curid)
	{
		$crow=$db->Select("{$table}","*","id = {$curid}");
		$code = $crow["code"];
		while($code!=0)
		{	
			if ($code==0) break;
			$db->cmd =<<<cd
	SELECT * FROM {$table} WHERE id < {$curid} ORDER BY id DESC LIMIT 1;
cd;
	$res = $db->RunSQL();
    if ($res)
	    $row = mysqli_fetch_array($res);
		$curid = $row["id"];
		$code =$row["code"];
		}
		return $curid;
	}
	if ($_GET['item']!="editdata")	exit();
	
	if ($_GET['act']=="del")
	{
		$db->Delete("menusubject"," id",$_GET["eid"]);
		if ($db->CountAll("menusubject")%10==0) $_GET["pageNo"]-=1;		
		header("location:?item=editdata&act=mgr&pageNo={$_GET[pageNo]}");
	}
	$rows=$db->SelectAll("menusubject","*",	null,"id DESC",	$_GET["pageNo"]*10,10);
$rowsClass = array();
                $colsClass = array();
                $rowCount =($_GET["rec"]=="all" or $_POST["mark"]!="srhcat")?$db->CountAll("menusubject"):Count($rows);
                for($i = 0; $i < Count($rows); $i++)
                {						
		        $rows[$i]["text"] =(mb_strlen($rows[$i]["text"])>30)?mb_substr($rows[$i]["text"],0,30,"UTF-8")."...":$rows[$i]["text"];
				$id = $db->Select("menu","*","id = {$rows[$i][mid]}");				
				$father = getfather($db,"menu",$rows[$i][mid]);
				$nrow = $db->Select("menu","*","id = {$father}");
				
				$rows[$i]["mid"] =$id["name"]."({$nrow[name]} )";
				if ($i % 2==0)
				 {
						$rowsClass[] = "datagridevenrow";
				 }
				else
				{
						$rowsClass[] = "datagridoddrow";
				}				
				$rows[$i]["edit"] = "<a href='?item=adddata&act=edit&eid={$rows[$i]["id"]}' class='edit-field' " .
						"style='text-decoration:none;'></a>";								
				$rows[$i]["delete"]=<<< del
				<a href="javascript:void(0)"
				onclick="DelMsg('{$rows[$i]['id']}',
					'از حذف این گروه اطمینان دارید؟',
				'?item=editdata&act=del&pageNo={$_GET[pageNo]}&eid=');"
				 class='del-field' style='text-decoration:none;'></a>
del;
				}
$msgs = GetMessage($_GET['msg']);	
if (!$_GET["pageNo"] or $_GET["pageNo"]<=0) $_GET["pageNo"] = 0;
            if (Count($rows) > 0)
            {                    
                    $gridcode.= DataGrid(array( 							
							"mid"=>"منو",
							"text"=>"متن",
                            "edit"=>"ویرایش",
							"delete"=>"حذف",), $rows, $colsClass, $rowsClass, 10,
                            $_GET["pageNo"], "id", false, true, true, $rowCount,"item=editdata&act=mgr");
                    
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
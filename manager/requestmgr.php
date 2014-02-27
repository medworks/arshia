<?php
 include_once("../config.php");
 include_once("../classes/database.php");
 include_once("../classes/messages.php");
 include_once("../classes/session.php");	
 include_once("../classes/functions.php"); 
 include_once("../lib/persiandate.php");
 include_once("../classes/login.php");
 $login = Login::GetLogin();
 if (!$login->IsLogged())
 {
	header("Location: ../index.php");
	die(); // solve a security bug
 }
 if ($_GET['item']!="requestmgr")	exit();
 $db = Database::GetDatabase();
 
 if ($_GET['act']=="do")
{
	$html=<<<ht
		<div class="title">
	      <ul>
	        <li><a href="adminpanel.php?item=dashboard&act=do">پیشخوان</a></li>
	        <li><span>مدیریت درخواست مستندات</span></li>
	      </ul>
	      <div class="badboy"></div>
	    </div>
		<div class="sub-menu" id="mainnav">
			<ul>			  
			  <li>
				<a href="?item=requestmgr&act=mgr" id="request" name="request">
				  مدیریت درخواست ها
					<span class="edit-gallery"></span>
				</a>
			  </li>
			 </ul>
			 <div class="badboy"></div>
		</div>		 
ht;
}else
if ($_GET['act']=="mgr")
{
	if ($_POST["mark"]=="srhreq")
	{	 			   
		$rows = $db->SelectAll(
				"request",
				"*",
				"{$_POST[cbsearch]} LIKE '%{$_POST[txtsrh]}%'",
				"id DESC",
				$_GET["pageNo"]*10,
				10);
			if (!$rows) 
			{					
				//$_GET['item'] = "gallery";
				//$_GET['act'] = "mgr";
				//$_GET['msg'] = 6;				
				header("Location:?item=requestmgr&act=mgr&msg=6");
			}
		
	}
	else
	{	
		$rows = $db->SelectAll(
				"request",
				"*",
				null,
				"id DESC",
				$_GET["pageNo"]*10,
				10);
    }
                $rowsClass = array();
                $colsClass = array();
                $rowCount =($_GET["rec"]=="all" or $_POST["mark"]!="srhreq" )?$db->CountAll("request"):Count($rows);
                for($i = 0; $i < Count($rows); $i++)
                {								        
				if ($i % 2==0)
				 {
						$rowsClass[] = "datagridevenrow";
				 }
				else
				{
						$rowsClass[] = "datagridoddrow";
				}				
				$rows[$i]["edit"] = "<a href='?item=requestmgr&act=edit&rid={$rows[$i]["id"]}' class='edit-field'" .
						"style='text-decoration:none;'></a>";								
				$rows[$i]["delete"]=<<< del
				<a href="javascript:void(0)"
				onclick="DelMsg('{$rows[$i]['id']}',
					'از حذف این فعالیت اطمینان دارید؟',
				'?item=requestmgr&act=del&pageNo={$_GET[pageNo]}&rid=');"
				 class='del-field' style='text-decoration:none;'></a>
del;
               }

    if (!$_GET["pageNo"] or $_GET["pageNo"]<=0) $_GET["pageNo"] = 0;
            if (Count($rows) > 0)
            {                    
                    $gridcode.= DataGrid(array( 
							"name"=>"نام",
							"tel"=>"تلفن",
							"mobile"=>"موبایل",
							"address"=>"آدرس",
							"postcode"=>"کد پستی",
							"email"=>"ایمیل",
							"edit"=>"ویرایش",
							"delete"=>"حذف",), $rows, $colsClass, $rowsClass, 10,
                            $_GET["pageNo"], "id", false, true, true, $rowCount,"item=requestmgr&act=mgr");
                    
            }
$msgs = GetMessage($_GET['msg']);
$list = array("name"=>"عنوان",
              "tel"=>"تلفن",
			  "mobile"=>"موبایل",
			  "email"=>"ایمیل");
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
					    <li><span>مدیریت درخواست مستندات</span></li>
				      </ul>
				      <div class="badboy"></div>
				  </div>
                    <div class="Top">                       
						<center>
							<form action="?item=requestmgr&act=mgr" method="post" id="frmsrh" name="frmsrh">
								<p>جستجو بر اساس {$combobox}							
									<input type="text" name="txtsrh" class="search-form" value="جستجو..." onfocus="if (this.value == 'جستجو...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'جستجو...';}"  />
									<a href="?item=requestmgr&act=mgr" name="srhsubmit" id="srhsubmit" class="button"> جستجو</a>
									<a href="?item=requestmgr&act=mgr&rec=all" name="retall" id="retall" class="button"> کلیه اطلاعات</a>
								</p>
								<input type="hidden" name="mark" value="srhreq" /> 
								{$msgs}
								{$gridcode} 
							</form>
					   </center>
					</div>

edit;
$html = $code;
}	
return $html;
?>	
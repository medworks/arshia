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
 
 if ($_GET['act']=="check")
 {
   $req=$db->Select("request","*","id='{$_GET["rid"]}'");
   $regdate = ToJalali($req['regdate']);
   $rows = $db->SelectAll("docreq","*","reqid ={$req['id']}");   
   if(!empty($rows))
   {
    $i = 0;
	foreach($rows as $key=>$val)
	{
		$i++;
		$doc=$db->Select("docs","*","id='{$val[docid]}'");
		$docreq.=" <br/>{$i}- {$doc['subject']}";
	}
   }
   $html =<<<cd
	<div class="title">
      	<ul>
	        <li><a href="adminpanel.php?item=dashboard&act=do">پیشخوان</a></li>
		    <li><span>مدیریت درخواست ها</span></li>
      	</ul>
      	<div class="badboy"></div>
	</div>
	<div class="detail-req">
	    <p>
	    	<span>تاریخ سفارش :</span>
			{$regdate}
		</p>
		<p>
			<span>نام متقاضی :</span>
			{$req['name']}
		</p>
		<p>
			<span>تلفن :</span>
			{$req['tel']}
		</p>
		<p>
			<span>موبایل :</span>
			{$req['mobile']}
		</p>
		<p>
			<span>ایمیل :</span>
			{$req['email']}
		</p>
		<p>
			<span>آدرس :</span>
			{$req['address']}
		</p>
		<p>
			<span>کد پستی :</span>
			{$req['postcode']}
		</p>
		<p>
			<span>توضیحات :</span>
			{$req['detail']}
		</p>
		<p>
			<span>لیست درخواست ها :</span>
			{$docreq}
		</p>
		<form action="" method="post">
			<input type="submit" name="submit" value="ارسال تاییدیه" />
			<input type="hidden" name="mark" value="sendok" />
		</form>
	</div>
cd;
 }
else
 if ($_GET['act']=="mgr" or $_GET['act']=="do")
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
				$rows[$i]["regdate"] = ToJalali($rows[$i]["regdate"]," l d F  Y ");
				$rows[$i]["check"] = "<a href='?item=requestmgr&act=check&rid={$rows[$i]["id"]}' class='check-field'" .
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
					        "regdate"=>"تاریخ سفارش",
							"name"=>"نام",
							"tel"=>"تلفن",
							"mobile"=>"موبایل",
							"address"=>"آدرس",
							"postcode"=>"کد پستی",
							"email"=>"ایمیل",
							"check"=>"بررسی",
							"delete"=>"حذف",), $rows, $colsClass, $rowsClass, 10,
                            $_GET["pageNo"], "id", false, true, true, $rowCount,"item=requestmgr&act=mgr");
                    
            }
$msgs = GetMessage($_GET['msg']);
$list = array("name"=>"نام",
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
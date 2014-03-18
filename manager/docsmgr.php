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
 if ($_GET['item']!="docsmgr")	exit();
 $db = Database::GetDatabase();
 $overall_error = false;
 $pic_on_edit_section = null;
 	
 if (!$overall_error && $_POST["mark"]=="savedoc")
 {  
		if((!empty($_FILES["pic"])) && ($_FILES['pic']['error'] == 0))
		{
			$filename =strtolower(basename($_FILES['pic']['name']));
			$ext = substr($filename, strrpos($filename, '.') + 1);	   		 		
			$newfilename = $_FILES['pic']['name'];
			$newname = OS_ROOT."/docfiles/".$newfilename;
			if (!(move_uploaded_file($_FILES['pic']['tmp_name'],$newname)))
			{       
			   
			}		 			
		 
		}	 
	$fields = array("`subject`","`address`","`body`");	
	$values = array("'{$_POST[subject]}'","'./docfiles/{$newfilename}'","'{$_POST[body]}'");
	if (!$db->InsertQuery('docs',$fields,$values)) 
	{
		//$msgs = $msg->ShowError("ثبت اطلاعات با مشکل مواجه شد");
		header('location:?item=docsmgr&act=new&msg=2');			
	} 	
	else 
	{  										
		//$msgs = $msg->ShowSuccess("ثبت اطلاعات با موفقیت انجام شد");
		header('location:?item=docsmgr&act=new&msg=1');
	 }
 }
 else
 if (!$overall_error && $_POST["mark"]=="editdoc")
 {			    
	$values = array("`image`"=>"'{$_POST[selectpic]}'",
	       		    "`subject`"=>"'{$_POST[subject]}'",
					"`body`"=>"'{$_POST[body]}'");
	$db->UpdateQuery("gallery",$values,array("id='{$_GET['sid']}'"));
	header('location:?item=docsmgr&act=mgr');
	//$_GET["item"] = "gallerymgr";
	//$_GET["act"] = "mgr";			
 }

	if ($overall_error)
	{
		$row = array("image"=>$_FILES['pic']['name'],
					 "subject"=>$_POST['subject'],
					 "body"=>$_POST['body']);
	}
 
   if ($_GET['act']=="new")
	{
	    $pic_on_edit_insert_section ="<img id='img' src='' alt='' />";
		$editorinsert = "
			<p>
				<input type='submit' id='submit' value='ذخیره' class='submit' />	 
				<input type='hidden' name='mark' value='savedoc' />";
	}
	if ($_GET['act']=="edit")
	{
		$row=$db->Select("gallery","*","id='{$_GET["sid"]}'",NULL);
		$pic_on_edit_insert_section = "<img src='{$row[image]}'width='200px' height='100px' />";
		$editorinsert = "
		<p>
			 <input type='submit' id='submit' value='ویرایش' class='submit' />	 
			 <input type='hidden' name='mark' value='editdoc' />";
	}
	if ($_GET['act']=="del")
	{
		$db->Delete("gallery"," id",$_GET["sid"]);
		if ($db->CountAll("gallery")%10==0) $_GET["pageNo"]-=1;		
		header("location:?item=docsmgr&act=mgr&pageNo={$_GET[pageNo]}");
	}	
if ($_GET['act']=="do")
{
	$html=<<<ht
		<div class="title">
	      <ul>
	        <li><a href="adminpanel.php?item=dashboard&act=do">پیشخوان</a></li>
	        <li><span>مدیریت مستندات</span></li>
	      </ul>
	      <div class="badboy"></div>
	    </div>
		<div class="sub-menu" id="mainnav">
			<ul>
			  <li>		  
				<a href="?item=docsmgr&act=new">سند جدید
					<span class="add-gallery"></span>
				</a>
			  </li>
			  <li>
				<a href="?item=docsmgr&act=mgr" id="news" name="news">
				  حذف/ویرایش اسناد
					<span class="edit-gallery"></span>
				</a>
			  </li>
			 </ul>
			 <div class="badboy"></div>
		</div>		 
ht;
}else
if ($_GET['act']=="new" or $_GET['act']=="edit")
{
$msgs = GetMessage($_GET['msg']);
$html=<<<cd
		<script type='text/javascript'>
			$(document).ready(function(){		
				$("#frmdocsmgr").validationEngine();			   
			});
		</script>
		<div class="title">
	      <ul>
	        <li><a href="adminpanel.php?item=dashboard&act=do">پیشخوان</a></li>
	        <li><span>مدیریت مستندات</span></li>
	      </ul>
	      <div class="badboy"></div>
	    </div>	     
		<div id="message">
		{$msgs}
		</div>
		<form name="frmdocsmgr" id="frmdocsmgr" class="" action="" method="post" enctype="multipart/form-data" > 
			<p>
				<label for="pic">فایل سند </label>
				<span>*</span>
			</p>
			<div class='upload-file'>
				<input type='file' name='pic' class='validate[required] pic ltr' id='pic' onChange='' />  
				<span class='filename'>لطفا فایل مورد نظر را انتخاب کنید</span>
				<span class='action'>انتخاب فایل</span>
			</div>
			<div class="badboy"> </div>
		   	<p>
				<label for="subject">عنوان </label>
				<span>*</span>
			</p>
			<input type="text" name="subject" class="validate[required] subject" id="subject" value="{$row[subject]}" />
			<p>
				<label for="subject">توضیحات </label>
				<span></span>
			</p>
			<input type="text" name="body" class="subject" id="body" value="{$row[body]}" /> 
			{$editorinsert}
				<input type="reset" value="پاک کردن" class='reset' /> 				
			</p>
		</form>
cd;
}
else
if ($_GET['act']=="mgr")
{
	if ($_POST["mark"]=="srhdocs")
	{	 			   
		$rows = $db->SelectAll(
				"gallery",
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
				header("Location:?item=worksmgr&act=mgr&msg=6");
			}
		
	}
	else
	{	
		$rows = $db->SelectAll(
				"gallery",
				"*",
				null,
				"id DESC",
				$_GET["pageNo"]*10,
				10);
    }
                $rowsClass = array();
                $colsClass = array();
                $rowCount =($_GET["rec"]=="all" or $_POST["mark"]!="srhdocs" )?$db->CountAll("gallery"):Count($rows);
                for($i = 0; $i < Count($rows); $i++)
                {						
		        $rows[$i]["subject"] =(mb_strlen($rows[$i]["subject"])>20)?mb_substr($rows[$i]["subject"],0,20,"UTF-8")."...":$rows[$i]["subject"];
                $rows[$i]["body"] =(mb_strlen($rows[$i]["body"])>30)?
                mb_substr(html_entity_decode(strip_tags($rows[$i]["body"]), ENT_QUOTES, "UTF-8"), 0, 30,"UTF-8") . "..." :
                html_entity_decode(strip_tags($rows[$i]["body"]), ENT_QUOTES, "UTF-8");               
                $rows[$i]["image"] ="<img src='{$rows[$i][image]}' alt='{$rows[$i][subject]}' width='40px' height='40px' />";
				if ($i % 2==0)
				 {
						$rowsClass[] = "datagridevenrow";
				 }
				else
				{
						$rowsClass[] = "datagridoddrow";
				}				
				$rows[$i]["edit"] = "<a href='?item=docsmgr&act=edit&sid={$rows[$i]["id"]}' class='edit-field'" .
						"style='text-decoration:none;'></a>";								
				$rows[$i]["delete"]=<<< del
				<a href="javascript:void(0)"
				onclick="DelMsg('{$rows[$i]['id']}',
					'از حذف این فعالیت اطمینان دارید؟',
				'?item=docsmgr&act=del&pageNo={$_GET[pageNo]}&sid=');"
				 class='del-field' style='text-decoration:none;'></a>
del;
               }

    if (!$_GET["pageNo"] or $_GET["pageNo"]<=0) $_GET["pageNo"] = 0;
            if (Count($rows) > 0)
            {                    
                    $gridcode.= DataGrid(array( 
							"image"=>"عکس",
							"subject"=>"عنوان",
							"body"=>"توضیحات",
							 "edit"=>"ویرایش",
							"delete"=>"حذف",), $rows, $colsClass, $rowsClass, 10,
                            $_GET["pageNo"], "id", false, true, true, $rowCount,"item=docsmgr&act=mgr");
                    
            }
$msgs = GetMessage($_GET['msg']);
$list = array("subject"=>"عنوان",
              "body"=>"توضیحات" );
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
					    <li><span>مدیریت اسلاید</span></li>
				      </ul>
				      <div class="badboy"></div>
				  </div>
                    <div class="Top">                       
						<center>
							<form action="?item=docsmgr&act=mgr" method="post" id="frmsrh" name="frmsrh">
								<p>جستجو بر اساس {$combobox}							
									<input type="text" name="txtsrh" class="search-form" value="جستجو..." onfocus="if (this.value == 'جستجو...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'جستجو...';}"  />
									<a href="?item=docsmgr&act=mgr" name="srhsubmit" id="srhsubmit" class="button"> جستجو</a>
									<a href="?item=docsmgr&act=mgr&rec=all" name="retall" id="retall" class="button"> کلیه اطلاعات</a>
								</p>
								<input type="hidden" name="mark" value="srhdocs" /> 
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
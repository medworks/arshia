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
	if ($_GET['item']!="indexmgr")	exit();
	
	function uploadpics($mode,$fileup,$db,$id,$filename=NULL)
	{
		$target_dir = "../indexpics/";
		$imageFileType = pathinfo($_FILES[$fileup]["name"],PATHINFO_EXTENSION);
		//$target_file = $target_dir . basename($_FILES[$fileup]["name"]);
		
		$target_file = $target_dir . basename($_FILES[$fileup]["name"]);
		$filename = basename($_FILES[$fileup]["name"]);
		$uploadOk = 1;
		
		
		if(isset($_POST["submit"])) 
		{
			$check = getimagesize($_FILES[$fileup]["tmp_name"]);
			if($check !== false) 
			{				
				$uploadOk = 1;
			} 
			else 
			{
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		
		if ($_FILES[$fileup]["size"] > 500000) 
		{
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		/*
		if($imageFileType != "jpg" && $imageFileType != "png" && 
		$imageFileType != "jpeg"&& $imageFileType != "gif" ) 
		{
			//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			header('location:?item=aboutusmgr&act=new&msg=10');
			$uploadOk = 0;
		}
	   */
		if ($uploadOk == 0) 
		{
			echo "Sorry, your file was not uploaded.";
		} 
		else 
		{    
			if ($mode == "insert")
			{
				if (isset($_FILES[$fileup]))
				{
					if (move_uploaded_file($_FILES[$fileup]["tmp_name"], $target_file)) 
					{	
							
					} 
					else 
					{
						echo "Sorry, there was an error uploading your file.";
					}
				}	
				$fn = basename($_FILES[$fileup]["name"]);
				$fields = array("`mid`","`pic`","`text`");
				$_POST["text"] = addslashes($_POST["text"]);		
				$values = array("'{$_POST[cbmenu]}'","'{$fn}'","'{$_POST[text]}'");
				if (!$db-> InsertQuery('topindex',$fields,$values)) 
				{
					header('location:?item=indexmgr&act=new&msg=2');
				} 	
				else 
				{  										
					header('location:?item=indexmgr&act=new&msg=1');
				}  		
			}
			else
			{				
					$lpic = $db->Select("topindex","*","id = '{$id}'");
					if (!empty($_FILES[$fileup]["name"]))
					{
						$lfn = $target_dir.$lpic["pic"];
						if (file_exists($lfn)&& $lpic["pic"]!="")
						{
							unlink($lfn);
						}
					}	
					//$db->Delete("index"," id",$id);				
					if (move_uploaded_file($_FILES[$fileup]["tmp_name"], $target_file)) 
					{	
						$fn = $filename;						
						$_POST["text"] = addslashes($_POST["text"]);
						$values = array("`mid`"=>"'{$_POST[cbmenu]}'",
										"`pic`"=>"'{$fn}'",
										"`text`"=>"'{$_POST[text]}'");		
						if (!$db->UpdateQuery("topindex",$values,array("id = '{$id}'")))
						{
							header('location:?item=indexmgr&act=new&msg=2');
							//echo $db->cmd;
						} 	
						else 
						{  										
							header('location:?item=indexmgr&act=new&msg=1');
						}  			
					} 
					else 
					{
						echo "Sorry, there was an error uploading your file.";
					}						
			}
		}
	}
	
	if ($_POST["mark"]== "save")
	{
	   $row = $db->Select("topindex","*","mid = '{$_POST[cbmenu]}'");
	   
	   if (count($row)>0)
	   {
		   //always do this part, insert part no run
			uploadpics("edit","pic",$db,$row["id"]);			
	   }
	   else
	   {
		   //this part never run
			uploadpics("insert","pic",$db,$row["id"]);			
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
	    <li><span>مدیریت شاخص</span></li>
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
        <select id="cbmenu" name="cbmenu" style="float:right;width:300px">
	      	<option value="0">انتخاب منو</option>
	      	<option value="1">پمپ های اسکرو</option>
	      	<option value="2">سوخت پاش توربین ها</option>
			<option value="3">بازسازی قطعات داغ</option>
		    <option value="4">سایر پروژه ها</option>		      
	    </select> 	
		 <div class="badboy"></div> 
	   	<p>
			<label for='pic'>فایل</label>
			<span>*</span>
		</p>
		<div class='upload-file'>
			<input type='file' name='pic' class='validate[required] pic ltr' id='pic' onChange='showPreview(this);' />  
			<span class='filename'>لطفا عکس مورد نظر را انتخاب نمایید</span>
			<span class='action'>انتخاب فایل</span>
		</div>
	   <div id="imgpreview">
			<img id="img" src="" alt="" />				
		</div>
	 	<div class="badboy"></div> 
	 
	   <p>
         <label for="text">توضیحات </label>
         <span>*</span>
        </p>
        <textarea cols="50" rows="10" name="text" class="detail" id="text" > {$row[text]}
		</textarea>  
        <p>     
	     <input type="submit" value="ثبت" class='submit' />
		 <input type="hidden" name = "mark" value="save" />      	 
        </p>  
	</form>
	<div class='badboy'></div>	
  </div> 
	<script type='text/javascript'>
	
		$(document).ready(function(){
		  
		  $('#cbmenu').on('change', function() {			
			$.ajax({
				url: 'ajaxcommand.php',
				type: 'GET',
				data: "action=getindex&mid="+$(this).find(":selected").val(),
				success: function(data) {				
				$('#text').val(data);
				//alert(data);
				tinyMCE.activeEditor.setContent(data);
				},
				error: function(e) {				
				//console.log(e.message);
				}
			});				
		});
		  
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
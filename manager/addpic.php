<?php
 include_once("../config.php");
 include_once("../classes/database.php");
 include_once("../classes/messages.php");	
 include_once("../classes/functions.php"); 
 include_once("../classes/login.php");
 $login = Login::GetLogin();
 if (!$login->IsLogged())
 {
	header("Location: ../index.php");
	die(); // solve a security bug
 }
 if ($_GET['item']!="addpic")	exit();
 
 $db = Database::GetDatabase();
 
 if ($_POST["mark"]=="addpic")
 {
	for($i=0; $i<count($_FILES['pic']['name']); $i++) 
	{
		$tmpFilePath = $_FILES['pic']['tmp_name'][$i];
		if ($tmpFilePath != "")
		{
			$newFilePath = "../eventspics/" . $_FILES['pic']['name'][$i];
			$fn = "eventspics/" . $_FILES['pic']['name'][$i];
			if(move_uploaded_file($tmpFilePath, $newFilePath)) 
			{
				$fields = array("`type`","`sid`","`name`");
				$values = array("'1'","'{$_POST[cbtype]}'","'{$fn}'");
				$db->InsertQuery('pics',$fields,$values);				
			}
		}
	}
 }
 
 
	$db->cmd = " SELECT e.name,es.id,es.subject,es.mid ,CONCAT(es.subject,'(',e.name,')') as titr FROM events as e , eventsubject as es ".
	           " WHERE e.id = es.mid ";
	//		   echo $db->cmd;
	$res  = $db->RunSQL();
    $rows = array();
    if ($res)
    {
        while($row = mysqli_fetch_array($res)) $rows[] = $row;
    }
	
	$cbtype = DbSelectOptionTag("cbtype",$rows,"titr");
	
$html=<<<ht
	<script type='text/javascript'>
			$(document).ready(function(){		
				$("#frmuploadmgr").validationEngine();			   
			});
		</script>
		<div class="title">
	      <ul>
	        <li><a href="adminpanel.php?item=dashboard&act=do">پیشخوان</a></li>
	        <li><span>مدیریت عکس رویدادها</span></li>
	      </ul>
	      <div class="badboy"></div>
	    </div>	     
		<div id="message">
			{$msgs}
		</div>
		<style>
	   		.thumbnail{
			    height: 100px;
			    margin: 10px; 
			    float: right;
			}
			#result {
				display:none;
			    border: 1px dotted #cccccc;
			    float: right;
			    margin:0 auto;
			    width: 782px;
			}
	   	</style>
	   	<script>
	   		window.onload = function(){   
		    //Check File API support
		    if(window.File && window.FileList && window.FileReader)
		    {
		        $('#files').live("change", function(event) {
		            var files = event.target.files; //FileList object
		            var output = document.getElementById("result");
		            for(var i = 0; i< files.length; i++)
		            {
		                var file = files[i];
		                //Only pics
		                // if(!file.type.match('image'))
		                if(file.type.match('image.*')){
		                    if(this.files[0].size < 2097152){    
		                  // continue;
		                    var picReader = new FileReader();
		                    picReader.addEventListener("load",function(event){
		                        var picFile = event.target;
		                        var div = document.createElement("div");
		                        div.innerHTML = "<img class='thumbnail' src='" + picFile.result + "'" +
		                                "title='preview image'/>";
		                        output.insertBefore(div,null);            
		                    });
		                    //Read the image
		                    $('#clear, #result').show();
		                    picReader.readAsDataURL(file);
		                    }else{
		                        alert("Image Size is too big. Minimum size is 2MB.");
		                        $(this).val("");
		                    }
		                }else{
		                alert("You can only upload image file.");
		                $(this).val("");
		            }
		            }                               
		           
		        });
		    }
		    else
		    {
		        console.log("Your browser does not support File API");
		    }
		}

		   $('#files').live("click", function() {
		        $('.thumbnail').parent().remove();
		        $('result').hide();
		        $(this).val("");
		    });

		    $('#clear').live("click", function() {
		        $('.thumbnail').parent().remove();
		        $('#result').hide();
		        $('#files').val("");
		        $(this).hide();
		    });

	   	</script>
		<form name="frmuploadmgr" id="frmuploadmgr" class="" action="" method="post" enctype="multipart/form-data" > 			
		   <div class="badboy"></div>
		   <p>
				<label for='pic'>فایل </label>
				<span>*</span>
			</p>
			<div class='upload-file'>
				<input type='file' name='pic[]' class='validate[required] pic ltr' id="files" onChange='showPreview(this);' multiple />  
				<span class='filename'>لطفا عکس مورد نظر را انتخاب نمایید</span>
				<span class='action' style="-webkit-border-radius:0px !important">انتخاب فایل</span>
				<span class='action' id="clear">پاک کردن</span>
			</div>
		   	<div class="badboy"></div>
        	<output id="result"> </output>
		   	<!-- <div id="imgpreview">
				<img id="img" src="" alt="" />				
			</div> -->
		   	<div class="badboy"></div>
			<p>
				<label for="subject">عنوان</label>
				<span></span>
			</p>
			<input type="text" name="subject" class="subject" id="subject" value="{$row[subject]}" />
			<p>
				<label for="body">توضیحات </label>
				<span></span>
			</p>
			<input type="text" name="body" class="subject" id="body" value="{$row[body]}" /> 
			<p>
				<label for="picsadr">محل ذخیره سازی فایل</label>
				<span>*</span>
			</p>
			{$cbtype}
		   	<div class="badboy"></div>
		   	<br />
			<input type="submit" name="submit" value="ارسال" />	
			<input type="hidden" name="mark" value="addpic" />
		</form>
ht;
return $html;
?>	
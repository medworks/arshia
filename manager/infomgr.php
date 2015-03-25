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
 if ($_GET['item']!="infomgr")	exit();
 $db = Database::GetDatabase();
 	
if ($_GET['act']=="do")
{
	$html=<<<ht
		<div class="title">
	      <ul>
	        <li><a href="adminpanel.php?item=dashboard&act=do">پیشخوان</a></li>
	        <li><span>مدیریت اطلاعات</span></li>
	      </ul>
	      <div class="badboy"></div>
	    </div>
		<div class="sub-menu" id="mainnav">
			<ul class="two-column">
			  <li>		  
				<a href="?item=addevent&act=new">ثبت اطلاعات
					<span class="add-file"></span>
				</a>
			  </li>
			  <li>
				<a href="?item=editevent&act=edit" id="news" name="news">
				  حذف / ویرایش اطلاعات
					<span class="edit-file"></span>
				</a>
			  </li>
			  <li>
				<a href="?item=addpic&act=new" id="news" name="news">
				  عکس اطلاعات
					<span class="add-file"></span>
				</a>
			  </li>
			  <li>
				<a href="?item=deleventpic&act=do" id="news" name="news">
				 حذف / اضافه اطلاعات
					<span class="edit-file"></span>
				</a>
			  </li>
			 </ul>
			 <div class="badboy"></div>
		</div>		 
ht;
}
return $html;
?>	
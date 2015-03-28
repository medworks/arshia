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
	if ($_GET['item']!="adddata")	exit();
	if ($_POST["mark"]== "save")
	{
		if ($_POST[menu] == 0)
		{
			
		}
		else
		{	
			$find = $db->Select("menusubject","*","mid = '{$_POST[menu]}'");
			if (count($find)>0)
			{				
				$values = array("`text`"=>"'{$_POST[detail]}'");
				$db->UpdateQuery("menusubject",$values,array(" mid='{$_POST[menu]}'" ));
			}	
			else
			{
				$fields = array("`mid`","`text`");
				$_POST["text"] = addslashes($_POST["text"]);		
				$values = array("'{$_POST[menu]}'","'{$_POST[detail]}'");
				if (!$db->InsertQuery('menusubject',$fields,$values)) 
				{
					//$msgs = $msg->ShowError("ثبت اطلاعات با مشکل مواجه شد");
					header('location:?item=adddata&act=new&msg=2');
				} 	
			}	
				//$msgs = $msg->ShowSuccess("ثبت اطلاعات با مو??قیت انجام شد");			
				header('location:?item=adddata&act=new&msg=1');
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
	    <li><span>مدیریت اطلاعات</span></li>
      </ul>
      <div class="badboy"></div>
  </div>
  <div class="mes" id="message">{$msgs}</div>
  <div class='content'>
	<form name="frminfo" id="frminfo" class="" action="" method="post" >
     <p class="note">پر کردن موارد مشخص شده با * الزامی می باشد</p>
	 <div class="badboy"></div>
	 	<p>
         <label for="detail">انتخاب منو </label>
         <span>*</span>
        </p>
        <select  name="menu" id = "menu" style="float:right;width:300px">
	      	<option value="0">انتخاب منو</option>
	      	<option value="0">1) پمپها و کمپرسورهای اسکرو</option>
		      	<option value="0">- پروژه ها</option>
			      	<option value="0">-- پمپ اسکرو سوخت مایع توربین گازی GE-F9</option>
				      	<option value="1">---> اسکروها</option>
				      	<option value="2">---> پوسته</option>
				      	<option value="3">---> دنده تایمینگ</option>
			      	<option value="0">-- پمپ اسکرو سوخت مایع توربین گازی V94.2</option>
			      		<option value="4">---> اسکروها</option>
				      	<option value="5">---> پوسته</option>
				      	<option value="6">---> بوشها</option>
			      	<option value="0">-- پمپ اسکرو سوخت مایع توربینهای بخار</option>
			      		<option value="7">---> اسکروها</option>
				      	<option value="8">---> پوسته</option>
				      	<option value="9">---> بوشها</option>
		      	<option value="0">- برنامه های آتی</option>
			      	<option value="10">--> راه اندازی آزمایشگاه پیشرفته تست انواع پمپها وکمپرسورهای اسکرو</option>
			      	<option value="11">--> ساخت کمپرسورهای اسکرو</option>
			      	<option value="12">--> طراحی پمپ و کمپرسور براساس نیاز مشتری</option>
		      	<option value="13">-> تجهیزات و امکانات</option>
		      	<option value="14">-> تاییدیه ها و سوابق</option>
	      	<option value="0">2) سوخت پاش توربینها</option>
				<option value="0">- پروژه ها</option>
			      	<option value="0">-- سوخت پاش مایع توربین گازی V94.2</option>
				      	<option value="15">---> تست و ردیف چینی</option>
				      	<option value="16">---> بازسازی و تعمیر</option>
				      	<option value="17">---> ساخت و تولید</option>
			      	<option value="0">-- سوخت پاش مایع توربین گازی MHI</option>
			      		<option value="18">---> تست و ردیف چینی</option>
				      	<option value="19">---> بازسازی و تعمیر</option>
				      	<option value="20">---> ساخت و تولید</option>
			      	<option value="0">-- سوخت پاش مایع توربین گازی GE-F9</option>
			      		<option value="21">---> تست و ردیف چینی</option>
				      	<option value="22">---> بازسازی و تعمیر</option>
				      	<option value="23">---> ساخت و تولید</option>
		      	<option value="0">- برنامه های آتی</option>
			      	<option value="24">--> ساخت مجموعه کامل سوخت پاش مایع توربین های V94.2 (اسپایدر و نازل دیفیوژن) </option>
		      	<option value="25">-> تجهیزات و امکانات</option>
		      	<option value="26">-> تاییدیه ها و سوابق</option>
	      	<option value="0">3) بازسازی قطعات داغ</option>
				<option value="0">- پروژه ها</option>
			      	<option value="27">--> V94.2</option>
			      	<option value="28">--> GE-F9</option>
			      	<option value="29">--> GE-F5</option>
			      	<option value="30">--> MHI</option>
			      	<option value="31">--> FIAT</option>
				<option value="0">- برنامه های آتی</option>
			      	<option value="32">--> بازسازی پره های متحرک</option>
			      	<option value="33">--> بازسازی اینر کیسینگ V94.2</option>
			      	<option value="34">--> بازسازی میکسینگ چمبر</option>
			      	<option value="35">--> تهیه کوره اتمسفر محافظ</option>
			      	<option value="36">--> تهیه میکروسکپ الکترونی</option>
			      	<option value="37">--> تهیه تجهیزات پیشرفته سوراخکاری پره</option>
				<option value="38">-> تجهیزات و امکانات</option>
				<option value="39">-> تاییدیه ها و سوابق</option>
	      	<option value="0">4) آب بند پره ها و سایر پروژه ها</option>
				<option value="40">-> ساخت آب بند پره های توربین V94.2</option>
				<option value="41">-> تست و رفع عیب سرووالوها</option>
				<option value="42">-> ساخت منیفولد گاز توربین GE-F9</option>
				<option value="43">-> ساخت رگلاتوروالو سمپلینگ</option>
				<option value="44">-> ساخت چک والوهای سوخت توربین GE-F5</option>
				<option value="45">-> ساخت و بازسازی پمپهای دنده ای سوخت مایع توربین GE-F5</option>
				<option value="46">-> ساخت پمپ گریز از مرکز صنایع غذایی</option>
	    </select>   
	 <div class="badboy"></div> 
			         
  	   <p>
         <label for="detail">توضیحات </label>
         <span>*</span>
        </p>		
        <textarea cols="50" rows="10" name="detail" class="detail" id="detail" >		
			{$row["text"]}
			<div id="rslt" name="rslt"> </div>
		</textarea>  
        <p>     
	     <input type="submit" value="ثبت" class='submit' />
		 <input type="hidden" name = "mark" value="save" />
      	 <input type="reset" value="پاک کردن" class='reset' />
        </p>  
	</form>
	<div class='badboy'></div>	
  </div>  
	<script type='text/javascript'>
	
		$(document).ready(function(){
		 $("#menu").on('change', function() {
			 var mid = $(this).val();			 
			 $.get('ajaxcommand.php?isinfo=yes&mid='+mid, function( data ) {
				//alert(data);
				$("#rslt").html(data);
			});
		 });
		  $("#frminfo").submit(function(e)
		  {
				//e.preventDefault();
				if ($('#menu').val() == 0)
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
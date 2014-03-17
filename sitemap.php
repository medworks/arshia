<?php
    include_once("./config.php");
    include_once("./classes/database.php");	
	include_once("./classes/functions.php");
	
	$db = Database::GetDatabase();
	header("Content-Type: application/xml; charset=utf-8");
    $sm = '<?xml version="1.0" encoding="UTF-8"?>
    <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    
	$research = $db->Select("allparts","*","`part`= 1");
	$regenerate = $db->Select("allparts","*","`part`= 2");
	$construction = $db->Select("allparts","*","`part`= 3");	
	$add ="http://www.arshia-co.com/" ;

	$sm .="
	<url>
	  <loc>http://www.arshia-co.com/</loc>
	</url>
	<url>
	  <loc>http://www.arshia-co.com/search.html</loc>
	</url>
	<url>
	  <loc>http://www.arshia-co.com/about-us.html</loc>
	</url>
	<url>
	  <loc>http://www.arshia-co.com/construction.html</loc>
	</url>
	<url>
	  <loc>http://www.arshia-co.com/regeneration.html</loc>
	</url>
	<url>
	  <loc>http://www.arshia-co.com/research.html</loc>
	</url>
	<url>
	  <loc>http://www.arshia-co.com/contact.html</loc>
	</url>
	<url>
	  <loc>http://www.arshia-co.com/gallery.html</loc>
	</url>
";
	$date = date("Y-m-d");	

	//foreach($news as $key=>$val)
//	{
		//$date = date("Y-m-dTH:i:s+00:00",$val['ndate']);
		//$date = date("D, d M Y H:i:s T");
		$sm.=<<<cd
		<url>
			<loc>{$add}construction.html</loc>
			<lastmod>{$date}</lastmod>
			<changefreq>daily</changefreq>
			<priority>0.8</priority>
        </url>    		
cd;
	//}
	//foreach($works as $key=>$val)
	//{
	   //$date = date("D, d M Y H:i:s T",$val['sdate']);
	   //$date = date("D, d M Y H:i:s T");
		$sm.=<<<cd
		<url>
			<loc>{$add}regeneration.html</loc>
			<lastmod>{$date}</lastmod>
			<changefreq>daily</changefreq>
			<priority>0.8</priority>
        </url>    		
cd;
	//}
	//foreach($articles as $key=>$val)
	//{
		//$date = date("D, d M Y H:i:s T",$val['ndate']);
		//$date = date("D, d M Y H:i:s T");
		$sm.=<<<cd
		<url>
			<loc>{$add}research.html</loc>
			<lastmod>{$date}</lastmod>
			<changefreq>daily</changefreq>
			<priority>0.8</priority>
        </url>    		
cd;
	//}		
    $sm.= "</urlset>";
	echo $sm;
<?
	include_once "../config.php";
?>
<!doctype html>
<html>
  <head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../lib/fullpage/jquery.fullPage.css" />
    <link rel="stylesheet" type="text/css" href="../lib/Magnific-Popup/magnific-popup.css"> 
    <link rel="stylesheet" type="text/css" href="./css/style.css"> 
    <link rel="stylesheet" href="../lib/iCheck/skins/all.css">
    <link rel="stylesheet" type="text/css" href="./css/style_yang.css"> 
    <link rel="stylesheet" href="../lib/bxslider/jquery.bxslider.css">
    <script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../lib/fullpage/jquery.fullPage.js"></script>
    <script type="text/javascript" src="../lib/Magnific-Popup/jquery.magnific-popup.js"></script>
    <script type='text/javascript' src='../lib/iCheck/icheck.js'></script>
    <script type='text/javascript' src='../lib/bxslider/jquery.bxslider.min.js'></script>
  </head>
  <body style="margin:0px">
    <!------------------------ 헤더 타이틀 영역 ------------------------>
    <div class="navi clearfix" id="navi_menu">
    	<div class="left">
	      	<a href="#" target="_blank"><img src="images/logo.png" alt=""/></a>
        </div>
        <div class="right">
          <div class="right_wrap">
	      	<div class="menu">
            	<div class="inner clearfix">
            	<a href="#slide1"><img src="images/btn_menu_summer.png" alt=""/></a>
    	  		<a href="#" onmouseover="tog_col('1');" onmouseout="tog_col('2');" onclick="tog_col('3');"><img src="images/btn_menu_kit_off.png" alt=""/></a>
                </div>
      	  	</div>
            <div class="sns">
            	<a href="#"onmouseover="tog_col('1');" onclick="sns_share('twitter');"><img src="images/btn_tw.png" alt=""/></a>
      	  		<a href="#" onclick="sns_share('facebook');"><img src="images/btn_fb.png" alt=""/></a>
      	  		<a href="#" onclick="sns_share('story');"><img src="images/btn_ks.png" alt=""/></a>
          	</div>
          </div>
        </div>
    </div>
    <!------------------------ 헤더 타이틀 영역 ------------------------>

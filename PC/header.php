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
    <div style="position:fixed;height:50px;width:100%;top:0;left:0;background:skyblue;z-index:70;" id="navi_menu">
      <a href="http://www.vdlcosmetics.com/" target="_blank">VDL</a>
      <a href="#slide1">VDL FRIENDS KIT</a>
      <a href="#" onmouseover="tog_col('1');" onmouseout="tog_col('2');" onclick="tog_col('3');">SUMMER COLLECTION</a>
      <a href="#"onmouseover="tog_col('1');" onclick="sns_share('twitter');">트위터 공유</a>
      <a href="#" onclick="sns_share('facebook');">페이스북 공유</a>
      <a href="#" onclick="sns_share('story');">스토리 공유</a>
      <div id="sub_menu" style="margin-left:160px;width:150px;display:none">
        <ul>
          <li><a href="#slide3">네오의 VDL</a></li>
          <li><a href="#slide4">어피치의 VDL</a></li>
          <li><a href="#slide5">단무지의 VDL</a></li>
        </ul>
      </div>
    </div>
    <!------------------------ 헤더 타이틀 영역 ------------------------>

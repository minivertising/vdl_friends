<?
	include_once "../config.php";
?>
<!doctype html>
<html>
  <head>
    <title>VDL KAKAO FRIENDS</title>
    <meta property="og:title" content="VDL MEETS KAKAO FRIENDS">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.mnv.kr/MOBILE/index.php" />
    <meta property="og:image" content="http://www.mnv.kr/MOBILE/images/img_sns_share_new.jpg" />
    <meta property="og:description" content="VDL MEETS KAKAO FRIENDS 친구에게 메시지를 보내고 컬렉션 제품이 담긴 VDL FRIENDS KIT를 받아가세요! 참여만해도 5천원 할인 쿠폰을 드려요.">
    
    <link rel="shortcut icon" type="image/x-icon" href="./images/pavicon.ico" />
    <link rel="stylesheet" type="text/css" href="../lib/fullpage/jquery.fullPage.css" />
    <link rel="stylesheet" type="text/css" href="../lib/Magnific-Popup/magnific-popup.css"> 
    <link rel="stylesheet" type="text/css" href="./css/style.css"> 
    <link rel="stylesheet" href="../lib/iCheck/skins/all.css">
    <link rel="stylesheet" type="text/css" href="./css/style_yang.css"> 
    <link rel="stylesheet" href="../lib/bxslider/jquery.bxslider.css">
    <script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../js/unslider.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/jquery.zclip.js"></script>
    <script type="text/javascript" src="../lib/fullpage/jquery.fullPage.js"></script>
    <script type="text/javascript" src="../lib/Magnific-Popup/jquery.magnific-popup.js"></script>
    <script type='text/javascript' src='../lib/iCheck/icheck.js'></script>
    <script type='text/javascript' src='../lib/bxslider/jquery.bxslider.min.js'></script>
    <script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
  </head>
  <body style="margin:0px">
<?
	if (stripos($_SERVER['REQUEST_URI'], "index.php"))
	{
?>
    <!------------------------ 헤더 타이틀 영역 ------------------------>
    <div class="navi clearfix" id="navi_menu">
      <div class="left">
        <a href="index.php"><img src="images/logo.png" alt=""/></a>
      </div>
      <div class="right">
        <div class="right_wrap">
          <div class="menu">
            <div class="inner clearfix">
              <a href="#" onclick="move_area('collection')"><img src="images/btn_menu_summer_off.png" alt="" id="summer_header_menu"/></a>
              <a href="#" onclick="move_area('kit')"><img src="images/btn_menu_kit_off.png" alt=""  id="kit_header_menu"/></a>
            </div>
          </div>
          <div class="sns">
          	<a href="#" target="_blank"><img src="images/btn_go_home.png" alt=""/></a>
            <a href="#" onclick="sns_share('twitter');"><img src="images/btn_tw.png" alt=""/></a>
            <a href="#" onclick="sns_share('facebook');"><img src="images/btn_fb.png" alt=""/></a>
            <a href="#" onclick="sns_share('story');"><img src="images/btn_ks.png" alt=""/></a>
          </div>
        </div>
      </div>
    </div>
    <!------------------------ 헤더 타이틀 영역 ------------------------>
<?
	}
?>
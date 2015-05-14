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
    <meta property="og:image" content="http://www.mnv.kr/MOBILE/images/img_sns_share.png" />
    <meta property="og:description" content="재기 발랄한 카카오 프렌즈와 감각적인 브이디엘이 만나 선보이는 키치 꾸뛰르 감성의 써머 컬렉션">
    
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
        <a href="http://www.vdlcosmetics.com/index.jsp" target="_blank"><img src="images/logo.png" alt=""/></a>
      </div>
      <div class="right">
        <div class="right_wrap">
          <div class="menu">
            <div class="inner clearfix">
              <a href="#" onclick="move_area('collection')"><img src="images/btn_menu_summer_off.png" alt="" onmouseover="$(this).attr('src','images/btn_menu_summer.png')" onmouseout="$(this).attr('src','images/btn_menu_summer_off.png')"/></a>
              <a href="#" onclick="move_area('kit')"><img src="images/btn_menu_kit_off.png" alt="" onmouseover="$(this).attr('src','images/btn_menu_kit.png')" onmouseout="$(this).attr('src','images/btn_menu_kit_off.png')"/></a>
            </div>
          </div>
          <div class="sns">
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
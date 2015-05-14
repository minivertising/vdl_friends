<?
	include_once "../config.php";
?>
<!doctype html>
<html>
  <head>
    <title>VDL KAKAO FRIENDS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" />
    <meta property="og:title" content="VDL MEETS KAKAO FRIENDS">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.mnv.kr/MOBILE/index.php" />
    <meta property="og:image" content="http://www.mnv.kr/MOBILE/images/img_sns_share.png" />
    <meta property="og:description" content="재기 발랄한 카카오 프렌즈와 감각적인 브이디엘이 만나 선보이는 키치 꾸뛰르 감성의 써머 컬렉션">

    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <link rel="stylesheet" href="../lib/iCheck/skins/all.css">
    <link rel="stylesheet" href="../lib/Magnific-Popup/magnific-popup.css"> 
	<link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script type='text/javascript' src="../js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script type='text/javascript' src="../js/analytics.js"></script>
    <script type='text/javascript' src='../lib/iCheck/icheck.js'></script>
    <script type="text/javascript" src="http://www.youtube.com/player_api"></script>
    <script type="text/javascript" src="../lib/Magnific-Popup/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
    <script type='text/javascript' src="../js/main.js"></script>
    <script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
    <style>
	html,body { height: 100%; margin: 0; padding: 0;}
    </style>

  </head>
  <body>
<?
	if (stripos($_SERVER['REQUEST_URI'], "index.php"))
	{
?>
    <div class="menu clearfix">
      <a href="http://www.vdlcosmetic.com/m/index.jsp" class="logo" target="_blank"><img src="images/logo.png" width="170" alt=""/></a>
      <a href="#" class="menu_ham"  onclick="show_menu()"><img src="images/menu_ham.png" width="26" alt=""/></a>
    </div>
    <div id="mobile_menu" class="mobile_menu">
      <ul>
        <li><a href="#" onclick="screen_move('summer')"><img src="images/btn_summer.jpg"  alt=""/></a></li>
        <li><a href="#" onclick="screen_move('kit')"><img src="images/btn_vdl_kit.jpg"  alt=""/></a></li>
      </ul>
      <div class="btn_sns">
        <div class="inner_sns clearfix">
          <a href="#" onclick="sns_share('twitter');"><img src="images/btn_tw.jpg"  alt=""/></a>
          <a href="#" onclick="sns_share('facebook');"><img src="images/btn_fb.jpg"  alt=""/></a>
          <a href="#" onclick="sns_share('kakao');" id="kakao-link-btn"><img src="images/btn_kt.jpg"  alt=""/></a>
          <a href="#" onclick="sns_share('story');"><img src="images/btn_ks.jpg"  alt=""/></a>
        </div>
      </div>
    </div>
    <div class="mask"></div>

<?
	}
?>

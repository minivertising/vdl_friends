<?
	include_once "../config.php";
?>
<!doctype html>
<html>
  <head>
    <title>VDL KAKAO FRIENDS</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" />
    <meta property="og:title" content="VDL MEETS KAKAO FRIENDS">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.vdlxkakao.com/MOBILE/index.php" />
    <meta property="og:image" content="http://www.vdlxkakao.com/MOBILE/images/img_sns_share_new.jpg" />
    <meta property="og:description" content="VDL MEETS KAKAO FRIENDS! 친구에게 메시지를 보내고 컬렉션 제품이 담긴 VDL FRIENDS KIT를 받으세요! 참여만 해도 5천원 할인 쿠폰을 드려요.">

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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63183773-1', 'auto');
  ga('send', 'pageview');

</script>
    <style>
	html,body { height: 100%; margin: 0; padding: 0;}
    </style>

  </head>
  <body>
<?
	if (stripos($_SERVER['REQUEST_URI'], "index.php"))
	{
?>
    <div class="pop_icon">
        <div class="inner">
            <div class="close"><a href="#"><img src="images/btn_close_pop.png" width="23" alt=""/></a></div>
            <div class="img"><a href="http://www.vdl-metalcushion.com/?media=vdl_kakao" target="_blank"><img src="images/btn_metal.png" width="110" alt=""/></a></div>
        </div>
    </div>
    <div class="menu clearfix">
      <a href="index.php" class="logo"><img src="images/logo.png" width="170" alt=""/></a>
      <a href="#" class="menu_ham"  onclick="show_menu()"><img src="images/menu_ham.png" width="26" alt=""/></a>
    </div>
    <div id="mobile_menu" class="mobile_menu">
      <ul>
        <li><a href="#" onclick="screen_move('summer')"><img src="images/btn_summer.jpg"  alt=""/></a></li>
        <li><a href="#" onclick="screen_move('kit')"><img src="images/btn_vdl_kit.jpg"  alt=""/></a></li>
        <li><a href="http://www.vdlcosmetics.com/m/index.jsp" target="_blank"><img src="images/btn_home.jpg"  alt=""/></a></li>
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

<?
	}
?>

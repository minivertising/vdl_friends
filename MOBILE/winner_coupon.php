<?
	include_once "../config.php";

	$serial		= $_REQUEST['serial'];


	$query 		= "SELECT * FROM ".$_gl['member_info_table']." WHERE mb_serial='".$serial."'";
	$result 	= mysqli_query($my_db, $query);
	$member_info	= mysqli_fetch_array($result);

	$query2 		= "SELECT * FROM ".$_gl['member_info_table']." WHERE mb_phone='".$member_info['mb_phone']."'";
	$result2 	= mysqli_query($my_db, $query2);

	$flag	= "N";
	while($data	= mysqli_fetch_array($result2)){
		if ($data['mb_use'] == "Y")
		{
			$flag	= "Y";
			break;
		}else{
			$flag	= "N";
		}
	}

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=3.0" />
    <meta property="og:title" content="VDL MEETS KAKAO FRIENDS">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.mnv.kr/MOBILE/index.php" />
    <meta property="og:image" content="http://www.mnv.kr/MOBILE/images/img_sns_share.jpg" />
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

<body class="bg_coupon_body">
	<div class="block_coupon">
    	<div class="info_txt">
          <a class="btn_store" href="http://www.vdlcosmetics.com/m/story/store/offline.jsp" target="_blank"><img src="images/btn_store.png" /></a>
        </div>
<?
	if ($flag == "Y")
	{
?>
        <div class="btn_block"><a href="#"><img src="images/btn_coupon_used.png" /></a></div> <!-- 사용된 버튼 명 btn_coupon_used.png-->
<?
	}else{
?>
        <div class="btn_block"><a href="#" onclick="use_coupon('<?=$serial?>');"><img src="images/btn_coupon_use.png" /></a></div> <!-- 사용된 버튼 명 btn_coupon_used.png-->
<?
	}
?>
    	<div class="img_coupon_bg"><img src="images/bg_coupon.jpg" /></div>
    </div>

</body>
</html>

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
  <body class="bg_col_muji">
    <div id="pop_event_input" class="popup_wrap">
      <div class="p_mid p_wide p_position">
        <div class="block_close clearfix">
          <a href="index.php" class="btn_close"><img src="images/popup/btn_close.png" /></a>
        </div>
        <div class="block_content">
          <div class="c_menu clearfix">
            <div class="m_1 on"><a href="muzi_collection.php"><img src="images/popup/btn_menu_muji.png" /></a></div>
            <div class="m_2"><a href="apeach_collection.php"><img src="images/popup/btn_menu_peach.png" /></a></div>
            <div class="m_3"><a href="neo_collection.php"><img src="images/popup/btn_menu_neo.png" /></a></div>
          </div>
          <div class="p_content">
            <div class="inner_p">
              <div class="thumb muji">
                <div class="inner_thumb clearfix">
                  <div class="one"><a href="#" id="thumb_muzi1" onclick="m_sel_thumb('muzi','1');" class="selected"><img src="images/popup/thumb_muji_1.png" alt=""/></a></div>
                  <div class="one"><a href="#" id="thumb_muzi2" onclick="m_sel_thumb('muzi','2');"><img src="images/popup/thumb_muji_2.png" alt=""/></a></div>
                  <div class="one"><a href="#" id="thumb_muzi3" onclick="m_sel_thumb('muzi','3');"><img src="images/popup/thumb_muji_3.png" alt=""/></a></div>
                </div>
              </div>
              <div class="p_img" id="muzi_block1">
                <img src="images/popup/img_muji_1.png" alt=""/>
              </div>
              <div class="p_img" id="muzi_block2" style="display:none">
                <img src="images/popup/img_muji_2.png" alt=""/>
              </div>
              <div class="p_img" id="muzi_block3" style="display:none">
                <img src="images/popup/img_muji_3.png" alt=""/>
              </div>
            </div>
          </div>
          <div class="p_txt" id="muzi_txt_block1">
            <img src="images/popup/txt_muji_1.png" alt=""/>
          </div>
          <div class="p_txt" id="muzi_txt_block2" style="display:none">
            <img src="images/popup/txt_muji_2.png" alt=""/>
          </div>
          <div class="p_txt" id="muzi_txt_block3" style="display:none">
            <img src="images/popup/txt_muji_3.png" alt=""/>
          </div>
        </div>
      </div>
      <div class="p_mid_bg_chrc" style="display:none;">
        <img src="images/popup/bg_chrc.png"  width="160" alt=""/>
      </div>
    </div>
</body>
</html>

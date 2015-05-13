<?
	include_once "./header.php";
?>
<!--------------------- 이벤트 메세지 입력 팝업 --------------------->
<div id="pop_event_input" class="popup_wrap">
  <div class="p_mid p_position">
    <div class="block_close clearfix">
      <a href="index.php" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title title_input"><img src="images/popup/title_mss.png" /></div>
        <div class="block_input_bg"></div>
        <div class="block_input clearfix">
          <div class="label"><img src="images/popup/label_to.png" /></div>
          <div class="input_txt"><input type="text" name="mb_receive" id="mb_receive"></div>
        </div>
        <div class="block_input clearfix">
          <div class="label"><img src="images/popup/label_mss.png" /></div>
          <div class="input_txt"><textarea name="mb_message" id="mb_message"></textarea></div>
        </div>
        <div class="block_input clearfix">
          <div class="label"><img src="images/popup/label_from.png" /></div>
          <div class="input_txt"><input type="text" name="mb_send" id="mb_send"></div>
        </div>
        <div class="block_btn send">
          <a href="#" onclick="m_input_message();" class="common_2"><img src="images/popup/btn_send.png" /></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
  <div class="p_mid_bg_chrc">
    <img src="images/popup/bg_chrc.png"  width="160" alt=""/>
  </div>
</div>
<!--------------------- 이벤트 메세지 입력 팝업 --------------------->
<?
	include_once   "./popup_div.php";
?>
</body>
</html>
<script type="text/javascript">
var chk_ins	= 0;
var chk_ins2	= 0;
var cha_gubun = 0;
var cha_gubun1 = 0;
var cha_gubun2 = 0;
var cha_gubun3 = 0;
var interval_id1;
var interval_id2;
var interval_id3;
$(document).ready(function() {
	// 팝업 jQuery 스타일
	$('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',
		fixedContentPos: true,
		fixedBgPos: true,
		overflowY: 'hidden',
		closeBtnInside: true,
		//preloader: false,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in',
		showCloseBtn : false,
		closeOnBgClick: true,
		callbacks: {
			open: function() {
			},
			close: function() {
				chk_ins = 0;
				$("#mb_receive").val("");
				$("#mb_send").val("");
				$("#mb_message").val("");
			}
		}
	});
});


</script>
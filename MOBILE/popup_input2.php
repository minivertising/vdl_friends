<?
	include_once "./header.php";
?>
<!--------------------- 이벤트 메세지 입력(이름, 전화번호) 팝업 --------------------->
<div id="pop_event_input2" class="popup_wrap">
  <div class="p_mid p_wide p_position">
    <div class="block_close clearfix">
      <a href="#pop_close_confirm" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title title_input"><img src="images/popup/title_input.png" /></div>
        <div class="block_input_bg"></div>
        <div class="block_input clearfix">
          <div class="label"><img src="images/popup/label_name.png" /></div>
          <div class="input_txt name"><input type="text" name="mb_name" id="mb_name"></div>
        </div>
        <div class="block_input clearfix">
          <div class="label"><img src="images/popup/label_phone.png" /></div>
          <div class="input_txt">
            <div class="inner_phone clearfix">
              <div class="in_phone"><input type="text" name="mb_phone1" id="mb_phone1"></div>
              <div class="in_dash">-</div>
              <div class="in_phone"><input type="text" name="mb_phone2" id="mb_phone2"></div>
              <div class="in_dash">-</div>
              <div class="in_phone"><input type="text" name="mb_phone3" id="mb_phone3"></div>
            </div>
          </div>
        </div>
        <div class="bar"></div>
        <div class="block_ckeck">
          <div class="inner_check clearfix">
            <div class="in_check"><input type="checkbox" name="use_agree" id="use_agree"></div>
            <div class="label_check">개인정보활용</div>
            <div class="btn_check"><a href="#pop_use_agree" class="popup-with-zoom-anim"><img src="images/popup/btn_detail.png" /></a></div>
          </div>
          <div class="inner_check clearfix">
            <div class="in_check"><input type="checkbox" name="privacy_agree" id="privacy_agree"></div>
            <div class="label_check">개인 정보 취급 위탁 동의</div>
            <div class="btn_check"><a href="#pop_privacy_agree" class="popup-with-zoom-anim"><img src="images/popup/btn_detail.png" /></a></div>
          </div>
          <div class="inner_check clearfix">
            <div class="in_check"><input type="checkbox" name="adver_agree" id="adver_agree"></div>
            <div class="label_check">광고성 정보 전송 동의  </div>
            <div class="btn_check"><a href="#pop_adver_agree" class="popup-with-zoom-anim"><img src="images/popup/btn_detail.png" /></a></div>
          </div>
        </div>
        <div class="txt_notice">
          <img src="images/popup/txt_notice_gift.png" />
        </div>
        <div class="block_btn">
          <a href="#" onclick="input_message2();" class="common_3"><img src="images/popup/btn_input.png" /></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
  <div class="p_mid_bg_chrc" style="display:none;">
    <img src="images/popup/bg_chrc.png"  width="160" alt=""/>
  </div>
</div>
<!--------------------- 이벤트 메세지 입력(이름, 전화번호) 팝업 --------------------->
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

	// 체크박스 스타일 설정
	$('.block_ckeck input').on('ifChecked ifUnchecked', function(event){
		//alert(this.id);
	}).iCheck({
		checkboxClass: 'icheckbox_flat-yellow',
		radioClass: 'iradio_square-yellow',
		increaseArea: '0%'
	});

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
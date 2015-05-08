<?
	include_once   "./header.php";

	include_once   "./popup_div.php";
?>
    <div id="contents_wrap">
      <input type="hidden" name="mb_idx" id="mb_idx" value="">
      <div class="section" data-anchor="slide1" style="background:red">
        <h1>Funnier Than Ever!</h1>
        <h2>VDL MEET KAKAO FRIENDS</h2>
        <h3>귀엽고 깜찍한 카카오 프렌즈와 감각적인 VDL과의 만남!</h3>
        <h3>더욱 유쾌해진 VDL x 카카오프렌즈 Summer Collection으로</h3>
        <h3>여러분의 기분도 스타일도 살려보세요!</h3>
      </div>
      <div class="section" data-anchor="slide2" style="background:gray">
        <h1>Funnier Than Ever!</h1>
        <h2>VDL 플러스 친구 5천원 할인 쿠폰!</h2>
        <h3>VDL 플러스 친구들에게만 드리는 특별한 가격할인!</h3>
        <h3>지금 VDL과 플러스 친구를 맺으시면 5천원 할ㄹ인 쿠폰을 드려요.</h3>
        <h3>플친 맺고 지속적으로 플친들에게만 드리는 더 많은 혜택을 받아 보세요!</h3>
        <a href="#" onclick="show_event()">플친 맺고 5천원 할인쿠폰 받기</a>
      </div>
      <div class="section" data-anchor="slide3" style="background:orange">
        <h1>네오의 VDL</h1>
      </div>
      <div class="section" data-anchor="slide4" style="background:blue">
        <h1>어피치의 VDL</h1>
      </div>
      <div class="section" data-anchor="slide5" style="background:green">
        <h1>단무지의 VDL</h1>
      </div>
    </div>
  </body>
</html>
<script type="text/javascript">
var chk_ins	= 0;
var chk_ins2	= 0;
$(document).ready(function() {
	$('#contents_wrap').fullpage({
		menu: '#navi_menu',
		anchors:['slide1','slide2','slide3','slide4','slide5'],
		navigation: true,
		navigationPosition: 'right',
		navigationTooltips: ['111', '222', '333', '444', '555'],
		css3: true,
		scrollingSpeed: 700,
		autoScrolling: true,
		fitToSection: true,
		scrollBar: false,
		easing: 'easeInOutCubic',
		easingcss3: 'ease',
		loopBottom: true,
		loopTop: false,
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
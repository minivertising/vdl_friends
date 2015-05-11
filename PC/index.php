<?
	include_once   "./header.php";

	include_once   "./popup_div.php";
?>
<style type="text/css">
  .bx-wrapper .bx-pager {
    bottom: -95px;
  }
  
  .bx-wrapper .bx-pager a {
    border: solid #ccc 1px;
    display: block;
    margin: 0 5px;
    padding: 3px;
  }
  
  .bx-wrapper .bx-pager a:hover,
  .bx-wrapper .bx-pager a.active {
    border: solid #5280DD 1px;
  }
  
  .bx-wrapper {
    margin-bottom: 120px;
  }
</style>
    <div id="contents_wrap">
      <input type="hidden" name="mb_idx" id="mb_idx" value="">
      <div style="height:1000px;background:red">
        <h1>VDL MEET KAKAO FRIENDS</h1>
        <h3>재기발랄한 카카오 프렌즈와</h3>
        <h3>감각적인 브이디엘이 만나 선보이는</h3>
        <h3>키치 꾸뛰르 감성의 써머 컬렉션</h3>
      </div>
      <div style="height:1000px;background:gray">
        <div id="youtube_div" style="width:700px;height:400px;position:absolute;left:50%;margin-left:-350px;top:100px">
          <iframe allowfullscreen="1" src="<?=$_gl['youtube_url']?>" frameborder="0" id="ytplayer" class="ytplayer" style="width:100%;height:100%;"></iframe>
        </div>
        <div>
          <a href="#" data-mfp-src="#muzi_div" class="popup-with-zoom-anim" style="background:none;outline: none;">단무지의 VDL</a>
          <a href="#" data-mfp-src="#apeach_div" class="popup-with-zoom-anim" style="background:none;outline: none;">어피치의 VDL</a>
          <a href="#" data-mfp-src="#neo_div" class="popup-with-zoom-anim" style="background:none;outline: none;">네오의 VDL</a>
        </div>
      </div>
      <div style="height:1000px;background:orange">
        <h1>Funnier Than Ever!</h1>
        <h2>VDL 플러스 친구 5천원 할인 쿠폰!</h2>
        <h3>VDL 플러스 친구들에게만 드리는 특별한 가격할인!</h3>
        <h3>지금 VDL과 플러스 친구를 맺으시면 5천원 할ㄹ인 쿠폰을 드려요.</h3>
        <h3>플친 맺고 지속적으로 플친들에게만 드리는 더 많은 혜택을 받아 보세요!</h3>
        <a href="#" onclick="show_event()">플친 맺고 5천원 할인쿠폰 받기</a>
      </div>
      <div style="height:1000px;background:green">
        <h1>VDL 플러스 친구 5천원 할인 쿠폰!</h1>
        <div>하단 푸터 내용</div>

      </div>
    </div>
  </body>
</html>
<script type="text/javascript">
var chk_ins	= 0;
var chk_ins2	= 0;
$(document).ready(function() {

	// 체크박스 스타일 설정
	$('.zoom-anim-dialog input').on('ifChecked ifUnchecked', function(event){
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
				$(".bx-pager").css("bottom","-95px");
				$(".bx-pager > a").css("border","solid #ccc 1px");
				$(".bx-pager > a").css("display","block");
				$(".bx-pager > a").css("margin","0 5px");
				$(".bx-pager > a").css("padding","3px");
				$(".bx-wrapperr").css("margin-bottom","120px");
				$('.bxslider').bxSlider({
					buildPager: function(slideIndex){
						switch(slideIndex){
							case 0:
								return '<img src="./images/thum_muzi.png">';
							case 1:
								return '<img src="./images/thum_apeach.png">';
							case 2:
								return '<img src="./images/thum_neo.png">';
						}
					}
				});
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
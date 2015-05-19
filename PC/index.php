<?
	include_once   "./header.php";
?>
<div id="contents_wrap" class="contents_wrap">
  <input type="hidden" name="mb_idx" id="mb_idx" value="">
  <div class="sec_summer">
    <div class="title"><img src="images/title.png" alt=""/></div>
  </div>

  <div class="sec_movie">
    <div id="youtube_div">
      <iframe allowfullscreen="1" src="<?=$_gl['youtube_url']?>" frameborder="0" id="ytplayer" class="ytplayer" style="width:100%;height:100%;"></iframe>
    </div>
    <div class="charc clearfix">
      <div class="c_one">
        <a href="#" data-mfp-src="#muzi_div" class="popup-with-zoom-anim" style="background:none;outline: none;">
          <img src="images/chra_1_1.png" alt="" id="muzi_cha" onmouseover="stop_cha('1')" onmouseout="move_cha('1')"/>
        </a>
      </div>
      <div class="c_one">
        <a href="#" data-mfp-src="#apeach_div" class="popup-with-zoom-anim" style="background:none;outline: none;">
          <img src="images/chra_2_1.png" alt="" id="peach_cha" onmouseover="stop_cha('2')" onmouseout="move_cha('2')"/>
        </a>
      </div>
      <div class="c_one">
        <a href="#" data-mfp-src="#neo_div" class="popup-with-zoom-anim" style="background:none;outline: none;">
          <img src="images/chra_3_1.png" alt="" id="neo_cha" onmouseover="stop_cha('3')" onmouseout="move_cha('3')"/>
        </a>
      </div>
    </div>
  </div>

  <div class="sec_message">
    <div class="title"><img src="images/title_vdl_kit.png" alt=""/></div>
    <div class="event">
      <div class="inner">
        <div class="btn_block"><a href="#" data-mfp-src="#pop_event_input" class="popup-with-zoom-anim"  style="outline: none;"><img src="images/btn_m_send.png" alt=""/></a></div>
      </div>
    </div>
    <div class="howto"><img src="images/img_howto.png" alt=""/></div>
  </div>

  <div class="sec_plus">
    <img src="images/img_plus.png" alt=""/>
  </div>

  <div class="footer">
    <img src="images/footer.jpg" alt=""/>
  </div>

<!--quickmenu-->
  <div class="quickmenu">
    <a href="#"><img src="images/btn_top.png" alt=""/></a>
  </div>
<!--quickmenu-->
</div>
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
// quick menu
var quickTop;
$(window).scroll(function() {
	quickTop = ($(window).height()-$('.quickmenu').height()) /2;
	$('.quickmenu').stop().animate({top:$(window).scrollTop()+quickTop},400,'easeOutExpo');
	
	if ($(window).scrollTop() < 1640)
	{
		$("#summer_header_menu").attr('src','images/btn_menu_summer.png')
		$("#kit_header_menu").attr('src','images/btn_menu_kit_off.png')
	}else{
		$("#summer_header_menu").attr('src','images/btn_menu_summer_off.png')
		$("#kit_header_menu").attr('src','images/btn_menu_kit.png')
	}
});

$(document).ready(function() {

	if ($(window).scrollTop() < 1640)
	{
		$("#summer_header_menu").attr('src','images/btn_menu_summer.png')
		$("#kit_header_menu").attr('src','images/btn_menu_kit_off.png')
	}else{
		$("#summer_header_menu").attr('src','images/btn_menu_summer_off.png')
		$("#kit_header_menu").attr('src','images/btn_menu_kit.png')
	}

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
		closeOnBgClick: false,
		callbacks: {
			open: function() {
			},
			close: function() {
				chk_ins = 0;
				$("#mb_receive").val("");
				$("#mb_send").val("");
				$("#mb_message").val("");
				$("#mb_name").val("");
				$("#mb_phone1").val("010");
				$("#mb_phone2").val("");
				$("#mb_phone3").val("");
				$('input').iCheck('uncheck');
			}
		}
	});


	$( '.quickmenu' ).click( function() {
		$( 'html, body' ).animate( { scrollTop : 0 }, 800 );
			return false;
	} );
	// 퀵메뉴 기본 위치
	var quick_height	= $(window).height()/2;
	$('.quickmenu').css("top",quick_height);

	interval_id	= setInterval(function(){
		if (cha_gubun == 0)
		{
			$('#muzi_cha').attr("src","images/chra_1_2.png");
			$('#peach_cha').attr("src","images/chra_2_2.png");
			$('#neo_cha').attr("src","images/chra_3_2.png");
			cha_gubun = 1;
		}else{
			$('#muzi_cha').attr("src","images/chra_1_1.png");
			$('#peach_cha').attr("src","images/chra_2_1.png");
			$('#neo_cha').attr("src","images/chra_3_1.png");
			cha_gubun = 0;
		}
	},800);


});



</script>
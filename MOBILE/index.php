<?
	include_once "./header.php";
?>
<div class="block_top">
  <div class="title">
    <img src="images/title_vdl.png"  alt=""/>
  </div>
  <div class="btn_main_block">
  	<div class="inner clearfix">
    	<a href="#" onclick="screen_move2('summer')"><img src="images/btn_summer.png"  alt="" /></a>
        <a href="#" onclick="screen_move2('kit')"><img src="images/btn_event_go.png"  alt="" /></a>
    </div>
  </div>
  <div class="top_bg">
    <img src="images/top_bg.jpg"  alt=""/>
  </div>
</div>

<div class="block_movie" style="margin-top:-4px">
  <iframe allowfullscreen="1" src="<?=$_gl['youtube_url']?>" frameborder="0" id="ytplayer" class="ytplayer"></iframe>
</div>

<div class="block_chrc">
  <div class="inner_chrc clearfix">
    <div class="ch_cm ch_1">
      <a href="muzi_collection.php"><img src="images/img_ch_1_1.png"  alt="" id="muzi_cha"/></a>
    </div>
    <div class="ch_cm ch_2">
      <a href="apeach_collection.php"><img src="images/img_ch_2_1.png"  alt="" id="peach_cha"/></a>
    </div>
    <div class="ch_cm ch_3">
      <a href="neo_collection.php"><img src="images/img_ch_3_1.png"  alt="" id="neo_cha"/></a>
    </div>
  </div>
</div>

<div class="block_vdl_kit">
  <div class="title">
    <img src="images/title_kit.png" alt=""/>
  </div>
  <div class="btn_block">
    <!-- <a href="#" data-mfp-src="#pop_event_input" class="popup-with-zoom-anim"  style="outline: none;"><img src="images/btn_send.png" alt=""/></a> -->
    <a href="popup_input1.php" style="outline: none;"><img src="images/btn_send.png" alt=""/></a>
  </div>
  <div class="img_event">
    <img src="images/img_event.png" alt=""/>
  </div>
</div>

<div class="block_howto">
  <img src="images/img_howto.jpg" alt=""/>
</div>

<div class="block_plus">
  <div class="btn_block">
    <a href="http://plus.kakao.com/home/@vdl" target="_blank"><img src="images/btn_plus.png" alt=""/></a>
  </div>
  <div class="img_plus">
    <img src="images/img_plus.jpg" alt=""/>
  </div>
</div>

<div class="footer">
  <img src="images/footer.jpg"  alt=""/>
</div>
<div class="mask"></div>
<?
	include_once   "./popup_div.php";
?>
</body>
</html>
<script type="text/javascript">
var chk_ins	= 0;
var chk_ins2	= 0;
var cha_gubun = 0;
var cha_back_gubun = 0;
var cha_gubun1 = 0;
var cha_gubun2 = 0;
var cha_gubun3 = 0;
var interval_id1;
var interval_id2;
var interval_id3;
$(document).ready(function() {
	Kakao.init('b3ed5b7dca4e906387247f6a86d982e5');
	var width = $(window).width();
	var youtube_height = (width / 16) * 9;
	$("#ytplayer").width(width);
	$("#ytplayer").height(youtube_height);

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
			},
			close: function() {
				chk_ins = 0;
				$("#mb_receive").val("");
				$("#mb_send").val("");
				$("#mb_message").val("");
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
			$('#muzi_cha').attr("src","images/img_ch_1_1.png");
			$('#peach_cha').attr("src","images/img_ch_2_1.png");
			$('#neo_cha').attr("src","images/img_ch_3_1.png");
			cha_gubun = 1;
			cha_back_gubun = 0;
		}else if (cha_gubun == 1){
			$('#muzi_cha').attr("src","images/img_ch_1_2.png");
			$('#peach_cha').attr("src","images/img_ch_2_2.png");
			$('#neo_cha').attr("src","images/img_ch_3_2.png");
			if (cha_back_gubun == 0)
				cha_gubun = 2;
			else
				cha_gubun = 0;
		}else{
			$('#muzi_cha').attr("src","images/img_ch_1_3.png");
			$('#peach_cha').attr("src","images/img_ch_2_3.png");
			$('#neo_cha').attr("src","images/img_ch_3_3.png");
			cha_gubun = 1;
			cha_back_gubun = 1;
		}
	},800);




	$(".mask").click(function(){
		$('#mobile_menu').animate({right:-200},300,'linear',function(){
			$("#mobile_menu").hide();
			$(".mask").fadeOut(300);
			$(window).off(".disableScroll");
		});
	});
});

function screen_move(param)
{
	if (param == "summer")
	{
		$('#mobile_menu').animate({right:-200},300,'linear',function(){
			$("#mobile_menu").hide();
			$(".mask").fadeOut(100);
			$( 'html, body' ).animate({ scrollTop: $(".block_top").height()},500);
			$(window).off(".disableScroll");
		});
		
	}else{
		$('#mobile_menu').animate({right:-200},300,'linear',function(){
			$("#mobile_menu").hide();
			$(".mask").fadeOut(100);
			$( 'html, body' ).animate({ scrollTop: $(".block_top").height() + $(".block_movie").height() + $(".block_chrc").height() + 8},500);
			$(window).off(".disableScroll");
		});
	}
}

function screen_move2(param)
{
	if (param == "summer")
	{
		$( 'html, body' ).animate({ scrollTop: $(".block_top").height()},500);
	}else{
		$( 'html, body' ).animate({ scrollTop: $(".block_top").height() + $(".block_movie").height() + $(".block_chrc").height() + 8},500);
	}
}

</script>

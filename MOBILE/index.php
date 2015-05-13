<?
	include_once "./header.php";
?>
  <body>
<div class="menu clearfix">
   <a href="http://www.vdlcosmetic.com/m/index.jsp" class="logo" target="_blank"><img src="images/logo.png" width="170" alt=""/></a>
   <a href="#" class="menu_ham"  onclick="show_menu()"><img src="images/menu_ham.png" width="26" alt=""/></a>
</div>

    <div class="block_top">
        <div class="title">
            <img src="images/title_vdl.png"  alt=""/>
        </div>
        <div class="top_bg">
        	<img src="images/top_bg.jpg"  alt=""/>
        </div>
    </div>
    
    <div class="block_movie">
      <iframe allowfullscreen="1" src="<?=$_gl['youtube_url']?>" frameborder="0" id="ytplayer" class="ytplayer"></iframe>
    </div>
    
    <div class="block_chrc">
    	<div class="inner_chrc clearfix">
        	<div class="ch_cm ch_1">
            	<a href="#"><img src="images/img_ch_1.png"  alt=""/></a>
            </div>
        	<div class="ch_cm ch_2">
            	<a href="#"><img src="images/img_ch_2.png"  alt=""/></a>
            </div>
        	<div class="ch_cm ch_3">
            	<a href="#"><img src="images/img_ch_3.png"  alt=""/></a>
            </div>
        </div>
    </div>
    <div class="block_vdl_kit">
    	<div class="title">
        	<img src="images/title_kit.png" alt=""/>
        </div>
        <div class="btn_block">
        	<a href="#"><img src="images/btn_send.png" alt=""/></a>
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
        	<a href="#"><img src="images/btn_plus.png" alt=""/></a>
        </div>
    	<div class="img_plus">
        	<img src="images/img_plus.jpg" alt=""/>
        </div>
    </div>
    <div class="footer">
      <img src="images/footer.jpg"  alt=""/>
    </div>
    
    
  
  <div id="mobile_menu" class="mobile_menu" style="width:227px">
    <ul>
      <li><a href="#">summer</a></li>
    </ul>
  </div>
  <div class="mask"></div>
 </body>
</html>

	<script type="text/javascript">


    // 유튜브 반복 재생
    var controllable_player,start, 
    statechange = function(e){
		if (e.data === 0)
		{
			$("#video_control").text('일시정지');
			controllable_player.seekTo(0); controllable_player.playVideo();
		}
		else if (e.data === 1)
		{
			//controllable_player.pauseVideo();
			$("#video_control").text('일시정지');
		}
		else if (e.data === 2)
		{
			//controllable_player.playVideo();
			$("#video_control").text('재생');
		}
		else if (e.data === 3)
		{
			//alert('4444');
		}
    	//controllable_player.playVideo(); 
    };
    function onYouTubeIframeAPIReady() {
		controllable_player = new YT.Player('ytplayer', {events: {'onStateChange': statechange}}); 
    }

    if(window.opera){
		addEventListener('load', onYouTubeIframeAPIReady, false);
    }
	setTimeout(function(){
    	if (typeof(controllable_player) == 'undefined'){
    		onYouTubeIframeAPIReady();
    	}
    }, 1000)


	$(window).resize(function(){
		var width = $(window).width();
		//var height = $(window).height();

		var youtube_height = (width / 16) * 9;
		$("#ytplayer").width(width);
		$("#ytplayer").height(youtube_height);
	});

	$(document).ready(function() {
		//처음 화면 크기에 따라 영상및 커버 크기 변경
		var width = $(window).width();
		var height = $(window).height();
		var youtube_width = width;
		$("#ytplayer").width(width);
		$(".cover_area").width($("#ytplayer").width());
		var youtube_height = (width / 16) * 9;
		$("#ytplayer").height(youtube_height);
		$(".cover_area").height($("#ytplayer").height());

		$("#video_control").click(function(){
			var control_txt	= $("#video_control").text();
			if (control_txt == "일시정지"){
				controllable_player.pauseVideo();
				return false;
			}else{
				controllable_player.playVideo(); 
				return false;
			}
		});

		var move_gift = ($(".block_top").height() +$(".navi_btn_block").height() +$("#ytplayer").height() + $(".sns_area").height()) * 1.1;
		var move_product = move_gift + $(".bg_cloud").height() * 1.1;
		$( '.view_event' ).click( function() {
			$( 'html, body' ).animate({ scrollTop: move_gift},500);
			return false;
		} );

		$( '.view_product' ).click( function() {
			$( 'html, body' ).animate({ scrollTop: move_product},500);
			return false;
		} );


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
			callbacks: {
				close: function() {
					/*$("#mb_name").val("");
					$("#mb_phone").val("");
					$('input').iCheck('uncheck');
					$("#postcode1").val("");
					$("#postcode2").val("");
					$("#addr1").val("");
					$("#addr2").val("");
					$("#post_div").hide();*/
				}
			}
		});

		$('.first-popup-link').magnificPopup({
			closeBtnInside:true
		});

		var magnificPopup = $.magnificPopup.instance;

		$(".mask").click(function(){
			$('#mobile_menu').animate({right:-200},300,'linear',function(){
				$("#mobile_menu").hide();
				$(".mask").fadeOut(300);
			});
		});

	});

	function screen_move(param)
	{
		if (param == "event")
		{
			//$( 'html, body' ).animate({ scrollTop: $(".block_game").height()},500);
			//$( 'html, body' ).animate({ scrollTop: $(".bg_top").height()},500);
			
			$('#mobile_menu').animate({right:-200},300,'linear',function(){
				$("#mobile_menu").hide();
				$(".mask").fadeOut(100);
				$( 'html, body' ).animate({ scrollTop: $(".bg_top").height()},500);
			});
			
		}else{
			$('#mobile_menu').animate({right:-200},300,'linear',function(){
				$("#mobile_menu").hide();
				$(".mask").fadeOut(100);
				$( 'html, body' ).animate({ scrollTop: $(".bg_top").height() + $(".offevent1").height() + $(".offevent2").height()},500);
			});
		}
	}
	</script>

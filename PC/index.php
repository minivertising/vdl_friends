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
              	<img src="images/chra_1_2.png" alt=""/>
              </a>
          </div>
          
          <div class="c_one">
          	<a href="#" data-mfp-src="#apeach_div" class="popup-with-zoom-anim" style="background:none;outline: none;">
          		<img src="images/chra_2_1.png" alt=""/>
            </a>
          </div>
          <div class="c_one">
	          <a href="#" data-mfp-src="#neo_div" class="popup-with-zoom-anim" style="background:none;outline: none;">
              	<img src="images/chra_3_1.png" alt=""/>
              </a>
          </div>
        </div>
      </div>
      
      
      <div class="sec_message">
      	<div class="title"><img src="images/title_vdl_kit.png" alt=""/></div>
        <div class="event">
        	<div class="inner">
        		<div class="btn_block"><a href="#"><img src="images/btn_m_send.png" alt=""/></a></div>
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
<?
	include_once "../config.php";

	$serial		= $_REQUEST['serial'];

	if ($gubun == "MOBILE")
		echo "<script>location.href='http://www.vdlxkakao.com/MOBILE/message.php?serial=".$serial."'</script>";

	$query 		= "SELECT * FROM ".$_gl['member_info_table']." WHERE mb_serial='".$serial."'";
	$result 	= mysqli_query($my_db, $query);
	$member_info	= mysqli_fetch_array($result);

	include_once   "./header.php";

	//$query 		= "UPDATE ".$_gl['member_info_table']." SET mb_join='Y', mb_joindate='".date('Y-m-d H:i:s')."' WHERE mb_serial='".$serial."'";
	//$result 	= mysqli_query($my_db, $query);

	//if ($result)
		//echo "<script>location.href='http://plus.kakao.com/home/@vdl';</script>";
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63183773-1', 'auto');
  ga('send', 'pageview');

</script>
    <div class="sec_summer_coupon">
      <div class="title">
        <div class="inner_title">
          <div class="qr">
            <div class="frame"><img src="images/qr_frame.png" alt=""/></div>
            <div class="img"><img src="<?=$member_info['mb_qr']?>" alt="" width="140" height="140"/></div>
          </div>
          <div class="url"><?=$member_info['mb_url']?></div>
        </div>
      </div>
      <div class="btn_block">
        <a href="http://www.vdlxkakao.com/?media=message" target="_blank"><img src="images/btn_go_event.png" alt=""/></a>
      </div>
    </div>

  </body>
</html>
<script type="text/javascript">
$(document).ready(function() {
	$(".sec_summer_coupon").width($(window).width());
	$(".sec_summer_coupon").height($(window).height());
});

$(window).resize(function(){
	$(".sec_summer_coupon").width($(window).width());
	$(".sec_summer_coupon").height($(window).height());
});
</script>
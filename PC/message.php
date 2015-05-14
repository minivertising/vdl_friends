<?
	include_once "../config.php";

	$serial		= $_REQUEST['serial'];

	if ($gubun == "MOBILE")
		echo "<script>location.href='http://www.mnv.kr/MOBILE/message.php?serial=".$serial."'</script>";

	$query 		= "SELECT * FROM ".$_gl['member_info_table']." WHERE mb_serial='".$serial."'";
	$result 	= mysqli_query($my_db, $query);
	$member_info	= mysqli_fetch_array($result);

	include_once   "./header.php";

	//$query 		= "UPDATE ".$_gl['member_info_table']." SET mb_join='Y', mb_joindate='".date('Y-m-d H:i:s')."' WHERE mb_serial='".$serial."'";
	//$result 	= mysqli_query($my_db, $query);

	//if ($result)
		//echo "<script>location.href='http://plus.kakao.com/home/@vdl';</script>";
?>
      <div class="sec_summer_coupon">
        <div class="title">
        	<div class="inner_title">
            	<div class="qr"><img src="<?=$member_info['mb_qr']?>" alt="" width="163" height="163"/></div>
        		<div class="url"><?=$member_info['mb_url']?></div>
            </div>
        </div>
        <div class="btn_block">
        	<a href="http://www.mnv.kr/?media=message" target="_blank"><img src="images/btn_go_event.png" alt=""/></a>
        </div>
      </div>

  </body>
</html>

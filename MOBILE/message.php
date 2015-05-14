<?
	include_once   "./header.php";

	$serial		= $_REQUEST['serial'];


	$query 		= "SELECT * FROM ".$_gl['member_info_table']." WHERE mb_serial='".$serial."'";
	$result 	= mysqli_query($my_db, $query);
	$member_info	= mysqli_fetch_array($result);

	//$query 		= "UPDATE ".$_gl['member_info_table']." SET mb_join='Y', mb_joindate='".date('Y-m-d H:i:s')."' WHERE mb_serial='".$serial."'";
	//$result 	= mysqli_query($my_db, $query);

	//if ($result)
		//echo "<script>location.href='http://plus.kakao.com/home/@vdl';</script>";
?>
    <div class="block_mms_received">
      <div class="mms">
        <div class="inner_mms">
          <div class="title_to clearfix">
            <div class="label">TO.</div>
            <div class="txt"><?=$member_info['mb_receive']?></div>
          </div>
          <div class="title_mss">
          <?=$member_info['mb_message']?>
          </div>
          <div class="title_from">
            <div class="label">FROM.</div>
            <div class="txt"><?=$member_info['mb_send']?></div>
          </div>
        </div>
      </div>
      <div class="btn_block"><a href="#" onclick="go_friends('<?=$serial	?>')"><img src="images/btn_plus_go.png" /></a></div>
      <div class="img_mms_bg"><img src="images/bg_mss.jpg" /></div>
    </div>
  </body>
</html>





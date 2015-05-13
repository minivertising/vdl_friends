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
    <div>
      <h1>Funnier Than Ever!</h1>
      <h1>친구야 VDL과 플친 맺고 VDL FRIENDS KIT를 받자!</h1>
      <input type="text" name="receive_txt" id="receive_txt" value="<?=$member_info['mb_receive']?>" readonly><br />
      <textarea name="message_txt" id="message_txt" readonly><?=$member_info['mb_message']?></textarea>
      <input type="text" name="send_txt" id="send_txt" value="<?=$member_info['mb_send']?>" readonly><br />
      <a href="#" onclick="go_friends('<?=$serial	?>')">플러스 친구 맺기</a>
    </div>
  </body>
</html>

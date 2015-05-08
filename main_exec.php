<?php
include_once "config.php";

switch ($_REQUEST['exec'])
{
	case "insert_message" :
		$mb_receive		= $_REQUEST['mb_receive'];
		$mb_message	= $_REQUEST['mb_message'];
		$mb_send		= $_REQUEST['mb_send'];

		$query 		= "INSERT INTO ".$_gl['member_info_table']."(mb_ipaddr, mb_send, mb_message, mb_receive, mb_gubun, mb_regdate) values('".$_SERVER['REMOTE_ADDR']."','".$mb_send."','".$mb_message."','".$mb_receive."','".$gubun."','".date("Y-m-d H:i:s")."')";
		$result 	= mysqli_query($my_db, $query);

		$ins_idx = mysqli_insert_id($my_db);
		//if ($result)
		//	$flag = "Y";
		//else
		//	$flag = "N";
		$_SESSION['ss_idx'] = $ins_idx;

		echo $ins_idx;
	break;

	case "insert_message2" :
		$mb_name		= $_REQUEST['mb_name'];
		$mb_phone		= $_REQUEST['mb_phone'];
		$mb_idx			= $_SESSION['ss_idx'];

		//$query 		= "INSERT INTO ".$_gl['member_info_table']."(mb_ipaddr, mb_send, mb_message, mb_receive, mb_gubun, mb_regdate) values('".$_SERVER['REMOTE_ADDR']."','".$mb_send."','".$mb_message."','".$mb_receive."','".$gubun."','".date("Y-m-d H:i:s")."')";
		$query 		= "UPDATE ".$_gl['member_info_table']." SET mb_name='".$mb_name."', mb_phone='".$mb_phone."' WHERE idx='".$mb_idx."'";
		$result 	= mysqli_query($my_db, $query);

		if ($result)
			$flag = "Y";
		else
			$flag = "N";

		echo $query;
	break;

	case "insert_share_info" :
		$media	= $_REQUEST['media'];

		$query 		= "INSERT INTO ".$_gl['share_info_table']."(sns_media, sns_ipaddr, sns_gubun, sns_regdate) values('".$media."','".$_SERVER['REMOTE_ADDR']."','".$gubun."','".date("Y-m-d H:i:s")."')";
		$result 	= mysqli_query($my_db, $query);

		if ($result)
			$flag = "Y";
		else
			$flag = "N";

		echo $flag;

	break;

}
?>
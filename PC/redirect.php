<?
	include_once "../config.php";

	$serial		= $_REQUEST['serial'];

	$query 		= "UPDATE ".$_gl['member_info_table']." SET mb_join='Y' WHERE mb_serial='".$serial."'";
	$result 	= mysqli_query($my_db, $query);

	if ($result)
		echo "<script>location.href='http://plus.kakao.com/home/@vdl';</script>";
?>
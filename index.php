<?
	include_once "config.php";

	//unset($media);
	$media	= $_REQUEST['media'];

	//$_SESSION['ss_media'] = $media;

	VK_InsertTrackingInfo($media, $gubun);

	if($gubun == "MOBILE")
	{
		Header("Location:http://www.vdlxkakao.com/MOBILE/index.php");
		exit;
	}else{
		Header("Location:http://www.vdlxkakao.com/PC/index.php");
		exit;
	}

?>

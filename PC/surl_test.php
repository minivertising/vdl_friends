<?php
	include_once "../config.php";

	$key = "713869efeadb5730c00cd6e0141afea9"; // 사용자가 발급받은 단축 URL KEY를 입력 하세요

	for ($i=1 ; $i < 20000 ; $i++)
	{
		$serialNumber		= VK_SerialNumber();
		$longurl				= "http://www.mnv.kr/?serial=".$serialNumber;
		$url = sprintf("%s?url=%s&key=%s", "http://openapi.naver.com/shorturl.xml", $longurl, $key);
		$data =file_get_contents($url);
		$xml = simplexml_load_string($data, 'SimpleXMLElement', LIBXML_NOCDATA);

		if($xml->code == 200){
			$transUrl = $xml->result->url;
			$orgUrl = $xml->result->orgUrl;
			$qr = $xml->result->url.".qr";
			$query 		= "INSERT INTO serial_info(s_url, serial) values('".$transUrl."','".$serialNumber."')";
			$result 	= mysqli_query($my_db, $query);
		}else{
			$message = "단축 URL 생성에 문제가 있습니다 code. ".$xml->code;
		}
	}
?>
<?
	// 유입매체 정보 입력
	function VK_InsertTrackingInfo($media, $gubun)
	{
		global $_gl;
		global $my_db;

		$query		= "INSERT INTO ".$_gl['tracking_info_table']."(tracking_media, tracking_refferer, tracking_ipaddr, tracking_date, tracking_gubun) values('".$media."','".$_SERVER['HTTP_REFERER']."','".$_SERVER['REMOTE_ADDR']."',now(),'".$gubun."')";
		$result		= mysqli_query($my_db, $query);
	}

	// 난수 생성
	function VK_SerialNumber()
	{
		$randcode = md5( mktime() . $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'] ); ;
		return $randcode; // 난수 생성
	}

	// LMS 발송 
	function send_lms($phone, $s_url)
	{
		global $_gl;
		global $my_db;

		$httpmethod = "POST";
		$url = "http://api.openapi.io/ppurio/1/message/lms/minivertising";
		$clientKey = "MTAyMC0xMzg3MzUwNzE3NTQ3LWNlMTU4OTRiLTc4MGItNDQ4MS05NTg5LTRiNzgwYjM0ODEyYw==";
		$contentType = "Content-Type: application/x-www-form-urlencoded";
	
		$response = sendRequest($httpmethod, $url, $clientKey, $contentType, $phone, $s_url);

		$json_data = json_decode($response, true);

		/*
		받아온 결과값을 DB에 저장 및 Variation
		*/
		$query3 = "INSERT INTO sms_info(send_phone, send_status, cmid, send_regdate) values('".$phone."','".$json_data['result_code']."','".$json_data['cmid']."','".date("Y-m-d H:i:s")."')";
		$result3 		= mysqli_query($my_db, $query3);

		$query2 = "UPDATE member_info SET mb_lms='Y' WHERE mb_phone='".$phone."'";
		$result2 		= mysqli_query($my_db, $query2);

		if ($json_data['result_code'] == "200")
			$flag = "Y";
		else
			$flag = "N";

		return $flag;
	}

	function sendRequest($httpMethod, $url, $clientKey, $contentType, $phone, $s_url) {

		//create basic authentication header
		$headerValue = $clientKey;
		$headers = array("x-waple-authorization:" . $headerValue);

		$params = array(
			'send_time' => '', 
			'send_phone' => '0316897530', 
			'dest_phone' => $phone, 
			//'dest_phone' => '01030033965', 
			'send_name' => '', 
			'dest_name' => '', 
			'subject' => 'VDL x KAKAO',
			'msg_body' => "
VDL 카카오 이벤트
▶ 쿠폰 받기:
".$s_url."
▶ 쿠폰 사용기간 : 5/22 ~ 6/14

* 지정하신 오프라인 매장에서만 사용가능합니다.
* 6/14이후 쿠폰 교환이 불가합니다.

● 불법적인 방법으로 이벤트에 참여하신 고객님은 이벤트 당첨 대상에서 제외되며, 당첨 이후에도 당첨이 취소될 수 있습니다.
● 캠페인 관련 문의
(문의 가능 시간 평일 10:00 ~ 18:00)
이벤트 문의전화 : 080-023-7007
e-mail : jh.woo@minivertising.kr
"
		);

		//curl initialization
		$curl = curl_init();

		//create request url
		//$url = $url."?".$parameters;

		curl_setopt ($curl, CURLOPT_URL , $url);
		curl_setopt ($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt ($curl, CURLOPT_HTTPHEADER, $headers);
		curl_setopt ($curl, CURLINFO_HEADER_OUT, true);
		curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, false);

		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
		curl_setopt($curl, CURLOPT_TIMEOUT, 30);

		$response = curl_exec($curl);

		$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		$responseHeaders = curl_getinfo($curl, CURLINFO_HEADER_OUT);


		curl_close($curl);

		return $response;
	}

?>
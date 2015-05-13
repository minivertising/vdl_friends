
function sns_share(media)
{
	if (media == "facebook")
	{
		var newWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('http://www.belifbomb.com/?media=facebook'),'sharer','toolbar=0,status=0,width=600,height=325');
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "../main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"media" : media
			}
		});
	}else if (media == "kakao"){
		Kakao.init('b3ed5b7dca4e906387247f6a86d982e5');
		// 카카오톡 링크 버튼을 생성합니다. 처음 한번만 호출하면 됩니다.
		Kakao.Link.createTalkLinkButton({
		  container: '#kakao-link-btn',
		  label: "지금 정해진 시간안에 폭탄 크림을 터트리면 빌리프의 다양한 선물이 쏟아집니다.\r\n\r\n더 많은 이벤트 자세히 보기",
		  image: {
			src: 'http://www.belifbomb.com/MOBILE/img/sns_image.png',
			width: '1200',
			height: '630'
		  },
		  webButton: {
			text: '수분폭탄, 즐거움이 터진다',
			url: 'http://www.belifbomb.com/?media=kakao' // 앱 설정의 웹 플랫폼에 등록한 도메인의 URL이어야 합니다.
		  }
		});
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "../main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"media" : media
			}
		});
	}else if (media == "twitter"){
		var newWindow = window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent("1. 서장훈, 촉촉하게 수지랑! 서장훈 구름탄 기분이랄까~촉촉한 선물 2. 서장훈 더페이스샵 CF모델? '아니아니 그게 아니고' 공개! 구름선물") + '&url='+ encodeURIComponent('http://bit.ly/1E9UlZ3'),'sharer','toolbar=0,status=0,width=600,height=325');
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "../main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"media" : media
			}
		});
	}else{
		Kakao.init('b3ed5b7dca4e906387247f6a86d982e5');
		// 로그인 창을 띄웁니다.
		Kakao.Auth.login({
			success: function() {

				// 로그인 성공시, API를 호출합니다.
				Kakao.API.request( {
					url : '/v1/api/story/linkinfo',
					data : {
						url : 'http://www.belifbomb.com/?media=story'
					}
				}).then(function(res) {
					// 이전 API 호출이 성공한 경우 다음 API를 호출합니다.
					return Kakao.API.request( {
						url : '/v1/api/story/post/link',
						data : {
						link_info : res,
							content:"지금 정해진 시간안에 폭탄 크림을 터트리면 빌리프의 다양한 선물이 쏟아집니다.\r\n\r\n더 많은 이벤트 자세히 보기"
						}
					});
				}).then(function(res) {
					return Kakao.API.request( {
						url : '/v1/api/story/mystory',
						data : { id : res.id }
					});
				}).then(function(res) {
					$.ajax({
						type   : "POST",
						async  : false,
						url    : "../main_exec.php",
						data:{
							"exec" : "insert_share_info",
							"media" : "story"
						}
					});
					alert("카카오스토리에 공유 되었습니다.");
				}, function (err) {
					alert(JSON.stringify(err));
				});

			},
			fail: function(err) {
				alert(JSON.stringify(err))
			},
		});
	}
}

function send_kakao()
{
	var k_url = $("#c_url").text();
	Kakao.init('b3ed5b7dca4e906387247f6a86d982e5');
	// 카카오톡 링크 버튼을 생성합니다. 처음 한번만 호출하면 됩니다.
	Kakao.Link.createTalkLinkButton({
	  container: '#kakao-link-btn',
	  label: "VDL 플러스 친구 맺고 카카오프렌즈 KIT 받자!!\r\n아래 링크 클릭해서 플러스 친구 가입\r\n" + k_url,
	  image: {
		src: 'http://www.belifbomb.com/MOBILE/img/sns_image.png',
		width: '1200',
		height: '630'
	  },
	  webButton: {
		text: 'VDL x KAKAO',
		url: 'http://www.belifbomb.com/?media=kakao' // 앱 설정의 웹 플랫폼에 등록한 도메인의 URL이어야 합니다.
	  }
	});
	alert("친구에게 메세지가 전송되었습니다.");
}

function chk_len(val)
{
	if (val.length == 4)
	{
		$("#mb_phone3").focus();
	}
}

function chk_len2(val)
{
	if (val.length == 4)
	{
		$("#mb_phone3").blur();
	}
}

function tog_col(param)
{
	if (param == "1")
	{
		//$("#sub_menu").show();
	}else if (param == "2"){
		//$("#sub_menu").show();
	}else{
		if ($("#sub_menu").css("display") == "block")
			$("#sub_menu").hide();
		else
			$("#sub_menu").show();
	}
}

function show_event()
{
	popup_desc('pop_event_main');
}

function input_message()
{
	if (chk_ins == 0)
	{
		chk_ins = 1;
		var mb_receive		= $("#mb_receive").val();
		var mb_message	= $("#mb_message").val();
		var mb_send			= $("#mb_send").val();

		if (mb_receive == "")
		{

			//alert('개인정보 입력을 안 하셨습니다');
			setTimeout("ins_data();",500);

			$("#mb_receive").focus();
			chk_ins = 0;
			return false;
		}

		if (mb_message == "")
		{

			//alert('개인정보 입력을 안 하셨습니다');
			setTimeout("ins_data();",500);

			$("#mb_message").focus();
			chk_ins = 0;
			return false;
		}

		if (mb_send == "")
		{

			//alert('개인정보 입력을 안 하셨습니다');
			setTimeout("ins_data();",500);

			$("#mb_send").focus();
			chk_ins = 0;
			return false;
		}

		$.ajax({
			type:"POST",
			data:{
				"exec"					: "insert_message",
				"mb_receive"		: mb_receive,
				"mb_message"		: mb_message,
				"mb_send"			: mb_send
			},
			url: "../main_exec.php",
			success: function(response){
				//alert(response);
				//$("#mb_idx").val(response);
				setTimeout("ins2_data('" + response + "');",500);
			}
		});
	}
}

function input_message2()
{
	if (chk_ins2 == 0)
	{
		chk_ins = 1;
		var mb_name		= $("#mb_name").val();
		var mb_phone1		= $("#mb_phone1").val();
		var mb_phone2		= $("#mb_phone2").val();
		var mb_phone3		= $("#mb_phone3").val();
		var mb_phone		= mb_phone1 + "-" + mb_phone2 + "-" + mb_phone3;
		//var mb_idx			= $("#mb_idx").val();
		if (mb_name == "")
		{

			//alert('개인정보 입력을 안 하셨습니다');
			setTimeout("ins_data2();",500);

			$("#mb_name").focus();
			return false;
		}

		if (mb_phone1 == "")
		{

			//alert('개인정보 입력을 안 하셨습니다');
			setTimeout("ins_data2();",500);

			$("#mb_phone1").focus();
			return false;
		}

		if (mb_phone2 == "")
		{

			//alert('개인정보 입력을 안 하셨습니다');
			setTimeout("ins_data2();",500);

			$("#mb_phone2").focus();
			return false;
		}

		if (mb_phone3 == "")
		{

			//alert('개인정보 입력을 안 하셨습니다');
			setTimeout("ins_data2();",500);

			$("#mb_phone3").focus();
			return false;
		}

		if ($('#use_agree').is(":checked") == false)
		{
			//alert("개인정보 활용 동의를 안 하셨습니다");
			setTimeout("agree_use_data();",500);
			return false;
		}

		if ($('#privacy_agree').is(":checked") == false)
		{
			//alert("개인정보 활용 동의를 안 하셨습니다");
			setTimeout("agree_privacy_data();",500);
			return false;
		}

		if ($('#adver_agree').is(":checked") == false)
		{
			//alert("개인정보 활용 동의를 안 하셨습니다");
			setTimeout("agree_adver_data();",500);
			return false;
		}

		$.ajax({
			type:"POST",
			data:{
				"exec"					: "insert_message2",
				"mb_name"		: mb_name,
				"mb_phone"		: mb_phone
			},
			url: "../main_exec.php",
			success: function(response){
				if (response == "E")
				{
					alert("사용자가 많습니다. 다시 참여해 주세요.");
				}else if (response == "N"){
					alert("사용자가 많습니다. 다시 참여해 주세요.");
				}else{
					//$("#mb_idx").val(response);
					$("#c_url").html(response);
					setTimeout("thanks_data('" + response + "');",500);
				}
			}
		});
	}

}

function popup_desc(param)
{
	$.magnificPopup.open({
		items: {
			src: '#' + param+ ''
		},
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
			},
			close: function() {
				chk_ins = 0;
				chk_ins2 = 0;
				$("#mb_receive").val("");
				$("#mb_send").val("");
				$("#mb_message").val("");
			}
		}
	}, 0);
}

function move_area(area)
{
	if (area == "kit")
	{
		$( 'html, body' ).animate({ scrollTop: $(".sec_summer").height() + $(".sec_movie").height() + 75},500);
	}else if (area == "collection"){
		$( 'html, body' ).animate({ scrollTop: 0},500);
	}
}

function ins2_data(idx)
{
	popup_desc('pop_event_input2');
}

function thanks_data(url)
{
	popup_desc('pop_event_thank');
}

function ins_data()
{
	popup_desc('pop_input1');
}

function ins_data2()
{
	popup_desc('pop_input2');
}

function agree_use_data()
{
	popup_desc('pop_use_agree_alert');
}

function agree_privacy_data()
{
	popup_desc('pop_privacy_agree_alert');
}

function agree_adver_data()
{
	popup_desc('pop_adver_agree_alert');
}


function copy_url(ss_url)
{
	//window.clipboardData.setData('text',"11<?=$_SESSION['ss_url']?>");
    //alert("클립보드에 복사되었습니다.");

	var text = $("#c_url").text();
	if(window.clipboardData){
		// IE처리
		// 클립보드에 문자열 복사
		window.clipboardData.setData('text', text);
	} else {
		// 비IE 처리    
		window.prompt ("Ctrl+C 를 눌러 텍스트를 복사하세요.", text);  
	}
}

function stop_cha(param)
{
	if (param == "1")
	{
		clearInterval(interval_id);
		$("#muzi_cha").attr("src","images/chra_1_1.png");
		$("#peach_cha").attr("src","images/chra_2_2.png");
		$("#neo_cha").attr("src","images/chra_3_2.png");
	}else if (param == "2"){
		clearInterval(interval_id);
		$("#muzi_cha").attr("src","images/chra_1_2.png");
		$("#peach_cha").attr("src","images/chra_2_1.png");
		$("#neo_cha").attr("src","images/chra_3_2.png");
	}else{
		clearInterval(interval_id);
		$("#muzi_cha").attr("src","images/chra_1_2.png");
		$("#peach_cha").attr("src","images/chra_2_2.png");
		$("#neo_cha").attr("src","images/chra_3_1.png");
	}
}

function move_cha(param)
{
	interval_id	= setInterval(function(){
		if (cha_gubun == 0)
		{
			$('#muzi_cha').attr("src","images/chra_1_2.png");
			$('#peach_cha').attr("src","images/chra_2_2.png");
			$('#neo_cha').attr("src","images/chra_3_2.png");
			cha_gubun = 1;
		}else{
			$('#muzi_cha').attr("src","images/chra_1_1.png");
			$('#peach_cha').attr("src","images/chra_2_1.png");
			$('#neo_cha').attr("src","images/chra_3_1.png");
			cha_gubun = 0;
		}
	},800);
}

function go_friends(serial)
{
	$.ajax({
		type:"POST",
		data:{
			"exec"			: "join_friends",
			"serial"		: serial
		},
		url: "../main_exec.php",
		success: function(response){
			if (response == "N"){
				alert("사용자가 많습니다. 다시 참여해 주세요.");
			}else{
				location.href = "http://plus.kakao.com/home/@vdl";
			}
		}
	});
}
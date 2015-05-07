
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
		Kakao.init('6a8c92a8f02eab6bc90b28fb96e4a56a');
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
	}else{
		Kakao.init('6a8c92a8f02eab6bc90b28fb96e4a56a');
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
				//}, function (err) {
				//	alert(JSON.stringify(err));
				});

			},
			//fail: function(err) {
			//	alert(JSON.stringify(err))
			//},
		});
	}
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
	$.magnificPopup.open({
		items: {
			src: '#qrcode_pop'
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
				$('#qrcode_pop').css('top','-890px');
				// 이동위치값 지정
				var position = 0;
				$('#qrcode_pop').show().animate({top:position},{duration:1000,easing:'easeOutBounce'});
				//window.scrollTo(0,0);
			}
		}
	}, 0);

}
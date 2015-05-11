
<!--------------------- 이벤트 시작 팝업 --------------------->
<div id="pop_event_main" class="zoom-anim-dialog mfp-hide" style="background:white;width:800px;height:500px;margin-left:-400px;margin-top:-250px;top:50%;left:50%;position:absolute">
  <h1>Funnier Than Ever!</h1>
  <h1>VDL FRIENDS KIT을 받아볼까?</h1>
  <h2>소중한 친구에게 메시지를 보내면 5천원 할인 쿠폰을 모든 분들에게!</h2>
  <h2>친구가 메시지를 받고 VDL과 플러스 친구를 맺으면</h2>
  <h2>귀여운 콜라보레이션 제품이 들어있는 VDL FRIENDS KIT를 받을 수 있어요!</h2>
  <a href="#pop_event_input" class="popup-with-zoom-anim">메시지 보내기!</a>
</div>
<!--------------------- 이벤트 시작 팝업 --------------------->

<!--------------------- 이벤트 메세지 입력 팝업 --------------------->
<div id="pop_event_input" class="zoom-anim-dialog mfp-hide" style="background:white;width:800px;height:500px;margin-left:-400px;margin-top:-250px;top:50%;left:50%;position:absolute">
  <div style="position:absolute;width:100%;right:0">
    <a href="#pop_close_confirm" class="popup-with-zoom-anim">닫기</a>
  </div>
  <h1>Funnier Than Ever!</h1>
  <h1>소중한 친구에게 VDL 프렌즈 메시지를 보내주세요</h1>
  <h2>메시지를 받은 친구가 플러스친구를 확인하면</h2>
  <h2>5천원 할인 쿠폰과 VDL FRIENDS KIT이벤트의 응모가 완료됩니다.</h2>
  <input type="text" name="mb_receive" id="mb_receive"><br />
  <textarea name="mb_message" id="mb_message"></textarea><br />
  <input type="text" name="mb_send" id="mb_send"><br />
  <a href="#" onclick="input_message();">메시지 작성 완료</a>

</div>
<!--------------------- 이벤트 메세지 입력 팝업 --------------------->

<!--------------------- 이벤트 메세지 입력(이름, 전화번호) 팝업 --------------------->
<div id="pop_event_input2" class="zoom-anim-dialog mfp-hide" style="background:white;width:800px;height:500px;margin-left:-400px;margin-top:-250px;top:50%;left:50%;position:absolute">
  <div style="position:absolute;width:100%;">
    <a href="#pop_close_confirm" class="popup-with-zoom-anim">닫기</a>
  </div>
  <h1>VDL FRIENDS KIT를 받으시려면</h1>
  <h1>고객님의 소중한 정보가 필요해요.</h1>
  <input type="text" name="mb_name" id="mb_name"><br />
  <input type="text" name="mb_phone" id="mb_phone"><br />
  <input type="checkbox" name="use_agree" id="use_agree"> <a href="#pop_use_agree" class="popup-with-zoom-anim">개인정보 활용 약관</a><br />
  <input type="checkbox" name="privacy_agree" id="privacy_agree"> <a href="#pop_privacy_agree" class="popup-with-zoom-anim">개인정보 취급위탁동의 약관</a><br />
  <input type="checkbox" name="adver_agree" id="adver_agree"> <a href="#pop_adver_agree" class="popup-with-zoom-anim">광고성 정보 전송 동의 약관</a><br />
  <a href="#" onclick="input_message2();">입력 완료</a>

</div>
<!--------------------- 이벤트 메세지 입력 팝업 --------------------->

<!--------------------- 이벤트 참여 완료 팝업 --------------------->
<div id="pop_event_thank" class="zoom-anim-dialog mfp-hide" style="background:white;width:800px;height:500px;margin-left:-400px;margin-top:-250px;top:50%;left:50%;position:absolute">
  <div style="position:absolute;width:100%;">
    <a href="#" onclick="$.magnificPopup.close();">닫기</a>
  </div>
  <h1>참여해주셔서 감사합니다!</h1>
  <h3>친구분이 메시지를 읽고</h3>
  <h3>플러스 친구를 맺으면 이벤트에 응모가 완료됩니다.</h3>
  <h3>추첨을 통해 00월 00일 입력하신 정보로</h3>
  <h3>VDL FRIENDS KIT를 발송해 드립니다.</h3>
  URL : <?=$_SESSION['ss_url']?><br />
  <a href="#" onclick="send_kakao('<?=$_SESSION['ss_url']?>');">카톡으로 보내기</a>
  <a href="#" onclick="copy_url('<?=$_SESSION['ss_url']?>');">URL로 공유하기</a>
</div>
<!--------------------- 이벤트 참여 완료 팝업 --------------------->

<!--------------------- 무지 안내 팝업 --------------------->
<div id="muzi_div" class="zoom-anim-dialog mfp-hide" style="background:white;width:600px;height:800px;margin-left:-300px;margin-top:-400px;top:50%;left:50%;position:absolute">
  <div style="position:absolute;width:300px;height:500px;left:50%;margin-left:-150px">
  <ul class="bxslider">
    <li><img src="./images/muzi.png" /></li>
    <li><img src="./images/apeach.png" /></li>
    <li><img src="./images/neo.png" /></li>
</ul>
</div>
</div>
<!--------------------- 무지 안내 팝업 --------------------->

<!--------------------- 피치 안내 팝업 --------------------->
<div id="apeach_div" class="zoom-anim-dialog mfp-hide" style="background:white;width:600px;height:800px;margin-left:-300px;margin-top:-400px;top:50%;left:50%;position:absolute">
  222
</div>
<!--------------------- 피치 안내 팝업 --------------------->

<!--------------------- 네오 안내 팝업 --------------------->
<div id="neo_div" class="zoom-anim-dialog mfp-hide" style="background:white;width:600px;height:800px;margin-left:-300px;margin-top:-400px;top:50%;left:50%;position:absolute">
  333
</div>
<!--------------------- 네오 안내 팝업 --------------------->

<!--------------------- 창 닫을때 선택 팝업 --------------------->
<div id="pop_close_confirm" class="zoom-anim-dialog mfp-hide" style="background:white;width:300px;height:200px;margin-left:-150px;margin-top:-100px;top:50%;left:50%;position:absolute">
  <h2>정말 닫으시려구요?</h2>
  <h3>해당 창을 닫으면 작성 중이던 메시지가 사라집니다.</h3>
  <a href="#" onclick="$.magnificPopup.close();">나가기</a>
  <a href="#pop_event_input" class="popup-with-zoom-anim">계속하기</a>
</div>
<!--------------------- 창 닫을때 선택 팝업 --------------------->

<!--------------------- 개인정보 활용 약관 팝업 --------------------->
<div id="pop_use_agree" class="zoom-anim-dialog mfp-hide" style="background:white;width:400px;height:600px;margin-left:-200px;margin-top:-300px;top:50%;left:50%;position:absolute">
  <div style="position:absolute;width:100%;">
    <a href="#pop_event_input2" class="popup-with-zoom-anim">닫기</a>
  </div>
  <h2>개인정보 활용 약관 내용</h2>
</div>
<!--------------------- 개인정보 활용 약관 팝업 --------------------->

<!--------------------- 개인정보 취급위탁동의 약관 팝업 --------------------->
<div id="pop_privacy_agree" class="zoom-anim-dialog mfp-hide" style="background:white;width:400px;height:600px;margin-left:-200px;margin-top:-300px;top:50%;left:50%;position:absolute">
  <div style="position:absolute;width:100%;">
    <a href="#pop_event_input2" class="popup-with-zoom-anim">닫기</a>
  </div>
  <h2>개인정보 취급위탁동의 내용</h2>
</div>
<!--------------------- 개인정보 취급위탁동의 약관 팝업 --------------------->

<!--------------------- 광고성 정보 전송 동의 약관 팝업 --------------------->
<div id="pop_adver_agree" class="zoom-anim-dialog mfp-hide" style="background:white;width:400px;height:600px;margin-left:-200px;margin-top:-300px;top:50%;left:50%;position:absolute">
  <div style="position:absolute;width:100%;">
    <a href="#pop_event_input2" class="popup-with-zoom-anim">닫기</a>
  </div>
  <h2>광고성 정보 전송동의 내용</h2>
</div>
<!--------------------- 광고성 정보 전송 동의 약관 팝업 --------------------->

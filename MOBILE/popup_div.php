<!--------------------- 이벤트 메세지 입력 팝업 --------------------->
<div id="pop_event_input" class="popup_wrap zoom-anim-dialog mfp-hide">
  <div class="p_mid p_position">
    <div class="block_close clearfix">
      <a href="#" class="btn_close" onclick="$.magnificPopup.close();"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title title_input"><img src="images/popup/title_mss.png" /></div>
        <div class="block_input_bg"></div>
        <div class="block_input clearfix">
          <div class="label"><img src="images/popup/label_to.png" /></div>
          <div class="input_txt"><input type="text" name="mb_receive" id="mb_receive"></div>
        </div>
        <div class="block_input clearfix">
          <div class="label"><img src="images/popup/label_mss.png" /></div>
          <div class="input_txt"><textarea name="mb_message" id="mb_message"></textarea></div>
        </div>
        <div class="block_input clearfix">
          <div class="label"><img src="images/popup/label_from.png" /></div>
          <div class="input_txt"><input type="text" name="mb_send" id="mb_send"></div>
        </div>
        <div class="block_btn send">
          <a href="#" onclick="input_message();" class="common_2"><img src="images/popup/btn_send.png" /></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
  <div class="p_mid_bg_chrc">
    <img src="images/popup/bg_chrc.png"  width="160" alt=""/>
  </div>
</div>
<!--------------------- 이벤트 메세지 입력 팝업 --------------------->

<!--------------------- 이벤트 메세지 입력(이름, 전화번호) 팝업 --------------------->
<div id="pop_event_input2" class="popup_wrap zoom-anim-dialog mfp-hide">
  <div class="p_mid p_position">
    <div class="block_close clearfix">
      <a href="#pop_close_confirm" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title title_input"><img src="images/popup/title_input.png" /></div>
        <div class="block_input_bg"></div>
        <div class="block_input clearfix">
          <div class="label"><img src="images/popup/label_name.png" /></div>
          <div class="input_txt name"><input type="text" name="mb_name" id="mb_name"></div>
        </div>
        <div class="block_input clearfix">
          <div class="label"><img src="images/popup/label_phone.png" /></div>
          <div class="input_txt">
            <div class="inner_phone clearfix">
              <div class="in_phone"><input type="text" name="mb_phone1" id="mb_phone1"></div>
              <div class="in_dash">-</div>
              <div class="in_phone"><input type="text" name="mb_phone2" id="mb_phone2"></div>
              <div class="in_dash">-</div>
              <div class="in_phone"><input type="text" name="mb_phone3" id="mb_phone3"></div>
            </div>
          </div>
        </div>
        <div class="bar"></div>
        <div class="block_ckeck">
          <div class="inner_check clearfix">
            <div class="in_check"><input type="checkbox" name="use_agree" id="use_agree"></div>
            <div class="label_check">개인정보활용</div>
            <div class="btn_check"><a href="#pop_use_agree" class="popup-with-zoom-anim"><img src="images/popup/btn_detail.png" /></a></div>
          </div>
          <div class="inner_check clearfix">
            <div class="in_check"><input type="checkbox" name="privacy_agree" id="privacy_agree"></div>
            <div class="label_check">개인 정보 취급 위탁 동의</div>
            <div class="btn_check"><a href="#pop_privacy_agree" class="popup-with-zoom-anim"><img src="images/popup/btn_detail.png" /></a></div>
          </div>
          <div class="inner_check clearfix">
            <div class="in_check"><input type="checkbox" name="adver_agree" id="adver_agree"></div>
            <div class="label_check">광고성 정보 전송 동의  </div>
            <div class="btn_check"><a href="#pop_adver_agree" class="popup-with-zoom-anim"><img src="images/popup/btn_detail.png" /></a></div>
          </div>
        </div>
        <div class="txt_notice">
          <img src="images/popup/txt_notice_gift.png" />
        </div>
        <div class="block_btn">
          <a href="#" onclick="input_message2();" class="common_3"><img src="images/popup/btn_input.png" /></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
  <div class="p_mid_bg_chrc">
    <img src="images/popup/bg_chrc.png"  width="160" alt=""/>
  </div>
</div>
<!--------------------- 이벤트 메세지 입력(이름, 전화번호) 팝업 --------------------->

<!--------------------- 이벤트 참여 완료 팝업 --------------------->
<div id="pop_event_thank" class="popup_wrap zoom-anim-dialog mfp-hide">
  <div class="p_mid bg_gray p_position">
    <div class="block_close clearfix">
      <a href="#" onclick="$.magnificPopup.close();" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title title_input"><img src="images/popup/title_send_comp.png" /></div>
        <div class="block_url">
          <div class="inner_url clearfix">
            <div class="label">
              <img src="images/popup/label_url.png" width="70" />
            </div>
            <div class="url" id="c_url"></div>
          </div>
        </div>
        <div class="block_btn clearfix">
          <a href="#" class="left" onclick="send_kt();"><img src="images/popup/btn_kt_send.png" /></a>
          <a href="#" class="right" onclick="copy_url();"><img src="images/popup/btn_url_send.png" /></a>
        </div>
        <div class="img_gift">
          <img src="images/popup/img_gift.png" />
        </div>
      </div><!--inner-->
    </div>
  </div>
  <div class="p_mid_bg_chrc">
    <img src="images/popup/bg_chrc.png"  width="160" alt=""/>
  </div>
</div>
<!--------------------- 이벤트 참여 완료 팝업 --------------------->

<!--------------------- 개인정보 활용 약관 팝업 --------------------->
<div id="pop_use_agree" class="popup_wrap zoom-anim-dialog mfp-hide">
  <div class="p_mid p_agree p_position">
    <div class="block_close clearfix">
      <a href="#"  onclick="$.magnificPopup.close();" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="agree_inner">
                <span class="t_bold">개인정보 수집 · 이용에 대한 동의</span><br>
                (주)LG생활건강(이하 "LG생활건강")는 이벤트 진행을 위한 개인정보 
                수집 이용을 위하여 다음과 같이 귀하의 동의를 받고자 합니다.
                LG생활건강은 보다 원활한 서비스 제공을 위하여 고객의 정보를 
                수집하고 있습니다. 고객의 정보는 이벤트 서비스에 참여하기 
                위한 필수정보로서 제공을 원하지 않을 경우 수집하지 않으며, 
                동의 거부 시 이벤트 참여에 제한을 받을 수 있습니다.
                (주)LG생활건강은 본 이벤트를 위하여 다음과 같이 고객님의 
                개인정보를 수집 및 이용합니다.<br>
                >수집 · 이용 목적: 이벤트 혜택을 제공하기 위한 정보 전달
                : 이벤트 혜택 이용에 따른 본인확인, 고지사항 전달: 접속 빈도 
                파악 또는 회원의 서비스 이용에 대한 통계> 수집 필수 항목 : 
                이름, 연락처> 보유/이용기간 : 이벤트 종료 후 3개월까지
                (단, 관계 법령에 따라 필요한 경우 해당 법률에서 정한 기간까지)
      </div><!--inner-->
    </div>
  </div>
  <div class="p_mid_bg_chrc">
    <img src="images/popup/bg_chrc.png"  width="160" alt=""/>
  </div>
</div>
<!--------------------- 개인정보 활용 약관 팝업 --------------------->

<!--------------------- 개인정보 취급위탁동의 약관 팝업 --------------------->
<div id="pop_privacy_agree" class="popup_wrap zoom-anim-dialog mfp-hide">
  <div class="p_mid p_agree p_position">
    <div class="block_close clearfix">
      <a href="#" onclick="$.magnificPopup.close();" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="agree_inner">
                <span class="t_bold">개인정보의 취급 위탁 동의</span><br>
                (주)LG생활건강은 서비스 향상과 원활한 진행을 위하여 개인정보
                 처리 업무를 외부 전문 업체에 위탁하여 처리하고 있습니다.
                고객은 아래와 같은 개인정보 취급 위탁에 동의하지 않을 권리가 
                있으며 동의 거부시 이벤트 참여에 제한을 받을 수 있습니다.<br>
                취급위탁업체 위탁업무 및 이용목적 : <br>
                미니버타이징 (주) / 이벤트 대행 및 운영 <br>
                보유 및 이용기간 : 이벤트 종료 후 3개월까지
                (단, 관계 법령에 따라 필요한 경우 해당 법률에서 정한 기간까지)
      </div><!--inner-->
    </div>
  </div>
  <div class="p_mid_bg_chrc">
    <img src="images/popup/bg_chrc.png"  width="160" alt=""/>
  </div>
</div>
<!--------------------- 개인정보 취급위탁동의 약관 팝업 --------------------->

<!--------------------- 광고성 정보 전송 동의 약관 팝업 --------------------->
<div id="pop_adver_agree" class="popup_wrap zoom-anim-dialog mfp-hide">
  <div class="p_mid p_agree p_position">
    <div class="block_close clearfix">
      <a href="#" onclick="$.magnificPopup.close();" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="agree_inner">
                개인정보 수집 · 이용에 대한 동의
                (주)LG생활건강(이하 "LG생활건강")는 이벤트 진행을 위한 개인정보 
                수집 이용을 위하여 다음과 같이 귀하의 동의를 받고자 합니다.
                LG생활건강은 보다 원활한 서비스 제공을 위하여 고객의 정보를 
                수집하고 있습니다. 고객의 정보는 이벤트 서비스에 참여하기 
                위한 필수정보로서 제공을 원하지 않을 경우 수집하지 않으며, 
                동의 거부 시 이벤트 참여에 제한을 받을 수 있습니다.
                (주)LG생활건강은 본 이벤트를 위하여 다음과 같이 고객님의 
                개인정보를 수집 및 이용합니다.
                >수집 · 이용 목적: 이벤트 혜택을 제공하기 위한 정보 전달
                : 이벤트 혜택 이용에 따른 본인확인, 고지사항 전달: 접속 빈도 
                파악 또는 회원의 서비스 이용에 대한 통계> 수집 필수 항목 : 
                이름, 연락처> 보유/이용기간 : 이벤트 종료 후 3개월까지
                (단, 관계 법령에 따라 필요한 경우 해당 법률에서 정한 기간까지)
                개인정보의 취급 위탁 동의
                (주)LG생활건강은 서비스 향상과 원활한 진행을 위하여 개인정보
                 처리 업무를 외부 전문 업체에 위탁하여 처리하고 있습니다.
                고객은 아래와 같은 개인정보 취급 위탁에 동의하지 않을 권리가 
                있으며 동의 거부시 이벤트 참여에 제한을 받을 수 있습니다.
                <취급위탁업체 위탁업무 및 이용목적 : 
                미니버타이징 (주) / 이벤트 대행 및 운영> 
                보유 및 이용기간 : 이벤트 종료 후 3개월까지
                (단, 관계 법령에 따라 필요한 경우 해당 법률에서 정한 기간까지)
      </div><!--inner-->
    </div>
  </div>
  <div class="p_mid_bg_chrc">
    <img src="images/popup/bg_chrc.png"  width="160" alt=""/>
  </div>
</div>
<!--------------------- 광고성 정보 전송 동의 약관 팝업 --------------------->

<!--------------------- 창 닫을때 선택 팝업 --------------------->
<div id="pop_close_confirm" class="popup_wrap zoom-anim-dialog mfp-hide">
  <div class="p_mid p_position">
    <div class="block_close clearfix">
      <a href="index.php" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title"><img src="images/popup/title_close.png" /></div>
        <div class="block_btn clearfix">
          <a href="index.php" class="left"><img src="images/popup/btn_out.png" /></a>
          <a href="#" class="right" onclick="$.magnificPopup.close();"><img src="images/popup/btn_keep.png" /></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
  <div class="p_mid_bg_chrc">
    <img src="images/popup/bg_chrc.png"  width="160" alt=""/>
  </div>
</div>
<!--------------------- 창 닫을때 선택 팝업 --------------------->

<!--------------------- 개인정보 입력 팝업1 --------------------->
<div id="pop_input1" class="popup_wrap zoom-anim-dialog mfp-hide">
  <div class="p_mid p_position">
    <div class="block_close clearfix">
      <a href="#" class="btn_close" onclick="$.magnificPopup.close();"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner inner_common">
        <div class="title"><img src="images/popup/title_input_info.png" /></div>
        <div class="block_btn">
          <a href="#" class="common" onclick="$.magnificPopup.close();"><img src="images/popup/btn_ok.png" /></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
  <div class="p_mid_bg_chrc">
    <img src="images/popup/bg_chrc.png"  width="160" alt=""/>
  </div>
</div>
<!--------------------- 개인정보 입력 팝업1 --------------------->

<!--------------------- 개인정보 입력 팝업2 --------------------->
<div id="pop_input2" class="popup_wrap zoom-anim-dialog mfp-hide">
  <div class="p_mid p_position">
    <div class="block_close clearfix">
      <a href="#" class="btn_close" onclick="$.magnificPopup.close();"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner inner_common">
        <div class="title"><img src="images/popup/title_input_info.png" /></div>
        <div class="block_btn">
          <a href="#" class="common" onclick="$.magnificPopup.close();"><img src="images/popup/btn_ok.png" /></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
  <div class="p_mid_bg_chrc">
    <img src="images/popup/bg_chrc.png"  width="160" alt=""/>
  </div>
</div>
<!--------------------- 개인정보 입력 팝업2 --------------------->

<!--------------------- 개인정보 활용동의 팝업 --------------------->
	<div id="pop_use_agree_alert" class="popup_wrap zoom-anim-dialog mfp-hide">
   	  	<div class="p_mid p_position">
            <div class="block_close clearfix">
                <a href="#" class="btn_close" onclick="$.magnificPopup.close();"><img src="images/popup/btn_close.png" /></a>
            </div>
            <div class="block_content">
            	<div class="inner inner_common">
               		<div class="title"><img src="images/popup/title_agree_info.png" /></div>
                    <div class="block_btn">
                    	<a href="#" class="common" onclick="$.magnificPopup.close();"><img src="images/popup/btn_ok.png" /></a>
                    </div>
                </div><!--inner-->
            </div>
        </div>
        <div class="p_mid_bg_chrc">
            <img src="images/popup/bg_chrc.png"  width="160" alt=""/>
        </div>
	</div>
<!--------------------- 개인정보 활용동의 팝업 --------------------->

<!--------------------- 광고성 정보 전송 동의 팝업 --------------------->
	<div id="pop_adver_agree_alert" class="popup_wrap zoom-anim-dialog mfp-hide">
   	  	<div class="p_mid p_position">
            <div class="block_close clearfix">
                <a href="#" class="btn_close" onclick="$.magnificPopup.close();"><img src="images/popup/btn_close.png" /></a>
            </div>
            <div class="block_content">
            	<div class="inner inner_common">
               		<div class="title"><img src="images/popup/title_agree_ad.png" /></div>
                    <div class="block_btn">
                    	<a href="#" class="common" onclick="$.magnificPopup.close();"><img src="images/popup/btn_ok.png" /></a>
                    </div>
                </div><!--inner-->
            </div>
        </div>
        <div class="p_mid_bg_chrc">
            <img src="images/popup/bg_chrc.png"  width="160" alt=""/>
        </div>
	</div>
<!--------------------- 광고성 정보 전송 동의 팝업 --------------------->

<!--------------------- 개인정보 취급 위탁 동의 팝업 --------------------->
	<div id="pop_privacy_agree_alert" class="popup_wrap zoom-anim-dialog mfp-hide">
   	  	<div class="p_mid p_position">
            <div class="block_close clearfix">
                <a href="#" class="btn_close" onclick="$.magnificPopup.close();"><img src="images/popup/btn_close.png" /></a>
            </div>
            <div class="block_content">
            	<div class="inner inner_common">
               		<div class="title"><img src="images/popup/title_agree_agency.png" /></div>
                    <div class="block_btn">
                    	<a href="#" class="common" onclick="$.magnificPopup.close();"><img src="images/popup/btn_ok.png" /></a>
                    </div>
                </div><!--inner-->
            </div>
        </div>
        <div class="p_mid_bg_chrc">
            <img src="images/popup/bg_chrc.png"  width="160" alt=""/>
        </div>
	</div>
<!--------------------- 개인정보 취급 위탁 동의 팝업 --------------------->

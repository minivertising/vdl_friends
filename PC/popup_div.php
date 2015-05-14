<!--------------------- 이벤트 메세지 입력 팝업 --------------------->
<div id="pop_event_input" class="popup_wrap zoom-anim-dialog mfp-hide" style="top:50%;left:50%;margin-left:-303px">
  <div class="p_mid p_position">
    <div class="block_close clearfix" onclick="$.magnificPopup.close();">
      <a href="#" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title">
          <img src="images/popup/title_mss.png" />
        </div>
        <div class="block_input">
          <div class="input_to clearfix">
            <div class="label">
              <img src="images/popup/label_to.png" alt=""/>
            </div>
            <div class="txt_input">
              <input type="text" name="mb_receive" id="mb_receive">
            </div>
          </div>
          <div class="input_txtarea clearfix">
            <div class="label">
              <img src="images/popup/label_txt.png" alt=""/>
            </div>
            <div class="txt_input">
              <textarea name="mb_message" id="mb_message" onkeyup="check_message();"></textarea>
            </div>
          </div>
          <div class="input_from clearfix">
            <div class="label">
              <img src="images/popup/label_from.png" alt=""/>
            </div>
            <div class="txt_input">
              <input type="text" name="mb_send" id="mb_send">
            </div>
          </div>
        </div>
        <div class="btn_block">
          <a href="#" onclick="input_message();"><img src="images/popup/btn_mss_comp.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
    <div class="bg_chrc">
      <img src="images/popup/bg_chrc.png" alt=""/>
    </div>
  </div>
</div>
<!--------------------- 이벤트 메세지 입력 팝업 --------------------->

<!--------------------- 이벤트 메세지 입력(이름, 전화번호) 팝업 --------------------->
<div id="pop_event_input2" class="popup_wrap zoom-anim-dialog mfp-hide" style="top:50%;left:50%;margin-left:-268px">
  <div class="p_mid_input p_position">
    <div class="block_close clearfix">
      <a href="#pop_close_confirm" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title">
          <img src="images/popup/title_input.png" />
        </div>
        <div class="block_input">
          <div class="input_one clearfix">
            <div class="label">
              <img src="images/popup/label_name.png" alt=""/>
            </div>
            <div class="input">
              <input type="text" name="mb_name" id="mb_name">
            </div>
          </div>
          <div class="input_one clearfix">
            <div class="label">
              <img src="images/popup/label_phone.png" alt=""/>
            </div>
            <div class="input_phone clearfix">
              <div class="phone_ip"><input type="tel" name="mb_phone1" id="mb_phone1"></div>
              <div class="phone_ip_dash">-</div>
              <div class="phone_ip"><input type="tel" name="mb_phone2" id="mb_phone2"></div>
              <div class="phone_ip_dash">-</div>
              <div class="phone_ip"><input type="tel" name="mb_phone3" id="mb_phone3"></div>
            </div>
          </div>
        </div>
        <div class="bar"></div>
        <div class="check_block">
          <div class="check_one clearfix">
            <div class="in_check">
              <input type="checkbox" name="use_agree" id="use_agree">
            </div>
            <div class="txt_check">
              <img src="images/popup/label_check_1.png" alt=""/>
            </div>
            <div class="btn_check">
              <a href="#pop_use_agree" class="popup-with-zoom-anim"><img src="images/popup/btn_check.png" alt=""/></a>
            </div>
          </div>
          <div class="check_one clearfix">
            <div class="in_check">
              <input type="checkbox" name="privacy_agree" id="privacy_agree">
            </div>
            <div class="txt_check">
              <img src="images/popup/label_check_2.png" alt=""/>
            </div>
            <div class="btn_check">
              <a href="#pop_privacy_agree" class="popup-with-zoom-anim"><img src="images/popup/btn_check.png" alt=""/></a>
            </div>
          </div>
          <div class="check_one clearfix">
            <div class="in_check">
              <input type="checkbox" name="adver_agree" id="adver_agree">
            </div>
            <div class="txt_check">
              <img src="images/popup/label_check_3.png" alt=""/>
            </div>
            <div class="btn_check">
              <a href="#pop_adver_agree" class="popup-with-zoom-anim"><img src="images/popup/btn_check.png" alt=""/></a>
            </div>
          </div>
        </div>
        <div class="txt_notice">
          <img src="images/popup/txt_input_notice.png" alt=""/>
        </div>
        <div class="btn_block">
          <a href="#" onclick="input_message2();"><img src="images/popup/btn_input_ok.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
    <div class="bg_chrc">
      <img src="images/popup/bg_chrc.png" alt=""/>
    </div>
  </div>
</div>
<!--------------------- 이벤트 메세지 입력 팝업 --------------------->

<!--------------------- 이벤트 참여 완료 팝업 --------------------->
<div id="pop_event_thank" class="popup_wrap zoom-anim-dialog mfp-hide" style="margin-left:-268px;top:50%;left:50%;">
  <div class="p_mid_comp p_position">
    <div class="block_close clearfix">
      <a href="#" onclick="$.magnificPopup.close();" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title">
          <img src="images/popup/title_alert_comp.png" />
        </div>
        <div class="block_url" id="c_url"></div>
        <div class="txt_notice">
          <img src="images/popup/txt_url_notice_2.png" alt=""/>
        </div>                    
        <div class="btn_block">
          <a href="#" onclick="copy_url();"><img src="images/popup/btn_url.png" alt=""/></a>
        </div>
        <div class="txt_notice">
          <img src="images/popup/txt_url_notice.png" alt=""/>
        </div>
      </div><!--inner-->
    </div>
    <div class="bg_chrc">
      <img src="images/popup/bg_chrc.png" alt=""/>
    </div>
  </div>
</div>
<!--------------------- 이벤트 참여 완료 팝업 --------------------->

<!--------------------- 무지 안내 팝업 --------------------->
<div id="muzi_div" class="popup_wrap zoom-anim-dialog mfp-hide" style="margin-left:-328px;top:50%;left:50%;">
  <div class="p_mid_col p_position">
    <div class="block_close clearfix">
      <a href="#" onclick="$.magnificPopup.close();" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title">
          <img src="images/popup/title_muji.png" />
        </div>
        <div class="content clearfix">
          <div class="arrow_left">
            <a href="#" onclick="prev_collection('muzi');"><img src="images/popup/btn_arrow_left.png" alt=""/></a>
          </div>
          <div class="img_block" id="muzi_block1">
            <img src="images/popup/col_img_muji_1.png" alt=""/>
          </div>
          <div class="img_block" id="muzi_block2" style="display:none">
            <img src="images/popup/col_img_muji_1.png" alt=""/>
          </div>
          <div class="img_block" id="muzi_block3" style="display:none">
            <img src="images/popup/col_img_muji_1.png" alt=""/>
          </div>
          <div class="arrow_right">
            <a href="#" onclick="next_collection('muzi');"><img src="images/popup/btn_arrow_right.png" alt=""/></a>
          </div>
        </div>
        <div class="block_thumb muji">
          <ul class="clearfix">
            <li><a href="#" id="thumb_muzi1" class="selected"><img src="images/popup/thumb_muji_1.png" alt=""/></a></li>
            <li><a href="#" id="thumb_muzi2"><img src="images/popup/thumb_muji_1.png" alt=""/></a></li>
            <li><a href="#" id="thumb_muzi3"><img src="images/popup/thumb_muji_1.png" alt=""/></a></li>
          </ul>
        </div>
        <div class="txt_col">
          <img src="images/popup/col_img_muji_1_txt.png" alt=""/>
        </div>
      </div><!--inner-->
    </div>
    <div class="bg_chrc">
      <img src="images/popup/bg_col_chrc_muji.png" alt=""/>
    </div>
  </div>
</div>
<!--------------------- 무지 안내 팝업 --------------------->

<!--------------------- 피치 안내 팝업 --------------------->
<div id="apeach_div" class="popup_wrap zoom-anim-dialog mfp-hide" style="margin-left:-328px;top:50%;left:50%;">
  <div class="p_mid_col p_position">
    <div class="block_close clearfix">
      <a href="#" onclick="$.magnificPopup.close();" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title">
          <img src="images/popup/title_peach.png" />
        </div>
        <div class="content clearfix">
          <div class="arrow_left">
            <a href="#" onclick="prev_collection('apeach');"><img src="images/popup/btn_arrow_left.png" alt=""/></a>
          </div>
          <div class="img_block" id="apeach_block1">
            <img src="images/popup/col_img_muji_1.png" alt=""/>
          </div>
          <div class="img_block" id="apeach_block2" style="display:none">
            <img src="images/popup/col_img_muji_1.png" alt=""/>
          </div>
          <div class="img_block" id="apeach_block3" style="display:none">
            <img src="images/popup/col_img_muji_1.png" alt=""/>
          </div>
          <div class="arrow_right">
            <a href="#" onclick="next_collection('apeach');"><img src="images/popup/btn_arrow_right.png" alt=""/></a>
          </div>
        </div>
        <div class="block_thumb muji">
          <ul class="clearfix">
            <li><a href="#" id="thumb_apeach1" class="selected"><img src="images/popup/thumb_peach_1.png" alt=""/></a></li>
            <li><a href="#" id="thumb_apeach2"><img src="images/popup/thumb_peach_1.png" alt=""/></a></li>
            <li><a href="#" id="thumb_apeach3"><img src="images/popup/thumb_peach_1.png" alt=""/></a></li>
          </ul>
        </div>
        <div class="txt_col">
          <img src="images/popup/col_img_muji_1_txt.png" alt=""/>
        </div>
      </div><!--inner-->
    </div>
    <div class="bg_chrc">
      <img src="images/popup/bg_col_chrc_peach.png" alt=""/>
    </div>
  </div>
</div>
<!--------------------- 피치 안내 팝업 --------------------->

<!--------------------- 네오 안내 팝업 --------------------->
<div id="neo_div" class="popup_wrap zoom-anim-dialog mfp-hide" style="margin-left:-328px;top:50%;left:50%;">
  <div class="p_mid_col p_position">
    <div class="block_close clearfix">
      <a href="#" onclick="$.magnificPopup.close();" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title">
          <img src="images/popup/title_neo.png" />
        </div>
        <div class="content clearfix">
          <div class="arrow_left">
            <a href="#" onclick="prev_collection('neo');"><img src="images/popup/btn_arrow_left.png" alt=""/></a>
          </div>
          <div class="img_block" id="neo_block1">
            <img src="images/popup/col_img_muji_1.png" alt=""/>
          </div>
          <div class="img_block" id="neo_block2" style="display:none">
            <img src="images/popup/col_img_muji_1.png" alt=""/>
          </div>
          <div class="img_block" id="neo_block3" style="display:none">
            <img src="images/popup/col_img_muji_1.png" alt=""/>
          </div>
          <div class="arrow_right">
            <a href="#" onclick="next_collection('neo');"><img src="images/popup/btn_arrow_right.png" alt=""/></a>
          </div>
        </div>
        <div class="block_thumb muji">
          <ul class="clearfix">
            <li><a href="#" id="thumb_neo1" class="selected"><img src="images/popup/thumb_neo_1.png" alt=""/></a></li>
            <li><a href="#" id="thumb_neo2"><img src="images/popup/thumb_neo_1.png" alt=""/></a></li>
            <li><a href="#" id="thumb_neo3"><img src="images/popup/thumb_neo_1.png" alt=""/></a></li>
          </ul>
        </div>
        <div class="txt_col">
          <img src="images/popup/col_img_muji_1_txt.png" alt=""/>
        </div>
      </div><!--inner-->
    </div>
    <div class="bg_chrc">
      <img src="images/popup/bg_col_chrc_neo.png" alt=""/>
    </div>
  </div>
</div>
<!--------------------- 네오 안내 팝업 --------------------->

<!--------------------- 창 닫을때 선택 팝업 --------------------->
<div id="pop_close_confirm" class="popup_wrap zoom-anim-dialog mfp-hide" style="margin-left:-263px;top:50%;left:50%;">
  <div class="p_alert_big p_position">
    <div class="block_close clearfix">
      <a href="#pop_event_input2" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title">
          <img src="images/popup/title_alert_close.png" />
        </div>
        <div class="btn_block">
          <a href="#" onclick="$.magnificPopup.close();"><img src="images/popup/btn_out.png" alt=""/></a>
          <a href="#pop_event_input2" class="popup-with-zoom-anim"><img src="images/popup/btn_keepgoing.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
    <div class="bg_chrc">
      <img src="images/popup/bg_chrc.png" alt=""/>
    </div>
  </div>
</div>
<!--------------------- 창 닫을때 선택 팝업 --------------------->

<!--------------------- 개인정보 활용 약관 팝업 --------------------->
<div id="pop_use_agree" class="popup_wrap zoom-anim-dialog mfp-hide" style="top:50%;left:50%;margin-left:-303px">
  <div class="p_mid_agree p_position">
    <div class="block_close clearfix">
      <a href="#pop_event_input2" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
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
    <div class="bg_chrc">
      <img src="images/popup/bg_chrc.png" alt=""/>
    </div>
  </div>
</div>
<!--------------------- 개인정보 활용 약관 팝업 --------------------->

<!--------------------- 개인정보 취급위탁동의 약관 팝업 --------------------->
<div id="pop_privacy_agree" class="popup_wrap zoom-anim-dialog mfp-hide" style="top:50%;left:50%;margin-left:-303px">
  <div class="p_mid_agree p_position">
    <div class="block_close clearfix">
      <a href="#pop_event_input2" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
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
    <div class="bg_chrc">
      <img src="images/popup/bg_chrc.png" alt=""/>
    </div>
  </div>
</div>
<!--------------------- 개인정보 취급위탁동의 약관 팝업 --------------------->

<!--------------------- 광고성 정보 전송 동의 약관 팝업 --------------------->
<div id="pop_adver_agree" class="popup_wrap zoom-anim-dialog mfp-hide" style="top:50%;left:50%;margin-left:-303px">
  <div class="p_mid_agree p_position">
    <div class="block_close clearfix">
      <a href="#pop_event_input2" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
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
    <div class="bg_chrc">
      <img src="images/popup/bg_chrc.png" alt=""/>
    </div>
  </div>
</div>
<!--------------------- 광고성 정보 전송 동의 약관 팝업 --------------------->

<!--------------------- 개인정보 입력 팝업1 --------------------->
<div id="pop_input1" class="popup_wrap zoom-anim-dialog mfp-hide" style="margin-left:-263px;top:50%;left:50%;">
  <div class="p_alert p_position">
    <div class="block_close clearfix">
      <a href="#pop_event_input" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title">
          <img src="images/popup/title_alert_input_info.png" />
        </div>
        <div class="btn_block">
          <a href="#pop_event_input" class="popup-with-zoom-anim"><img src="images/popup/btn_ok.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
    <div class="bg_chrc">
      <img src="images/popup/bg_chrc.png" alt=""/>
    </div>
  </div>
</div>
<!--------------------- 개인정보 입력 팝업1 --------------------->

<!--------------------- 개인정보(메세지) 입력 팝업1 --------------------->
<div id="pop_message_input1" class="popup_wrap zoom-anim-dialog mfp-hide" style="margin-left:-263px;top:50%;left:50%;">
  <div class="p_alert p_position">
    <div class="block_close clearfix">
      <a href="#pop_event_input" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title">
          <img src="images/popup/title_alert_input_mss.png" />
        </div>
        <div class="btn_block">
          <a href="#pop_event_input" class="popup-with-zoom-anim"><img src="images/popup/btn_ok.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
    <div class="bg_chrc">
      <img src="images/popup/bg_chrc.png" alt=""/>
    </div>
  </div>
</div>
<!--------------------- 개인정보(메세지) 입력 팝업1 --------------------->

<!--------------------- 개인정보 입력 팝업2 --------------------->
<div id="pop_input2" class="popup_wrap zoom-anim-dialog mfp-hide" style="margin-left:-263px;top:50%;left:50%;">
  <div class="p_alert p_position">
    <div class="block_close clearfix">
      <a href="#pop_event_input2" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title">
          <img src="images/popup/title_alert_input_info.png" />
        </div>
        <div class="btn_block">
          <a href="#pop_event_input2" class="popup-with-zoom-anim"><img src="images/popup/btn_ok.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
    <div class="bg_chrc">
      <img src="images/popup/bg_chrc.png" alt=""/>
    </div>
  </div>
</div>
<!--------------------- 개인정보 입력 팝업2 --------------------->

<!--------------------- 개인정보 활용동의 팝업 --------------------->
<div id="pop_use_agree_alert" class="popup_wrap zoom-anim-dialog mfp-hide" style="margin-left:-263px;top:50%;left:50%;">
  <div class="p_alert p_position">
    <div class="block_close clearfix">
      <a href="#pop_event_input2" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title">
          <img src="images/popup/title_alert_agree_info.png" />
        </div>
        <div class="btn_block">
          <a href="#pop_event_input2" class="popup-with-zoom-anim"><img src="images/popup/btn_ok.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
    <div class="bg_chrc">
      <img src="images/popup/bg_chrc.png" alt=""/>
    </div>
  </div>
</div>
<!--------------------- 개인정보 활용동의 팝업 --------------------->

<!--------------------- 광고성 정보 전송 동의 팝업 --------------------->
<div id="pop_adver_agree_alert" class="popup_wrap zoom-anim-dialog mfp-hide" style="margin-left:-263px;top:50%;left:50%;">
  <div class="p_alert p_position">
    <div class="block_close clearfix">
      <a href="#pop_event_input2" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title">
          <img src="images/popup/title_alert_agree_ad.png" />
        </div>
        <div class="btn_block">
          <a href="#pop_event_input2" class="popup-with-zoom-anim"><img src="images/popup/btn_ok.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
    <div class="bg_chrc">
      <img src="images/popup/bg_chrc.png" alt=""/>
    </div>
  </div>
</div>
<!--------------------- 광고성 정보 전송 동의 팝업 --------------------->

<!--------------------- 개인정보 취급 위탁 동의 팝업 --------------------->
<div id="pop_privacy_agree_alert" class="popup_wrap zoom-anim-dialog mfp-hide" style="margin-left:-263px;top:50%;left:50%;">
  <div class="p_alert p_position">
    <div class="block_close clearfix">
      <a href="#pop_event_input2" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title">
          <img src="images/popup/title_alert_agree_agency.png" />
        </div>
        <div class="btn_block">
          <a href="#pop_event_input2" class="popup-with-zoom-anim"><img src="images/popup/btn_ok.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
    <div class="bg_chrc">
      <img src="images/popup/bg_chrc.png" alt=""/>
    </div>
  </div>
</div>
<!--------------------- 개인정보 취급 위탁 동의 팝업 --------------------->


<?
	include_once   "./header.php";

	include_once   "./popup_div.php";
?>
<style>
.medical_list {float:left; width:225px; height:155px; padding:10px; margin:10px; border:1px solid #d0d0d0; overflow-y:scroll; }
.medical_list li {height:20px; line-height:20px; }
.medical_list li input {vertical-align:middle;}
.medical_result {float:left; width:225px; height:155px; padding:10px; margin:10px; border:1px solid #d0d0d0; overflow-y:scroll; }
.medical_result li {height:20px; line-height:20px; }
</style>
                    <ul class="medical_list">
                      <li><input type="checkbox" value="" name="medical" id="seoul"><label for="seoul">서울의료원</label></li>
                      <li><input type="checkbox" value="" name="medical" id="incheon"><label for="incheon">인천의료원</label></li>
                      <li><input type="checkbox" value="" name="medical" id="suwon"><label for="suwon">경기도 수원병원</label></li>
                      <li><input type="checkbox" value="" name="medical" id="uijeongbu"><label for="uijeongbu">경기도 의정부병원</label></li>
                      <li><input type="checkbox" value="" name="medical" id="anseong"><label for="anseong">경기도 안성병원</label></li>
                      <li><input type="checkbox" value="" name="medical" id="icheon"><label for="icheon">경기도 이천병원</label></li>
                      <li><input type="checkbox" value="" name="medical" id="paju"><label for="paju">경기도 파주병원</label></li>
                      <li><input type="checkbox" value="" name="medical" id="pocheon"><label for="pocheon">경기도 포천병원</label></li>
                    </ul>
                    <ul class="medical_result">
                    </ul>
  </body>
</html>
<script type="text/javascript">
              $('.medical_list li input').click(function(){
                var Medi = $(this).parent().text();
                var checkY = $(this).is(':checked');
                console.log(checkY);
                if(checkY == true){
                  $('.medical_result').append("<li class='" +$(this).attr('id') + "'>"+Medi+"</li>");
                }else{
                  $('.' + $(this).attr('id') + '').remove();
                }
              });
</script>
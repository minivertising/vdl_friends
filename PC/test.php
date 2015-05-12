<!doctype html>
<html>
 <head>
  <title>Document</title>
  <style>
  .on {
	font-weight:bold;
  }
  </style>
    <script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
  <script type="text/javascript">
    var tabMenu = function(){
   $('.tab_con_wrap .tab_con').hide();
   $('.tab_con_wrap .tab_con:eq(0)').show();

   $('.tab li a').click(function(event){

      event.preventDefault();
      $('.tab li').removeClass('on');
      $(this).parent().addClass('on');
	  $('.tab_con').hide();      
      $("."+$(this).parent().attr("id")).show();

   });
};

$(document).ready(function(){
   tabMenu();
});


  </script>
 </head>
 <body>
 <ul class="tab tab-01 col-03 clearfix">
                            <li class="on" id="tab_con01"><a href="#">공지사항</a></li>
                            <li id="tab_con02"><a href="#">자료실</a></li>
                            <li id="tab_con03"><a href="#">학부뉴스</a></li>                            
                        </ul> 

                        <!-- tab_con_wrap -->
                        <div class="tab_con_wrap">
                            <!-- tab_con1 -->
                            <div class="tab_con tab_con01">
                            1
                            </div>
                            <!-- //tab_con1 -->                    
                            <!-- tab_con2 -->
                            <div class="tab_con tab_con02">
                            2
                            </div>
                            <!-- //tab_con2 -->
                            <!-- tab_con2 -->
                            <div class="tab_con tab_con03">
                            3
                            </div>
                            <!-- //tab_con2 -->
                        </div>
                        <!-- //tab_con_wrap -->
 </body>
</html>

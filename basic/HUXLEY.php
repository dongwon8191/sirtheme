<?php

include_once('./_common.php');


	$co_id = "HUXLEY";

	//상단 메뉴바의 몇번째 1차메뉴에 속해 있는지 지정해 주세요.
	$menuNum = "3";

	//상단 메뉴바의 1차메뉴중 몇번째 2차메뉴에 속해 있는지 지정해 주세요.
	$menuNum2 = "5";
	
	//본 페이지의 제목을 입력해 주시기 바랍니다.
	$g5['title'] = "헉슬리";


include_once(G5_THEME_PATH.'/head.php');
?>
<script>
$(document).ready(function(){
	$('#snb > li:nth-child(<?php echo $menuNum; ?>)').addClass("co_id<?php echo $co_id; ?> active");
	$('#snb > li:nth-child(<?php echo $menuNum; ?>) > ul > li:nth-child(<?php echo $menuNum2; ?>)').addClass("snb2d_co_id<?php echo $co_id; ?>  active");
	});
</script>

<div class="dear">
	<div class="head" style="position:relative;">
		<h1 style="color: white;position: absolute;transform: translate(-50%, -50%);top: 40%; left: 50%;font-size: 46px;"
     >Huxley(헉슬리)</h1>
		<p style="
		    color: white;
            font-size: 20px;
            position: absolute;
            color: white;
            transform: translate(-50%, -50%);
            top: 55%;
            left: 50%;
            text-align: center;
		">Contemporary Beauty, Huxley<br>미지의 원료를 찾아 도전하고 새로운 트렌드를 만드는 컨템포러리 뷰티 브랜드</p>

		<img src="<?echo G5_THEME_IMG_URL?>/hs.jpg" alt="" 
		style="width:1900px">
    
    
   
   
		


	</div>

	<div class="contentbox" style="width:1900px; height: 710px; background-color:#fff; position: relative;">
		<h3 style=" font-size: 28px; position: absolute; top: 50px; left: 250px;"
         >Brand Best Item</h3>
   
  
		<img src="<?echo G5_THEME_IMG_URL?>/hs1.jpg" alt="" style=" padding-left:200px; padding-top: 150px;  ">

		
	</div>
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
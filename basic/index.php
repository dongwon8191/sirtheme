<?php

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<script>
	$(document).ready(function(){
		$(".slider").bxSlider({
			auto:true
		});

		var current = 0;

			$(".next_button").click(function(){
				current++;
				console.log(current);
				$(".banner > ul").stop().animate({left:current*1000*-1},400);
			});

			$(".prev_button").click(function(){
				current--;
				console.log(current);
				$(".banner > ul").stop().animate({left:current*1000*-1},400);
			});








	});
</script>
<ul class="slider">
	<li><img src="<?echo G5_THEME_IMG_URL?>/slide_img01.jpg" alt="" style="width:100%"></li>
	<li><img src="<?echo G5_THEME_IMG_URL?>/slide_img02.jpg" alt="" style="width:100%"></li>

</ul>










<div class="wrap"> 

    <img src="<?echo G5_THEME_IMG_URL?>/bg.png" class="b1" >
     <img src="<?echo G5_THEME_IMG_URL?>/about.png"class="b0">
     
     <img src="<?echo G5_THEME_IMG_URL?>/c1.png"class="b3">

     

     <div class="about_text">
         <h3>‘시코르CHICOR’는 신세계백화점이 엄선한 제품들을 선보이는 뷰티스페셜티 스토어입니다.</h3>
         <p>신세계백화점의 큐레이팅 노하우로 구성된 전세계 다양한 뷰티 브랜드와 T.P.O에 맞는 아이템, 각 섹션 별 차별화되고<br>
            전문화된 뷰티 존이 갖추어져 뷰티에 대한 모든 것을 한곳에서 경험하며 즐길 수 있습니다.</p>

           
         <div class="btn">
            <a href="http://dongwon8191.dothome.co.kr/main/bbs/content.php?co_id=about">VIEW MORE</a>
         </div>
    
     
     </div>

</div>

<div class="wrap02">
	<img src="<?echo G5_THEME_IMG_URL?>/c2.png" class="c2">
	<img src="<?echo G5_THEME_IMG_URL?>/c3.png" class="c3">
	 <img src="<?echo G5_THEME_IMG_URL?>/txt_only.png"  class="txt">

	 <p>해외직구로만 구입하던 레어템부터 오프라인 매장을 찾을 수 없었던 뷰티브랜드까지 시코르에서만 만나볼 수 있는 브랜드를 제안합니다.</p>

	 <div class="brand_list">

<button class="prev_button">
	<img src="<?echo G5_THEME_IMG_URL?>/prev.png">
</button>

<button class="next_button">
	<img src="<?echo G5_THEME_IMG_URL?>/next.png">
</button>
	 	<div class="brand">
	 		<ul class="clearfix" >
	 		
	 		
	 			<li class="thumb"><a href="#"><img src="<?echo G5_THEME_IMG_URL?>/ost.png"></a></li>
	 			<li class="thumb"><a href="#"><img src="<?echo G5_THEME_IMG_URL?>/tst.png"></a></li>
	 			<li class="thumb"><a href="#"><img src="<?echo G5_THEME_IMG_URL?>/thst.png"></a></li>
	 			
	 		</ul>
	 	</div>
	 </div>

	 

	
</div>

<div class="wrap03">
	<img src="<?echo G5_THEME_IMG_URL?>/stores.png" class="stores">
	<img src="<?echo G5_THEME_IMG_URL?>/makeover.png"  class="make">

	<div class="stores_text">
		<h3>뷰티홀릭들을 위한 놀이터!</h3>
		<p>새로움에 대한 열망이 높고, 자신만의 관점에서 새로운 트렌드를 조합하며 자유롭게 공유하고, 원하는 것을 
		   찾아다니는 밀레니엄 세대를 위한 뷰티 스토어입니다.
		       전국 곳곳에 있는 시코르 매장을 찾아 마음껏 발라보며 예뻐지는 경험을 가져보세요.</p>

		 <div class="btn2">
            <a href="http://dongwon8191.dothome.co.kr/main/bbs/content.php?co_id=Store">VIEW MORE</a>
         </div>
	</div>

	<div class="banner_box">
		<img src="<?echo G5_THEME_IMG_URL?>/ben.png">
	</div>
</div>


<div class="wrap04">
	<img src="<?echo G5_THEME_IMG_URL?>/news.png" class="title">

	<div class="news_list">

		<button class="prev_button">
	    <img src="<?echo G5_THEME_IMG_URL?>/prev.png">
       </button>

       <button class="next_button">
	   <img src="<?echo G5_THEME_IMG_URL?>/next.png">
       </button>
		<ul class="news clearfix">


			<li class="img_one">
				<a href="#">
					<img src="<?echo G5_THEME_IMG_URL?>/news01.jpg">
					 <strong class="tx">
					 	시코르 클럽 가입 이벤트 당첨자 발표
					 	
					 </strong>
				</a></li>

			<li class="img_two"><a href="#">
				<img src="<?echo G5_THEME_IMG_URL?>/news02.jpg">
				<strong class="tx">
					 	강남역 플래그십 오픈 할인이벤트
					 	
					 </strong>
			</a></li>

			<li class="img_three">
				<a href="#">
					<img src="<?echo G5_THEME_IMG_URL?>/news03.jpg">
					<strong class="tx">

						시크콘서트 with CHICOR
					 	
					 	
					 </strong>
				</a></li>

		</ul>
	</div>
	
</div>

<footer class="footer_wrap">
    
        <img src="<?echo G5_THEME_IMG_URL?>/bg_footer.jpg">

        <div class="footer_txt">
            <p class="ne">(주)신세계 서울특별시 중구 소공로 63(충무로 1가) 대표이사 : 장재영 사업자등록번호 201-81-32195</p>
            <p class="ny">@ 2017SHINSEGAE ALL RIGHTS RESERVED</p>
        </div>


    
</footer>








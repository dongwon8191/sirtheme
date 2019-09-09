<?php

include_once('./_common.php');


	$co_id = "testPage";

	//상단 메뉴바의 몇번째 1차메뉴에 속해 있는지 지정해 주세요.
	$menuNum = "1";

	//상단 메뉴바의 1차메뉴중 몇번째 2차메뉴에 속해 있는지 지정해 주세요.
	$menuNum2 = "3";
	
	//본 페이지의 제목을 입력해 주시기 바랍니다.
	$g5['title'] = "비젼";


include_once(G5_THEME_PATH.'/head.php');
?>
<script>
$(document).ready(function(){
	$('#snb > li:nth-child(<?php echo $menuNum; ?>)').addClass("co_id<?php echo $co_id; ?> active");
	$('#snb > li:nth-child(<?php echo $menuNum; ?>) > ul > li:nth-child(<?php echo $menuNum2; ?>)').addClass("snb2d_co_id<?php echo $co_id; ?>  active");
	});
</script>

<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt iusto aspernatur hic explicabo deserunt id inventore, doloremque animi non, laboriosam eligendi consequuntur dolor minus officiis expedita vel corrupti! Repudiandae unde cum error necessitatibus modi voluptate, explicabo eaque voluptates voluptatum soluta veritatis at repellat, ea nesciunt molestiae quidem illum vero perferendis totam nisi tempora alias quasi. Temporibus vitae ut enim expedita, earum consequatur reiciendis nam ullam officia sit nulla suscipit! Porro cupiditate facere eius ratione. Rem architecto rerum modi recusandae numquam corporis voluptas ullam ea iure unde non odit, in officiis assumenda ipsa alias dolorem atque obcaecati, voluptatibus accusamus saepe. Dolores.</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
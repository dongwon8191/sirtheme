<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

    </div>    <!-- HEAD의 CONTAINER 끝남 -->

    <? if(!defined ("_INDEX_")) { ?>
    <div id="aside">
       <?include_once(G5_THEME_PATH.'/skin/nav/mysubmenu.php');?>
    </div>
    <?}?>
</div>

 








   

</div>









<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->


<button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>


<footer class="footer_wrap">
    
        <img src="<?echo G5_THEME_IMG_URL?>/bg_footer.jpg">

        <div class="footer_txt">
            <p class="ne">(주)신세계 서울특별시 중구 소공로 63(충무로 1가) 대표이사 : 장재영 사업자등록번호 201-81-32195</p>
            <p class="ny">@ 2017SHINSEGAE ALL RIGHTS RESERVED</p>
        </div>


    

    
    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
        <script>
        
        $(function() {
            $("#top_btn").on("click", function() {
                $("html, body").animate({scrollTop:0}, '500');
                return false;
            });
        });
        </script>

</footer>


    
    
        <script>
        
        $(function() {
            $("#top_btn").on("click", function() {
                $("html, body").animate({scrollTop:0}, '500');
                return false;
            });
        });
        </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>



<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>

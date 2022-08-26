<?php
include_once('./_common.php');
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$co_id = "features";
$menuNum = "1";
$menuNum2 = "2";
$g5['title'] = "Features";

include_once(G5_THEME_PATH.'/head.php');
?>
<style>
    .fBody{}
    .fBody .wrap{
        display: flex;gap: 15px;
        width: 1200px;height: 500px;
    }
    .fBody .wrap .txtWrap{
        width: calc( 100% / 2);
        height: 100%;
        position: relative;
    }
    .fBody .wrap .txtbox{
        width: 400px;
        height: 200px;
        position: absolute;
        top: 50%;left: 50%;
        transform: translate(-50%,-50%)
    }
    .fBody .wrap .txtbox h3{
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
        line-height: 30px;
    }
    .fBody .wrap .txtbox p{
        font-weight: bold;
        line-height: 20px;
    }
    .fBody .wrap .imgbox{
        width:600px;
        height: 500px;
        object-fit:contain;
    }
    .fBody .wrap .imgbox img{ 
        width: 600px;
        height: 400px;
        margin-top: 50px;   

    }
</style>

<div class="fBody">
    <div class="wrap">
        <div class="txtWrap">
            <div class="txtbox">
                <h3>A Data-Driven Approach to Diversity, Equity, and Inclusion in the Workplace.</h3>
                <p>Kanarys’ tools and technology deliver the clear, comprehensive DEI data that companies need to diagnose, prioritize, and optimize their efforts to achieve healthy, equitable workplaces.</p>
                <br>
                <p>Our products are designed to meet you where you are on your DEI journey, and some of our key offerings are below. We start with data, analytics and insights and continue with recommendations and implementation. Kanarys is your one-stop DEI champion.</p>
            </div>
        </div>
        <div class="imgbox">
            <img src="<? echo G5_THEME_IMG_URL ?>/f_intro.jpg"alt="intro">
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
   $('#snb > li:nth-child(<?php echo $menuNum; ?>)').addClass("co_id<?php echo $co_id; ?> active");
   $('#snb > li:nth-child(<?php echo $menuNum; ?>) > ul > li:nth-child(<?php echo $menuNum2; ?>)').addClass("snb2d_co_id<?php echo $co_id; ?>  active");
   });
</script>



<?php
include_once(G5_THEME_PATH.'/tail.php');
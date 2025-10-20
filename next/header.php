<?php
include 'connect.php';

if(strpos($_SERVER['PHP_SELF'], "sub") === false){
    $root="";
} else {
    $root="../";
}

$iSql="SELECT * FROM information";
$iRes=mysqli_query($conn, $iSql);
$iRow=mysqli_fetch_array($iRes);
$company=$iRow['company'];
$ceo=$iRow['name'];
$busi_number=$iRow['busi_number'];
$mail_order_number=$iRow['mail_order_number'];
$tel_order_number=$iRow['tel_order_number'];
$addr=$iRow['addr'];
$detail=$iRow['detail_addr'];
$email=$iRow['email'];
$tel=$iRow['tel'];

$snSql="SELECT * FROM sns";
$snRes=mysqli_query($conn, $snSql);;
$snRow=mysqli_fetch_array($snRes);
$insta=$snRow['insta'];
$facebook=$snRow['facebook'];
$band=$snRow['naver_band'];
$blog=$snRow['naver_blog'];
$kakao=$snRow['kakao'];


if($root==""){
?>
<header>
    <div class="left">
        <a href="<?php echo $insta?>" target="_blank"><img src="<?php echo $root?>img/c-insta.png" alt=""></a>
        <a href="<?php echo $facebook?>" target="_blank"><img src="<?php echo $root?>img/c-youtube.png" alt=""></a>
        <a href="<?php echo $band?>" target="_blank"><img src="<?php echo $root?>img/c-band.png" alt=""></a>
        <a href="<?php echo $blog?>" target="_blank"><img src="<?php echo $root?>img/c-blog.png" alt=""></a>
    </div>
    <div class="center">
        <img src="<?php echo $root?>img/logo.png" onclick="location.href='<?php echo $root?>index.php'">
        <div class="gnb">
            <a href="#home" class="page_scroll active">HOME</a>
            <a href="#best" class="page_scroll">베스트 차종</a>
            <a href="#cashback" class="page_scroll" onclick="location.href='<?php echo $root?>sub/cashback.php'">오토캐시백</a>
            <a href="#installment" class="page_scroll" onclick="location.href='<?php echo $root?>sub/installment.php'">신차할부</a>
            <a href="#review" class="page_scroll">고객후기</a>
            <a href="#estimate" class="page_scroll">실시간 견적</a>
        </div>
    </div>
    <img src="<?php echo $root?>img/icon-menu.png" alt="메뉴 버튼" class="ham">
</header>
<aside>
    <img src="<?php echo $root?>img/sub-logo.png" onclick="location.href='<?php echo $root?>index.php'">
    <div class="gnb">
        <a href="#home" class="page_scroll active">HOME</a>
        <a href="#best" class="page_scroll">베스트 차종</a>
        <a href="#cashback" class="page_scroll" onclick="location.href='<?php echo $root?>sub/cashback.php'">오토캐시백</a>
        <a href="#installment" class="page_scroll" onclick="location.href='<?php echo $root?>sub/installment.php'">신차할부</a>
        <a href="#review" class="page_scroll">고객후기</a>
        <a href="#estimate" class="page_scroll">실시간 견적</a>
    </div>
    <div class="bottom">
        <p><?php echo $company?></p>
        <p>대표자 : <?php echo $ceo?></p>
        <p>사업자등록번호 : <?php echo $busi_number?></p>
        <p>주소 : <?php echo $addr?>, <?php echo $detail?></p>
        <p>이메일 주소 : <?php echo $email?></p>
    </div>
    <div class="phone">
        <p>상담전화 :</p>
        <h2><?php echo $tel?></h2>
    </div>
    <span>닫기</span>
</aside>
<div class="aside_bg"></div>
<div class="left_fix">
    <a href="tel:<?php echo $tel?>" class="top">
        <div>
            <p>NEXT DIRECT</p>
            <img src="<?php echo $root?>img/left-logo.png">
            <h2>1600<br><b>-</b>3399</h2>
        </div>
        <p>전화걸기</p>
    </a>
    <a href="<?php echo $kakao?>" target="_blank" class="bottom">
        <div>
            <img src="<?php echo $root?>img/icon-kakao.png">
            <h2>1:1상담</h2>
        </div>
        <p>오전 09:00<br> ~ 18:00</p>
    </a>
</div>
<?php } else { ?>
    <header>
        <div class="left">
            <a href="<?php echo $insta?>" target="_blank"><img src="../img/c-insta.png" alt=""></a>
            <a href="<?php echo $facebook?>" target="_blank"><img src="../img/c-youtube.png" alt=""></a>
            <a href="<?php echo $band?>" target="_blank"><img src="../img/c-band.png" alt=""></a>
            <a href="<?php echo $blog?>" target="_blank"><img src="../img/c-blog.png" alt=""></a>
        </div>
        <div class="center">
            <img src="../img/logo.png" onclick="location.href='../index.php'">
            <div class="gnb">
                <a href="../index.php">HOME</a>
                <a href="../sub/estimate.php">실시간 견적</a>
                <a href="../index.php#review">고객 후기</a>
                <a href="../sub/cashback.php">오토캐시백</a>
                <a href="../sub/installment.php">신차할부</a>
            </div>
        </div>
        <img src="../img/icon-menu.png" alt="메뉴 버튼" class="ham">
    </header>
    <aside>
        <img src="../img/sub-logo.png" onclick="location.href='../index.php'">
        <div class="gnb">
            <a href="../index.php">HOME</a>
            <a href="../sub/estimate.php">실시간 견적</a>
            <a href="../index.php#review">고객 후기</a>
            <a href="../sub/cashback.php">오토캐시백</a>
            <a href="../sub/installment.php">신차할부</a>
        </div>
        <div class="bottom">
            <p>넥스트 (주)</p>
            <p>대표자 : 한 진 용</p>
            <p>사업자등록번호 : 180-81-02735</p>
            <p>주소 : 경상북도 경산시 하양읍 가마실길 46-8, 2층</p>
            <p>이메일 주소 : nextleaserent@naver.com</p>
        </div>
        <div class="phone">
            <p>상담전화 :</p>
            <h2><?php echo $tel?></h2>
        </div>
        <span>닫기</span>
    </aside>
    <div class="aside_bg"></div>
    <div class="left_fix">
        <a href="tel:<?php echo $tel?>" class="top">
            <div>
                <p>NEXT DIRECT</p>
                <img src="../img/left-logo.png">
                <h2>1600<br><b>-</b>3399</h2>
            </div>
            <p>전화걸기</p>
        </a>
        <a href="<?php echo $kakao?>" target="_blank" class="bottom">
            <div>
                <img src="../img/icon-kakao.png">
                <h2>1:1상담</h2>
            </div>
            <p>오전 09:00<br> ~ 18:00</p>
        </a>
    </div>
<?php } ?>
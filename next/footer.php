<!-- <form method="POST" action="<?php echo $root?>counsel.php" target="ifrm">
<input type="submit" id="sub1" style="display:none">
<input type="hidden" name="type" value="빠른상담"> -->
<section class="bottom_fix" onclick="location.href='<?php echo $root?>sub/estimate.php'">
    <div class="inner">
        <a href="javascript:void(0);" class="left">
            <img src="<?php echo $root?>img/icon-phone.png">
            <h2>빠른 상담 <?php echo $tel?></h2>
        </a>
        <!-- <img src="<?php echo $root?>img/bottom-arrow.png"> -->
        <p>간편문의 클릭</p>
        <!-- <div class="center">
            <div>
                <h2>신청하시는 분 성함</h2>
                <input type="text" name="name" required>
            </div>
            <div>
                <h2>휴대전화 번호 입력</h2>
                <input type="tel" name="tel" required>
            </div>
        </div>
        <div class="right">
            <div>
                <div>
                    <input type="checkbox" id="chk1">
                    <span><i><img src="<?php echo $root?>img/check.png"></i></span>
                    <p>개인정보 수집 및 이용에 동의합니다.</p>
                </div>
            </div>
            <button type="button" onclick="counsel('1')">무료 상담 신청</button>
        </div> -->
    </div>
</section>
<!-- </form> -->
<!-- <form method="POST" action="<?php echo $root?>counsel.php" target="ifrm">
<input type="submit" id="sub2" style="display:none">
<input type="hidden" name="type" value="빠른상담"> -->
<section class="bottom_fix_mob" onclick="location.href='<?php echo $root?>sub/estimate.php'">
    <div class="mob_side">
        <a href="http://pf.kakao.com/_qwXxjxj/chat" target="_blank"><img src="<?php echo $root?>img/icon-kakao.png"></a>
    </div>
    <div class="inner">
        <div class="top">
            <a href="javascript:void(0);" class="left">
                <img src="<?php echo $root?>img/icon-phone.png">
                <h2>빠른 상담<br><?php echo $tel?></h2>
            </a>
            <!-- <img src="<?php echo $root?>img/bottom-arrow.png"> -->
            <p>간편문의 클릭</p>
        </div>
        <!-- <div class="bottom">
            <div class="ddd">
                <h2>신청하시는 분 성함</h2>
                <input type="text" name="name" required>
            </div>
            <div class="ddd">
                <h2>휴대전화 번호 입력</h2>
                <input type="tel" name="tel" required>
            </div>
            <div class="pri_contents">
                <div class="pri">
                    <div>
                        <input type="checkbox" id="chk2">
                        <span><i><img src="<?php echo $root?>img/check.png"></i></span>
                        <p>개인정보 수집 및 이용에 동의합니다.</p>
                    </div>
                </div>
                <button type="button" onclick="counsel('2')">상담 신청</button>
            </div>
        </div> -->
    </div>
</section>
<!-- </form> -->
<footer id="footer">
    <div class="inner">
        <div class="left">
            <img src="<?php echo $root?>img/logo.png">
            <p>대표전화 :</p>
            <h2><?php echo $tel?></h2>
        </div>
        <div class="center center_left">
            <p><?php echo $company?></p>
            <p>대표자 : <?php echo $ceo?></p>
            <p>사업자등록번호 : <?php echo $busi_number?></p>
            <p>주소 : <?php echo $addr?>, <?php echo $detail?></p>
            <p>이메일 주소 : <?php echo $email?></p>
        </div>
        <div class="center">
            <p>개인정보 책임자 : <?php echo $ceo?></p>
            <p>통신판매업신고번호 : <?php echo $mail_order_number?></p>
            <p>전화권유판매업신고번호 :  <?php echo $tel_order_number?></p>
        </div>
        <div class="right">
            <div>
                <a href="javascript:void(0);">[ 사이트이용약관 ]</a>
                <a href="javascript:void(0);">[ 개인정보취급방침 ]</a>
                <a href="">[ 관리자모드 ]</a>
            </div>
            <!-- <a href="http://mywebcenter.co.kr/landing/pay.php" target="_blank">랜딩 제작 신청</a> -->
            <p>ALL RIGHTS RESERVED 2023 넥스트 (주)</p>
        </div>
    </div>
</footer>
<iframe name="ifrm" frameborder="0" style="display:none"></iframe>
<script>
    function counsel(c){
        if($("#chk"+c).is(":checked")==false){
            alert("개인정보취급방침 동의해주세요.");
        } else {
            $("#sub"+c).click();
        }
    }
</script>
<?php
date_default_timezone_set('Asia/Seoul');
$currdt = date("Y-m-d"); // 오늘 날짜
$time = date(" H:i:s");
$yester = date("Y-m-d", strtotime($currdt."-1 day"));// 어제 날짜
$userip = $_SERVER['REMOTE_ADDR'];

if(isset($_SERVER['HTTP_REFERER'])) 
    $referer = $_SERVER['HTTP_REFERER'];  
else 
    $referer = ""; 
if($conn){
    $sql="SELECT * FROM tb_stat_visit WHERE regip='$userip' AND regdate='$currdt'";
    $res=mysqli_query($conn, $sql);
    $rows=mysqli_num_rows($res);
    // 처음 방문했는지 검사
    if($rows==0) { 
        $query = "insert into tb_stat_visit (regdate, regtime, regip, referer) values('$currdt', '$time', '$userip','$referer')";
        $result = mysqli_query($conn, $query);
    }
}
?>
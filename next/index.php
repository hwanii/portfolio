<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php';?>
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="wrap">
    <?php include 'header.php';?>
    <section class="swiper-container main_slide" id="home">
        <div class="swiper-wrapper">
            <?php
            $sSql="SELECT * FROM slide WHERE background!='' ORDER BY `number` ASC";
            $sRes=mysqli_query($conn, $sSql);
            while($sRow=mysqli_fetch_array($sRes)){
            ?>
            <div class="swiper-slide" style="background: url('img/slide/<?php echo $sRow['background']?>') no-repeat center/cover;"> </div>
            <?php } ?>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <section id="best">
        <h2 class="title">국산차 BEST</h2>
        <div class="best_contents">
            <ul class="best_category best_category01">
                <li class="on">
                    <img src="img/car-hyundai.png">
                    <p>현대자동차</p>
                </li>
                <li>
                    <img src="img/car-genesys.png">
                    <p>제네시스</p>
                </li>
                <li>
                    <img src="img/car-kia.png">
                    <p>기아자동차</p>
                </li>
                <li>
                    <img src="img/car-chevrolet.png">
                    <p>쉐보레</p>
                </li>
                <li>
                    <img src="img/car-ssang.png">
                    <p>KG 모빌리티</p>
                </li>
                <li>
                    <img src="img/car-renault.png">
                    <p>르노</p>
                </li>
            </ul>
            <div class="inner inner01">
                <?php
                $dSql="SELECT * FROM domestic ORDER BY num ASC";
                $dRes=mysqli_query($conn, $dSql);
                $j=1;
                while($dRow=mysqli_fetch_array($dRes)){
                    $domestic=$dRow['domestic_name'];
                ?>
                <div class="contents <?php echo ($j==1) ? "on" : ""?>">
                    <div class="swiper-container best_slide best_slide01_0<?php echo $j?>">
                        <div class="swiper-wrapper">
                            <?php
                            $dmSql="SELECT * FROM domestic_list WHERE domestic='$domestic' ORDER BY num DESC";
                            $dmRes=mysqli_query($conn, $dmSql);
                            while($dmRow=mysqli_fetch_array($dmRes)){
                            ?>
                            <div class="swiper-slide">
                                <div class="img_box"><img src="img/domestic/<?php echo $dmRow['thumb'];?>"></div>
                                <div class="txt_box">
                                    <h2><?php echo $dmRow['title']?></h2>
                                    <i>초기비용 선납금 <?php echo $dmRow['advance']?>%</i>
                                    <ul>
                                        <li>계약기간</li>
                                        <li>리스요금</li>
                                        <li>렌트요금</li>
                                    </ul>
                                    <div class="non_hover">
                                        <p>36개월</p>
                                        <h2><?php echo number_format($dmRow['lease36'])?>~</h2>
                                        <h2><?php echo number_format($dmRow['rent36'])?>~</h2>
                                    </div>
                                    <div>
                                        <p>48개월</p>
                                        <h2><?php echo number_format($dmRow['lease48'])?>~</h2>
                                        <h2><?php echo number_format($dmRow['rent48'])?>~</h2>
                                    </div>
                                    <div>
                                        <p>60개월</p>
                                        <h2><?php echo number_format($dmRow['lease60'])?>~</h2>
                                        <h2><?php echo number_format($dmRow['rent60'])?>~</h2>
                                    </div>
                                </div>
                                <a href="sub/estimate.php?car=<?php echo $dmRow['title']?>">상담신청</a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <img src="img/slide-prev-arrow.png" class="prev-btn prev0<?php echo $j?>">
                    <img src="img/slide-next-arrow.png" class="next-btn next0<?php echo $j?>">
                </div>
                <?php 
                $j++;
                }?>
            </div>
        </div>
        <h2 class="title">수입차 BEST</h2>
        <div class="best_contents">
            <ul class="best_category best_category02">
                <li class="on">
                    <img src="img/car-benz.png">
                    <p>벤츠</p>
                </li>
                <li>
                    <img src="img/car-bmw.png">
                    <p>BMW</p>
                </li>
                <li>
                    <img src="img/car-audi.png">
                    <p>아우디</p>
                </li>
                <li>
                    <img src="img/car-logo.png">
                    <p>기타</p>
                </li>
            </ul>
            <div class="inner inner02" style="margin: 0 auto;">
                
            <?php
                $iSql="SELECT * FROM income ORDER BY num ASC";
                $iRes=mysqli_query($conn, $iSql);
                $i=1;
                while($iRow=mysqli_fetch_array($iRes)){
                    $income=$iRow['income_name'];
                ?>
                <div class="contents <?php echo ($i==1) ? "on" : ""?>">
                    <div class="swiper-container best_slide best_slide02_0<?php echo $i?>">
                        <div class="swiper-wrapper">
                            <?php
                            $imSql="SELECT * FROM income_list WHERE income='$income' ORDER BY num DESC";
                            $imRes=mysqli_query($conn, $imSql);
                            while($imRow=mysqli_fetch_array($imRes)){
                            ?>
                            <div class="swiper-slide">
                                <div class="img_box"><img src="img/income/<?php echo $imRow['thumb'];?>"></div>
                                <div class="txt_box">
                                    <h2><?php echo $imRow['title']?></h2>
                                    <i>초기비용 선납금 <?php echo $imRow['advance']?>%</i>
                                    <ul>
                                        <li>계약기간</li>
                                        <li>리스요금</li>
                                        <li>렌트요금</li>
                                    </ul>
                                    <div class="non_hover">
                                        <p>36개월</p>
                                        <h2><?php echo number_format($imRow['lease36'])?>~</h2>
                                        <h2><?php echo number_format($imRow['rent36'])?>~</h2>
                                    </div>
                                    <div>
                                        <p>48개월</p>
                                        <h2><?php echo number_format($imRow['lease48'])?>~</h2>
                                        <h2><?php echo number_format($imRow['rent48'])?>~</h2>
                                    </div>
                                    <div>
                                        <p>60개월</p>
                                        <h2><?php echo number_format($imRow['lease60'])?>~</h2>
                                        <h2><?php echo number_format($imRow['rent60'])?>~</h2>
                                    </div>
                                </div>
                                <a href="sub/estimate.php?car=<?php echo $imRow['title']?>">상담신청</a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <img src="img/slide-prev-arrow.png" class="prev-btn prev<?php echo ($i==4) ? "0".($i+6) : ($i+6)?>">
                    <img src="img/slide-next-arrow.png" class="next-btn next<?php echo ($i==4) ? "0".($i+6) : ($i+6)?>">
                </div>
                <?php 
                $i++;
                }?>
            </div>
        </div>
    </section>
    <section id="cashback">
        <h2 class="title">오토캐시백</h2>
        <a href="sub/cashback.php" style="background: url(img/autocash.png) no-repeat center/cover;"></a>
    </section>
    <section id="installment">
        <h2 class="title">신차할부</h2>
        <a href="sub/installment.php" style="background: url(img/installment.png) no-repeat center/cover;"></a>
    </section>
    <section id="review">
        <h2 class="title">실제 출고후기</h2>
        <div class="inner">
            <div class="swiper-container review_slide">
                <div class="swiper-wrapper">
                    <?php
                    $rSql="SELECT * FROM reviews ORDER BY num DESC";
                    $rRes=mysqli_query($conn, $rSql);
                    while($rRow=mysqli_fetch_array($rRes)){
                    ?>
                    <div class="swiper-slide">
                        <img src="img/reviews/<?php echo $rRow['thumb']?>">
                        <div class="txt_box">
                            <h2><?php echo $rRow['title']?></h2>
                            <div>
                                <span><?php echo $rRow['write_name']?></span>
                                <span><?php echo date("y.m.d", strtotime($rRow['write_time']))?></span>
                            </div>
                            <p>
                            <?php echo $rRow['contents']?>
                            </p>
                        </div>
                        <a href="sub/review.php?num=<?php echo $rRow['num']?>">자세히 보기</a>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <img src="img/slide-prev-arrow.png" class="prev-btn prev13">
            <img src="img/slide-next-arrow.png" class="next-btn next13">
        </div>
    </section>
    <section id="procedure">
        <h2 class="title">이용절차</h2>
        <div class="contents">
            <div class="content">
                <h3>01</h3>
                <h2>1:1 맞춤상담</h2>
                <p>문의주신 차종의 전문상담사가 최적의 견적서 제시</p>
            </div>
            <div class="content">
                <h3>02</h3>
                <h2>서류심사</h2>
                <p>장기렌트와 리스진행<br>승인을 위한 서류심사</p>
            </div>
            <div class="content">
                <h3>03</h3>
                <h2>계약체결</h2>
                <p>렌트 담당자가<br>직접 방문 및 전자약정 진행</p>
            </div>
            <div class="content">
                <h3>04</h3>
                <h2>차량 출고 및 인도</h2>
                <p>문의주신 차종의 전문상담사가 최적의 견적서 제시</p>
            </div>
            <div class="content">
                <h3>05</h3>
                <h2>꾸준한 사후관리</h2>
                <p>인도 후 끝이 아닌<br>차량 정비 등 확실한 사후<br>서비스</p>
            </div>
            <div class="content">
                <h3>06</h3>
                <h2>렌트/리스 기간 종료</h2>
                <p>계약기간 종료 후<br>재계약 / 반납 / 인수 선택</p>
            </div>
        </div>
    </section>
    <section id="estimate">
        <div class="left">
            <h2>견적 문의하기</h2>
            <form method="POST" action="counsel.php" target="ifrm">
            <input type="submit" id="sub3" style="display:none">
            <input type="hidden" name="type" value="견적">
            <div class="contents">
                <div class="top">
                    <div>
                        <p>신청하시는 분 성함 또는 기업명</p>
                        <input type="text" name="name" required>
                    </div>
                    <div>
                        <p>휴대전화 번호 입력</p>
                        <input type="tel" name="tel" required>
                    </div>
                </div>
                <div class="top">
                    <div>
                        <p>이용기간 선택</p>
                        <div class="label_contents">
                            <label>
                                <input type="radio" name="month" value="36" required>
                                <span>36개월</span>
                            </label>
                            <label>
                                <input type="radio" name="month" value="48" required>
                                <span>48개월</span>
                            </label>
                            <label>
                                <input type="radio" name="month" value="60" required>
                                <span>60개월</span>
                            </label>
                        </div>
                    </div>
                    <div>
                        <p>선택된 차종</p>
                        <input type="text" name="car" required>
                    </div>
                </div>
                <div class="top">
                    <div>
                        <p>선수금 선택</p>
                        <div class="label_contents label05">
                            <label>
                                <input type="radio" name="advance" value="0" required checked>
                                <span>0%</span>
                            </label>
                            <label>
                                <input type="radio" name="advance" value="10" required>
                                <span>10%</span>
                            </label>
                            <label>
                                <input type="radio" name="advance" value="20" required>
                                <span>20%</span>
                            </label>
                            <label>
                                <input type="radio" name="advance" value="30" required>
                                <span>30%</span>
                            </label>
                            <label>
                                <input type="radio" name="advance" value="기타" required>
                                <span>기타</span>
                            </label>
                        </div>
                    </div>
                    <div>
                        <p>보증금 선택</p>
                        <div class="label_contents label05">
                            <label>
                                <input type="radio" name="subsidy" value="0" required checked>
                                <span>0%</span>
                            </label>
                            <label>
                                <input type="radio" name="subsidy" value="10" required>
                                <span>10%</span>
                            </label>
                            <label>
                                <input type="radio" name="subsidy" value="20" required>
                                <span>20%</span>
                            </label>
                            <label>
                                <input type="radio" name="subsidy" value="30" required>
                                <span>30%</span>
                            </label>
                            <label>
                                <input type="radio" name="subsidy" value="기타" required>
                                <span>기타</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="top">
                    <div style="margin-top: 0;">
                        <p>대물보험 선택</p>
                        <div class="label_contents label00">
                            <label>
                                <input type="radio" name="insurance" value="1" required>
                                <span>1억</span>
                            </label>
                            <label>
                                <input type="radio" name="insurance" value="2" required>
                                <span>2억</span>
                            </label>
                            <label>
                                <input type="radio" name="insurance" value="3" required>
                                <span>3억</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="bottom">
                    <p>개인정보 수집 및 이용 동의</p>
                    <div class="pri_box">
                        넥스트 (주)(이하 ‘회사’라 한다)이 취급하는 모든 개인정보는 관련법령에 근거하거나 정보주체의 동의에 의하여 수집, 보유 및 처리되고 있습니다.
                        회사는 개인정보취급방침을 개정하는 경우 웹사이트 공지사항을 통하여 공지할 것입니다.<br><br>
                        본 방침은 2023년 01월 01일부터 시행됩니다.<br><br>
                        1. 개인정보의 처리 목적<br>
                        회사는 다음의 목적을 위하여 개인정보를 처리합니다. 처리하고 있는 개인정보는 다음의 목적 이외의 용도로는 이용되지 않으며, 이용목적이 변경되는 경우에는 별도의 동의를 받는 등 필요한 조치를 이행할 것입니다.<br>
                        ① 고객문의, 본인확인<br>
                        ② 민원사항 확인, 사실확인을 위한 연락, 처리결과 통보<br><br>
                        2. 개인정보의 처리 및 보유기간<br>
                        회사는 법령에 따른 개인정보 보유, 이용기간 또는 정보주체로부터 개인정보 수집 시에 동의 받은 개인정보 보유, 이용기간 내에서 개인정보를 처리 및 보유합니다.<br>
                        ① 민원처리 : 민원처리가 종료된 시점<br>
                        ② 상담을 위한 경우 : 상담이 종료된 시점<br>
                        ③ 관계법령 위반에 따른 수사·조사 등이 진행중인 경우에는 해당 수사·조사 종료시까지<br><br>
                        3. 개인정보의 제3자 제공<br>
                        회사가 수집·보유하고 있는 개인정보는 이용자의 동의 없이는 제3자에게 제공하지 않으며, 다음의 경우에는 개인정보를 제3자에게 제공할 수 있습니다.<br>
                        ① 정보주체로부터 별도의 동의를 받은 경우<br>
                        ② 법령의 법령의 규정에 의거하거나 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우<br><br>
                        4. 수집한 개인정보의 위탁<br>
                        회사는 고객의 동의 없이 개인정보를 외부업체에 위탁하지 않습니다. 향후 원활한 개인정보 업무처리를 위하여 개인정보를 위탁하는 경우, 위탁 대상자와 위탁 업무 내용에 대해 고객에게 통지하고 필요한 경우 사전 동의를 받도록 하겠습니다.<br><br>
                        5. 정보주체의 권리·의무 및 행사방법<br>
                        ① 정보주체(해당 주체의 법정대리인 포함, 이하 동일)는 회사에 대해 언제든지 개인정보 열람요구, 정정·삭제 및 처리정지를 요구할 수 있습니다.<br>
                        ② 제 ①항에 따른 권리행사는 회사에 대해 서면, 전화, FAX 등을 통하여 요구할 수 있으며, 회사는 이에 대해 지체없이 조치하겠습니다.<br>
                        ③ 고객이 개인정보의 오류 등에 대한 정정·삭제를 요구한 경우에는 회사는 정정·삭제를 완료할 때까지 당해 개인정보를 이용하거나 제공하지 않습니다.<br>
                        ④ 제 ①항에 따른 권리행사는 고객의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 하실 수 있습니다. 이 경우 개인정보보호법 시행규칙 별지 11호 서식에 따른 위임장을 제출해야 합니다.<br><br>
                        6. 처리하는 개인정보 항목<br>
                        ① 수집항목 : 이름, 연락처, 이메일주소<br>
                        ② 수집방법 : 홈페이지(윤리강령, 온라인문의)<br><br>
                        7. 개인정보의 파기<br>
                        ① 회사는 개인정보 보유기간의 경과, 처리목적의 달성 등 개인정보가 불필요하게 되었을 경우 지체없이 해당 개인정보를 파기합니다.<br>
                        ② 고객으로부터 동의 받은 개인정보 보유기간이 경과하거나 처리목적이 달성되었음에도 불구하고 다른 법령에 따라 개인정보를 계속 보존하여야 하는 경우에는, 해당 개인정보를 별도의 데이터베이스(DBMS)로 옮기거나 보관장소를 달리하여 보관합니다.<br>
                        ③ 회사는 전자적 파일형태로 기록·저장된 개인정보는 기록을 재생할 수 없도록 디가우징(Degaussing) 등의 방법을 이용하여 파기하며, 종이문서에 기록·저장된 개인정보는 분쇄기로 분쇄하거나 소각하여 파기합니다.<br><br>
                        8. 개인정보의 안전성 확보 조치<br>
                        회사는 개인정보의 안전성 확보를 위해 내부관리계획 수립·시행, 정기적 직원 교육, 개인정보처리시스템의 접근권한 관리, 전산실·자료보관실의 접근통제 등과 같은 조치를 취하고 있습니다.<br><br>
                        9. 개인정보보호 관리책임자<br>
                        ① 회사는 개인정보 처리에 관한 업무를 총괄해서 책임지고, 개인정보 처리와 관련한 고객의 불만처리 및 피해구제 등을 위하여 아래와 같이 개인정보 관리책임자를 지정하고 있습니다.<br><br>
                        개인정보보호 관리책임자<br>
                        성명 : <?php echo $ceo?><br>
                        전화 : <?php echo $tel?><br>
                        메일 : <?php echo $email?><br><br>
                        개인정보보호 담당자<br>
                        성명 : <?php echo $ceo?><br>
                        전화 : <?php echo $tel?><br>
                        메일 : <?php echo $email?><br><br>
                        ② 고객께서는 회사의 서비스(또는 사업)를 이용하시면서 발생한 모든 개인정보보호 관련 문의, 불만처리, 피해구제 등에 관한 사항을 개인정보 관리책임자 및 담당부서로 문의하실 수 있으며, 회사는 고객의 문의에 대해 지체없이 답변 및 처리해드리겠습니다.<br><br>
                        10. 권익침해 구제방법<br>
                        정보주체는 개인정보 침해로 인한 구제를 받기 위하여 개인정보분쟁조정위원회, 한국인터넷진흥원 개인정보침해신고센터 등에 분쟁해결이나 상담 등을 신청할 수 있습니다. 이 밖에 기타 개인정보침해의 신고 및 상담에 대하여는 아래의 기관에 문의할 수 있습니다.<br>
                        ① 개인정보분쟁조정위원회(www.kopico.go.kr) : 02-2100-2499<br>
                        ② 대검찰청 (www.spo.go.kr) : (국번없이) 1301<br>
                        ③ 경찰청 사이버안전국(http://cyberbureau.police.go.kr/) : (국번없이) 182<br><br>
                        11. 개인정보취급방침의 변경<br>
                        본 개인정보취급방침은 2023년 01월 01일부터 적용됩니다.<br>
                        이전의 개인정보취급방침은 아래에서 확인할 수 있습니다.<br><br>
                    </div>
                    <label>
                        <input type="checkbox" id="chk3">
                        <span>개인정보 수짐 및 이용에 동의합니다.</span>
                    </label>
                </div>
                <button type="button" onclick="counsel('3')">문의하기</button>
            </div>
            </form>
        </div>
        <div class="right">
            <h2>실시간 현황</h2>
            <?php
            $cSql="SELECT * FROM counsel ORDER BY num DESC LIMIT 10";
            $cRes=mysqli_query($conn, $cSql);
            while($cRow=mysqli_fetch_array($cRes)){
                $date=$cRow['write_time'];
                $cTel=$cRow['tel'];
                $car=$cRow['car'];
                $month=$cRow['month'];
                $stat=$cRow['stat'];
            ?>
            <ul>
                <li><?php echo date("y.m.d", strtotime($date))?></li>
                <li><?php echo substr($cTel, 0, 3)?> - **** - ****</li>
                <li><?php echo ($car) ? $car : "기타" ?></li>
                <li><?php echo ($month) ? $month."개월" : ""?> </li>
                <li><p class="<?php echo ($stat=="대기중") ? "wait" : "complete"?>"><?php echo $stat?></p></li>
            </ul>
            <?php } ?>
        </div>
    </section>
    <?php include 'footer.php';?>
    <?php include 'privacy.php';?>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

<script>
    $(function () {
        $(window).scroll(function(){
            var mainHeight = $(window).scrollTop();
            var home = $("#home").innerHeight();
            var best = $("#best").innerHeight();
            var cashback = $("#cashback").innerHeight();
            var installment = $("#installment").innerHeight();
            var review = $("#review").innerHeight();
            var procedure = $("#procedure").innerHeight();
            var estimate = $("#estimate").innerHeight();
            var totalHeight = home + best + cashback + installment + review + procedure + estimate;

            if (mainHeight > totalHeight - 750) {
                $(".bottom_fix").css({
                    "position" : "sticky",
                });
            };

            if (mainHeight < totalHeight - 750) {
                $(".bottom_fix").css({
                    "position" : "fixed",
                });
            };


            var mobHeight = $(window).scrollTop();

            if (mobHeight > totalHeight - 1200) {
                $(".bottom_fix_mob").css({
                    "position" : "sticky",
                });
            };

            if (mobHeight < totalHeight - 1200) {
                $(".bottom_fix_mob").css({
                    "position" : "fixed",
                });
            };

        });
    })
</script>
</html>

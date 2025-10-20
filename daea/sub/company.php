<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/sub.css">
</head>

<body>
    <?php include '../header.php';?>
    <?php
    $bSql="SELECT * FROM banner WHERE `type`='company'";
    $bRes=mysqli_query($conn, $bSql);
    $bRow=mysqli_fetch_array($bRes);
    ?>
    <section class="sub_banner" style="background: url(../file/banner/<?php echo $bRow['img']?>) no-repeat center/cover;">
        <div class="bg"></div>
        <h2>COMPANY</h2>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <p>About</p>
            <img src="../img/flow-arrow.png">
            <p>Company</p>
        </div>
    </section>
    <section class="fix_des">
        <h2>FIND TECH,<br> RAISE VENTURE</h2>
        <p>기업 성장 전 단계에 아우르는 유망 신기술사업자를<br> 집중 발굴하여 투자시장 활성화에 기여합니다.</p>
    </section>
    <section class="company">
        <div class="inner">
            <div class="left">
                <?php
                $sql="SELECT * FROM information";
                $res=mysqli_query($conn, $sql);
                $row=mysqli_fetch_array($res);
                $date=$row['date_time'];
                ?>
                <div class="big_contents">
                    <div class="contents_box">
                        <div class="sub_title">
                            <div class="title_box first">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <h2>Company Info</h2>
                        </div>
                        <div class="con_box">
                            <div class="contents">
                                <h2>설립일</h2>
                                <p><?php echo date("Y년 m월 d일", strtotime($date))?></p>
                            </div>
                            <div class="contents">
                                <h2>대표이사</h2>
                                <p><?php echo $row['name']?></p>
                            </div>
                            <div class="contents">
                                <h2>자본금</h2>
                                <p><?php echo $row['money']?></p>
                            </div>
                            <div class="contents">
                                <h2>소재지</h2>
                                <p><?php echo $row['addr']?>, <?php echo $row['detail_addr']?></p>
                            </div>
                            <div class="contents">
                                <h2>주요주주</h2>
                                <p><?php echo $row['shareholder']?></p>
                            </div>
                            <div class="contents">
                                <h2>주요사업</h2>
                                <p><?php echo $row['work']?></p>
                            </div>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="contents_box">
                        <div class="sub_title">
                            <div class="title_box second">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <h2>History</h2>
                        </div>
                        <div class="con_box">
                            <?php
                            $hSql="SELECT * FROM history ORDER BY datetime DESC";
                            $hRes=mysqli_query($conn, $hSql);
                            while($hRow=mysqli_fetch_array($hRes)){
                            ?>
                            <div class="contents">
                                <h2><?php echo date("Y. m. d", strtotime($hRow['datetime']))?></h2>
                                <p><?php echo $hRow['title']?></p>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-container company_slide">
                <div class="swiper-wrapper">
                    <?php
                    $sSql="SELECT * FROM slide WHERE background!='' AND `type`='middle' ORDER BY `number` ASC";
                    $sRes=mysqli_query($conn, $sSql);
                    while($sRow=mysqli_fetch_array($sRes)){
                    ?>
                    <div class="swiper-slide"><img src="../file/slide/middle/<?php echo $sRow['background']?>"></div>
                    <?php } ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/sub.js"></script>

</html>

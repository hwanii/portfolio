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
    $bSql="SELECT * FROM banner WHERE `type`='business'";
    $bRes=mysqli_query($conn, $bSql);
    $bRow=mysqli_fetch_array($bRes);
    ?>
    <section class="sub_banner" style="background: url(../file/banner/<?php echo $bRow['img']?>) no-repeat center/cover;">
        <div class="bg"></div>
        <h2>BUSINESS</h2>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <p>About</p>
            <img src="../img/flow-arrow.png">
            <p>Business</p>
        </div>
    </section>
    <section class="fix_des">
        <h2>FIND TECH,<br> RAISE VENTURE</h2>
        <p>기업 성장 전 단계에 아우르는 유망 신기술사업자를<br> 집중 발굴하여 투자시장 활성화에 기여합니다.</p>
    </section>
    <section class="business">
        <div class="inner">
            <div class="contents_box">
                <div class="sub_title">
                    <div class="title_box second">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <h2>Business Area</h2>
                </div>
                <div class="circle_box">
                    <div class="contents">
                        <img src="../img/business01.png">
                        <p>지분 투자</p>
                    </div>
                    <div class="contents">
                        <img src="../img/business02.png">
                        <p>채권 인수</p>
                    </div>
                    <div class="contents">
                        <img src="../img/business03.png">
                        <p>기업 대출</p>
                    </div>
                    <div class="contents">
                        <img src="../img/business04.png">
                        <p>할부 금융</p>
                    </div>
                    <div class="contents">
                        <img src="../img/business05.png">
                        <p>펀드 운용</p>
                    </div>
                </div>
            </div>
            <div class="contents_box">
                <div class="sub_title">
                    <div class="title_box first">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <h2>Business Introduction</h2>
                </div>
                <div class="con_box">
                    <?php
                    $sql="SELECT * FROM business";
                    $res=mysqli_query($conn, $sql);
                    $row=mysqli_fetch_array($res);
                    echo $row['contents'];
                    ?>
                </div>
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

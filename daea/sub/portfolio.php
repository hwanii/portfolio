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
    $bSql="SELECT * FROM banner WHERE `type`='portfolio'";
    $bRes=mysqli_query($conn, $bSql);
    $bRow=mysqli_fetch_array($bRes);
    ?>
    <section class="sub_banner" style="background: url(../file/banner/<?php echo $bRow['img']?>) no-repeat center/cover;">
        <div class="bg"></div>
        <h2>PORTFOLIO</h2>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <p>Portfolio</p>
            <img src="../img/flow-arrow.png">
            <p>Portfolio</p>
        </div>
    </section>
    <section class="fix_des">
        <h2>FIND TECH,<br> RAISE VENTURE</h2>
        <p>기업 성장 전 단계에 아우르는 유망 신기술사업자를<br> 집중 발굴하여 투자시장 활성화에 기여합니다.</p>
    </section>
    <section class="portfolio">
        <div class="inner">
            <div class="sub_title">
                <div class="title_box first">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <h2>Portfolio</h2>
            </div>
            <div class="contents_box">
                <?php
                $sql="SELECT * FROM portfolio ORDER BY write_time ASC";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                ?>
                <div class="contents">
                    <div class="img_box"><img src="../file/portfolio/<?php echo $row['file_1']?>"></div>
                    <div class="txt_box">
                        <h2><?php echo $row['title']?></h2>
                        <p><?php echo $row['contents']?></p>
                    </div>
                </div>
                <?php } ?>
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

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
    $bSql="SELECT * FROM banner WHERE `type`='organization'";
    $bRes=mysqli_query($conn, $bSql);
    $bRow=mysqli_fetch_array($bRes);
    ?>
    <section class="sub_banner" style="background: url(../file/banner/<?php echo $bRow['img']?>) no-repeat center/cover;">
        <div class="bg"></div>
        <h2>ORGANIZATION</h2>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <p>About</p>
            <img src="../img/flow-arrow.png">
            <p>Organization</p>
        </div>
    </section>
    <section class="fix_des">
        <h2>FIND TECH,<br> RAISE VENTURE</h2>
        <p>기업 성장 전 단계에 아우르는 유망 신기술사업자를<br> 집중 발굴하여 투자시장 활성화에 기여합니다.</p>
    </section>
    <section class="organization">
        <div class="inner">
            <div class="sub_title">
                <div class="title_box first">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <h2>Organization Chart</h2>
            </div>
            <?php
            $sql="SELECT * FROM organization";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            ?>
            <img src="../file/organization/<?php echo $row['organization'];?>">
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/sub.js"></script>

</html>

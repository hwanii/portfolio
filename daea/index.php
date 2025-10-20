<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php';?>
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'header.php';?>
    <section class="swiper-container main_slide">
        <div class="swiper-wrapper">
            <?php
            $sql="SELECT * FROM slide WHERE background!='' AND `type`='main' ORDER BY `number` ASC";
            $res=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($res)){
            ?>
            <div class="swiper-slide" style="background: url(file/slide/main/<?php echo $row['background']?>) no-repeat center/cover;">
                <div class="bg"></div>
                <div class="txt">
                    <h2><b>DAEA</b>INVESTMENT</h2>
                    <p>대아인베스트먼트</p>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <?php include 'footer.php'; ?>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

</html>

<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/sub.css">
</head>

<body class="wrap">
    <?php include '../header.php';?>
    <!-- <section class="swiper-container main_slide" id="home">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background: url(../img/main-slide01.png) no-repeat center/cover;"></div>
            <div class="swiper-slide" style="background: url(../img/main-slide01.png) no-repeat center/cover;"></div>
            <div class="swiper-slide" style="background: url(../main-slide01.png) no-repeat center/cover;"></div>
            <div class="swiper-slide" style="background: url(../img/main-slide01.png) no-repeat center/cover;"></div>
            <div class="swiper-slide" style="background: url(../img/main-slide01.png) no-repeat center/cover;"></div>
        </div>
        <div class="swiper-pagination"></div>
    </section> -->
    <section id="review">
        <?php 
        $num=$_GET['num'];
        
        $hSql="UPDATE reviews SET hit=hit+1 WHERE num='$num'";
        $hRes=mysqli_query($conn, $hSql);

        $sql="SELECT * FROM reviews WHERE num='$num'";
        $res=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($res);
        $date=$row['write_time'];
        $title=$row['title'];
        $name=$row['write_name'];
        $contents=$row['contents'];
        $thumb=$row['thumb'];
        ?>
        <h2 class="title">실제 출고후기</h2>
        <div class="contents">
            <img src="../img/reviews/<?php echo $thumb?>">
            <div class="sub_title">
                <h2><?php echo $title?></h2>
                <p><?php echo $name?></p>
                <p><?php echo date("y-m-d", strtotime($date))?></p>
            </div>
            <p><?php echo nl2br($contents)?></p>
        </div>
        <div class="sub_bottom">
            <?php
            $pSql="SELECT * FROM reviews WHERE num < '$num' ORDER BY num DESC LIMIT 1";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $prev=$pRow['num'];
            
            $nSql="SELECT * FROM reviews WHERE num > '$num' ORDER BY num ASC LIMIT 1";
            $nRes=mysqli_query($conn, $nSql);
            $nRow=mysqli_fetch_array($nRes);
            $next=$nRow['num'];
            ?>
            <a href="<?php echo $_SERVER['PHP_SELF']?>?num=<?php echo $prev?>" class="before" style="<?php echo ($prev) ? "" : "visibility:hidden"?>">
                <img src="../img/review-left.png">
                <p>Before</p>
            </a>
            <a href="../index.php" class="center">메인으로 돌아가기</a>
            <a href="<?php echo $_SERVER['PHP_SELF']?>?num=<?php echo $next?>" class="after" style="<?php echo ($next) ? "" : "visibility:hidden"?>">
                <img src="../img/review-right.png">
                <p>After</p>
            </a>
        </div>
    </section>
    <?php include '../footer.php';?>
    <?php include '../privacy.php';?>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/sub.js"></script>

<script>
    $(function () {
        $(window).scroll(function(){
            var mainHeight = $(window).scrollTop();
            var review = $("#review").innerHeight();
            var totalHeight =  review;

            if (mainHeight > totalHeight - 1000) {
                $(".bottom_fix").css({
                    "position" : "sticky",
                });
            };

            if (mainHeight < totalHeight - 1000) {
                $(".bottom_fix").css({
                    "position" : "fixed",
                });
            };


            var mobHeight = $(window).scrollTop();

            if (mobHeight > totalHeight - 850) {
                $(".bottom_fix_mob").css({
                    "position" : "sticky",
                });
            };

            if (mobHeight < totalHeight - 850) {
                $(".bottom_fix_mob").css({
                    "position" : "fixed",
                });
            };

        });
    })
</script>

</html>

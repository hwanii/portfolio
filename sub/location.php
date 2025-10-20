<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/sub.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/sub.js"></script>
</head>

<body>
    <a href="../index.php" class="logo"></a>
    <header>
        <div class="center">
            <h2>High X Location</h2>
        </div>
    </header>
    <div class="top_btn">
        <div>
            <p>TOP</p>
        </div>
    </div>
    <div class="menu_btn">
        <div>
            <span></span>
            <span></span>
        </div>
    </div>
    <?php 
    $header="highklass";
    include '../header.php';?>
    <section class="location">
        <div class="inner">
            <div class="top_txt">
                <p>
                    <b>Location.</b><br>
                    <strong>하이클라스로</strong><br>
                    오시는 길을 알려드립니다.
                </p>
            </div>
            <?php
            $sql="SELECT * FROM map";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            $map=$row['map'];
            $addr=$row['addr'];
            $detail=$row['detail'];
            $tel=$row['tel'];
            $email=$row['email'];
            $naver=$row['naver'];
            $google=$row['google'];
            ?>
            <div class="map">
                <?php echo $map?>
            </div>
            <div class="map_contents">
                <h2><?php echo $addr?>, <?php echo $detail?></h2>
                <div class="bottom">
                    <div>
                        <h2>TEL</h2>
                        <p><?php echo $tel?></p>
                    </div>
                    <div>
                        <h2>EMAIL</h2>
                        <p><?php echo $email?></p>
                    </div>
                </div>
                <div class="right">
                    <a href="<?php echo $naver?>" target="_blank">
                        <span></span>
                        <p>네이버지도</p>
                        <i></i>
                    </a>
                    <a href="<?php echo $google?>" target="_blank">
                        <span></span>
                        <p>구글지도</p>
                        <i></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
</html>

<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php'?>
    <link rel="stylesheet" href="font/font.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>

<body>
    <?php include 'header.php';?>
    <section class="main_banner">
        <div class="swiper-container main_slide">
            <div class="swiper-wrapper">
                <?php
                $sSql="SELECT * FROM slide ORDER BY num DESC";
                $sRes=mysqli_query($conn, $sSql);
                while($sRow=mysqli_fetch_array($sRes)){
                    $slide=$sRow['background'];
                ?>
                <div class="swiper-slide bg01" style="background: url('./admin/img/background/<?php echo $slide?>') no-repeat center/cover;">
                    <div class="main_bg"></div>
                    <div class="txt_box">
                        <span>DAHAM KOREA TRADING COMPANY</span>
                        <img src="img/f-logo.png" alt="">
                        <h2>중국 무역대행 전자상거래 대행 전문</h2>
                        <i></i>
                        <p>
                            010-4779-1599<br>
                            070-4035-6010
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section class="business" data-aos="fade-up">
        <div class="inner">
            <div class="left">
                <h2>사업영역</h2>
                <span>BUSINESS AREA</span>
                <p>다함 트레이딩의<br>사업분야를 소개합니다.</p>
                <div class="swiper_btn_box">
                    <div class="swiper-btn-prev prev01"><img src="img/slide-left-arrow.png" alt=""></div>
                    <div class="swiper-btn-next next01"><img src="img/slide-right-arrow.png" alt=""></div>
                </div>
            </div>
            <div class="right">
                <div class="swiper-container swiper_business">
                    <div class="swiper-wrapper">
                        <?php
                        $aSql="SELECT * FROM areas";
                        $aRes=mysqli_query($conn, $aSql);
                        $aRows=mysqli_num_rows($aRes);

                        for($i=0;$i<ceil($aRows/4);$i++){
                            $limit=$i*4;
                        ?>
                        <div class="swiper-slide">
                            <?php
                            $arSql="SELECT * FROM areas ORDER BY num ASC LIMIT $limit, 4";
                            $arRes=mysqli_query($conn, $arSql);
                            while($arRow=mysqli_fetch_array($arRes)){
                                $title=$arRow['title'];
                                $contents=$arRow['contents'];
                                $thumb=$arRow['thumbnail'];
                                $link=$arRow['file_2'];
                            ?>
                            <a href="<?php echo $link?>">
                                <img src="img/areas/<?php echo $thumb?>" alt="">
                                <h2><?php echo $title?></h2>
                                <p><?php echo strip_tags($contents)?></p>
                            </a>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="live_go">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>GOOD<br>BUSINESS<br>PARTNER</h2>
            <img src="img/main-logo01.png" alt="">
            <a href="sub/inquiry.php">
                <p>실시간 문의</p>
                <img src="img/main-right-arrow.png" alt="">
            </a>
        </div>
    </section>
    <section class="gallery" data-aos="fade-up">
        <div class="slide_inner">
            <div class="title_box">
                <h2>갤러리</h2>
                <span>DAHAM GALLERY</span>
                <p>다함 트레이딩의 업무 모습들을 소개합니다.</p>
            </div>
            <div class="slide_inner01">
                <div class="swiper-container swiper_gal">
                    <div class="swiper-wrapper">
                        <?php
                        $gSql="SELECT * FROM gallery";
                        $gRes=mysqli_query($conn, $gSql);
                        $gRows=mysqli_num_rows($gRes);

                        for($g=0;$g<ceil($gRows/5);$g++){
                            $gl=$g*5;
                        ?>
                        <div class="swiper-slide">
                            <?php
                            $gaSql="SELECT * FROM gallery ORDER BY num ASC LIMIT $gl, 5";
                            $gaRes=mysqli_query($conn, $gaSql);
                            while($gRow=mysqli_fetch_array($gaRes)){
                                $gThumb=$gRow['thumbnail'];
                                $gTitle=$gRow['title'];
                            ?>
                            <a href="sub/gallery.php">
                                <img src="img/gallery/<?php echo $gThumb?>" alt="">
                                <p><?php echo $gTitle?></p>
                            </a>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="swiper-btn-prev prev02"><img src="img/slide-left-arrow.png" alt=""></div>
                <div class="swiper-btn-next next02"><img src="img/slide-right-arrow.png" alt=""></div>
            </div>
        </div>
    </section>
    <section class="information" data-aos="fade-up">
        <div class="inner">
            <div class="left">
                <h2>오시는 길</h2>
                <div class="map">
                    <ul>
                        <li class="on">한국 사무소</li>
                        <li>이우 사무소</li>
                        <li>청도 사무소</li>
                    </ul>
                    <div class="contents">
                        <div class="content active">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3167.6974731486334!2d126.64981987635765!3d37.44425093113003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b7852b27e491d%3A0x2ba89a78d23e98fb!2z7J247LKc6rSR7Jet7IucIOuvuOy2lO2ZgOq1rCDrp6TshoztmYDroZwgMjYy!5e0!3m2!1sko!2skr!4v1681715107609!5m2!1sko!2skr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <p>주소 : 인천 미추홀구 매소홀로 262, 11층 11003호(학익동 시티필드)</p>
                        </div>
                        <div class="content">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3480.459667784844!2d120.04646000000001!3d29.268829999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34495194d60b5677%3A0xd917531b6ad94a72!2sTa%20Nan%20Er%20Lu%2C%20Yi%20Wu%20Shi%2C%20Jin%20Hua%20Shi%2C%20Zhe%20Jiang%20Sheng%2C%20%EC%A4%91%EA%B5%AD%20322001!5e0!3m2!1sko!2skr!4v1681791908801!5m2!1sko!2skr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <p>주소 : zhejiang jinhuashi yiwushi jiangdong jiedao taxiazhou xinjie 10 chuang ta xiazhou xinjie 10hao 306</p>
                        </div>
                        <div class="content">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3211.798624132523!2d120.438998!3d36.3898687!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3596669c93e7dac9%3A0xc84bf6321c04098b!2sZhen%20Hua%20Bei%20Jie%2C%20Ji%20Mo%20Qu%2C%20Qing%20Dao%20Shi%2C%20Shan%20Dong%20Sheng%2C%20%EC%A4%91%EA%B5%AD%20266200!5e0!3m2!1sko!2skr!4v1681791947402!5m2!1sko!2skr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <p>주소 : qingdaoshi jimo quhuai shehe erlu 107hao yi 2</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="center">
                <h2>실시간 문의</h2>
                <ul>
                    <?php
                    $sql="SELECT * FROM counsel ORDER BY num DESC LIMIT 4";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $title=$row['title'];
                    ?>
                    <li><a href="sub/inquiry.php"><?php echo $title?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="right">
                <h2>고객센터</h2>
                <div>
                    <h3>상담문의</h3>
                    <div>
                        <p>한국 -</p>
                        <span>070-4035-6010 / 010-4779-1599</span>
                    </div>
                    <div>
                        <p>중국 -</p>
                        <span>
                            [ 이우 ] 130-9466-7212<br>
                            [ 청도 ] 176-8583-5830
                        </span>
                    </div>
                </div>
                <div>
                    <h3>업무시간</h3>
                    <p>월~토 : 09:00~18:00 (일요일, 공휴일 휴무)</p>
                </div>
                <div>
                    <h3>이메일</h3>
                    <p>daham112@naver.com</p>
                </div>
            </div>
        </div>
    </section>
    <section class="platform" data-aos="fade-up">
        <div class="inner">
            <h2>플랫폼 바로가기</h2>
        </div>
        <div class="slide_inner01">
            <div class="swiper-container swiper_platform">
                <div class="swiper-wrapper">
                    <?php
                    $fSql="SELECT * FROM platform";
                    $fRes=mysqli_query($conn, $fSql);
                    $fRows=mysqli_num_rows($fRes);

                    for($f=0;$f<ceil($fRows/5);$f++){
                        $fl=$f*5;
                    ?>
                    <div class="swiper-slide">
                        <?php
                        $sql="SELECT * FROM platform ORDER BY num ASC LIMIT $fl, 5";
                        $res=mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($res)){
                            $link=$row['link'];
                            $thumbnail=$row['thumbnail'];
                        ?>
                        <a href="<?php echo ($link) ? $link : "javascript:void(0)"?>" <?php echo ($link) ? "target='_blank'" : ""?>><img src="img/platform/<?php echo $thumbnail?>" alt=""></a>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="swiper-btn-prev prev03"><img src="img/slide-left-arrow.png" alt=""></div>
            <div class="swiper-btn-next next03"><img src="img/slide-right-arrow.png" alt=""></div>
        </div>
    </section>
    <?php include 'footer.php';?>
</body>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/swiper-bundle.min.js"></script>

</html>

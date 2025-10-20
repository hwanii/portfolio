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
    <section class="autocash">
        <h2 class="title">오토캐시백</h2>
        <div class="contents">
            <div class="sub_title">
                <img src="../img/hanacard.png">
                <h2>신규</h2>
            </div>
            <?php
            $sql="SELECT * FROM cash WHERE `type`='hana_new'";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            ?>
            <div class="table_contents">
                <ul>
                    <li>결제금액</li>
                    <li>카드사</li>
                    <li>넥스트</li>
                    <li>합계</li>
                </ul>
                <ul>
                    <li>5,000만원 이상</li>
                    <li><?php echo $row['card5']?>%</li>
                    <li><?php echo $row['next5']?>%</li>
                    <li><?php echo $row['total5']?>%</li>
                </ul>
                <ul>
                    <li>4,000만원 이상</li>
                    <li><?php echo $row['card4']?>%</li>
                    <li><?php echo $row['next4']?>%</li>
                    <li><?php echo $row['total4']?>%</li>
                </ul>
                <ul>
                    <li>3,000만원 이상</li>
                    <li><?php echo $row['card3']?>%</li>
                    <li><?php echo $row['next3']?>%</li>
                    <li><?php echo $row['total3']?>%</li>
                </ul>
                <ul>
                    <li>2,000만원 이상</li>
                    <li><?php echo $row['card2']?>%</li>
                    <li><?php echo $row['next2']?>%</li>
                    <li><?php echo $row['total2']?>%</li>
                </ul>
                <ul>
                    <li>1,000만원 이상</li>
                    <li><?php echo $row['card1']?>%</li>
                    <li><?php echo $row['next1']?>%</li>
                    <li><?php echo $row['total1']?>%</li>
                </ul>
            </div>
        </div>
        <div class="contents">
            <div class="sub_title">
                <img src="../img/hanacard.png">
                <h2>기존</h2>
            </div>
            <?php
            $sql="SELECT * FROM cash WHERE `type`='hana'";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            ?>
            <div class="table_contents">
                <ul>
                    <li>결제금액</li>
                    <li>카드사</li>
                    <li>넥스트</li>
                    <li>합계</li>
                </ul>
                <ul>
                    <li>5,000만원 이상</li>
                    <li><?php echo $row['card5']?>%</li>
                    <li><?php echo $row['next5']?>%</li>
                    <li><?php echo $row['total5']?>%</li>
                </ul>
                <ul>
                    <li>4,000만원 이상</li>
                    <li><?php echo $row['card4']?>%</li>
                    <li><?php echo $row['next4']?>%</li>
                    <li><?php echo $row['total4']?>%</li>
                </ul>
                <ul>
                    <li>3,000만원 이상</li>
                    <li><?php echo $row['card3']?>%</li>
                    <li><?php echo $row['next3']?>%</li>
                    <li><?php echo $row['total3']?>%</li>
                </ul>
                <ul>
                    <li>2,000만원 이상</li>
                    <li><?php echo $row['card2']?>%</li>
                    <li><?php echo $row['next2']?>%</li>
                    <li><?php echo $row['total2']?>%</li>
                </ul>
                <ul>
                    <li>1,000만원 이상</li>
                    <li><?php echo $row['card1']?>%</li>
                    <li><?php echo $row['next1']?>%</li>
                    <li><?php echo $row['total1']?>%</li>
                </ul>
            </div>
        </div>
        <div class="contents">
            <div class="sub_title">
                <img src="../img/wooricard.png">
            </div>
            <?php
            $sql="SELECT * FROM cash WHERE `type`='woori'";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            ?>
            <div class="table_contents">
                <ul>
                    <li>결제금액</li>
                    <li>카드사</li>
                    <li>넥스트</li>
                    <li>합계</li>
                </ul>
                <ul>
                    <li>5,000만원 이상</li>
                    <li><?php echo $row['card5']?>%</li>
                    <li><?php echo $row['next5']?>%</li>
                    <li><?php echo $row['total5']?>%</li>
                </ul>
                <ul>
                    <li>4,000만원 이상</li>
                    <li><?php echo $row['card4']?>%</li>
                    <li><?php echo $row['next4']?>%</li>
                    <li><?php echo $row['total4']?>%</li>
                </ul>
                <ul>
                    <li>3,000만원 이상</li>
                    <li><?php echo $row['card3']?>%</li>
                    <li><?php echo $row['next3']?>%</li>
                    <li><?php echo $row['total3']?>%</li>
                </ul>
                <ul>
                    <li>2,000만원 이상</li>
                    <li><?php echo $row['card2']?>%</li>
                    <li><?php echo $row['next2']?>%</li>
                    <li><?php echo $row['total2']?>%</li>
                </ul>
                <ul>
                    <li>1,000만원 이상</li>
                    <li><?php echo $row['card1']?>%</li>
                    <li><?php echo $row['next1']?>%</li>
                    <li><?php echo $row['total1']?>%</li>
                </ul>
            </div>
        </div>
        <div class="contents">
            <div class="sub_title">
                <img src="../img/lottecard.png">
                <h2>신규</h2>
            </div>
            <?php
            $sql="SELECT * FROM cash WHERE `type`='loca_new'";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            ?>
            <div class="table_contents">
                <ul>
                    <li>결제금액</li>
                    <li>카드사</li>
                    <li>넥스트</li>
                    <li>합계</li>
                </ul>
                <ul>
                    <li>5,000만원 이상</li>
                    <li><?php echo $row['card5']?>%</li>
                    <li><?php echo $row['next5']?>%</li>
                    <li><?php echo $row['total5']?>%</li>
                </ul>
                <ul>
                    <li>4,000만원 이상</li>
                    <li><?php echo $row['card4']?>%</li>
                    <li><?php echo $row['next4']?>%</li>
                    <li><?php echo $row['total4']?>%</li>
                </ul>
                <ul>
                    <li>3,000만원 이상</li>
                    <li><?php echo $row['card3']?>%</li>
                    <li><?php echo $row['next3']?>%</li>
                    <li><?php echo $row['total3']?>%</li>
                </ul>
                <ul>
                    <li>2,000만원 이상</li>
                    <li><?php echo $row['card2']?>%</li>
                    <li><?php echo $row['next2']?>%</li>
                    <li><?php echo $row['total2']?>%</li>
                </ul>
                <ul>
                    <li>1,000만원 이상</li>
                    <li><?php echo $row['card1']?>%</li>
                    <li><?php echo $row['next1']?>%</li>
                    <li><?php echo $row['total1']?>%</li>
                </ul>
            </div>
        </div>
        <div class="contents">
            <div class="sub_title">
                <img src="../img/lottecard.png">
                <h2>기존</h2>
            </div>
            <?php
            $sql="SELECT * FROM cash WHERE `type`='loca'";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            ?>
            <div class="table_contents">
                <ul>
                    <li>결제금액</li>
                    <li>카드사</li>
                    <li>넥스트</li>
                    <li>합계</li>
                </ul>
                <ul>
                    <li>5,000만원 이상</li>
                    <li><?php echo $row['card5']?>%</li>
                    <li><?php echo $row['next5']?>%</li>
                    <li><?php echo $row['total5']?>%</li>
                </ul>
                <ul>
                    <li>4,000만원 이상</li>
                    <li><?php echo $row['card4']?>%</li>
                    <li><?php echo $row['next4']?>%</li>
                    <li><?php echo $row['total4']?>%</li>
                </ul>
                <ul>
                    <li>3,000만원 이상</li>
                    <li><?php echo $row['card3']?>%</li>
                    <li><?php echo $row['next3']?>%</li>
                    <li><?php echo $row['total3']?>%</li>
                </ul>
                <ul>
                    <li>2,000만원 이상</li>
                    <li><?php echo $row['card2']?>%</li>
                    <li><?php echo $row['next2']?>%</li>
                    <li><?php echo $row['total2']?>%</li>
                </ul>
                <ul>
                    <li>1,000만원 이상</li>
                    <li><?php echo $row['card1']?>%</li>
                    <li><?php echo $row['next1']?>%</li>
                    <li><?php echo $row['total1']?>%</li>
                </ul>
            </div>
        </div>
        <div class="contents">
            <div class="sub_title">
                <img src="../img/kbcard.png">
            </div>
            <?php
            $sql="SELECT * FROM cash WHERE `type`='kb'";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            ?>
            <div class="table_contents">
                <ul>
                    <li>결제금액</li>
                    <li>카드사</li>
                    <li>넥스트</li>
                    <li>합계</li>
                </ul>
                <ul>
                    <li>5,000만원 이상</li>
                    <li><?php echo $row['card5']?>%</li>
                    <li><?php echo $row['next5']?>%</li>
                    <li><?php echo $row['total5']?>%</li>
                </ul>
                <ul>
                    <li>4,000만원 이상</li>
                    <li><?php echo $row['card4']?>%</li>
                    <li><?php echo $row['next4']?>%</li>
                    <li><?php echo $row['total4']?>%</li>
                </ul>
                <ul>
                    <li>3,000만원 이상</li>
                    <li><?php echo $row['card3']?>%</li>
                    <li><?php echo $row['next3']?>%</li>
                    <li><?php echo $row['total3']?>%</li>
                </ul>
                <ul>
                    <li>2,000만원 이상</li>
                    <li><?php echo $row['card2']?>%</li>
                    <li><?php echo $row['next2']?>%</li>
                    <li><?php echo $row['total2']?>%</li>
                </ul>
                <ul>
                    <li>1,000만원 이상</li>
                    <li><?php echo $row['card1']?>%</li>
                    <li><?php echo $row['next1']?>%</li>
                    <li><?php echo $row['total1']?>%</li>
                </ul>
            </div>
        </div>
        <div class="contents">
            <div class="sub_title">
                <img src="../img/shinhan.png">
            </div>
            <?php
            $sql="SELECT * FROM cash WHERE `type`='mycar'";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            ?>
            <div class="table_contents">
                <ul>
                    <li>결제금액</li>
                    <li>카드사</li>
                    <li>넥스트</li>
                    <li>합계</li>
                </ul>
                <ul>
                    <li>5,000만원 이상</li>
                    <li><?php echo $row['card5']?>%</li>
                    <li><?php echo $row['next5']?>%</li>
                    <li><?php echo $row['total5']?>%</li>
                </ul>
                <ul>
                    <li>4,000만원 이상</li>
                    <li><?php echo $row['card4']?>%</li>
                    <li><?php echo $row['next4']?>%</li>
                    <li><?php echo $row['total4']?>%</li>
                </ul>
                <ul>
                    <li>3,000만원 이상</li>
                    <li><?php echo $row['card3']?>%</li>
                    <li><?php echo $row['next3']?>%</li>
                    <li><?php echo $row['total3']?>%</li>
                </ul>
                <ul>
                    <li>2,000만원 이상</li>
                    <li><?php echo $row['card2']?>%</li>
                    <li><?php echo $row['next2']?>%</li>
                    <li><?php echo $row['total2']?>%</li>
                </ul>
                <ul>
                    <li>1,000만원 이상</li>
                    <li><?php echo $row['card1']?>%</li>
                    <li><?php echo $row['next1']?>%</li>
                    <li><?php echo $row['total1']?>%</li>
                </ul>
            </div>
        </div>
        </div>
    </section>
    <a href="../index.php" class="togohome">메인으로 돌아가기</a>
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
            var autocash = $(".autocash").innerHeight();
            var totalHeight = autocash;

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

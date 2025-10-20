<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'; ?>
    <link rel="stylesheet" href="../css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/sub.css">
    <script src="../js/swiper-bundle.min.js"></script>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/sub.js"></script>
</head>

<body>
    <a href="../index.php" class="logo"></a>
    <header>
        <div class="center">
            <h2>High X Client</h2>
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
    $header="client";
    include '../header.php';?>
    <section class="client">
        <div class=inner>
            <div class="top_txt">
                <p>
                    <b>하이클라스는</b><br>
                    사용자에 대한 관찰을 통해 문제를 해결하고,<br>
                    경험을 가치로 전환합니다.<br>
                    <span>디지털 환경에 연결되어 있는 사람들에게 긍정적인 가치를 전달하고자 하며,<br>
                    사람을 이해하는 전문가로써 고객, 기업, 비즈니스 환경에 맞는 청사진을 제시합니다.</span>
                </p>
            </div>
        </div>
        <?php
        $sql="SELECT * FROM client ORDER BY num DESC";
        $res=mysqli_query($conn, $sql);
        $rows=mysqli_num_rows($res);
        ?>
        <div class="client_contents">
            <div class="txt_box">
                <h2>WITH<br> HIGHKLASS</h2>
                <p><strong>2023</strong>년, 현재까지<br> <strong class="number"></strong> 社의 <b>CLIENT</b>와 함께했습니다.</p>
            </div>
            <div class="swiper-container client_slide">
                <div class="swiper-wrapper">
                    <?php
                    while($row=mysqli_fetch_array($res)){
                        $file=$row['file'];
                    ?>
                    <div class="swiper-slide"><div><img src="../img/client/<?php echo $file?>"></div></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>

<script>
    var memberCountConTxt= <?php echo $rows + 200?>;
    
    $({ val : 0 }).animate({ val : memberCountConTxt }, {
    duration: 2000,
    step: function() {
        var num = numberWithCommas(Math.floor(this.val));
        $(".client_contents .number").text(num);
    },
    complete: function() {
        var num = numberWithCommas(Math.floor(this.val));
        $(".client_contents .number").text(num);
    }
    });

    //3자리마다 , 찍기
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
</script>

</html>

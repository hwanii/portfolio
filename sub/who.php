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
            <h2>High X Who</h2>
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
    <section class="who">
        <div class="video_banner">
            <video autoplay loop playsinline muted>
                <source src="../newhome/video/07.mp4" type="video/mp4">
            </video>
        </div>
        <?php
        $sql="SELECT * FROM who";
        $res=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($res);
        $contents1=$row['contents1'];
        $contents2=$row['contents2'];
        $contents3=$row['contents3'];
        $contents4=$row['contents4'];
        $contents5=$row['contents5'];
        $contents6=$row['contents6'];
        $contents7=$row['contents7'];
        ?>
        <div class="inner">
            <div class="who_txt_box">
                <?php echo $contents1?>
            </div>
            <div class="who_value">
                <h2>하이클라스가 추구하는 가치</h2>
                <div class="contents_box">
                    <div class="contents">
                        <div class="dot"></div>
                        <?php echo $contents2?>
                    </div>
                    <div class="contents">
                        <div class="dot"></div>
                        <?php echo $contents3?>
                    </div>
                    <div class="contents">
                        <div class="dot"></div>
                        <?php echo $contents4?>
                    </div>
                    <div class="contents">
                        <div class="dot"></div>
                        <?php echo $contents5?>
                    </div>
                    <div class="contents">
                        <div class="dot"></div>
                        <?php echo $contents6?>
                    </div>
                    <div class="contents">
                        <div class="dot"></div>
                        <?php echo $contents7?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
</html>

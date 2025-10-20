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
            <h2>High X Inside</h2>
        </div>
    </header>
    <div class="top_btn">
        <div>
            <p>TOP</p>
        </div>
    </div>
    <a href="../sub/outside.php" class="member_btn">
        <p>Outside</p>
        <img src="../img/arrow.png">
    </a>
    <div class="menu_btn">
        <div>
            <span></span>
            <span></span>
        </div>
    </div>
    <?php 
    $header="member";
    include '../header.php';?>
    <section class="member">
        <div class="inner">
            <div class="contents_row">
                <?php
                $sql="SELECT * FROM staff_list WHERE `type`='Inside' ORDER BY num ASC";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $file=$row['file'];
                    $team=$row['team'];
                    $name=$row['name'];
                    $link=$row['link'];
                    $contents=$row['contents'];
                ?>
                <div class="contents">
                    <?php if($link){ ?>
                    <a href="<?php echo $link?>" target="_blank"><img src="../img/w-insta.png"></a>
                    <?php } ?>
                    <div class="img_box">
                        <div class="bg"></div>
                        <div class="bg_txt">
                            <p><?php echo $contents?></p>
                        </div>
                        <img src="../img/staff/<?php echo $file?>">
                    </div>
                    <div class="txt_box">
                        <h2><?php echo $team?></h2>
                        <p><?php echo $name?> <span>프로</span></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
</html>

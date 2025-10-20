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
            <h2>High X Project</h2>
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
    $header="project";
    include '../header.php';?>
    <section class="project">
        <ul>
            <li class="on"><span>ALL</span></li>
            <li><span>WEB</span></li>
            <li><span>DESIGN</span></li>
            <li><span>LIVE</span></li>
        </ul>
        <div class="port_cate">
            <p class="on">ALL</p>
            <p>WEB</p>
            <p>DESIGN</p>
            <p>LIVE</p>
        </div>
        <div class="port_in">
            <div class="port_box active">
                <div class="port_contents">
                    <?php
                    $sql="SELECT * FROM web UNION ALL SELECT * FROM design UNION ALL SELECT * FROM live ORDER BY num DESC";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $cate=$row['cate'];
                        $num=$row['num'];
                        $file=$row['file'];
                    ?>
                    <a href="javascript:change('<?php echo $cate?>', '<?php echo $num?>')" class="contents">
                        <div class="bg"></div>
                        <img data-src="../img/<?php echo $cate?>/<?php echo $file?>" class="lozad">
                    </a>
                    <?php } ?>
                </div>
            </div>
            <div class="port_box">
                <div class="port_contents">
                    <?php
                    $sql="SELECT * FROM web ORDER BY num DESC";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $cate=$row['cate'];
                        $num=$row['num'];
                        $file=$row['file'];
                    ?>
                    <a href="javascript:change('<?php echo $cate?>', '<?php echo $num?>')" class="contents">
                        <div class="bg"></div>
                        <img data-src="../img/web/<?php echo $file?>" class="lozad">
                    </a>
                    <?php } ?>
                </div>
            </div>
            <div class="port_box">
                <div class="port_contents">
                    <?php
                    $sql="SELECT * FROM design ORDER BY num DESC";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $cate=$row['cate'];
                        $num=$row['num'];
                        $file=$row['file'];
                    ?>
                    <a href="javascript:change('<?php echo $cate?>', '<?php echo $num?>')" class="contents">
                        <div class="bg"></div>
                        <img data-src="../img/design/<?php echo $file?>" class="lozad">
                    </a>
                    <?php } ?>
                </div>
            </div>
            <div class="port_box">
                <div class="port_contents">
                    <?php
                    $sql="SELECT * FROM live ORDER BY num DESC";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $cate=$row['cate'];
                        $num=$row['num'];
                        $file=$row['file'];
                    ?>
                    <a href="javascript:change('<?php echo $cate?>', '<?php echo $num?>')" class="contents">
                        <div class="bg"></div>
                        <img data-src="../img/live/<?php echo $file?>" class="lozad">
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <section class="port_contents_pop">
            <div class="close">
                <div>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <p id="title">포트폴리오 제목</p>
            <img id="p_img" src="../img/port01.png">
        </section>
    </section>
    <?php include '../footer.php';?>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
    <script>
        const observer = lozad();
        observer.observe();
    </script>
</body>
<script>
    function change(c, n){
        $.ajax({
            url:"project_change.php",
            type:"POST",
            data:{
                cate:c,
                num:n
            },
            dataType:"JSON",
            success:function(data){
                // console.log(data);
                $("#title").text(data[0]);
                $("#p_img").attr("src", "../img/"+c+"/"+data[1]);
            }
        })
    }
</script>
</html>

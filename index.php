<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <a href="index.php" class="logo"></a>
    <header>
        <div class="logoo"></div>
        <div class="center" style="display: none;">
            <p>
                하이클라스의 홈페이지에 오신 여러분을 환영합니다. 하이클라스는 다양한 분야의 기업 홈페이지부터, 개인용 포트폴리오웹, 관리 시스템까지 늘 최선의 기술로 고객의 니즈에 맞춘 제작을 납품하고 있으며, 다년간 쌓인 기술로 어려움을 헤쳐나가는데에 익숙한 프로들이 일하고 있습니다.
                &nbsp;
                하이클라스의 홈페이지에 오신 여러분을 환영합니다. 하이클라스는 다양한 분야의 기업 홈페이지부터, 개인용 포트폴리오웹, 관리 시스템까지 늘 최선의 기술로 고객의 니즈에 맞춘 제작을 납품하고 있으며, 다년간 쌓인 기술로 어려움을 헤쳐나가는데에 익숙한 프로들이 일하고 있습니다.
            </p>
        </div>
        <div class="menu_btnn"></div>
    </header>
    <div class="menu_btn">
        <div>
            <span></span>
            <span></span>
        </div>
    </div>
    <?php include 'header.php';?>
    <section class="portfolio_pop">
        <h2>HIGHKLASS's Portfolio</h2>
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
        <div class="close">
            <div>
                <span></span>
                <span></span>
                <span></span>
            </div>
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
                        <img data-src="./img/<?php echo $cate?>/<?php echo $file?>" class="lozad">
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
                        <img data-src="./img/web/<?php echo $file?>" class="lozad">
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
                        <img data-src="./img/design/<?php echo $file?>" class="lozad">
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
                        <img data-src="./img/live/<?php echo $file?>" class="lozad">
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="port_contents_pop">
        <div class="close">
            <div>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <p id="title">포트폴리오 제목</p>
        <img id="p_img" src="img/port01.png">
    </section>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="bg"></div>
                <video autoplay loop playsinline muted>
                    <source src="./newhome/video/01.mp4" type="video/mp4">
                </video>
                <a href="javascript:void(0);" class="left_fix_txt_box">
                    <div>
                        <span style="animation-delay: 0ms;">이야기를&nbsp;</span>
                        <span style="animation-delay: 80ms;">듣고&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 160ms;">경험을&nbsp;</span>
                        <span style="animation-delay: 240ms;">녹여냅니다.&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 320ms;">정답은&nbsp;</span>
                        <span style="animation-delay: 400ms;">대화에&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 480ms;">있습니다.&nbsp;</span>
                    </div>
                    <ul>
                        <li>Portfolio</li>
                        <li>
                            <i></i>
                            <i></i>
                            <i></i>
                        </li>
                    </ul>
                </a>
            </div>
            <div class="swiper-slide">
                <div class="bg"></div>
                <video autoplay loop playsinline muted>
                    <source src="./newhome/video/02.mp4" type="video/mp4">
                </video>
                <a href="javascript:void(0);" class="left_fix_txt_box">
                    <div>
                        <span style="animation-delay: 0ms;">이야기를&nbsp;</span>
                        <span style="animation-delay: 80ms;">듣고&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 160ms;">경험을&nbsp;</span>
                        <span style="animation-delay: 240ms;">녹여냅니다.&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 320ms;">정답은&nbsp;</span>
                        <span style="animation-delay: 400ms;">대화에&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 480ms;">있습니다.&nbsp;</span>
                    </div>
                    <ul>
                        <li>Portfolio</li>
                        <li>
                            <i></i>
                            <i></i>
                            <i></i>
                        </li>
                    </ul>
                </a>
            </div>
            <div class="swiper-slide">
                <div class="bg"></div>
                <video autoplay loop playsinline muted>
                    <source src="./newhome/video/03.mp4" type="video/mp4">
                </video>
                <a href="javascript:void(0);" class="left_fix_txt_box">
                    <div>
                        <span style="animation-delay: 0ms;">이야기를&nbsp;</span>
                        <span style="animation-delay: 80ms;">듣고&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 160ms;">경험을&nbsp;</span>
                        <span style="animation-delay: 240ms;">녹여냅니다.&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 320ms;">정답은&nbsp;</span>
                        <span style="animation-delay: 400ms;">대화에&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 480ms;">있습니다.&nbsp;</span>
                    </div>
                    <ul>
                        <li>Portfolio</li>
                        <li>
                            <i></i>
                            <i></i>
                            <i></i>
                        </li>
                    </ul>
                </a>
            </div>
            <div class="swiper-slide">
                <div class="bg"></div>
                <video autoplay loop playsinline muted>
                    <source src="./newhome/video/04.mp4" type="video/mp4">
                </video>
                <a href="javascript:void(0);" class="left_fix_txt_box">
                    <div>
                        <span style="animation-delay: 0ms;">이야기를&nbsp;</span>
                        <span style="animation-delay: 80ms;">듣고&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 160ms;">경험을&nbsp;</span>
                        <span style="animation-delay: 240ms;">녹여냅니다.&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 320ms;">정답은&nbsp;</span>
                        <span style="animation-delay: 400ms;">대화에&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 480ms;">있습니다.&nbsp;</span>
                    </div>
                    <ul>
                        <li>Portfolio</li>
                        <li>
                            <i></i>
                            <i></i>
                            <i></i>
                        </li>
                    </ul>
                </a>
            </div>
            <div class="swiper-slide">
                <div class="bg"></div>
                <video autoplay loop playsinline muted>
                    <source src="./newhome/video/05.mp4" type="video/mp4">
                </video>
                <a href="javascript:void(0);" class="left_fix_txt_box">
                    <div>
                        <span style="animation-delay: 0ms;">이야기를&nbsp;</span>
                        <span style="animation-delay: 80ms;">듣고&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 160ms;">경험을&nbsp;</span>
                        <span style="animation-delay: 240ms;">녹여냅니다.&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 320ms;">정답은&nbsp;</span>
                        <span style="animation-delay: 400ms;">대화에&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 480ms;">있습니다.&nbsp;</span>
                    </div>
                    <ul>
                        <li>Portfolio</li>
                        <li>
                            <i></i>
                            <i></i>
                            <i></i>
                        </li>
                    </ul>
                </a>
            </div>
            <div class="swiper-slide">
                <div class="bg"></div>
                <video autoplay loop playsinline muted>
                    <source src="./newhome/video/06.mp4" type="video/mp4">
                </video>
                <a href="javascript:void(0);" class="left_fix_txt_box">
                    <div>
                        <span style="animation-delay: 0ms;">이야기를&nbsp;</span>
                        <span style="animation-delay: 80ms;">듣고&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 160ms;">경험을&nbsp;</span>
                        <span style="animation-delay: 240ms;">녹여냅니다.&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 320ms;">정답은&nbsp;</span>
                        <span style="animation-delay: 400ms;">대화에&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 480ms;">있습니다.&nbsp;</span>
                    </div>
                    <ul>
                        <li>Portfolio</li>
                        <li>
                            <i></i>
                            <i></i>
                            <i></i>
                        </li>
                    </ul>
                </a>
            </div>
            <div class="swiper-slide">
                <div class="bg"></div>
                <video autoplay loop playsinline muted>
                    <source src="./newhome/video/07.mp4" type="video/mp4">
                </video>
                <a href="javascript:void(0);" class="left_fix_txt_box">
                    <div>
                        <span style="animation-delay: 0ms;">이야기를&nbsp;</span>
                        <span style="animation-delay: 80ms;">듣고&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 160ms;">경험을&nbsp;</span>
                        <span style="animation-delay: 240ms;">녹여냅니다.&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 320ms;">정답은&nbsp;</span>
                        <span style="animation-delay: 400ms;">대화에&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 480ms;">있습니다.&nbsp;</span>
                    </div>
                    <ul>
                        <li>Portfolio</li>
                        <li>
                            <i></i>
                            <i></i>
                            <i></i>
                        </li>
                    </ul>
                </a>
            </div>
            <div class="swiper-slide">
                <div class="bg"></div>
                <video autoplay loop playsinline muted>
                    <source src="./newhome/video/08.mp4" type="video/mp4">
                </video>
                <a href="javascript:void(0);" class="left_fix_txt_box">
                    <div>
                        <span style="animation-delay: 0ms;">이야기를&nbsp;</span>
                        <span style="animation-delay: 80ms;">듣고&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 160ms;">경험을&nbsp;</span>
                        <span style="animation-delay: 240ms;">녹여냅니다.&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 320ms;">정답은&nbsp;</span>
                        <span style="animation-delay: 400ms;">대화에&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 480ms;">있습니다.&nbsp;</span>
                    </div>
                    <ul>
                        <li>Portfolio</li>
                        <li>
                            <i></i>
                            <i></i>
                            <i></i>
                        </li>
                    </ul>
                </a>
            </div>
            <div class="swiper-slide">
                <div class="bg"></div>
                <video autoplay loop playsinline muted>
                    <source src="./newhome/video/09.mp4" type="video/mp4">
                </video>
                <a href="javascript:void(0);" class="left_fix_txt_box">
                    <div>
                        <span style="animation-delay: 0ms;">이야기를&nbsp;</span>
                        <span style="animation-delay: 80ms;">듣고&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 160ms;">경험을&nbsp;</span>
                        <span style="animation-delay: 240ms;">녹여냅니다.&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 320ms;">정답은&nbsp;</span>
                        <span style="animation-delay: 400ms;">대화에&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 480ms;">있습니다.&nbsp;</span>
                    </div>
                    <ul>
                        <li>Portfolio</li>
                        <li>
                            <i></i>
                            <i></i>
                            <i></i>
                        </li>
                    </ul>
                </a>
            </div>
            <div class="swiper-slide">
                <div class="bg"></div>
                <video autoplay loop playsinline muted>
                    <source src="./newhome/video/10.mp4" type="video/mp4">
                </video>
                <a href="javascript:void(0);" class="left_fix_txt_box">
                    <div>
                        <span style="animation-delay: 0ms;">이야기를&nbsp;</span>
                        <span style="animation-delay: 80ms;">듣고&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 160ms;">경험을&nbsp;</span>
                        <span style="animation-delay: 240ms;">녹여냅니다.&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 320ms;">정답은&nbsp;</span>
                        <span style="animation-delay: 400ms;">대화에&nbsp;</span>
                    </div>
                    <div>
                        <span style="animation-delay: 480ms;">있습니다.&nbsp;</span>
                    </div>
                    <ul>
                        <li>Portfolio</li>
                        <li>
                            <i></i>
                            <i></i>
                            <i></i>
                        </li>
                    </ul>
                </a>
            </div>
        </div>
        <div class="slide_btn">
            <div class="up">
                <div>
                    <span></span>
                </div>
            </div>
            <div class="down">
                <div>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <?php include 'footer.php';?>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
    <script>
        const observer = lozad();
        observer.observe();
    </script>
</body>
<script>
    function change(c, n){
        $.ajax({
            url:"./sub/project_change.php",
            type:"POST",
            data:{
                cate:c,
                num:n
            },
            dataType:"JSON",
            success:function(data){
                // console.log(data);
                $("#title").text(data[0]);
                $("#p_img").attr("src", "./img/"+c+"/"+data[1]);
            }
        })
    }
</script>
</html>

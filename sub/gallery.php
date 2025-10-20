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
            <h2>High X Gallery</h2>
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
    <section class="gallery">
        <div class="inner">
            <div class="top_txt">
                <p>
                    <b>Gallery.</b><br>
                    <strong>하이클라스의</strong><br>
                    다양한 모습을 보여드립니다.
                </p>
            </div>
            <div class="gallery_category">
                <li class="all on" onclick="paging('all');">All</li>
                <li class="company" onclick="paging('company');">Company</li>
                <li class="news" onclick="paging('news');">News</li>
                <li class="worker" onclick="paging('worker');">Co-worker</li>
                <li class="insta" onclick="paging('instagram');">Instagram</li>
            </div>
            <div class="gallery_click">
                <div class="gallery_contents active">
                    <div class="gallery_box" id="all">
                        <?php
                        $page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
                        $list = 15; // 페이지 당 목록 개수
                        $b_pageNum_list = 5; // 페이지 당 블록 갯수
                        $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭
                        
                        $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
                        $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호
                        
                        $pSql="SELECT COUNT(*) AS cnt FROM gallery";
                        $pRes=mysqli_query($conn, $pSql);
                        $pRow=mysqli_fetch_array($pRes);
                        $total_count=$pRow['cnt'];
                        
                        $total_page = ceil($total_count / $list); // 총 페이지 수 
                        if($b_end_page > $total_page) $b_end_page = $total_page;
                        
                        $limit=($page - 1) * $list; // 출력 시작 번호
            
                        $no=$total_count-$limit;
            
                        $sql="SELECT * FROM gallery ORDER BY `datetime` DESC LIMIT $limit, $list";
                        $res=mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($res)){
                            $title=$row['title'];
                            $cate=$row['cate'];
                            $file=$row['file'];
                        ?>
                        <div class="contents" onclick="<?php echo ($cate=="instagram") ? "window.open('');" : ""?>">
                            <?php if($cate=="instagram") { ?><a href="javascript:void(0);"><img src="../img/w-insta.png"></a><?php } ?>
                            <div class="img_box">
                                <div class="bg"></div>
                                <img src="../img/gallery/<?php echo $file?>">
                            </div>
                            <div class="txt_box">
                                <div>
                                    <span class="<?php echo $cate?>"></span>
                                    <p><?php echo ucfirst($cate);?></p>
                                </div>
                                <h2><?php echo $title?></h2>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="gallery_contents">
                    <div class="gallery_box" id="company">
                        <?php
                        $sql="SELECT * FROM gallery WHERE cate='company' ORDER BY `datetime` DESC LIMIT 0, 15";
                        $res=mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($res)){
                            $title=$row['title'];
                            $cate=$row['cate'];
                            $file=$row['file'];
                        ?>
                        <div class="contents" onclick="<?php echo ($cate=="instagram") ? "window.open('');" : ""?>">
                            <?php if($cate=="instagram") { ?><a href="javascript:void(0);"><img src="../img/w-insta.png"></a><?php } ?>
                            <div class="img_box">
                                <div class="bg"></div>
                                <img src="../img/gallery/<?php echo $file?>">
                            </div>
                            <div class="txt_box">
                                <div>
                                    <span class="<?php echo $cate?>"></span>
                                    <p><?php echo ucfirst($cate);?></p>
                                </div>
                                <h2><?php echo $title?></h2>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="gallery_contents">
                    <div class="gallery_box" id="news">
                        <?php
                        $sql="SELECT * FROM gallery WHERE cate='news' ORDER BY `datetime` DESC LIMIT 0, 15";
                        $res=mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($res)){
                            $title=$row['title'];
                            $cate=$row['cate'];
                            $file=$row['file'];
                        ?>
                        <div class="contents" onclick="<?php echo ($cate=="instagram") ? "window.open('');" : ""?>">
                            <?php if($cate=="instagram") { ?><a href="javascript:void(0);"><img src="../img/w-insta.png"></a><?php } ?>
                            <div class="img_box">
                                <div class="bg"></div>
                                <img src="../img/gallery/<?php echo $file?>">
                            </div>
                            <div class="txt_box">
                                <div>
                                    <span class="<?php echo $cate?>"></span>
                                    <p><?php echo ucfirst($cate);?></p>
                                </div>
                                <h2><?php echo $title?></h2>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="gallery_contents">
                    <div class="gallery_box" id="worker">
                        <?php
                        $sql="SELECT * FROM gallery WHERE cate='worker' ORDER BY `datetime` DESC LIMIT 0, 15";
                        $res=mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($res)){
                            $title=$row['title'];
                            $cate=$row['cate'];
                            $file=$row['file'];
                        ?>
                        <div class="contents" onclick="<?php echo ($cate=="instagram") ? "window.open('');" : ""?>">
                            <?php if($cate=="instagram") { ?><a href="javascript:void(0);"><img src="../img/w-insta.png"></a><?php } ?>
                            <div class="img_box">
                                <div class="bg"></div>
                                <img src="../img/gallery/<?php echo $file?>">
                            </div>
                            <div class="txt_box">
                                <div>
                                    <span class="<?php echo $cate?>"></span>
                                    <p><?php echo ucfirst($cate);?></p>
                                </div>
                                <h2><?php echo $title?></h2>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="gallery_contents">
                    <div class="gallery_box" id="instagram">
                        <?php
                        $sql="SELECT * FROM gallery WHERE cate='instagram' ORDER BY `datetime` DESC LIMIT 0, 15";
                        $res=mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($res)){
                            $title=$row['title'];
                            $cate=$row['cate'];
                            $file=$row['file'];
                        ?>
                        <div class="contents" onclick="<?php echo ($cate=="instagram") ? "window.open('');" : ""?>">
                            <?php if($cate=="instagram") { ?><a href="javascript:void(0);"><img src="../img/w-insta.png"></a><?php } ?>
                            <div class="img_box">
                                <div class="bg"></div>
                                <img src="../img/gallery/<?php echo $file?>">
                            </div>
                            <div class="txt_box">
                                <div>
                                    <span class="<?php echo $cate?>"></span>
                                    <p><?php echo ucfirst($cate);?></p>
                                </div>
                                <h2><?php echo $title?></h2>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="gallery_page">
                <?php if($block > 1) { ?>
                <a href="javascript:gallery_page('all', '<?php echo $b_start_page - 1 ?>')"><img src="../img/b-prev-arrow.png"></a>
                <?php } ?>
                <div class="num">
                    <?php 
                    for($i=$b_start_page;$i<=$b_end_page;$i++){
                        if($page == $i){ // page 와 i 가 같으면 현재 페이지
                    ?>
                    <a href="javascript:void(0)" class="on"><?php echo $i?></a>
                    <?php } else { ?>
                    <a href="javascript:gallery_page('all', '<?php echo $i?>')"><?php echo $i?></a>
                    <?php } 
                    } ?>
                </div>
                <?php
                $total_block = ceil($total_page/$b_pageNum_list);
                if($block < $total_block){
                ?>
                <a href="javascript:gallery_page('all', '<?php echo $b_end_page + 1 ?>')"><img src="../img/b-next-arrow.png"></a>
                <?php } ?>
            </div>
        </div>
        <div class="gallery_pop">
            <div class="close">
                <span></span>
                <span></span>
            </div>
            <div class="left">
                <div>
                    <span></span>
                    <p></p>
                </div>
                <h2></h2>
                <i>2023. 08. 28</i>
            </div>
            <div class="right">
                <div class="img_box">
                    <div class="bg"><img src="../img/back-bg.png"></div>
                    <img src="">
                </div>
                <div class="contents">
                    <h3>갤러리 서브 타이틀이 들어가는 자리입니다.</h3>
                    <p>
                        갤러리 내용이 들어가는 자리입니다. 갤러리 내용이 들어가는 자리입니다. 갤러리 내용이 들어가는 자리입니다.
                        <br>
                        갤러리 내용이 들어가는 자리입니다. 갤러리 내용이 들어가는 자리입니다. 갤러리 내용이 들어가는 자리입니다. 갤러리 내용이 들어가는 자리입니다.
                        <br>
                        갤러리 내용이 들어가는 자리입니다. 갤러리 내용이 들어가는 자리입니다.
                        <br><br>
                        갤러리 내용이 들어가는 자리입니다.
                    </p>
                </div>
            </div>
        </div>
        <div class="gallery_pop_bg"></div>
    </section>
    <?php include '../footer.php';?>
</body>
<script>
    function paging(type){
        $.ajax({
            url:"paging.php",
            type:"POST",
            data:{cate:type},
            dataType:"JSON",
            success:function(data){
                // console.log(data);
                $("#"+type).empty();
                $("#"+type).append(data[0]);
                $(".gallery_page").empty();
                $(".gallery_page").append(data[1]);
            }
        })
    }

    function gallery_page(cate, i){
        $.ajax({
            url:"gallery_paging.php",
            type:"POST",
            data:{
                cate:cate,
                page:i,
            },
            dataType:"JSON",
            success:function(data){
                // console.log(data);
                $("#"+cate).empty();
                $("#"+cate).append(data[0]);
                $(".gallery_page").empty();
                $(".gallery_page").append(data[1]);
                window.scrollTo(0,0);
            }
        })
    }
</script>
</html>

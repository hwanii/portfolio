<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/sub.css">
</head>

<body>
    <?php include '../header.php';?>
    <?php
    $bSql="SELECT * FROM banner WHERE `type`='announcement'";
    $bRes=mysqli_query($conn, $bSql);
    $bRow=mysqli_fetch_array($bRes);
    ?>
    <section class="sub_banner" style="background: url(../file/banner/<?php echo $bRow['img']?>) no-repeat center/cover;">
        <div class="bg"></div>
        <h2>ANNOUNCEMENT</h2>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <p>Notice</p>
            <img src="../img/flow-arrow.png">
            <p>Announcement</p>
        </div>
    </section>
    <section class="fix_des">
        <h2>FIND TECH,<br> RAISE VENTURE</h2>
        <p>기업 성장 전 단계에 아우르는 유망 신기술사업자를<br> 집중 발굴하여 투자시장 활성화에 기여합니다.</p>
    </section>
    <section class="announcement">
        <div class="inner">
            <div class="sub_title">
                <div class="title_box first">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <h2>Announcement</h2>
            </div>
            <div class="an_table">
                <ul class="top">
                    <li>번호</li>
                    <li>제목</li>
                    <li>첨부파일</li>
                    <li>작성일자</li>
                    <li>조회수</li>
                </ul>
                <?php
                $page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
                $list = 10; // 페이지 당 목록 개수
                $b_pageNum_list = 10; // 페이지 당 블록 갯수
                $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭

                $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
                $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호
                
                $pSql="SELECT COUNT(*) AS cnt FROM `announcement`";
                $pRes=mysqli_query($conn, $pSql);
                $pRow=mysqli_fetch_array($pRes);
                $total_count=$pRow['cnt'];

                $total_page = ceil($total_count / $list); // 총 페이지 수 
                if($b_end_page > $total_page) $b_end_page = $total_page;

                $limit=($page - 1) * $list; // 출력 시작 번호
                $no=$total_count-$limit;
                    //$limit+1;
                $lSql="SELECT * FROM announcement ORDER BY write_time DESC LIMIT $limit, $list";
                $lRes=mysqli_query($conn, $lSql);
                
                while($lRow=mysqli_fetch_array($lRes)){
                    $write_time=$lRow['write_time'];
                    $write_name=$lRow['write_name'];
                    $title=$lRow['title'];
                    $hit=$lRow['hit'];
                    $file=$lRow['file_1'];
                    $num=$lRow['num'];
                ?>
                <a href="announcement_detail.php?no=<?php echo $no?>&num=<?php echo $num?>" class="contents">
                    <p><?php echo number_format($no);?></p>
                    <p><?php echo $title?></p>
                    <p><img src="../img/file.png" style="<?php echo ($file) ? "" : "display:none"?>"></p>
                    <p><?php echo date("y-m-d", strtotime($write_time));?></p>
                    <p><?php echo number_format($hit)?></p>
                </a>
                <?php $no--; } ?>
            </div>
            <div class="page_pagination">
                <?php
                if($block > 1){
                ?>
                <a href="announcement.php?page=1" class="pprev"><img src="../img/pprev.png"></a>
                <a href="announcement.php?page=<?php echo $b_start_page - 1 ?>" class="prev"><img src="../img/prev.png"></a>
                <?php
                }
                ?>
                <div class="num">
                    <?php
                    for($i=$b_start_page;$i<=$b_end_page;$i++){
                        if($page == $i){ // page 와 i 가 같으면 현재 페이지
                        ?>
                        <a href="javascript:void(0)" class="on"><p><?php echo $i?></p></a>
                        <?php } else { ?>
                        <a href="announcement.php?page=<?php echo $i ?>"><p><?php echo $i?></p></a>
                    <?php } 
                    } ?>
                </div>
                <?php
                $total_block = ceil($total_page/$b_pageNum_list);
                if($block < $total_block){
                ?>
                <a href="announcement.php?page=<?php echo $b_end_page + 1 ?>" class="next"><img src="../img/nnext.png"></a>
                <a href="announcement.php?page=<?php echo $total_page ?>" class="nnext"><img src="../img/next.png"></a>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/sub.js"></script>

</html>

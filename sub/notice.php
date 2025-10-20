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
            <h2>High X Notice</h2>
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
    <section class="notice">
        <div class="inner">
            <div class="top_txt">
                <p>
                    <b>Notice.</b><br>
                    <strong>하이클라스에서</strong><br>
                    공지사항을 알려드립니다.
                </p>
            </div>
            <!-- 게시글 리미트 15개 해주세용 -->
            <div class="notice_table">
                <?php
                $page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
                $list = 15; // 페이지 당 목록 개수
                $b_pageNum_list = 5; // 페이지 당 블록 갯수
                $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭
                
                $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
                $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호
                
                $pSql="SELECT COUNT(*) AS cnt FROM notice";
                $pRes=mysqli_query($conn, $pSql);
                $pRow=mysqli_fetch_array($pRes);
                $total_count=$pRow['cnt'];
                
                $total_page = ceil($total_count / $list); // 총 페이지 수 
                if($b_end_page > $total_page) $b_end_page = $total_page;
                
                $limit=($page - 1) * $list; // 출력 시작 번호

                $no=$total_count-$limit;

                $sql="SELECT * FROM notice ORDER BY `datetime` DESC LIMIT $limit, $list";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $title=$row['title'];
                    $contents=$row['contents'];
                    $time=$row['datetime'];
                ?>
                <ul>
                    <li>
                        <span><?php echo $no--;?></span>
                        <p><?php echo $title?></p>
                        <i><?php echo date("Y. m. d", strtotime($time))?></i>
                    </li>
                    <li>
                        <div>
                            <span></span>
                            <div>
                                <?php echo $contents?>
                            </div>
                            <span></span>
                        </div>
                    </li>
                </ul>
                <?php } ?>
            </div>
            <div class="notice_page">
                <?php if($block > 1) { ?>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_start_page - 1 ?>"><img src="../img/b-prev-arrow.png"></a>
                <?php } ?>
                <div class="num">
                    <?php 
                    for($i=$b_start_page;$i<=$b_end_page;$i++){
                        if($page == $i){ // page 와 i 가 같으면 현재 페이지
                    ?>
                    <a href="javascript:void(0)" class="on"><?php echo $i?></a>
                    <?php } else { ?>
                    <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $i?>"><?php echo $i?></a>
                    <?php } 
                    } ?>
                </div>
                <?php
                $total_block = ceil($total_page/$b_pageNum_list);
                if($block < $total_block){
                ?>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_end_page + 1 ?>"><img src="../img/b-next-arrow.png"></a>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
</html>

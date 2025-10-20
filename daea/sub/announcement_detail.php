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
        <h2>DETAIL VIEW</h2>
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
    <section class="announcement detail">
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
                $no=$_GET['no'];
                $num=$_GET['num'];

                $hSql="UPDATE announcement SET hit=hit+1 WHERE num='$num'";
                $hRes=mysqli_query($conn, $hSql);

                $sql="SELECT * FROM announcement WHERE num='$num'";
                $res=mysqli_query($conn, $sql);
                $row=mysqli_fetch_array($res);
                $write_time=$row['write_time'];
                $title=$row['title'];
                $file=$row['file_1'];
                $hit=$row['hit'];
                $num=$row['num'];
                $contents=$row['contents'];
                ?>
                <a href="<?php echo ($file) ? "../file/announcement/{$file}" : "javascript:void(0);"?>" class="contents" style="border-bottom: 1px solid #b0d1e8; background-color: #f2f2f2;" <?php echo ($file) ? "download" : ""?>>
                    <p><?php echo number_format($no)?></p>
                    <p><?php echo $title;?></p>
                    <p><img src="../img/file.png" style="<?php echo ($file) ? "" : "display:none"?>"></p>
                    <p><?php echo date("y-m-d", strtotime($write_time))?></p>
                    <p><?php echo number_format($hit)?></p>
                </a>
                <div class="an_ta_mob">
                    <div class="ttop">
                        <ul>
                            <li>번호</li>
                            <li>제목</li>
                        </ul>
                        <ul>
                            <li><?php echo number_format($no)?></li>
                            <li><?php echo $title?></li>
                        </ul>
                    </div>
                    <div class="bbot">
                        <div class="ccontents">
                            <p>첨부파일</p>
                            <img src="../img/file.png" style="<?php echo ($file) ? "" : "visibility:none"?>" onclick="document.querySelector('#down').click();">
                            <a id="down" href="../file/announcement/<?php echo $file?>" download style="dispaly:none"></a>
                        </div>
                        <div class="ccontents">
                            <p>작성일자</p>
                            <span><?php echo date("y-m-d", strtotime($write_time))?></span>
                        </div>
                        <div class="ccontents">
                            <p>조회수</p>
                            <span><?php echo number_format($hit)?></span>
                        </div>
                    </div>
                </div>
                <div class="detail_contents">
                    <?php echo $contents?>
                </div>
            </div>
            <div class="detail_bottom">
                <?php
                $pSql="SELECT * FROM announcement WHERE num < '$num' ORDER BY num DESC LIMIT 1";
                $pRes=mysqli_query($conn, $pSql);
                $pRow=mysqli_fetch_array($pRes);
                $prev=$pRow['num'];
                
                $nSql="SELECT * FROM announcement WHERE num > '$num' ORDER BY num ASC LIMIT 1";
                $nRes=mysqli_query($conn, $nSql);
                $nRow=mysqli_fetch_array($nRes);
                $next=$nRow['num'];
                ?>
                <a href="announcement_detail.php?no=<?php echo $no-1;?>&num=<?php echo $prev?>" style="<?php echo ($prev=="") ? "visibility:hidden" : ""?>">
                    <img src="../img/detail-prev.png">
                    <p>이전글 보기</p>
                </a>
                <a href="announcement.php" class="center">
                    <div>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <p>목록보기</p>
                </a>
                <a href="announcement_detail.php?no=<?php echo $no+1;?>&num=<?php echo $next?>" style="<?php echo ($next=="") ? "visibility:hidden" : ""?>">
                    <p>다음글 보기</p>
                    <img src="../img/detail-next.png">
                </a>
            </div>
        </div>
    </section>
    <?php include '../header.php';?>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/sub.js"></script>

</html>

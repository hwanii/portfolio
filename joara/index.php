<!DOCTYPE html>
<html lang="ko">
<?php include 'connect.php';?>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <title>아라컴퍼니</title>
    <meta name="description" content="라이브커머스 진행 / 강의 / 컨설팅 맡겨주세요!">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="img/opengraph-img.jpg" />
    <meta property="og:title" content="아라컴퍼니 - 쇼호스트 조아라" />
    <meta property="og:description" content="라이브커머스 진행 / 강의 / 컨설팅 맡겨주세요!" />
    <meta property="og:url" content="http://aralive.co.kr/" />
    <meta name="robots" content="index,follow" />
    <!-- Mobile Stuff -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="keywords" content="라이브커머스, 쇼호스트조아라, 조아라강사, 조아라쇼호스트, 아라컴퍼니, 조아라컴퍼니, 라이브커머스대행, 쇼핑라이브대행, 쇼호스트섭외">
    <!-- Chrome on Android -->

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="rgba(0,0,0,0)">
    <meta name="naver-site-verification" content="01f26d1bf9dfb238fe359fb66ee4c816281dd2fe" />
    <link rel="canonical" href="http://aralive.co.kr/">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
$iSql="SELECT * FROM information";
$iRes=mysqli_query($conn, $iSql);
$iRow=mysqli_fetch_array($iRes);
$name=$iRow['name'];
$address=$iRow['addr'];
$detail=$iRow['detail'];
$email=$iRow['email'];
$insta=$iRow['insta'];
$bank=$iRow['bank'];
$bank_number=$iRow['bank_number'];
$file=$iRow['file'];

$nSql="SELECT * FROM sns";
$nRes=mysqli_query($conn, $nSql);
$nRow=mysqli_fetch_array($nRes);
$youtube=$nRow['youtube'];
$instagram=$nRow['insta'];
$naver_blog=$nRow['naver_blog'];
$naver_store=$nRow['naver_store'];
$kakao_open=$nRow['kakao_open'];
?>
<body class="wrap">
    <header>
        <div class="inner">
            <div class="left">
                <?php if($kakao_open){?>
                <a href="<?php echo $kakao_open?>" target="_blank"><img src="img/icon-open.png" alt=""></a>
                <?php }
                if($instagram){?>
                <a href="<?php echo $instagram?>" target="_blank"><img src="img/icon-insta01.png" alt=""></a>
                <?php } 
                if($youtube){ ?>
                <a href="<?php echo $youtube?>" target="_blank"><img src="img/icon-youtune01.png" alt=""></a>
                <?php } 
                if($naver_blog){?>
                <a href="<?php echo $naver_blog?>" target="_blank"><img src="img/icon-blog01.png" alt=""></a>
                <?php } ?>
            </div>
            <div class="center">
                <img src="img/logo.png" onclick="location.href='index.php'">
                <div class="gnb">
                    <a href="#intro" class="page_scroll">인사말</a>
                    <a href="#feature" class="page_scroll">아라컴퍼니</a>
                    <a href="#profile" class="page_scroll">솔루션</a>
                    <a href="#b_data" class="page_scroll">CSR</a>
                    <a href="#creative" class="page_scroll">CREATIVE</a>
                    <a href="#portfolio" class="page_scroll">포트폴리오</a>
                    <a href="#client" class="page_scroll">클라이언트</a>
                </div>
            </div>
            <img src="img/icon-menu.png" alt="메뉴 버튼" class="ham">
        </div>
    </header>
    <aside>
        <img src="img/sub-logo.png" onclick="location.href='index.php'">
        <div class="gnb">
            <a href="#intro" class="page_scroll">인사말</a>
            <a href="#feature" class="page_scroll">아라컴퍼니</a>
            <a href="#profile" class="page_scroll">솔루션</a>
            <a href="#b_data" class="page_scroll">CSR</a>
            <a href="#creative" class="page_scroll">CREATIVE</a>
            <a href="#portfolio" class="page_scroll">포트폴리오</a>
            <a href="#client" class="page_scroll">클라이언트</a>
        </div>
        <div class="bottom">
            <p><?php echo $name?></p>
            <p>E-MAIL : <?php echo $email?></p>
            <p onclick="window.open('<?php echo $instagram?>')">INSTA : <?php echo $insta?></p>
            <!-- <p>BANK : <?php echo $bank?> &#91;<?php echo $bank?>&#93;</p>
            <i id="copybtn1" onclick="copyToClipboard();" title="계좌번호 복사하기">복사</i> -->
        </div>
        <span>닫기</span>
    </aside>
    <div class="aside_bg"></div>
    <section id="intro" class="swiper-container main_slide">
        <div class="swiper-wrapper">
            <?php
            $sSql="SELECT * FROM slide WHERE background!='' ORDER BY `number` ASC";
            $sRes=mysqli_query($conn, $sSql);
            while($sRow=mysqli_fetch_array($sRes)){
                $sThumb=$sRow['background'];
            ?>
            <div class="swiper-slide" style="background: url('./img/slide/<?php echo $sThumb?>') no-repeat center/cover;"></div>
            <?php } ?>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <section id="feature">
        <?php
        $fSql="SELECT * FROM intro";
        $fRes=mysqli_query($conn, $fSql);
        $fRow=mysqli_fetch_array($fRes);
        ?>
        <div class="inner">
            <div class="feature_title">
                <h2 class="title">아라컴퍼니는</h2>
                <p><?php echo $fRow['intro']?></p>
            </div>
            <div class="feature_contents">
                <div class="contents">
                    <h2>STORY</h2>
                    <img src="img/intro/<?php echo $fRow['thumb']?>">
                    <p><?php echo $fRow['story']?></p>
                </div>
                <div class="contents">
                    <h2>CONTENTS</h2>
                    <img src="img/intro/<?php echo $fRow['cThumb']?>">
                    <p><?php echo $fRow['contents']?></p>
                </div>
            </div>
        </div>
    </section>
    <section id="profile">
        <div class="inner">
            <div class="left">
                <h2 class="title" style="color: #1b1430;">라이브 커머스 솔루션</h2>
                <?php
                $cSql="SELECT * FROM greeting";
                $cRes=mysqli_query($conn, $cSql);
                $cRow=mysqli_fetch_array($cRes);
                ?>
                <div class="txt_box">
                    <?php 
                    echo $cRow['contents'];
                    ?>
                </div>
                <ul>
                    <li>탄탄한 기본기</li>
                    <li>스토리라인 구축 시스템</li>
                    <li>ALL IN ONE 시스템</li>
                    <li>홍보와 방송 구축</li>
                    <li>다양한 분위기</li>
                </ul>
                <!-- <div class="down_contents">
                    <a href="<?php echo ($cRow['introduction']) ? "img/greeting/".$cRow['introduction'] : "javascript:alert('준비 중입니다.')"?>" <?php echo ($cRow['introduction']) ? "download" : ""?>>
                        <img src="img/b-download.png">
                        <i></i>
                        <p>소개서 다운로드</p>
                    </a>
                </div> -->
            </div>
        </div>
        <img src="img/greeting/<?php echo $cRow['thumb']?>">
    </section>
    <section id="b_data">
        <div class="inner">
            <h2 class="title">사회적경제기업 방송 데이터</h2>
            <div class="txt_box">
                <h2>기업의 CSR (사회 공헌 활동)을 라이브 커머스로 돕고 있습니다.</h2>
                <p>
                    같이, 함께, 나누는 가치를 통해 아라컴퍼니는<br>
                    오늘도 한걸음 더 이웃과 가까이 하겠습니다.
                </p>
            </div>
        </div>
        <div class="swiper_inner">
            <div class="swiper-container data_slide">
                <div class="swiper-wrapper">
                    <?php
                    $bdSql="SELECT * FROM bd_data ORDER BY num DESC";
                    $bdRes=mysqli_query($conn, $bdSql);
                    while($bdRow=mysqli_fetch_array($bdRes)){
                        $bdTitle=$bdRow['title'];
                        $bdThumb=$bdRow['thumb'];
                        $bdAddr=$bdRow['addr'];
                    ?>
                    <a href="<?php echo ($bdAddr) ? $bdAddr : "javascript:void(0)"?>" class="swiper-slide" <?php echo ($bdAddr) ? 'target="_blank"' : ''?>>
                        <img src="img/mmmm.png" class="top_img" style="z-index: 20;">
                        <img src="img/bd_data/<?php echo $bdThumb?>" class="center_img">
                        <h2><?php echo $bdTitle?></h2>
                    </a>
                    <?php } ?>
                </div>
            </div>
            <img src="img/slide-p.png" class="data_prev">
            <img src="img/slide-n.png" class="data_next">
        </div>
    </section>
    <section id="creative">
        <?php
        $coSql="SELECT * FROM contents";
        $coRes=mysqli_query($conn, $coSql);
        $coRow=mysqli_fetch_array($coRes);
        ?>
        <div class="inner">
            <div class="txt_box">
                <h2>CONTENTS <span>CREATIVE</span></h2>
                <p><?php echo $coRow['intro']?></p>
            </div>
            <div class="contents">
                <div class="left">
                    <h2>유튜브</h2>
                    <img src="img/contents/<?php echo $coRow['thumb']?>">
                    <p><?php echo $coRow['youtube']?></p>
                </div>
                <div class="right">
                    <h2>네이버 숏클립</h2>
                    <img src="img/contents/<?php echo $coRow['cThumb']?>">
                    <p><?php echo $coRow['naver']?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="career">
        <h2 class="title">경력 소개</h2>
        <div class="txt_box">
            <h2>Be 쇼호스트</h2>
            <p>완벽한 준비와 제품연구, 자료 분석을 통해 보다 효과 높은 소구점을 찾고 방송에 임할 수 있도록 노력하고 있습니다.</p>
        </div>
        <ul class="career_category">
            <?php
            $bSql="SELECT * FROM board ORDER BY num ASC";
            $bRes=mysqli_query($conn, $bSql);
            $b=1;
            while($bRow=mysqli_fetch_array($bRes)){
                $board_name=$bRow['board_name'];
            ?>
            <li class="<?php echo ($b==1) ? "on" : ""?>"><?php echo $board_name?></li>
            <?php $b++; } ?>
        </ul>
        <div class="career_contents">
            <?php
            $blSql="SELECT * FROM board ORDER BY num ASC";
            $blRes=mysqli_query($conn, $blSql);
            $j=1;
            while($blRow=mysqli_fetch_array($blRes)){
                $board=$blRow['board_name'];
            ?>
            <div id="board_<?php echo $j?>" class="contents <?php echo ($j==1) ? "on" : ""?>">
                <div class="top_table">
                    <p>일자</p>
                    <p>카테고리</p>
                    <p>클라이언트</p>
                    <p>방송 이름</p>
                    <p>바로가기</p>
                </div>
                <div class="middle_table">
                    <?php
                    $page=1; // 페이지 번호
                    $list = 10; // 페이지 당 목록 개수
                    $b_pageNum_list = 5; // 페이지 당 블록 갯수
                    $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭
                    
                    $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
                    $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호
                    
                    $pSql="SELECT COUNT(*) AS cnt FROM board_list WHERE board='$board'";
                    $pRes=mysqli_query($conn, $pSql);
                    $pRow=mysqli_fetch_array($pRes);
                    $total_count=$pRow['cnt'];
                    
                    $total_page = ceil($total_count / $list); // 총 페이지 수 
                    if($b_end_page > $total_page) $b_end_page = $total_page;
                    
                    $limit=($page - 1) * $list; // 출력 시작 번호

                    $pSql="SELECT * FROM board_list WHERE board='$board' ORDER BY num DESC LIMIT $limit, $list";
                    $pRes=mysqli_query($conn, $pSql);
                    while($pRow=mysqli_fetch_array($pRes)){
                        $bd=$pRow['board'];
                        $today=$pRow['today'];
                        $category=$pRow['category'];
                        $client=$pRow['client'];
                        $title=$pRow['title'];
                        $addr=$pRow['addr'];
                    ?>
                    <ul>
                        <li><?php echo date("Y.m.d", strtotime($today))?></li>
                        <li><?php echo $category?></li>
                        <li><?php echo $client?></li>
                        <li><?php echo $title?></li>
                        <?php if($addr){ ?>
                        <li><a href="<?php echo $addr?>" target="blank">GO</a></li>
                        <?php } else { ?>
                        <li><a href="javascript:void(0);" class="del">삭제됨</a></li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </div>
                <div class="list_number">
                    <?php
                    if($block > 1){
                    ?>
                    <a href="javascript:page_move('<?php echo $j?>', '<?php echo $bd?>', '1')"><img src="img/icon-p-p-arrow.png"></a>
                    <a href="javascript:page_move('<?php echo $j?>', '<?php echo $bd?>', '<?php echo $b_start_page - 1 ?>')"><img src="img/icon-p-arrow.png"></a>
                    <?php
                    }
                    ?>
                    <div class="num">
                        <?php
                        for($i=$b_start_page;$i<=$b_end_page;$i++){
                            if($page == $i){ // page 와 i 가 같으면 현재 페이지
                            ?>
                            <a href="javascript:void(0)" class="on"><?php echo $i?></a>
                            <?php
                            } else {
                            ?>
                            <a href="javascript:page_move('<?php echo $j?>', '<?php echo $bd?>', '<?php echo $i ?>')"><?php echo $i ?></a>
                            <?php
                            }
                        }
                        ?>
                    </div>
                    <?php
                    $total_block = ceil($total_page/$b_pageNum_list);
                    if($block < $total_block){
                    ?>
                    <a href="javascript:page_move('<?php echo $j?>', '<?php echo $bd?>', '<?php echo $b_end_page + 1 ?>')"><img src="img/icon-n-arrow.png"></a>
                    <a href="javascript:page_move('<?php echo $j?>', '<?php echo $bd?>', '<?php echo $total_page ?>')"><img src="img/icon-n-n-arrow.png"></a>
                    <?php } ?>
                </div>
            </div>
            <?php $j++; } ?>
        </div>
    </section> -->
    <section id="portfolio">
        <h2 class="title">포트폴리오</h2>
        <ul class="portfolio_category">
            <?php
            $pSql="SELECT * FROM portfolio ORDER BY num ASC";
            $pRes=mysqli_query($conn, $pSql);
            $p=1;
            while($pRow=mysqli_fetch_array($pRes)){
                $portfolio_name=$pRow['portfolio_name'];
            ?>
            <li <?php echo ($p==1) ? "class='on'" : ""?>><?php echo $portfolio_name?></li>
            <?php $p++; } ?>
        </ul>
        <div class="portfolio_inner">
            
            <?php
            $plSql="SELECT * FROM portfolio ORDER BY num ASC";
            $plRes=mysqli_query($conn, $plSql);
            $o=1;
            while($plRow=mysqli_fetch_array($plRes)){
                $portfolio=$plRow['portfolio_name'];
            ?>
            <div class="contents <?php echo ($o==1) ? "on" : ""?>">
                <div class="swiper-container portfolio_slide0<?php echo $o;?>">
                    <div class="swiper-wrapper">
                        <?php
                        $oSql="SELECT * FROM portfolio_list WHERE portfolio='$portfolio' ORDER BY num DESC";
                        $oRes=mysqli_query($conn, $oSql);
                        while($oRow=mysqli_fetch_array($oRes)){
                            $pTitle=$oRow['title'];
                            $pThumb=$oRow['thumb'];
                            $pAddr=$oRow['addr'];
                        ?>
                        <a href="<?php echo ($pAddr) ? $pAddr : "javascript:void(0)"?>" class="swiper-slide" <?php echo ($pAddr) ? 'target="blank"' : ''?>>
                            <img src="img/portfolio/<?php echo $pThumb?>">
                            <h2><?php echo $pTitle?></h2>
                        </a>
                        <?php } ?>
                    </div>
                </div>
                <img src="img/slide-prev-arrow0.png" class="prev_btn prev0<?php echo $o;?>">
                <img src="img/slide-next-arrow0.png" class="next_btn next0<?php echo $o;?>">
            </div>
            <?php 
            $o++;
            } ?>
        </div>
    </section>
    <section id="client">
        <h2 class="title black_title">클라이언트</h2>
        <div class="number_ani">
            <?php
            $tSql="SELECT * FROM count";
            $tRes=mysqli_query($conn, $tSql);
            $tRow=mysqli_fetch_array($tRes);
            ?>
            <div>
                <h2 class="nums" data-start="0" data-end="<?php echo $tRow['company']?>"><?php echo $tRow['company']?></h2>
                <p>기업</p>
            </div>
            <div>
                <h2 class="nums" data-start="0" data-end="<?php echo $tRow['appear']?>"><?php echo $tRow['appear']?></h2>
                <p>회 출연</p>
            </div>
        </div>
        <p>다양한 분야와 업종의 기업에서 믿고 맡겨주시고 계십니다.</p>
        <div class="client_contents">
            <?php
            $rSql="SELECT * FROM client ORDER BY num DESC LIMIT 9";
            $rRes=mysqli_query($conn, $rSql);
            while($rRow=mysqli_fetch_array($rRes)){
            ?>
            <div class="contents">
                <h2><?php echo $rRow['title'];?></h2>
                <p><?php echo $rRow['contents'];?></p>
                <h3><?php echo $rRow['company'];?> <?php echo $rRow['name'];?></h3>
            </div>
            <?php } ?>
        </div>
    </section>
    <div class="support">
        <img src="img/haman.png">
        <p>이 페이지는 함안청년 창업가 지속성장 지원을 받아 제작되었습니다.</p>
    </div>
    <form method="POST" action="counsel.php" target="ifrm">
    <section class="bottom_fix">
        <div class="inner">
            <div class="left">
                <div>
                    <h2>이름</h2>
                    <input type="text" name="name" required>
                </div>
                <div>
                    <h2>전화번호</h2>
                    <input type="tel" name="tel" required>
                </div>
            </div>
            <div class="right">
                <div>
                    <div>
                        <input type="checkbox" id="chk1" required>
                        <span><i><img src="img/check.png"></i></span>
                        <p>개인정보취급방침 동의</p>
                    </div>
                    <a href="javascript:void(0);">&#91;전문보기&#93;</a>
                </div>
                <button>상담 신청</button>
            </div>
        </div>
    </section>
    </form>
    <form method="POST" action="counsel.php" target="ifrm">
    <section class="bottom_fix_mob">
        <div class="inner">
            <div class="top">
                <h2>상담 신청 하기</h2>
                <img src="img/slide-prev-arrow.png">
            </div>
            <div class="bottom">
                <div class="name">
                    <h2>이름</h2>
                    <input type="text" name="name" required>
                </div>
                <div class="phone">
                    <h2>전화번호</h2>
                    <input type="tel" name="tel" required>
                </div>
                <div class="pri_contents">
                    <div class="pri">
                        <div>
                            <input type="checkbox" id="chk2" required>
                            <span><i><img src="img/check.png"></i></span>
                            <p>개인정보취급방침 동의</p>
                        </div>
                        <a href="javascript:void(0);">&#91;전문보기&#93;</a>
                    </div>
                    <button>상담 신청</button>
                </div>
            </div>
        </div>
    </section>
    </form>
    <footer>
        <div class="inner">
            <img src="img/logo.png">
            <div class="middle">
                <div class="left">
                    <p><?php echo $name?></p>
                    <p>E-MAIL : <?php echo $email?></p>
                    <p onclick="window.open('<?php echo $instagram?>')">INSTA : <?php echo $insta?></p>
                    <!-- <p>BANK : <?php echo $bank_number?> &#91;<?php echo $bank?>&#93;</p> -->
                </div>
                <div class="right">
                    <div>
                        <a href="javascript:void(0);">정보무단수집거부</a>
                        <a href="javascript:void(0);">사이트이용약관</a>
                        <a href="./admin/loginpage.php" target="_blank">관리자모드</a>
                    </div>
                    <!-- <a href="http://mywebcenter.co.kr/landing/pay.php" target="_blank">랜딩 제작 신청</a> -->
                    <p class="bottom">ALL RIGHTS RESERVED 2023 아라컴퍼니</p>
                </div>
            </div>
        </div>
    </footer>
    <?php include 'privacy.php'?>
    <iframe name="ifrm" frameborder="0" style="display:none"></iframe>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

<script>
    $(function () {
        $(window).scroll(function(){
            var mainHeight = $(window).scrollTop();
            var intro = $("#intro").innerHeight();
            var feature = $("#feature").innerHeight();
            var profile = $("#profile").innerHeight();
            var bData = $("#b_data").innerHeight();
            var creative = $("#creative").innerHeight();
            var portfolio = $("#portfolio").innerHeight();
            var client = $("#client").innerHeight();
            var totalHeight = intro + feature + profile + bData + creative + portfolio + client;

            console.log();


            if (mainHeight > totalHeight - 750) {
                $(".bottom_fix").css({
                    "position" : "sticky",
                });
            };

            if (mainHeight < totalHeight - 750) {
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





        function copyToClipboard(val) {
            var t = document.createElement("textarea");
            document.body.appendChild(t);
            t.value = val;
            t.select();
            document.execCommand('copy');
            document.body.removeChild(t);
        }

        $('#copybtn1').click(function() {
            var textCopy = '<?php echo $bank_number?> [<?php echo $bank?>]'
            copyToClipboard(textCopy);
            alert('계좌번호를 복사했습니다.');
        });
    })
</script>

</html>

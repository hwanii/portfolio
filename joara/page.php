<?php
include 'connect.php';

$j=$_POST['j'];
$board=$_POST['board'];
$page=$_POST['page'];

$txt="";

$txt.='<div class="top_table">';
$txt.='<p>일자</p>';
$txt.='<p>카테고리</p>';
$txt.='<p>클라이언트</p>';
$txt.='<p>방송 이름</p>';
$txt.='<p>바로가기</p>';
$txt.='</div>';
$txt.='<div class="middle_table">';

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

    $txt.='<ul>';
    $txt.='<li>'.date("Y.m.d", strtotime($today)).'</li>';
    $txt.='<li>'.$category.'</li>';
    $txt.='<li>'.$client.'</li>';
    $txt.='<li>'.$title.'</li>';
    if($addr){
        $txt.='<li><a href="'.$addr.'" target="blank">GO</a></li>';
    } else {
        $txt.='<li><a href="javascript:void(0);" class="del">삭제됨</a></li>';
    }
    $txt.='</ul>';
} 
$txt.='</div>';
$txt.='<div class="list_number">';

if($block > 1){
    $txt.='<a href="javascript:page_move(\''.$j.'\', \''.$bd.'\', \'1\')"><img src="img/icon-p-p-arrow.png"></a>';
    $txt.='<a href="javascript:page_move(\''.$j.'\', \''.$bd.'\', \''.($b_start_page - 1).'\')"><img src="img/icon-p-arrow.png"></a>';
}

$txt.='<div class="num">';

for($i=$b_start_page;$i<=$b_end_page;$i++){
    if($page == $i){ // page 와 i 가 같으면 현재 페이지
        $txt.='<a href="javascript:void(0)" class="on">'.$i.'</a>';
    } else {
        $txt.='<a href="javascript:page_move(\''.$j.'\', \''.$bd.'\', \''.$i.'\')">'.$i.'</a>';
    }
}

$txt.='</div>';

$total_block = ceil($total_page/$b_pageNum_list);
if($block < $total_block){
    $txt.='<a href="javascript:page_move(\''.$j.'\', \''.$bd.'\', \''.($b_end_page + 1).'\')"><img src="img/icon-n-arrow.png"></a>';
    $txt.='<a href="javascript:page_move(\''.$j.'\', \''.$bd.'\', \''.$total_page.'\')"><img src="img/icon-n-n-arrow.png"></a>';
}
$txt.='</div>';

echo json_encode($txt);
?>
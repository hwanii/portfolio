<?php
include '../connect.php';

$cate=$_POST['cate'];

$s="";
if($cate!="all"){
    $s=" WHERE cate='$cate'";
}

$page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
$list = 15; // 페이지 당 목록 개수
$b_pageNum_list = 5; // 페이지 당 블록 갯수
$block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭

$b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
$b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호

$pSql="SELECT COUNT(*) AS cnt FROM gallery{$s}";
$pRes=mysqli_query($conn, $pSql);
$pRow=mysqli_fetch_array($pRes);
$total_count=$pRow['cnt'];

$total_page = ceil($total_count / $list); // 총 페이지 수 
if($b_end_page > $total_page) $b_end_page = $total_page;

$limit=($page - 1) * $list; // 출력 시작 번호

$no=$total_count-$limit;

$content="";
$sql="SELECT * FROM gallery{$s} ORDER BY `datetime` DESC LIMIT $limit, $list";
$res=mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($res)){
    $ct=$row['cate'];
    $title=$row['title'];
    $file=$row['file'];

    if($cate=="instagram"){
        $content.='<div class="contents" onclick="window.open();">';
    } else {
        $content.='<div class="contents">';
    }
    if($cate=="instagram") { 
        $content.='<a href="javascript:void(0);"><img src="../img/w-insta.png"></a>';
    }
    $content.='<div class="img_box">';
    $content.='<div class="bg"></div>';
    $content.='<img src="../img/gallery/'.$file.'">';
    $content.='</div>';
    $content.='<div class="txt_box">';
    $content.='<div>';
    $content.='<span class="'.$ct.'"></span>';
    $content.='<p>'.ucfirst($ct).'</p>';
    $content.='</div>';
    $content.='<h2>'.$title.'</h2>';
    $content.='</div>';
    $content.='</div>';
}

$txt="";

if($block > 1) { 
    $txt.='<a href="javascript:gallery_page(\''.$cate.'\', \''.($b_start_page - 1).'\'"><img src="../img/b-prev-arrow.png"></a>';
} 
$txt.='<div class="num">';
for($i=$b_start_page;$i<=$b_end_page;$i++){
    if($page == $i){ // page 와 i 가 같으면 현재 페이지
        $txt.='<a href="javascript:void(0)" class="on">'.$i.'</a>';
    } else { 
        $txt.='<a href="javascript:gallery_page(\''.$cate.'\', \''.$i.'\')">'.$i.'</a>';
    }
}
$txt.='</div>';
$total_block = ceil($total_page/$b_pageNum_list);
if($block < $total_block){
    $txt.='<a href="javascript:gallery_page(\''.$cate.'\', \''.($b_end_page + 1).'\'"><img src="../img/b-next-arrow.png"></a>';
}

$arr=array($content, $txt);

echo json_encode($arr);
?>
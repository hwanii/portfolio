<?php
include 'connect.php';

$type=$_POST['type'];
$name=$_POST['name'];
$tel=$_POST['tel'];
$month=$_POST['month'];
$car=$_POST['car'];
$advance=$_POST['advance'];
$subsidy=$_POST['subsidy'];
$insurance=$_POST['insurance'];

$sql="INSERT INTO counsel SET `write_name`='$name', `type`='$type', tel='$tel', `month`='$month', `car`='$car', `advance`='$advance', `subsidy`='$subsidy', `insurance`='$insurance', write_time=now(), stat='대기중'";
$res=mysqli_query($conn, $sql);

if($res){
    include_once('PHPMailer/PHPMailerAutoload.php');

    $subject= $name."님의 문의가 접수되었습니다.";
    $content= $name."님의 문의가 접수되었습니다.";

    mailer("NEXT", "nextleaserent@naver.com", "nextleaserent@naver.com", $subject, $content);
    // 보내는 사람, 보내는 사람 이메일, 받는사람 이메일, 제목, 내용
    ?>
    <script>
        alert("상담이 접수되었습니다.");
        parent.location.href="/index.php";
        document.location.href="about:blank";
    </script>
    <?php
} else {
    ?>
    <script>
        // console.log("<?php echo $sql?>");
    </script>
    <?php
}

function mailer($fname, $fmail, $to, $subject, $content, $type=0, $file="", $cc="", $bcc="")
{
    if ($type != 1) $content = nl2br($content);
    // type : text=0, html=1, text+html=2
    $mail = new PHPMailer(); // defaults to using php "mail()"
    $mail->IsSMTP();
        //   $mail->SMTPDebug = 2;
    $mail->SMTPSecure = "ssl";
    $mail->SMTPAuth = true;
    $mail->Host = "smtp.naver.com";
    $mail->Port = 465;
    $mail->Username = "nextleaserent"; // NAVER ID
    $mail->Password = "next4758!"; // NAVER PASSWORD
    $mail->CharSet = 'UTF-8';
    $mail->From = $fmail;
    $mail->FromName = $fname;
    $mail->Subject = $subject;
    $mail->AltBody = ""; // optional, comment out and test
    $mail->msgHTML($content);
    $mail->addAddress($to);
    if ($cc)
        $mail->addCC($cc);
    if ($bcc)
        $mail->addBCC($bcc);
    if ($file != "") {
        foreach ($file as $f) {
                $mail->addAttachment($f['path'], $f['name']);
        }
    }
    if ( $mail->send() ){
        ?>
        <script>
            console.log("send");
        </script>
        <?php
    } else {
        ?>
        <script>
            console.log("false");
        </script>
        <?php
    }
}
?>
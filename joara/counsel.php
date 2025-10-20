<?php
include 'connect.php';

$name=$_POST['name'];
$tel=$_POST['tel'];

$sql="INSERT INTO counsel SET write_time=now(), `write_name`='$name', tel='$tel', stat='미확인'";
$res=mysqli_query($conn, $sql);

include_once('PHPMailer/PHPMailerAutoload.php');

$email="whdkfk8127@naver.com";
$subject="상담 신청이 접수되었습니다.";
$content="상담 신청이 접수되었습니다.<br>
관리자에서 확인해주세요.";

mailer("아라컴퍼니", "zozowlsdn@naver.com", $email, $subject, $content);
// 보내는 사람, 보내는 사람 이메일, 받는사람 이메일, 제목, 내용

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
    $mail->Username = "zozowlsdn@naver.com"; // NAVER ID
    $mail->Password = "rudskawjdqh3#"; // NAVER PASSWORD Dusvlff!12
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
    $mail->send();
}

if($res){
    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\SMTP;
    // use PHPMailer\PHPMailer\Exception;

    // //Load Composer's autoloader
    // require './PHPMailer/src/Exception.php';
    // require './PHPMailer/src/PHPMailer.php';
    // require './PHPMailer/src/SMTP.php';

    // //Create an instance; passing `true` enables exceptions
    // $mail = new PHPMailer(true);
    // //$mail->SMTPDebug  = 2;  //디버깅시 필요
    // $mail->CharSet = PHPMailer::CHARSET_UTF8; //안쓰면 한글깨짐
    // $mail->SMTPAuth    = true;
    // $mail->SMTPSecure  = 'ssl';
    // $mail->Host        = 'smtp.gmail.com';
    // $mail->Port        = 465;
    // $mail->Mailer        = 'smtp';
    // $mail->Username    = 'mywebcentermaster@gmail.com'; // mywebcentermaster@gmail.com
    // $mail->Password    = 'qlosixbqzgpfklbj'; // qlosixbqzgpfklbj
    // $mail->addAddress('whdkfk8127@naver.com', '쇼호스트 조아라'); // 수신자
    // $mail->setFrom('mywebcentermaster@gmail.com', '(주)하이클라스'); // 발신자
    // $mail->isHTML(true);
    // $mail->Subject     = '상담 신청이 접수되었습니다.';
    // $mail->Body        = '상담 신청이 접수되었습니다.<br>
    // 관리자에서 확인해주세요.';
    // $mail->send();
    ?>
    <script>
        alert("상담이 접수 되었습니다.");
        parent.location.href="index.php";
        document.location.href="about:blank";
    </script>
    <?php
}

?>
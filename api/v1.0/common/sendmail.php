<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/phpmailer/phpmailer/src/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/phpmailer/phpmailer/src/SMTP.php';

$name = $_POST['name'];
$tel = $_POST['tel'];
$job = $_POST['job'];
$amount = $_POST['amount'];
$etc = $_POST['etc'];

$constants = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/gmail.ini");

$mail = new PHPMailer();
$mail->isSMTP(); // Set mailer to use SMTP
$mail->Mailer = 'smtp';
$mail->SMTPDebug = 0;
$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true;  // Enable SMTP authentication
$mail->Username = $constants['username']; // SMTP username
$mail->Password = $constants['password']; // SMTP password
$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; // TCP port to connect to
$mail->CharSet='UTF-8';
$mail->setFrom($constants['username'], '이메일전송');
$mail->addAddress('sonaky47@naver.com');
$mail->isHTML(true);
$mail->Subject = "[문의사항]{$name}, {$tel}";
$mail->Body = "<html><body>";
$mail->Body .= "<p>이름 : {$name}</p>";
$mail->Body .= "<p>연락처 : {$tel} </p>";
$mail->Body .= "<p>직업 : {$job} </p>";
$mail->Body .= "<p>대출희망금액 : {$amount} </p>";
$mail->Body .= "<p>기타문의사항 : {$etc} </p>";
$mail->Body .= "</body></html>";

if(!$mail->Send()) {
  echo json_encode([
    'status' => 'fail',
    'data' => $mail->ErrorInfo
  ]);
} else {
  echo json_encode([
    'status' => 'success',
  ]);
}
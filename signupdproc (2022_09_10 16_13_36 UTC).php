<title>LJ Tour 회원관리</title>
<?php
session_start();

include_once('dbconn.php');

$id = $_POST['id'];
$pwd1 = $_POST['pwd1'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$name = $_POST['name'];

$sql = "update user set  pwd1 = '$pwd1', email = '$email', phone  = '$phone', name = '$name' where id = '$id'";

if($conn->query($sql)) {
	$_SESSION['name'] = $name;
	echo "$name 회원의 회원정보가 변경하였습니다.<br>";
	echo "<a href='travel.php'>LJ Flight</a>";
}
else {
	echo "회원정보변경 중에 오류가 발생하였습니다.". $conn->error;
}
?>
<title>LJ Tour 계정탈퇴</title>
<?php
session_start();
include_once('dbconn.php');
$id = $_SESSION['id'];
$name = $_SESSION['name'];
$sql = "delete from user where id = '$id'";
if($conn->query($sql)) {
	echo "$name 회원의 회원정보를 삭제하였습니다.<br>";
	echo "<a href='travel.php'>LJ Tour</a>";
	session_destroy();
}
else
	echo "회원정보 삭제 중에 오류가 발생하였습니다.". $conn->error;
?>

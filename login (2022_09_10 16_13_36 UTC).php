<title>LJ Tour 로그인</title>
<?php
session_start();
include_once('dbconn.php');
$id = $_POST['id'];
$pwd1 = $_POST['pwd1'];
$sql = "select * from user where id = '$id' and pwd1 = '$pwd1'";
$result = $conn->query($sql);
if($result -> num_rows >0){
	$row = $result -> fetch_assoc();
	$name = $row['name'];
	$_SESSION['id'] = $row['id']; 
	$_SESSION['pwd1'] = $row['pwd1'];
	$_SESSION['name'] = $row['name'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['phone'] = $row['phone'];
	echo "$name 회원님 환영합니다.<br>";
	echo"<a href='travel.php'>메인페이지로 이동</a>";
}
else{
	echo "로그인에 실패하였습니다.<br>";
	echo "<a href='login.html'>로그인</a><br>";
}
?>
<title>LJ Tour 아이디찾기</title>
<?php
session_start();
include_once('dbconn.php');
$name = $_POST['name'];
$phone = $_POST['phone'];
$question = $_POST['question'];
$answer = $_POST['answer'];
$email = $_POST['email'];

if($_POST["radio"] == "1"){
	$sql = "select * from user where name = '$name' and phone = '$phone'";
	$result = $conn->query($sql);
	if($result -> num_rows >0){
		$row = $result -> fetch_assoc();
		$name = $row['name'];
		$id = $row['id'];
		echo "<script>alert('$name 회원님의 아이디는 $id 입니다.'); history.back();</script>";
	}
	else{
		echo "아이디 찾기에 실패하였습니다.<br>";
		echo "<a href='search_idpwd.html'>아이디 비밀번호 찾기 돌아가기</a><br>";
	}
}
if($_POST["radio"] == "2"){
	$sql = "select * from user where name = '$name' and email = '$email'";
	$result = $conn->query($sql);
	if($result -> num_rows >0){
		$row = $result -> fetch_assoc();
		$name = $row['name'];
		$id = $row['id'];
		echo "<script>alert('$name 회원님의 아이디는 $id 입니다.'); history.back();</script>";
	}
	else{
		echo "아이디 찾기에 실패하였습니다.<br>";
		echo "<a href='search_idpwd.html'>아이디 비밀번호 찾기 돌아가기</a><br>";
	}
}
if($_POST["radio"] == "3"){
	$sql = "select * from user where name = '$name' and question = '$question' and answer = '$answer'";
	$result = $conn->query($sql);
	if($result -> num_rows >0){
		$row = $result -> fetch_assoc();
		$name = $row['name'];
		$id = $row['id'];
		echo "<script>alert('$name 회원님의 아이디는 $id 입니다.'); history.back();</script>";
		
	}
	

	else{
		echo "아이디 찾기에 실패하였습니다.<br>";
		echo "<a href='search_idpwd.html'>아이디 비밀번호 찾기 돌아가기</a><br>";
	}
}

?>
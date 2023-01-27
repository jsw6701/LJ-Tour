<title>LJ Tour 회원가입</title>
<?php

include_once('dbconn.php');

$name = $_POST['name'];
$inputValue = $_POST['inputValue'];
$inputValue2 = $_POST['inputValue2'];
$email = $_POST['email'];
$id = $_POST['id'];
$pwd1 = $_POST['pwd1'];
$question = $_POST['question'];
$answer = $_POST['answer'];
$phone = $_POST['phone'];
date_default_timezone_set("Asia/Seoul");
$rdate = date("Y/m/d"); 
if(empty($name) || empty($inputValue)|| empty($inputValue2)|| empty($email)|| empty($id)|| empty($pwd1)|| empty($question)|| empty($answer)|| empty($phone)){
	echo "회원가입에 실패하였습니다.<br>". $conn->error;
	echo "<a href='signup.html'>회원가입</a>";
}
else if(isset($name) && isset($inputValue)&& isset($inputValue2)&& isset($email)&& isset($id)&& isset($pwd1)&& isset($question)&& isset($answer)&& isset($phone)) {
	$sql = "insert into user values('$name','$inputValue','$inputValue2','$email','$id','$pwd1','$question','$answer','$phone','$rdate')";

	if($conn->query($sql)){
		echo "$name 회원의 신규등록이 성공하였습니다.<br>";
		echo "<a href='travel.php'>LJ Tour</a>";
	}
	else{
		echo "회원가입에 실패하였습니다.<br>". $conn->error;
	}
}


?>

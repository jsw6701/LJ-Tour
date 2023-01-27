<title>LJ Tour 비밀번호찾기</title>
<?php
session_start();
include_once('dbconn.php');
$name = $_POST['name'];
$id = $_POST['id'];
$inputValue = $_POST['inputValue'];
$inputValue2 = $_POST['inputValue2'];


$sql = "select * from user where name = '$name' and id = '$id' and inputValue = '$inputValue' and inputValue2 = '$inputValue2'";
$result = $conn->query($sql);
if($result -> num_rows >0){
    $row = $result -> fetch_assoc();
    $name = $row['name'];
    $pwd1 = $row['pwd1'];
    echo "<script>alert('$name 회원님의 비밀번호는 $pwd1 입니다.'); history.back();</script>";
}
else{
    echo "비밀번호 찾기에 실패하였습니다.<br>";
    echo "<a href='search_idpwd.html'>아이디 비밀번호 찾기 돌아가기</a><br>";
}



?>
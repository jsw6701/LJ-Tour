<title>LJ Tour 데이터 접속</title>
<?php
$server = "localhost";
$user = "root";
$passwd = ""; 
$dbname = "lj_db"; 

$conn = new mysqli($server, $user, $passwd, $dbname); 
if($conn->connect_error)
	die("lj_db 접속오류");

?>
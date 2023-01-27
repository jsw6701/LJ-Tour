<!doctype html>
<html>
<head>
	<title>LJ TOUR</title>
	<meta charset="utf-8">
	<style>
		a {
       		text-decoration-line: none;
		}
		h5 {
			font-size:20px;
			text-align:center;
		}
		h5:hover{
			color:rgb(247, 0, 0);
		}
	</style>
</head>
<body>

	<h1>LJ Tour</h1>
	<h2>계정 정보 변경</h2>
	<hr>
	<?php
	session_start();
	include_once('dbconn.php');

	if(!isset($_SESSION['id'])) {
		echo "로그인을 먼저 해야합니다.<br>";
		echo "<a href='login.html'>로그인</a>";
	}
	else {
		$id = $_SESSION['id'];
		$sql = "select * from user where id = '$id'"; 
		$result = $conn->query($sql);
		if($result->num_rows == 0) {
			die("검색된 데이터가 없습니다.".$conn->error);
		}
		$row = $result->fetch_assoc(); 

	?>
	<form action="signupdproc.php" method="post">
	<table>
		<tr>
			<td><label>ID</label></td>
			<td><input type="text" name="id" value="<?= $row['id'] ?>" readonly></td>
		</tr>
		<tr>
			<td><label>비밀번호</label></td>
			<td><input type="password" name="pwd1" value="<?= $row['pwd1'] ?>"></td>
		</tr>
		<tr>
			<td><label>이메일</label></td>
			<td><input type="text" name="email" value="<?= $row['email'] ?>"></td>
		</tr>
		<tr>
			<td><label>전화번호</label></td>
			<td><input type="tel" name="phone" value="<?= $row['phone'] ?>"></td>
		</tr>
        <input type="text" name="name" value="<?= $row['name'] ?>" hidden>

	<?php } ?>
		<tr>
			<td></td>
			<td><input type="submit" value="SIGNMOD">
				<input type="reset" value="CLEAR">
			</td>
		</tr>
	</table>
	</form>
	<h5><a href="signremove.php">회원탈퇴</a></h5>
</body>
</html>
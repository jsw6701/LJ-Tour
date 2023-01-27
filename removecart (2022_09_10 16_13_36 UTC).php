<title>LJ Tour 장바구니 물건제거</title>
<?php
include_once('dbconn.php');
$chk = $_GET['chk'];

$count = count($chk); 
for($i=0; $i<$count; $i++) {
	$no = $chk[$i];
	$sql = "delete from cart where no = $no";
	if($conn->query($sql)) {
	}
	else {
		echo "장바구니 물품 삭제 오류가 발생하였습니다.<br>";
		echo $conn->error;
		break;
	}
}
echo "장바구니 물품을 삭제하였습니다.<br>";
echo "<a href='showcart.php'>장바구니</a>";

?>
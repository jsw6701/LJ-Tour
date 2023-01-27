<title>LJ Tour 예약</title>
<?php

session_start();
include_once('dbconn.php');

$id = $_SESSION['id'];
$name = $_GET['name'];
$price = $_GET['price'];
$qty = $_GET['qty'];
$total = $_GET['price'] * $qty;
$photo = $_GET['photo'];
$location = $_GET['location'];
$requirements = $_GET['requirements'];
$aqty = $_GET['aqty'] * $qty;
$hqty = $_GET['hqty'] * $qty;
$sql = "insert into cart(id,name,price,qty,total,photo,location,requirements,aqty,hqty) 
		values('$id','$name','$price','$qty','$total','$photo','$location','$requirements','$aqty','$hqty')";
if($conn->query($sql)) {
	echo "선택한 상품이 장바구니에 담겼습니다.<br>";
	echo "<a href='travel.php'>LJ Tour</a>";
}
else echo "장바구니 담기에 실패하였습니다. ".$conn->error;	
?>
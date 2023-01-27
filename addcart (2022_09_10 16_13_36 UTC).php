<!DOCTYPE html>
<html>
<head>
    <title>LJ Tour 상품 예약</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
  
    .container {
        position: absolute;
        top : 350px;
        right: 500px;
    }
    input[type=text], input[type=number] {
        width: 93%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
    }
    input[type=text]:focus, input[type=number]:focus {
        background-color: #ddd;
        outline: none;
    }
    input[type=radio] {
        margin: 5px 0;
    }
    .btn {
        background-color: #4CAF50;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }
    .btn:hover {
        opacity: 1;
    }
    .title {
        position: absolute;
        z-index: 1;
        top: 50px; left:220px;
        color: white;
    }
    h1 {
        padding : 10px;
        background-color:rgba(0, 0, 0, 0.692);
        border-radius:3em;
    }
    h2 { 
        text-align:center;
        padding : 10px;
        background-color:rgba(98, 231, 255, 0.692);
        border-radius:15px;
    }
     </style>
</head>
<body>
	<?php
	session_start();
	if(!isset($_SESSION['id'])) {

		echo "<script>";
		echo "alert('로그인을 한 다음 상품을 장바구니에 담을 수 있습니다.');";
		echo "history.back();";
		echo "</script>";
	}
	$name = $_GET['name'];
	$price = $_GET['price'];
	$photo = $_GET['photo'];
	?>
	<h1 class="title">&nbsp;&nbsp;상품&nbsp;&nbsp;</h1>
	<div>
        <img style="position:absolute; margin-left:10.3%; margin-top:3%; width:40%; height:70%;" src="pic/<?=$photo?>">
		<form action="addcartproc.php" method="get">
			<div class="container">
				<h2><?=$name?></h2>
				<label><b>주문</b></label>
				<label><b>수량</b></label>
				<input type="number" name="qty" value="1" required>
				<input type="text" name="name" value="<?=$name?>" hidden >
				<input type="text" name="price" value="<?=$price?>" hidden>
                <input type="text" name="photo" value="<?=$photo?>" hidden>
				<input type="text" name = "aqty" value="1" hidden>
                <input type="text" name="location" value=" " hidden >
                <input type="number" name = "hqty" value="0" hidden>
                <input type="text" name="requirements" value=" "  hidden>
				<button type="submit" class="btn">장바구니에 담기</button>
			</div>
		</form>
	</div>
</body>
</html>

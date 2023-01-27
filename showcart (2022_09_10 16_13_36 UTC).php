<!doctype html>
<html>
	<head>
		<title>LJ Tour 장바구니</title>
		<meta charset="utf-8">
		<script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/fullpage.js"></script>
        <link href="js/fullpage.css" rel="stylesheet">
        <meta name="description" content="fullPage full-screen navigation and sections control menu." />
        <meta name="keywords"  content="fullpage,jquery,demo,screen,fullscreen,navigation,control arrows, dots" />
        <script src="https://kit.fontawesome.com/f2552ea92d.js" crossorigin="anonymous"></script>
		<style>
			body {
                text-align: center;
            }
			.topnav{
			font-family: Arial, Helvetica, sans-serif;
			overflow: hidden;
			position: fixed;
			margin:50;
			top:30px;
			right:20px;
			z-index: 80;
			}
			.topnav0{
			background-color: rgba(0, 0, 0, 0.644);
			padding:10px;
			border-radius: 10em;
			font-size: 20px;
			position: fixed;
			left: 60px;
			color: rgb(255, 255, 255);
			}     
			
            #tour {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 70%;
                margin-left: auto;
                margin-right: auto;
            }
			#tour td,  #tour th {
                border: 1px solid #ddd;
                padding: 8px;
            }
			#tour tr:nth-child(even){background-color: #f2f2f2;}
			#tour tr:hover {background-color: #ddd;}
			#tour th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: center;
                background-color: #4CAF50;
                color: white;
            }
			#tour img {
				width: 120px;
				height: 80px;
			}
			.btn {
				font-weight:900;
				font-size:15px;
				background-color: rgba(255, 0, 0, 0.61);
				color: white;
				padding: 16px 20px;
				border: none;
				cursor: pointer;
				width: 70%;
				opacity: 0.9;
				margin-top: 10px;
			}
			.btn:hover {
				font-weight:900;
				background-color: rgba(255, 0, 0, 0.856);
				color: black;
			}
		</style>
	</head>
	<body>
		
		<ul style="display: inline-flex;" class="topnav">
			<a href="travel.php">
				<div class="topnav0">
					<i class="fas fa-plane-departure">&nbsp;&nbsp;&nbsp;LJ Tour</i>
				</div>
			</a>
		</ul>
		<?php
		session_start();
		include_once('dbconn.php');
		$id = $_SESSION['id'];
		$sql = "select * from cart where id = '$id'";
		$result = $conn->query($sql);
		if(!isset($result)) die("장바구니 검색 오류 : ".$conn->error);
		if($result->num_rows > 0) {
			$no = 1;
		?>
		<p style="height:50px;"></p>
		<h1>LJ TOUR 장바구니</h1>
		<hr>
		<form action="removecart.php" method="get">
		<table id="tour">
			<tr>
				<th></th><th>NO</th><th>사진</th><th>이름</th><th>수량</th><th>가격</th><th>위치</th><th>요구사항</th>
			</tr>
			<?php while($row = $result->fetch_assoc()) { ?>
			<tr>
				<td><input type="checkbox" name="chk[]" value="<?=$row['no']?>"></td>
				<td><?=$no?></td>
				<td><img src="pic/<?=$row['photo']?>"></td>
				<td><?=$row['name']?></td>
				<td><?=$row['qty']?></td>
				<td><?=$row['total']?></td>
				<td><?=$row['location']?></td>
				<td><?=$row['requirements']?></td>
				
			</tr>
			<?php $no++; } ?>
		</table>
			<button type="submit" class="btn">선택한 상품 제거</button>
		<?php } else {
			echo "장바구니가 비었습니다.<br>";
			echo "<a href='travel.php'>LJ Tour</a>";
		} ?>
	</body>
</html>







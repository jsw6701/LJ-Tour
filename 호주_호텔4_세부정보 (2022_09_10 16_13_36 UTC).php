<!DOCTYPE html>
<html>
<head>
    <title>LJ TOUR</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/f2552ea92d.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <?php
    session_start();
    include_once('dbconn.php');
    ?>
</head>
<style>
    html, body {
    height: 100%;
    margin: 0;
    line-height: 1.8em;
    }       
    a {
        text-decoration-line: none;
    }   
    .pic1 {
      background-image: url(pic/osHotel1.jpg);
      background-size: cover;
      background-attachment: fixed;
      background-position: center;
      min-height: 100%;
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
    .topnav1 a{
      font-weight: bolder;
      color:  rgb(255, 255, 255);
      text-align: center;
      text-decoration: none;
      font-size: 18px;
      padding: 30px 20px;
      background-color:rgba(0, 0, 0, 0.644);
    }
    .topnav1 a:hover{
        background-color:  #ddd;
        color: black;
    }
    h1 {
      background-color: rgba(0, 0, 0, 0.815);
      padding: 40px 40px;
      font-size:30px;
      font-weight: bold;
      border-radius: 20px;
      color:rgb(253, 253, 253);
      font-family: Arial, Helvetica, sans-serif;
    }
    h2 {
      font-size:30px;
      color:rgba(0, 0, 0, 0.808);
      font-family: Arial, Helvetica, sans-serif;
    }
    h3 {
      font-size:20px;
      color:rgba(0, 0, 0, 0.808);
      font-family: 'Gothic', Tahoma, Verdana, sans-serif;
    } 
    h4 {
        font-size: 25px;
        margin-top:20px;
        margin-left: 10px;
        font-weight: 400;
        color: hsla(0, 0%, 0%, 0.795);
        font-family: 'Gothic', Tahoma, Verdana, sans-serif;
    }
    h5 {
        font-size: 30px;
        font-weight: bolder;
        margin-top: 27px;
        color: hsla(204, 100%, 39%, 0.856);
        font-family: 'Gothic', Tahoma, Verdana, sans-serif;
        text-align: center;
    }
    .main7 {
        position:absolute;
        width: 417px;
        height: 300px;
        background: rgba(206, 206, 206, 0.336);
        border-radius: 2em;
        text-align: left;
        margin-left:1200px;
        
        margin-top:-290px;
    }
    .main-Sh {
        box-shadow: 0 3px 5px rgba(0, 0, 0, 0.062), 0 1px 10px rgba(83, 83, 83, 0.61);
    }
    .button1 { 
        position: absolute;
        font-size: 35px;
        font-weight: bold;
        color : rgb(255, 255, 255);
        text-align: center; 
        margin-left: 120px;
        margin-top: 50px;
        background-color:rgba(255, 0, 0, 0.63);
        border-radius: 0.5em;
        padding:20px;
    }
    .button1:hover { 
        background-color: rgba(255, 0, 0, 0.774);
        position: absolute;
        color : rgb(255, 255, 255);
    }      
</style>
<body>
  <?php
  $name = $_GET['name'];    
  $count=0;
  if(isset($_SESSION['id'])){
      $id = $_SESSION['id'];
      $sql = "select count(*) rowcnt from cart where id = '$id'";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
          $row = $result->fetch_assoc();
          $count = $row['rowcnt'];
      }
  }
  ?>
  <ul style="display: inline-flex;" class="topnav">
      <a href="travel.php">
          <div class="topnav0">
              <i class="fas fa-plane-departure">&nbsp;&nbsp;&nbsp;LJ Tour</i>
          </div>
      </a>
      <div class="topnav1">
          
          <a href="travel.php">홈</a>
          <?php if(!isset($_SESSION['id'])) { ?>
          <a href="signup.html">회원가입</a>
          <a href='login.html'>로그인</a>
          <?php } else { ?>
          <a href="#"><?= $_SESSION['name'] ?>님 환영합니다.</a>
          <a href='signupd.php'>회원정보 수정</a>
          <a href='signout.php'>로그아웃</a>
          <a href='showcart.php'>장바구니(<?=$count?>)</a>
          <?php }	?>
          
      </div>
  </ul>
<div id="HotelMain" class="pic1 w3-display-container w3-opacity-min">
  <div class="w3-display-middle" style="white-space: nowrap">
      <h1><?=$name?></h1>
  </div>
</div>

<div id="Hotelpic" class="w3-center w3-container w3-padding-0">
    <h3 class="w3-wide w3-center">객실 내부 사진<h3><br>
    <div class="w3-row-padding w3-center">
        <div class="w3-col m3">
            <img src="pic/oshotel4.jpg" style="width: 471px; height: 265px" onclick="onClick(this)" 
            class="w3-hover-opacity" alt="정문">
        </div>

        <div class="w3-col m3">
            <img src="pic/oshotel4-1.jpg" style="width: 471px; height: 265px" onclick="onClick(this)" 
            class="w3-hover-opacity" alt="식당">
        </div>

        <div class="w3-col m3">
          <img src="pic/oshotel4-2.jpg" style="width: 471px; height: 265px" onclick="onClick(this)" 
          class="w3-hover-opacity" alt="스탠다드 트윈">
        </div>

        <div class="w3-col m3">
          <img src="pic/oshotel4-3.jpg" style="width: 471px; height: 265px" onclick="onClick(this)" 
          class="w3-hover-opacity" alt="스탠다드 싱글">
        </div>
    </div><br>

    <div class="w3-row-padding w3-center">
      <div class="w3-col m3">
        <img src="pic/oshotel4-4.jpg" style="width: 471px; height: 265px" onclick="onClick(this)" 
        class="w3-hover-opacity" alt="스탠다드 트윈">
      </div>

      <div class="w3-col m3">
        <img src="pic/oshotel4-5.jpg" style="width: 471px; height: 265px" onclick="onClick(this)" 
        class="w3-hover-opacity" alt="스탠다드 더블">
      </div>

      <div class="w3-col m3">
        <img src="pic/oshotel4-6.jpg" style="width: 471px; height: 265px" onclick="onClick(this)" 
        class="w3-hover-opacity" alt="스탠다드 트윈">
      </div>

      <div class="w3-col m3">
        <img src="pic/oshotel4-7.jpg" style="width: 471px; height: 265px" onclick="onClick(this)" 
        class="w3-hover-opacity" alt="스탠다드 트윈">
      </div>
  </div>
</div>
<div id="HotelIntro" class="w3-container w3-content w3-padding-32"><br>
  <h2 class="w3-left">George Wiliams Hotel 의 세부정보</h2><br><br>
  <h4>■ 호텔 이용 규칙<br>
    <font SIZE="3" COLOR="#919191" FACE="'Segoe UI', Tahoma, Verdana, sans-serif">
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;반려동물 동반, 흡연이 금지되는 호텔입니다.
    </font>
</h4>
<h4>■ 감염 방지<br>
    <font SIZE="3" COLOR="#919191" FACE="'Segoe UI', Tahoma, Verdana, sans-serif">
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;객실 내부를 제외하는 모든곳에서 마스크를 꼭 착용해야 합니다.
    </font>
</h4>
<h4>■ 유연한 환불정책<br>
    <font SIZE="3" COLOR="#919191" FACE="'Segoe UI', Tahoma, Verdana, sans-serif">
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;별도의 복잡한 절차없이 환불이 가능합니다.
    </font>
</h4>
<h4>■ 편의시설 <br>
    <font SIZE="3" COLOR="#919191" FACE="'Segoe UI', Tahoma, Verdana, sans-serif">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;▣ 무선 인터넷
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;▣ 주방
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;▣ 에어컨
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;▣ 히터<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;▣ 건조기
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;▣ 엘레베이터
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;▣ 발코니
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;▣ TV<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;▣ PC
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;▣ 헤어드라이어
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;▣ 전자레인지
        &nbsp;&nbsp;▣ 조리도구
    </font>
</h4><br><br>
</div>
<script>

function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}</script>

<?php


$sql = "select * from hotel where name like 'George Wiliams Hotel%'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {

?>   
<div id="HotelIntro" class="w3-container w3-content w3-padding-32">
  <h2 class="w3-left"><?=$name?> 객실 세부구성</h2><br><br>
  <h3>● 방 종류 : <?=$row['name']?></h3>
  <h3>● 세부주소 : <?=$row['location']?></h3>
  <h3>● 최대인원 : 3인</h3>
  <h3>● 침실1, 침대2, 욕실1</h3>
  <h3>● 가격 : <?=$row['price']?> (1박 기준)</h3>
</div>
<div class="main7 main-Sh">
  <h5><br>요금을 확인하기 위하여<br><br>예약페이지로 이동</h5>
  
  <div class="button1"><a href="호텔예약.php?name=<?=$row['name']?>&price=<?=$row['price']?>&photo=<?=$row['photo']?>&location=<?=$row['location']?>">객실확인</a></div>
</div><br><br><br>
<?php       
    }
}
?>

<div id="modal01" onclick="this.style.display='none'" class="w3-modal w3-modal">
   <div class="w3-modal-content w3-animate-zoom w3-center w3-padding-64 w3-transparent">
     <img id="img01" class="w3-image">
     <p id="caption" class="w3-opacity w3-xlarge w3-black"></p>
   </div>
 </div>

</body>
</html>

























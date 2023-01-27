<!DOCTYPE html>
<html>
    <head>
        <title>LJ Flight</title>
        <meta charset="utf-8">
        <script src="https://kit.fontawesome.com/f2552ea92d.js" crossorigin="anonymous"></script>
        <?php
        session_start();
        include_once('dbconn.php');
        ?>
        <style>
            body {
                height : 100vh; 
                margin: 0;
            }
            .topnav{
                background-color: rgba(255,255,255,0);
                font-family: Arial, Helvetica, sans-serif;
                overflow: hidden;
                position: fixed;
                margin:0;
                top:30px;
                right:30px;
                z-index: 99;
            }
            .topnav0{
                font-size: 20px;
                position: fixed;
                left: 60px;
                color: black;
            }
            
            .topnav1 a{
                color:  black;
                text-align: center;
                text-decoration: none;
                font-size: 17px;
                padding: 14px 16px;
            }
            .topnav1 a:hover{
                background-color:  #ddd;
                color: black;
            }
            a {
                font-weight: 600;
                font-size: 30px;
                color: #000000;
                font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
                text-decoration-line: none;
            }
            .main-Sh {
                box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 10px rgba(0, 0, 0, 0.226);
            }
            .main {
                display:inline-block; 
                width: 1000px;
                height: 100px;
                background: rgba(255, 0, 0, 0.377);    
                border-radius: 2em;
                text-align: left;
                margin-left:550px;
                margin-top:100px;
            }
            .main2 {
                display:inline-block; 
                width: 1000px;
                height: 75px;
                margin-left:550px;
                margin-top:30px;
                background: rgba(0, 225, 255, 0.171);
                border-radius:15px;
            }
            .main3 {
                position:absolute; 
                width: 300px;
                height: 1200px;
                background: rgba(0, 225, 255, 0.171);
                border-radius: 2em;
                text-align: left;
                margin-left:130px;
                margin-top:350px;
            }
            .main4 {
                display:inline-block; 
                width: 1000px;
                height: 75px;
                margin-top:140px;
                background: rgba(0, 155, 175, 0.527);
                border-radius:15px;
            }
            .main5 {
                display:inline-block; 
                width: 1000px;
                height: 75px;
                margin-top:190px;
                background: rgba(0, 225, 255, 0.699);
                border-radius:15px;
            }
            h1 {
                text-align: center;
                margin-top: 28px;
                margin-left: 20px;
                color: hsla(0, 0%, 0%, 0.699);
                font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
            }
            h2 {
                text-align: left;
                color: hsla(0, 0%, 0%, 0.699);
                font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
            }
            h3 {
                font-size: 20px;
                font-weight: 600;
                color: hsl(0, 0%, 0%);
                font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
                margin-top: 5px;
                text-align: center;
            }
            h4 {
                font-size: 20px;
                font-weight: 600;
                color: hsl(0, 0%, 0%);
                font-family: 'Gothic', Tahoma, Verdana, sans-serif;
                margin-top: 5px;
                text-align: center;
            }
            h5 {
                font-size: 15px;
                font-weight: 600;
                color: hsla(0, 0%, 0%, 0.726);
                font-family: 'Gothic', Tahoma, Verdana, sans-serif;
                text-align: center;
            }
            h6 {
                margin-top: 42px;
                margin-left: 55px;
            }
            .at_image{
                position: absolute;
                margin-top: 15px;
                margin-left:28px;
            }
            .ptc {
                display:inline-block; 
                width: 300px;
                height: 400px;
                background: #ffff;
                border: 1px solid #999;
                border-radius: 10px; 
                margin: 10px; 
            }
            .ptc_s {
                box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 2px 5px rgba(0, 0, 0, 0.24);
            }
            .act_s {
                width:280px;
                height: 200px;
                margin-top:10px;
                margin-left:10px;
            }
            .button{ 
                position: absolute;
                font-size: 35px;
                font-weight: bold;
                color : rgb(255, 255, 255);
                text-align: center; 
                margin-left: 115px;
                margin-top: 0;
                background-color:rgba(255, 0, 0, 0.63);
                border-radius: 0.5em;
                padding:4px;
            }
            .button:hover { 
                background-color: rgba(255, 0, 0, 0.5);
                position: absolute;
                color : rgb(255, 255, 255);
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
            <div class="topnav1">
                
                <a href="travel.php">홈</a>
                <?php if(!isset($_SESSION['id'])) { ?>
                <a href="signup.html">회원가입</a>
                <a href='login.html'>로그인</a>
                <?php } else { ?>
                <a href="#"><?= $_SESSION['name'] ?>님 환영합니다.</a>
                <a href='signupd.php'>회원정보 수정</a>
                <a href='signout.php'>로그아웃</a>
                <a href='addcart.php'>장바구니</a>
                <?php }	?>
                
            </div>
        </ul>
        

            
        <div class="main3 main-Sh">
            <div class="at_image">
                <h3>액티비티를 즐기세요!</h3>
                <img src="pic/Act1.jpg" alt="activity" width="250" height="180"><br><br><br>
                <img src="pic/Act2.jpg" alt="activity" width="250" height="180"><br><br><br>
                <img src="pic/Grban5.jpg" alt="activity" width="250" height="180"><br><br><br>
                <img src="pic/Act3.jpg" alt="activity" width="250" height="180"><br><br><br>
                <img src="pic/Act4.jpg" alt="activity" width="250" height="180"><br><br><br>    
            </div>
        </div>

        <div class="main main-Sh">
            <h1>액티비티와 함께라면 더욱 즐겁습니다!</h1>
        </div><br><br>

        <div class="main2">
        <h2>&nbsp;&nbsp;&nbsp;아시아의 액티비티</h2><br>
        <?php
        $sql = "select * from activity";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                if($row['no'] >3) break;
        ?>   
            <div class="ptc ptc_s">
                <img src="pic/<?=$row['photo']?>"class="act_s"></a>
                <h4>[ <?=$row['name']?> ]</h4>
                <h5>가격 <?=$row['price']?>원 (인당)</h5>
                
                <div class="button"><a href="addcart.php?name=<?=$row['name']?>&price=<?=$row['price']?>&photo=<?=$row['photo']?>">담기</a></div>
            </div>                     
        <?php }
        } else echo "등록된 엑티비티 메뉴가 없습니다."
        ?>
                

        <div class="main4">
        <h2>&nbsp;&nbsp;&nbsp;유럽의 액티비티</h2><br>
        <?php
        $sql = "select * from activity";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                if($row['no'] <4 || $row['no'] >6) continue;
                else{
        ?>        
            <div class="ptc ptc_s">
                <img src="pic/<?=$row['photo']?>"class="act_s"></a>
                <h4>[ <?=$row['name']?> ]</h4>
                <h5>가격 <?=$row['price']?>원 (인당)</h5>
                
                <div class="button"><a href="addcart.php?name=<?=$row['name']?>&price=<?=$row['price']?>&photo=<?=$row['photo']?>">담기</a></div>
            </div>
            <?php }
            }
        } else echo "등록된 엑티비티 메뉴가 없습니다."
        ?>
        </div>

        <div class="main5">
        <h2>&nbsp;&nbsp;&nbsp;오세아니아의 액티비티</h2><br>
        <?php
        $sql = "select * from activity";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                if($row['no'] <7 || $row['no'] >9) continue;
        ?>
            <div class="ptc ptc_s">
                <img src="pic/<?=$row['photo']?>"class="act_s"></a>
                <h4>[ <?=$row['name']?> ]</h4>
                <h5>가격 <?=$row['price']?>원 (인당)</h5>
                
                <div class="button"><a href="addcart.php?name=<?=$row['name']?>&price=<?=$row['price']?>&photo=<?=$row['photo']?>">담기</a></div>
            </div>
        <?php }
        } else echo "등록된 엑티비티 메뉴가 없습니다."
        ?><br><br><br><br>
        </div>
        
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>LJ Tour</title>
        <meta charset="utf-8"meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://kit.fontawesome.com/f2552ea92d.js" crossorigin="anonymous"></script>
        <?php
        session_start();
        include_once('dbconn.php');
        ?>
        <style>
            .mySlides {
                display:none;
                }
            body {
                height : 100vh; 
                margin: 0;
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
            .main {
                display:inline-block; 
                width: 1000px;
                height: 100px;
                background: #ffff;
                border-radius: 2em;
                text-align: left;
                margin-left:550px;
                margin-top:150px;
            }
            .main2 {
                display:inline-block; 
                width: 1000px;
                height: 320px;
                background: #ffff;
                border-radius: 2em;
                text-align: left;
                margin-left:550px;
                margin-top:30px;
            }
            .main3 {
                position:absolute; 
                width: 300px;
                height: 1000px;
                background: rgba(255, 195, 66, 0.74);
                border-radius: 2em;
                text-align: left;
                margin-left:130px;
                margin-top:450px;
            }
            h1 {
                margin-top: 24px;
                margin-left: 20px;
                color: hsl(0, 100%, 40%);
                font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
            }
            h2 {
                font-size: 15px;
                margin-left: 570px;
                font-weight: 600;
                color: hsla(234, 100%, 50%, 0.863);
                font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
                margin-top: 5px;
            }
            h3 {
                font-size: 28px;
                font-weight: 600;
                color: hsla(0, 0%, 0%, 0.664);
                font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
                margin-top: 5px;
                text-align: center;
            }
            .Ht_text1{
                font-size: 20px;
                margin-left: 400px;
                margin-top: 20px;
                font-weight: 600;
                color: hsla(0, 0%, 0%, 0.801);
                font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
            }
            .Ht_text2{
                font-size: 20px;
                margin-left: 400px;
                margin-top: 20px;
                font-weight: 600;
                color: hsla(0, 100%, 50%, 0.801);
                font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
            }
            .flag {
                position: absolute;
                margin-top: 170px;
                margin-left:430px;
            } 
            .button1 { 
                position: absolute;
                font-size: 35px;
                font-weight: bold;
                color : rgb(0, 0, 0);
                text-align: center; 
                margin-left: 400px;
                margin-top: 50px;
                background-color:rgba(169, 169, 169, 0.432);
                border-radius: 0.5em;
                padding:20px;
            }
            .button1:hover { 
                background-color: rgba(121, 121, 121, 0.589);
                position: absolute;
                font-size: 40px;
                font-weight: bold;
                color : rgb(0, 102, 31);
            }
            a {
                font-weight: 600;
                font-size: 30px;
                color: #000000;
                font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
                text-decoration-line: none;
                }
            #floatdiv { 
                position:fixed; 
                width:280px; 
                height: 280px;
                display:inline-block; 
                right:2%;
                top:40%; 
                text-align: center; 
                background-color: rgb(255, 255, 255);
                border-radius: 1em;
                padding:30px;

                font-size: 19px;
                font-weight: 900;
                color: hsl(232, 100%, 30%);
                font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
            }
            #floatdiv:hover {
                background-color:rgba(153, 153, 153, 0.308);
                position:fixed; 
                width:300px; 
                height: 300px;
                display:inline-block; 
                right:90px;
                top:39%; 
                text-align: center; 
                border-radius: 15em;
                padding:30px;
                font-weight: 900;
                font-size: 21px;
            }
            .main-Sh {
                box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 10px rgba(0, 0, 0, 0.226);
            }
            .slide1 {
                position: absolute;
                margin-left:580px;
                margin-top:57px;
            }
            .btnl1{
                position: absolute;
                margin-left:580px;
                margin-top:190px;
            }
            .btnr1{
                position: absolute;
                margin-left:930px;
                margin-top:190px;
            }
            .slide2 {
                position: absolute;
                margin-left:580px;
                margin-top:57px;
            }
            .btnl2{
                position: absolute;
                margin-left:580px;
                margin-top:190px;
            }
            .btnr2{
                position: absolute;
                margin-left:930px;
                margin-top:190px;
            }
            .slide3 {
                position: absolute;
                margin-left:580px;
                margin-top:57px;
            }
            .btnl3{
                position: absolute;
                margin-left:580px;
                margin-top:190px;
            }
            .btnr3{
                position: absolute;
                margin-left:930px;
                margin-top:190px;
            }
            .slide4{
                position: absolute;
                margin-left:580px;
                margin-top:57px;
            }
            .btnl4{
                position: absolute;
                margin-left:580px;
                margin-top:190px;
            }
            .btnr4{
                position: absolute;
                margin-left:930px;
                margin-top:190px;
            }
            .bnrpi{
                margin-left:25px;
            }
        </style>
    </head>
    <body bgcolor="#e9e9e9">
    <?php
        
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
                
                <a href="travel.php">???</a>
                <?php if(!isset($_SESSION['id'])) { ?>
                <a href="signup.html">????????????</a>
                <a href='login.html'>?????????</a>
                <?php } else { ?>
                <a href="#"><?= $_SESSION['name'] ?>??? ???????????????.</a>
                <a href='signupd.php'>???????????? ??????</a>
                <a href='signout.php'>????????????</a>
                <a href='showcart.php'>????????????(<?=$count?>)</a>
                <?php }	?>
                
            </div>
        </ul>

    <div class="flag">
        <img src="pic/KrFlag.jpg" alt="korea" width="100" height="60">
    </div>

    <div class="main3 main-Sh">
        <div class="Ht_image1"><br>
            <h3>??????????????? ????????????!</h3><br>
            <div class="bnrpi">
                <img src="pic/krban1.jpg" alt="korea" width="250" height="180"><br><br><br>
                <img src="pic/krban2.jpg" alt="korea" width="250" height="180"><br><br><br>
                <img src="pic/krban3.jpg" alt="korea" width="250" height="180"><br><br><br>
                <img src="pic/krban4.jpg" alt="korea" width="250" height="180"><br><br><br>
            </div>
        </div>
    </div>

    <div class="main main-Sh">
        <h1>????????? ?????? ????????? ????????? ??????????????????.</h1>
    </div>

    <h2>?????? ????????? ????????? ????????? ???????????????.</h2>

    <?php
    $sql = "select * from hotel";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            if($row['no'] == 30){ 
    ?>   
       
    <div class="slide1">
        <img class="mySlides" src="pic/<?=$row['photo']?>" style="width:350px; height:270px">
        <img class="mySlides" src="pic/krhotel1-2.jpg" style="width:350px; height:270px">
        <img class="mySlides" src="pic/krhotel1-3.jpg" style="width:350px; height:270px">
        <img class="mySlides" src="pic/krhotel1-4.jpg" style="width:350px; height:270px">
    </div>
    <div class="btnl1">
        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
    </div>
    <div class="btnr1">
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
    </div>
    <div class="main2 main-Sh">
        <div class="Ht_text1">??? <?=$row['name']?></div>
        <div class="Ht_text1">??? <?=$row['location']?></div>
        <div class="Ht_text1">??? <?=$row['price']?>??? (??????)</div>
        
        
        <div class="button1"><a href="??????_??????1_????????????.php?name=<?=$row['name']?>&price=<?=$row['price']?>&photo=<?=$row['photo']?>&location=<?=$row['location']?>">????????????</a></div>
    </div>                      
    <?php       }
            }
        }
    ?>

    <?php
    $sql = "select * from hotel";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            if($row['no'] == 33){ 
    ?> 
    <div class="slide2">
        <img class="mySlides1" src="pic/<?=$row['photo']?>" style="width:350px; height:270px">
        <img class="mySlides1" src="pic/krhotel2-1.jpg" style="width:350px; height:270px">
        <img class="mySlides1" src="pic/krhotel2-2.jpg" style="width:350px; height:270px">
        <img class="mySlides1" src="pic/krhotel2-3.jpg" style="width:350px; height:270px">
    </div>
    <div class="btnl2">
        <button class="w3-button w3-black w3-display-left" onclick="plusDivs1(-1)">&#10094;</button>
    </div>
    <div class="btnr2">
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs1(1)">&#10095;</button>
    </div>
    <div class="main2 main-Sh">
        <div class="Ht_text1">??? <?=$row['name']?></div>
        <div class="Ht_text1">??? <?=$row['location']?></div>
        <div class="Ht_text1">??? <?=$row['price']?>??? (??????)</div>
        
        <div class="button1"><a href="??????_??????2_????????????.php?name=<?=$row['name']?>&price=<?=$row['price']?>&photo=<?=$row['photo']?>&location=<?=$row['location']?>">????????????</a></div>
    </div>                      
    <?php       }
            }
        }
    ?>

    <?php
    $sql = "select * from hotel";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            if($row['no'] == 37){ 
    ?> 
    <div class="slide3">
        <img class="mySlides2" src="pic/<?=$row['photo']?>" style="width:350px; height:270px">
        <img class="mySlides2" src="pic/krhotel3-1.jpg" style="width:350px; height:270px">
        <img class="mySlides2" src="pic/krhotel3-2.jpg" style="width:350px; height:270px">
        <img class="mySlides2" src="pic/krhotel3-3.jpg" style="width:350px; height:270px">
    </div>
    <div class="btnl3">
        <button class="w3-button w3-black w3-display-left" onclick="plusDivs2(-1)">&#10094;</button>
    </div>
    <div class="btnr3">
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs2(1)">&#10095;</button>
    </div>   
    <div class="main2 main-Sh">
        <div class="Ht_text1">??? <?=$row['name']?></div>
        <div class="Ht_text1">??? <?=$row['location']?></div>
        <div class="Ht_text1">??? <?=$row['price']?>??? (??????)</div>
        
        <div class="button1"><a href="??????_??????3_????????????.php?name=<?=$row['name']?>&price=<?=$row['price']?>&photo=<?=$row['photo']?>&location=<?=$row['location']?>">????????????</a></div>
    </div>                  
    <?php       }
            }
        }
    ?>

    <?php
    $sql = "select * from hotel";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            if($row['no'] == 39){ 
    ?> 
    <div class="slide4">
        <img class="mySlides3" src="pic/<?=$row['photo']?>" style="width:350px; height:270px">
        <img class="mySlides3" src="pic/krhotel4-2.jpg" style="width:350px; height:270px">
        <img class="mySlides3" src="pic/krhotel4-3.jpg" style="width:350px; height:270px">
        <img class="mySlides3" src="pic/krhotel4-4.jpg" style="width:350px; height:270px">
    </div>
    <div class="btnl4">
        <button class="w3-button w3-black w3-display-left" onclick="plusDivs3(-1)">&#10094;</button>
    </div>
    <div class="btnr4">
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs3(1)">&#10095;</button>
    </div>
    <div class="main2 main-Sh">
        <div class="Ht_text1">??? <?=$row['name']?></div>
        <div class="Ht_text1">??? <?=$row['location']?></div>
        <div class="Ht_text1">??? <?=$row['price']?>??? (??????)</div>
        
        <div class="button1"><a href="??????_??????4_????????????.php?name=<?=$row['name']?>&price=<?=$row['price']?>&photo=<?=$row['photo']?>&location=<?=$row['location']?>">????????????</a></div>
    </div>                      
    <?php       }
            }
        }
    ?>
    
    <script>
    var slideIndex = 1;
        showDivs(slideIndex);
        
        function plusDivs(n) {
        showDivs(slideIndex += n);
        }
        
        function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        x[slideIndex-1].style.display = "block";  
        }
    </script>

    <script>
        var slideIndex = 1;
        showDivs1(slideIndex);
            
        function plusDivs1(n) {
        showDivs1(slideIndex += n);
        }
            
        function showDivs1(n) {
        var i;
        var x = document.getElementsByClassName("mySlides1");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        x[slideIndex-1].style.display = "block";  
        }
    </script>

    <script>
        var slideIndex = 1;
        showDivs2(slideIndex);
            
        function plusDivs2(n) {
        showDivs2(slideIndex += n);
        }
            
        function showDivs2(n) {
        var i;
        var x = document.getElementsByClassName("mySlides2");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        x[slideIndex-1].style.display = "block";  
        }
    </script>

    <script>
    var slideIndex = 1;
    showDivs3(slideIndex);
        
    function plusDivs3(n) {
    showDivs3(slideIndex += n);
    }
        
    function showDivs3(n) {
    var i;
    var x = document.getElementsByClassName("mySlides3");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    x[slideIndex-1].style.display = "block";  
    }
    </script>


    <a href="????????????.php">
    <div id="floatdiv">????????? ????????????!<br><br><img src="pic/avy2.jpg" alt="Activity" width="200" height="150"></div>
    </a>

    </body>
</html>
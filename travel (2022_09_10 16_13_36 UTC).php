<!doctype html>
<html>
    <head>
        <title>LJ Tour</title>
        <meta charset="utf-8">
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/fullpage.js"></script>
        <link href="js/fullpage.css" rel="stylesheet">
        <meta name="description" content="fullPage full-screen navigation and sections control menu." />
        <meta name="keywords"  content="fullpage,jquery,demo,screen,fullscreen,navigation,control arrows, dots" />
        <script src="https://kit.fontawesome.com/f2552ea92d.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <?php
        session_start();
        include_once('dbconn.php');
        ?>
        <style>
            #section1, #section2, #section3, #section4{
                background-size: cover;
                background-attachment: fixed;

            }
            #section1{
                background-image: url(KakaoTalk_20210531_194408739.jpg);
            }
            #slide1{
                background-image: url(map1.jpg);
                background-size: cover;
            }
            #slide4{
                background-image: url(pic/backimg.jpg);
                background-size: cover;
            }
            #slide5{
                background-image: url(pic/backimg2.jpg);
                background-size: cover;
            }
            
            #section3{
                background-color: green;
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
                color: blanchedalmond;
            }
            
            .topnav1 a{
                color:  #f2f2f2;
                text-align: center;
                text-decoration: none;
                font-size: 17px;
                padding: 14px 16px;
            }
            .topnav1 a:hover{
                background-color:  #ddd;
                color: black;
            }
            .overlay{
                display: none;
                width: 100%;
                height: 100%;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
            }
            .overlay-content{
                position: relative;
                top: 25%;
                left: 50%;

                transform: translateX(-48.9%);
                text-align: center;
                margin-top: 30px;
            }
            .overlay-title{
                position: relative;
                top: 5%;
                width: 10%;
                text-align: center;
                margin-top: 30px;
                background-color: rgba(0,0,0,0.5);
                left: 50%;
                transform: translateX(-50%);
                border-radius: 0.7em;
                margin-top: 5px;
                margin-bottom: 5px;
                margin-left: 20px;
                margin-right: 20px;
                border: 5px black solid;
            }
            :link{color: white;}
            :visited{color: white;}
            a{text-decoration: none;}
            .asia{
                position: absolute;
                top: 350px;
                left: 500px;
                background-color: rgba(230, 112, 230, 0.2);
                border-radius: 0.7em;
                width: 90px;
                height: 90px;
            }
            .asia:hover{
                background-color: rgba(230, 112, 230, 0.7);
            }
            .europe{
                position: absolute;
                top: 180px;
                left: 350px;
                background-color: rgba(97, 97, 95, 0.7);
                border-radius: 0.7em;
                width: 90px;
                height: 90px;
            }
            .europe:hover{
                background-color: rgba(213, 226, 23, 0.55);
            }
            .oceania{
                position: absolute;
                top: 760px;
                left: 735px;
                background-color: rgba(102, 134, 240, 0.35);
                border-radius: 0.7em;
                width: 90px;
                height: 90px;
            }
            .oceania:hover{
                background-color: rgba(102, 134, 240, 0.7);
            }
            .asiahotel{
                background-color: rgba(158, 255, 154, 0.582);
                border-radius: 0.7em;
            }
            .asiahotel:hover{
                background-color: rgba(158, 255, 154, 0.7);
            }
            .asiaactivity{
                background-color: rgba(141, 106, 238, 0.6);
                border-radius: 0.7em;
                margin-left: 200px;
                margin-right: 200px;
            }
            .asiaactivity:hover{
                background-color: rgba(141, 106, 238, 0.9);
            }
            .asiagallery{
                background-color: rgba(212, 48, 48, 0.582);
                border-radius: 0.7em;
            }
            .asiagallery:hover{
                background-color: rgba(212, 48, 48, 0.7);
            }
            .ocehotel{
                background-color: rgba(158, 255, 154, 0.582);
                border-radius: 0.7em;
            }
            .ocehotel:hover{
                background-color: rgba(158, 255, 154, 0.7);
            }
            .oceactivity{
                background-color: rgba(141, 106, 238, 0.6);
                border-radius: 0.7em;
                margin-left: 200px;
                margin-right: 200px;
            }
            .oceactivity:hover{
                background-color: rgba(141, 106, 238, 0.9);
            }
            .ocegallery{
                background-color: rgba(212, 48, 48, 0.582);
                border-radius: 0.7em;
            }
            .ocegallery:hover{
                background-color: rgba(212, 48, 48, 0.7);
            }
            .euhotel{
                background-color: rgba(158, 255, 154, 0.582);
                border-radius: 0.7em;
            }
            .euhotel:hover{
                background-color: rgba(158, 255, 154, 0.7);
            }
            .euactivity{
                background-color: rgba(141, 106, 238, 0.6);
                border-radius: 0.7em;
                margin-left: 200px;
                margin-right: 200px;
            }
            .euactivity:hover{
                background-color: rgba(141, 106, 238, 0.9);
            }
            .eugallery{
                background-color: rgba(212, 48, 48, 0.582);
                border-radius: 0.7em;
            }
            .eugallery:hover{
                background-color: rgba(212, 48, 48, 0.7);
            }
            .closebtn{
                font-size: 50px;
                margin-left: 30px;
                color: black;
            }
            .title {
            position: relative;
            z-index: 2;
            width: 100%;
            height: 100%;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            }
            h2 {
            color: white;
            font-family: helvetica;
            font-weight: 700;
            font-size: 70px;
            letter-spacing: 2px;
            }
            .button{
                width:50px;
                text-align:center;
                background-color:#b089c5;
                border-radius:0.2em;
            }
        </style>
        <script>
            $(document).ready(function(){
                $('#fullpage').fullpage({
                    scrollingSpeed: 1000
                });
            });
        </script>
    </head>
    <body>
        
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
        <?php
        $i=0;           
        $sql = "select photo save from cart order by hqty desc limit 3";
        
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $photo[$i] = $row['save'];
                $i++;
            }   
        }
           
        ?>
        <?php
        $i=0;           
        $sql = "select name nsave from cart order by hqty desc limit 3";
        
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $name[$i] = $row['nsave'];
                $i++;
            }   
        }
           
        ?>
        <?php
        $i=0;           
        $sql = "select price psave from cart order by hqty desc limit 3";
        
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $price[$i] = $row['psave'];
                $i++;
            }   
        }
        
           
        ?>
        <?php
		$i=0;           
		$sql = "select location lsave from cart order by hqty desc limit 3";
		
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				$location[$i] = $row['lsave'];
				$i++;
			}   
		}
		
		
		?>
        <div id="fullpage">
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
            <div class="section" id="section1">
                <div class="title" >
                    <h2>Let'J Travel Right Now!</h2>
                </div>
            </div>
            <div class="section" id="section2">
                <div class="slide" id="slide1">
                    <a href="javascript:void(0)" onclick="openNav()"><img class="asia" src="아시아.png"></a>
                    <a href="javascript:void(0)" onclick="openNav1()"><img class="europe" src="유럽.png"></a>
                    <a href="javascript:void(0)" onclick="openNav2()"><img class="oceania" src="오세아니아.png"></a>

                </div>
                <div class="slide" id="slide2"></div>
                <div class="slide" id="slide3"></div>
            </div>
            <div class="section" id="section3">
                <div class="slide" id="slide4">
                    <div class="container">
                        <div class="row">
                            <h1 style="margin-left:15px; background-color: white; color: #3d3d3d; font-weight:500; padding:10px; border-radius:20px;"> 사람들이 가장 많이 선택한 객실 </h1>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-header">
                                        1.
                                    </div>
                                    <img style="height: 250px;" src="pic/<?=$photo[0]?>" alt="" />
                                    <div class="card-body">
                                        <h5 class="card-title"><?=$name[0]?></h5>
                                        <p class="card-text">해당 객실의 가격 : <?=$price[0]?>원</p>
                                        <div class="button"><a href="호텔예약.php?name=<?=$name[0]?>&price=<?=$price[0]?>&photo=<?=$photo[0]?>&location=<?=$location[0]?>">담기</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-header">
                                        2.
                                    </div>
                                    <img style="height: 250px;" src="pic/<?=$photo[1]?>" alt="" />
                                    <div class="card-body">
                                        <h5 class="card-title"><?=$name[1]?></h5>
                                        <p class="card-text">해당 객실의 가격 : <?=$price[1]?>원</p>
                                        <div class="button"><a href="호텔예약.php?name=<?=$name[1]?>&price=<?=$price[1]?>&photo=<?=$photo[1]?>&location=<?=$location[1]?>">담기</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-header">
                                        3.
                                    </div>
                                    <img style="height: 250px;" src="pic/<?=$photo[2]?>" alt="" />
                                    <div class="card-body">
                                        <h5 class="card-title"><?=$name[2]?></h5>
                                        <p class="card-text">해당 객실의 가격 : <?=$price[2]?>원</p>
                                        <div class="button"><a href="호텔예약.php?name=<?=$name[2]?>&price=<?=$price[2]?>&photo=<?=$photo[2]?>&location=<?=$location[2]?>">담기</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <?php
                $i=0;           
                $sql = "select photo save from cart order by aqty desc limit 3";
                
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $photo[$i] = $row['save'];
                        $i++;
                    }   
                }
                
                ?>
                <?php
                $i=0;           
                $sql = "select name nsave from cart order by aqty desc limit 3";
                
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $name[$i] = $row['nsave'];
                        $i++;
                    }   
                }
                
                ?>
                <?php
                $i=0;           
                $sql = "select price psave from cart order by aqty desc limit 3";
                
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $price[$i] = $row['psave'];
                        $i++;
                    }   
                }
                
                
                ?>
                <div class="slide" id="slide5">
                    <div class="container">
                        <div class="row">
                        <h1 style="margin-left:15px; background-color: white; color: #3d3d3d; font-weight:500; padding:10px; border-radius:20px;"> 사람들이 가장 많이 선택한 액티비티 </h1>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-header">
                                        1.
                                    </div>
                                    <img style="height: 250px;" src="pic/<?=$photo[0]?>" alt="" />
                                    <div class="card-body">
                                        <h5 class="card-title"><?=$name[0]?></h5>
                                        <p class="card-text">1인당 가격 : <?=$price[0]?>원</p>
                                        <div class="button"><a href="addcart.php?name=<?=$name[0]?>&price=<?=$price[0]?>&photo=<?=$photo[0]?>">담기</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-header">
                                        2.
                                    </div>
                                    <img style="height: 250px;" src="pic/<?=$photo[1]?>" alt="" />
                                    <div class="card-body">
                                        <h5 class="card-title"><?=$name[1]?></h5>
                                        <p class="card-text">1인당 가격 : <?=$price[1]?>원</p>
                                        <div class="button"><a href="addcart.php?name=<?=$name[1]?>&price=<?=$price[1]?>&photo=<?=$photo[1]?>">담기</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-header">
                                        3.
                                    </div>
                                    <img style="height: 250px;" src="pic/<?=$photo[2]?>" alt="" />
                                    <div class="card-body">
                                        <h5 class="card-title"><?=$name[2]?></h5>
                                        <p class="card-text">1인당 가격 : <?=$price[2]?>원</p>
                                        <div class="button"><a href="addcart.php?name=<?=$name[2]?>&price=<?=$price[2]?>&photo=<?=$photo[2]?>">담기</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div id="myNav" class="overlay" style="background-color: rgba(0, 174, 255, 0.082);">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-title"><h1>Asia</h1></div>
            <div class="overlay-content">
                <a href="아시아_숙박_메인.html"><img class="asiahotel" style="width: 140px; height: 140px;" src="asiahotel.png"></a>
                <a href="액티비티.php"><img class="asiaactivity" style="width: 140px; height: 140px;" src="asiaactivity.png"></a>
                <a href="갤러리.html"><img class="asiagallery" style="width: 140px; height: 140px;" src="asiagallery.png"></a>
            </div>
            
        </div>
        <div id="myNav1" class="overlay" style="background-color: rgba(17, 146, 0, 0.11);">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>
            <div class="overlay-title"><h1>Europe</h1></div>
            <div class="overlay-content">
                <a href="유럽_숙박_메인.html"><img class="euhotel" style="width: 140px; height: 140px;" src="euhotel.png"></a>
                <a href="액티비티.php"><img class="euactivity" style="width: 140px; height: 140px;" src="euactivity.png"></a>
                <a href="갤러리.html"><img class="eugallery" style="width: 140px; height: 140px;" src="eugallery.png"></a>
            </div> 
        </div>
        <div id="myNav2" class="overlay" style="background-color: rgba(60, 138, 240, 0.233);">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
            <div class="overlay-title"><h1>Oceania</h1></div>
            <div class="overlay-content">
                <a href="오세아니아_숙박_메인.html"><img class="ocehotel" style="width: 140px; height: 140px;" src="ocehotel.png"></a>
                <a href="액티비티.php"><img class="oceactivity" style="width: 140px; height: 140px;" src="oceactivity.png"></a>
                <a href="갤러리.html"><img class="ocegallery" style="width: 140px; height: 140px;" src="ocegallery.png"></a>
            </div> 
        </div>
        
        <script>
            function openNav(){
                document.getElementById("myNav").style.display = "block";
            }
            function closeNav(){
                document.getElementById("myNav").style.display = "none";
            }
            function openNav1(){
                document.getElementById("myNav1").style.display = "block";
            }
            function closeNav1(){
                document.getElementById("myNav1").style.display = "none";
            }
            function openNav2(){
                document.getElementById("myNav2").style.display = "block";
            }
            function closeNav2(){
                document.getElementById("myNav2").style.display = "none";
            }
        </script>
        
        <script type="text/javascript">
            var myFullpage = new fullpage('#fullpage', {
                anchors: ['firstPage', 'secondPage', '3rdPage'],
                navigation: true,
                navigationPosition: 'left',
                navigationTooltips: ['메인페이지', '나라선택', '추천상품']
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
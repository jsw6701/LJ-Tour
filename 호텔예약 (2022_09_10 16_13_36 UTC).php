<!DOCTYPE html>
<html>
    <head>
        <title>LJ Tour</title>
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
                color: rgb(0, 0, 0);
            }
        
            .topnav1 a{
                color:  #000000;
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
            h1 {
                position: absolute;
                font-size: 30px;
                margin-left: 10px;
                font-weight: 600;
                color: hsla(0, 0%, 0%, 0.795);
                font-family: 'Gothic', Tahoma, Verdana, sans-serif; 
            }
            h2 {
                font-size: 15px;
                margin-left: 10px;
                font-weight: 600;
                color: hsla(0, 0%, 0%, 0.795);
                font-family: 'Gothic', Tahoma, Verdana, sans-serif;
            }
            h3 {
                font-size: 15px;
                margin-left: 35px;
                font-weight: 600;
                color: hsla(0, 0%, 0%, 0.795);
                font-family: 'Gothic', Tahoma, Verdana, sans-serif;
            }
            .main {
                display:inline-block; 
                width: 600px;
                height: 350px;
                background: rgb(255, 255, 255);
                text-align: left;
                margin-left:23%;
                margin-top:120px;
            }
            .main2 {
                display:inline-block; 
                text-align: center;
                margin-left:25px;
                margin-top:27px;
            }
            .main3 {
                position:absolute;
                width: 417px;
                height: 280px;
                background: rgb(255, 255, 255);
                text-align: left;
                margin-left:1080px;
                margin-top:120px;
            }
            .main4 {
                position:absolute;
                width: 417px;
                height: 400px;
                background: rgb(255, 255, 255);
                text-align: left;
                margin-left:1080px;
                margin-top:410px;
            }
            .main5 {
                display:inline-block; 
                width: 600px;
                height: 500px;
                background: rgb(255, 255, 255);
                text-align: left;
                margin-left:23%;
                margin-top:10px;
            }
            .button1 { 
                position: absolute;
                font-size: 35px;
                font-weight: bold;
                color : rgb(255, 255, 255);
                text-align: center; 
                margin-left: 120px;
                margin-top: 4px;
                background-color:rgba(255, 0, 0, 0.63);
                border-radius: 0.5em;
                padding:20px;
            }
            .button1:hover { 
                background-color: rgba(255, 0, 0, 0.5);
                position: absolute;
                color : rgb(255, 255, 255);
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
        <?php
        
        if(!isset($_SESSION['id'])) {
            echo "<script>";
            echo "alert('???????????? ??? ?????? ????????? ????????? ??? ????????????.');";
            echo "history.back();";
            echo "</script>";
        }
        $name = $_GET['name'];
        $price = $_GET['price'];
        $photo = $_GET['photo'];
        $location = $_GET['location'];
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
    <form action="addcartproc.php" method="get">
        <div class="main3">
            <h1><?=$name?></h1><br><br><br><br><br><br><br>
            <h2>&nbsp;?????? : <?=$location?></h2>

        </div>

        <div class="main4">
            <h1>?????? ??????</h1><br><br><br><br>
            <h2>&nbsp;?????? ?????? (1??????) : <?=$price?>???</h2> 
            

            <h2>&nbsp;?????? ?????? : <input style="width:20%; text-align:center" type="number" name="qty" value="1" required>???<br><br><br><br></h2>
            
            <font SIZE="2" COLOR="#919191" FACE="'Segoe UI', Tahoma, Verdana, sans-serif">
                &nbsp;&nbsp;&nbsp;??????????????? ?????? ????????? ?????? ??????????????? ????????????.
            </font>
            <h2>-------------------------------------------------------------</h2>
            
            <button class="button1" type="submit">????????????</button>
        </div>

        <div class="main">
            <h1>&nbsp;&nbsp;????????? ??????</h1><br><br><br>
            <h2>&nbsp;&nbsp;&nbsp;&nbsp;* ?????????<br>
                <font SIZE="3" COLOR="#919191" FACE="'Segoe UI', Tahoma, Verdana, sans-serif">
                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<?= $_SESSION['email'] ?>
                </font>
            </h2>

            <h2>&nbsp;&nbsp;&nbsp;&nbsp;* ??????<br>
                <font SIZE="3" COLOR="#919191" FACE="'Segoe UI', Tahoma, Verdana, sans-serif">
                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<?= $_SESSION['name'] ?>
                </font>
            </h2>

            <h2>&nbsp;&nbsp;&nbsp;&nbsp;* ????????? ??????<br>
                <font SIZE="3" COLOR="#919191" FACE="'Segoe UI', Tahoma, Verdana, sans-serif">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $_SESSION['phone'] ?>
                </font><br>

            <h2>&nbsp;&nbsp;&nbsp;&nbsp;* ?????? ????????????</h2>

            <h3><input type="text" name="requirements" placeholder="?????? ??????????????? ???????????????" style="width:500px;height:50px;"></h3>
            </div>

            <div class="main5">
                <div class="main2 main-Sh">
                    <div class="image1">
                        <img src="pic/<?=$photo?>" alt="German" width="550" height="450">
                    </div>
            </div><br><br><br><br>
            <input type="text" name="name" value="<?=$name?>" hidden >
            <input type="text" name="price" value="<?=$price?>" hidden>
            <input type="text" name="photo" value="<?=$photo?>" hidden>
            <input type="number" name = "hqty" value="1" hidden>
            <input type="number" name = "aqty" value="0" hidden>
            <input type="text" name="location" value="<?=$location?>" hidden >
        </form>
    </body>
</html>
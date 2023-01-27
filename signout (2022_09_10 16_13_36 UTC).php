<title>LJ Tour 로그아웃</title>
<?php
session_start();
session_destroy();
echo"로그아웃되었습니다.<br>";
echo"<a href='travel.php'>메인페이지로 이동</a>";
?>
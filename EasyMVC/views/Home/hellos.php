<?php
session_start();
error_reporting(0);
include "dbConnect.php";
$sql_query = "SELECT * FROM whosay ORDER BY listid ASC";
$result = mysqli_query($link, $sql_query);
$total_records = mysqli_num_rows($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Resume - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="/MVC/public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link id="order" rel="stylesheet" type="text/css" href="css/mycss.css">
  <link href="/MVC/public/css/resume.min.css" rel="stylesheet">
  <link rel="stylesheet"href="/MVC/public//css/bootstrap.min.css">
  <link rel="stylesheet"href="/MVC/public/img/main.css">




</head>


</div>
<body id="page-top">
<form action="ccar1.php" method="post"  ;>
<?php error_reporting(0); //不想看到錯誤訊息?>
<div  id="ordertest1"><?php if ($_SESSION['UserNameS'] === null) {?>
  <span id="login2">Hello! <?=$data->name?>
<a  id="login1" href="/MVC/EasyMVC/Home/login/<?=$data->name?>" >登入/註冊</a>
 <?php } else {?>

  <a  id="login1" href="logout.php" >登出</a>
  <span id="login2">歡迎您使用者:<?=$_SESSION['UserNameS']?> <?php
}?>
</form>



<div id="o1">
    <form action="controller/loginc.php" method="post" id="form1" ;>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">




    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a id="aaaa" style="color:black; class="nav-link js-scroll-trigger" href="/MVC1/EasyMVC/Blog/messagedos">自我的歷史留言</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="addmessage.php">我要留言</a>
        </li>

      </ul>
    </div>
  </nav>

  <!-- <a  id="aaaa"  href="ccar.php" >
        <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span  class="badge badge-notify my-cart-badge">品項:
        </span></a> -->

        <div id="carouselExampleControls" class="carousel slide" >
          <div class="carousel-inner" id="education">
            <div class="carousel-item active">
              <section class="resume-section p-3 p-lg-5 d-flex align-items-center" >
                <div class="w-100">
                  <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">
                      <h3 ><a class="mb-0" href="/MVC/EasyMVC/Blog/message">大家的留言</a></h3>
                      <div class="subheading mb-3">
                        <div id="controller1" class="row" id="number-area">

                    </div>

                  </div>
                </div>

              </div>
          </section>
        </div>
 </div>

  <!-- Bootstrap core JavaScript -->
  <script src="/MVC/public/vendor/jquery/jquery.min.js"></script>
  <script src="/MVC/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="/MVC/public/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="/MVC/public/js/resume.min.js"></script>

</body>

</html>



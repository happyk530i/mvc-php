<?php
// session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en" xmlns:margin-top="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>登入</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 引入 Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/user.css" rel="stylesheet">
    <link rel="stylesheet" href="css/loading.css">
    <!-- 整體背景 -->
    <link id="order" rel="stylesheet" type="text/css" href="css/order.css">

<style>

body {
    margin: 0;
    background: transparent;
}

video {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    background: url('polina.jpg') no-repeat;
    background-size: cover;
}

#polina {
    font-family: Agenda-Light, Agenda Light, Agenda, Arial Narrow, sans-serif;
    font-weight: 100;
    background: rgba(0,0,0,0.3);
    color: white;
    padding: 2rem;
    width: 33%;
    margin: 2rem;
    float: right;
    font-size: 1.2rem;
}

#polina button {
    display: block; width: 80%; padding: .4rem; border: none; margin:1rem auto;
    font-size: 1.3rem;
    background: rgba(255,255,255,.23);
    color: #fff;
    border-radius: 3px;
    cursor: pointer;
    -webkit-transition:.3s background;
    transition: .3s background;
}

#polina button:hover{
    background: rgba(0,0,0,.5)
}

@media screen and (max-width: 500px) {
    #polina {
        width: 50%;
    }
}

.stopfade{opacity: .8}

</style>

<meta charset=utf-8>

</head>
<body>

<div class="covervid-wrapper">

    <div class="container">
        <div class="row row-centered">
            <div class="col-xs-6 col-md-4 col-center-block">
<!-- 透過引用loading.css -->
                <h1 class="" style="color:gray">
                    Welcome to the login 歡迎<?=$data->name?>來到登入 </h1>


                <form action="/MVC/EasyMVC/Home/login" method="post">
                <!-- "/MVC/EasyMVC/Home/login"重要 -->
                    <!-- 輸入id -->
                    <div class="input-group input-group-md">
                        <span class="input-group-addon" id="sizing-addon1">
                            <i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" id="username" name="username" placeholder="請輸入帳號"/>
                    </div>
                    <!-- 輸入密碼 -->
                    <div class="edit input-group input-group-md">
                        <span class="input-group-addon" id="sizing-addon2">
                            <i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="請輸入密碼"/>
                    </div>

                    <h4 class="textcolor  ld-bounce">
                    <a href="index.php" style=" " >
                    &nbsp;&nbsp;返回首頁&nbsp;&nbsp;</a></h4>


                    <input type="submit" class="btn btn-success btn-block" name="submit" value="登入">
                                                               <!-- href="/MVC/EasyMVC/Home/register/" -->
                    <a type="submit" class="btn btn-primary btn-block" href="/MVC/EasyMVC/Home/register/" style="margin-bottom: 20%">註冊</a>
                    <h1 class="  ld-bounce text-secondary bg-warning text-white"  style="color:red;  font-size:30px;">



                    <?=$_SESSION["msqtest1"]?></h1>
                </form>
            </div>
        </div>
    </div>



</body>
</html>
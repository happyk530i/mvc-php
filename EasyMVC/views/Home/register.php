<?php
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
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/user.css" rel="stylesheet">
    <link href="css/loading.css" rel="stylesheet">
    <!-- 整體背景 -->
    <style type="text/css">
        h1 {
            text-align: center;
        }

        h4 {
            text-align: right;
            color: red;
        }

        table {
            left: 40%;
            position: absolute;
        }
    </style>
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#form1").submit(function () {
                var countTest = 0;
                $("#nameError").html("");

                $("#passwordError").html("");

                var test = [" ", "$", "%", "#"];
                var name = $("#username").val();

                if (name.length < 6 || name.length > 10 || name.length == 0 || name.trim(name.length) == 0) {
                    $("#nameError").html("帳號長度錯誤");
                    countTest++;
                }
                var password = $("#password").val();
                if (password.length == 0 || password.trim(password.length) == 0) {
                    $("#passwordError").html("密碼不能為空");
                    countTest++;
                }
                }
                if (countTest > 0) {
                    return false;
                }


            });
        });
    </script>
        <style type="text/css">

</style>

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
</head>

<body>

    <!-- 兩個輸入框 -->
    <div class="container">
        <div class="row row-centered">
            <div class="col-xs-6 col-md-4 col-center-block">
                <!-- <h1 class="textcolor  ld-bounce">welcome to register</h1> -->
                <div class="edit input-group input-group-md">
                    </div>

                <form action="/MVC/EasyMVC/Home/register" method="post" id="form1">

                    <!-- 輸入id -->
                    <div class="input-group input-group-md">
                        <span class="input-group-addon" id="sizing-addon1">
                            <i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control"  name="username" id="username" placeholder="請輸入帳號"/>
                        <div id="nameError" style="display:inline;color:red;background-color:white;"></div>
                    </div>
                    <!-- 輸入密碼 -->
                    <div class="edit input-group input-group-md">
                        <span class="input-group-addon" id="sizing-addon2">
                            <i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control" name="password" id="password" placeholder="請輸入密碼"/>
                        <div id="passwordError" style="display:inline;color:red;background-color:white;"></div>
                    </div>

                    <br/>

                    <h1 class="textcolor  ld-bounce"><a href="index.php" style="background-color:#A5DEE4;font-size:20px;color:#E03C8A;" >&nbsp;&nbsp;返回首頁&nbsp;&nbsp;</a></h1>
                    <input type="submit" class="btn btn-success btn-block" name="submit" value="註冊"></input>
                    <input type="reset" class="btn btn-success btn-block" name="submit" value="重置"></input>

                </form>


            </div>
        </div>
    </div>
</body>
</html>

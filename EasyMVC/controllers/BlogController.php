<?php

class BlogController extends Controller
{

    public function messagedos()
    {

        session_start();
        if ($_SERVER['REQUEST_METHOD'] === "GET") {

            return $this->view("Home/index");
        }
    }

    public function get123()
    {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === "GET") {

            require_once '../dbConnect.php';
            $sql = "select * from whosay where userid= {$_SESSION['ids']}";
            $result = mysqli_query($link, $sql);

            $row_result2 = [];
            while ($row_result = mysqli_fetch_assoc($result)) {
                $row_result2[] = $row_result;
            }

            return json_encode($row_result2);
        }
    }

    public function post123()
    {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === "POST") {

            require_once '../dbConnect.php';
            $sqls = "select * from ordertest where username= '{$_SESSION['UserNameS']}'";
            $result1 = mysqli_query($link, $sqls);
            $row1 = mysqli_fetch_assoc($result1);
            $s = $row1["id"];
            $d = $row1["username"];
            // $body = file_get_contents("php://post");
            // $body = file_get_contents('php://input');
            $body = $_POST['e'];

            $json = json_decode($body);


            $qq = $json->text;
            $qs = $json->time;


            $sql = "insert into whosay (userid,username,text,time)
         value('$s','$d','$qq','$qs');";
            $result = mysqli_query($link, $sql);

            return;
        }
    }





    public function put123()
    {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === "POST") {

            $body = $_POST['e'];
            $json = json_decode($body);
            $qq = $json->text;
            $qs = $json->time;
            $listid = $json->listid;

      require_once '../dbConnect.php';
      $sqls= "UPDATE whosay SET text='$qq', time='$qs' where listid='$listid' ";
     $result1 = mysqli_query($link, $sqls);
      
      

     return;


        }
}

public function delete123()
{
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === "POST") {

        $body = $_POST['e'];
            $json = json_decode($body);
           $listid = $json->listid;

           require_once '../dbConnect.php';

           $sqls="DELETE FROM whosay WHERE listid ='$listid'";

           return;

    }
}





    public function index()
    {
        echo "home page of BlogController";
    }

    public function message()
    {
        require_once 'smarty.php';
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === "GET") {

            require_once '../dbConnect.php';
            $sql_query = "SELECT * FROM whosay ORDER BY listid ASC";
            $result = mysqli_query($link, $sql_query);
            $row_result2 = []; // $row_result2 製造成 [[],[],[],[],[]]
            while ($row_result = mysqli_fetch_assoc($result)) {
                $row_result2[] = $row_result;
            }

            $s = json_encode($row_result2);
            $smarty->assign('arrs', $row_result2);
            $smarty->assign('usern', ($_SESSION['UserNameS']));
            // $test = $smarty->getTemplateDir();
            // echo '<pre>';
            // echo $test;
            // print_r($test);
            // print_r($smarty);
            // exit;

            return $smarty->display('message.html'); //***如果過來get請求就作頁面轉***
        }
    }
}

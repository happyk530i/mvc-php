<?php

class BlogController extends Controller
{

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


            $row_result2 = [];
            while ($row_result = mysqli_fetch_assoc($result)) {
                $row_result2[] = $row_result;
                // echo "id:&nbsp;" . $row_r?$row_result['time'] . "<br>";
            }
            $smarty->assign('arrs', $row_result2);
            // $test = $smarty->getTemplateDir();
            // echo '<pre>';
            // echo $test;
            // print_r($test);
            // print_r($smarty);
            // exit;

            return $smarty->display('message.html'); //***如果過來get請求就自殺***

            // echo $_POST["username"];

        }

    }



    // public function ($name)
    // {
    //     // $user=User
    //     $user = $this->model("User");
    //     // $user.mane= 變數$name
    //     $user->name = $name;
    //     // $user->name = $s;

    //     //網址作用
    //     $this->view("Home/hellos", $user);

    //     // echo "Hello! $user->name";
    // }

}

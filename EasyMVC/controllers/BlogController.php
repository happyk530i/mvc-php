<?php

class BlogController extends Controller
{

    
    public function messagedos(){

        session_start();
        if ($_SERVER['REQUEST_METHOD'] === "GET") {

        return $this->view("Home/index");


    }
 }
 
 public function messagedoss(){



    return $newsList;


}
    
    
    

    public function messagedo()
    {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === "GET") {

            require_once '../dbConnect.php';
            $sql = "select * from whosay where listid= {$_SESSION['ids']}";
            $result = mysqli_query($link, $sql);

            $row_result2 = [];
            while ($row_result = mysqli_fetch_assoc($result)) {
                $row_result2[] = $row_result;
            }
            
            return    json_encode($result);
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

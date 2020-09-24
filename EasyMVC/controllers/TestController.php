<?php

class TestController extends Controller
{
  
    public function tryit(){

        require_once 'smarty.php';

        $smarty->assign('ars', 123);
       
        return $smarty->display('test.html');
    }
    
    
//     public function get123(){

// return "1234";







//     }


    public function get123()
    {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === "GET") {




            // require_once '../dbConnect.php';
            // $sql_query = "SELECT * FROM whosay ORDER BY listid ASC";
            // $result = mysqli_query($link, $sql_query);
            // $row_result2 = []; // $row_result2 製造成 [[],[],[],[],[]]
            // while ($row_result = mysqli_fetch_assoc($result)) {
            //     $row_result2[] = $row_result;

            // }

            // return    json_encode($row_result2);


            // require_once '../dbConnect.php';
            // $sql_query = "select * from whosay where username= {$_SESSION['UserNameS']}";
            // $result = mysqli_query($link, $sql_query);
            // $row_result2 = []; // $row_result2 製造成 [[],[],[],[],[]]
            // while ($row_result = mysqli_fetch_assoc($result)) {
            //     $row_result2[] = $row_result;

            // }
// return    json_encode($row_result2);


            require_once '../dbConnect.php';
            $sql = "select * from whosay where userid= {$_SESSION['ids']}";
            $result = mysqli_query($link, $sql);

            $row_result2 = [];
            while ($row_result = mysqli_fetch_assoc($result)) {
                $row_result2[] = $row_result;
            }
            
            return    json_encode($row_result2);
        }

    }



}
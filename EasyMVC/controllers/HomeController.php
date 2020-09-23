<?php
//   require_once('../dbConnect.php');
//   header("Content-Type:text/html; charset=utf-8");
// require_once('C:/xampp/htdocs/smarty-3.1.35/libs/Smarty.class.php');
// $smarty = new Smarty();
// $smarty->setTemplateDir("../views");

class HomeController extends Controller
{

    const norl_id = "0";
    const norl_man = "遊客";
    const norl_mass = "的留言";

    public function index()
    {

        $this->view("Home/login");

        // echo "home page of HomeController";
    }

    public function login()
    {

        session_start();

        if ($_SERVER['REQUEST_METHOD'] === "GET") {

            return $this->view("Home/login"); //***如果過來get請求就自殺***

            // echo $_POST["username"];

        }
        //post
        // $username=$_POST["username"];
        // $password=$_POST["password"];
        require_once '../dbConnect.php';
        header("Content-Type:text/html; charset=utf-8");
        $sql = "select * from ordertest where username= '{$_POST["username"]}' and password= '{$_POST["password"]}' ";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);

        echo $row;

        if ($row !== null) {

            $_SESSION['UserNameS'] = $_POST["username"];
            $_SESSION['ids'] = $row["id"];
            $i = $_SESSION['ids'];
            $a = rand(0, 100);
            if (isset($_SESSION['UserNameS'])) {

                echo "<hr>";
                echo "SESSION:" . $_SESSION['UserNameS'];

                echo 1235;
                echo "<hr>";
                header("Location: ../Home/hellos/$i");
                exit();
            }
        } else {
            $_SESSION["msqtest1"] = "查詢不到帳密";

            echo 1234;
            header("Location: ../Home/login/");
            exit();
        }

    }

    public function register()
    {
        session_start();

        // if ($_SERVER['REQUEST_METHOD'] === "GET") {

        //     return $this->view("Home/login"); //***如果過來get請求就自殺***

        //     // echo $_POST["username"];

        // }


        if ($_SERVER['REQUEST_METHOD'] === "GET") {

            return $this->view("Home/register");

            //***如果過來get請求就自殺自導頁面***  post就向下做

            // echo $_POST["username"];
        }
        require_once '../dbConnect.php';
        header("Content-Type:text/html; charset=utf-8");
        $sqls = "select * from ordertest where username= '{$_POST["username"]}'";
        $result1 = mysqli_query($link, $sql);
        $row1 = mysqli_fetch_assoc($result1);
        $a = rand(0, 100);
        if ($row1["username"] == null) {
            $_SESSION['UserNameS'] = $_POST["username"];  

            $s = $_POST["username"];                                       //使用者名稱
            $hash = password_hash('$_POST["password"]', PASSWORD_DEFAULT); //使用者密碼
            $g = $_POST["123"];                                            // 輸入文章

            $sql = "insert into ordertest (username,password,myfirst)
             value('$s','$hash','$g');";
            $resul = mysqli_query($link, $sql);

            $_SESSION["msqtest1"] = "註冊成功請登入";

            header("Location: ../Home/hellos/$a");

        } else {
           
            $_SESSION["msqtest1"] = "帳號已存在";
            header("Location: ../Home/register/");
        }
        exit();

    }
   



    public function hellos($name)
    {
        // $user=User
        $user = $this->model("User");
        // $user.mane= 變數$name
        $user->name = $name;
        // $user->name = $s;

        //網址作用
        $this->view("Home/hellos", $user);

        // echo "Hello! $user->name";
    }

}

?>
<?php
session_start();
include("db_connection.php");

if(($_POST["vercode"] != $_SESSION["vercode"]) )
{
    header("Location: login.php?error=Captcha Failed");
}
else
{
    if(isset($_POST['username']) && isset($_POST['password'])){
        $uname = $_POST['username'];
        $pswd = $_POST['password'];
    
        $sql = "SELECT * FROM user_tab WHERE user_id = '$uname' AND password = '$pswd'";
        $result = mysqli_query($conn, $sql);
    
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['user_id'] === $uname && $row['password'] === $pswd){
                if($row['role'] === 'Student'){
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['id']=$uname;
                    $_SESSION['pwd']=$pswd;
                    include('Student.php');
                }
                else{
                    if($row['role'] === 'Faculty'){
                        $_SESSION['id']=$uname;
                        $_SESSION['pwd']=$pswd;
                        $_SESSION['role'] = $row['role'];
                        include("faculty.php");
                    }
                    else{
                        if($row['role'] === 'Admin'){
                            $_SESSION['role'] = $row['role'];
                            $_SESSION['id']=$uname;
                            $_SESSION['pwd']=$pswd;
                            include("admin.php");
                        }
                        else{
                            header("Location: login.php?error=Incorrect User name or password");
                            exit();
                            }
                        }
                    
                    }
                }
            }
        else{
            header("Location: login.php?error=Incorrect User name or password");
            exit();
        }
    }
    else{
        header("Location: login.php?error=Incorrect User name or password");
        exit();
    }



}
?>
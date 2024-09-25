<?php
session_start();
include "db_conn.php";

if (isset ($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['username']);
    $password = validate ($_POST['password']);


        $sql = "SELECT * FROM student WHERE username= '$username' AND password= '$password'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['password'] = $row['password'];
                header("Location: home.php");
                exit();
            }else{
                header("Location: index.php?error=Incorrect username or password");
                exit();
            }
        }else{
            header("Location: index.php?error=Incorrect username or password");
            exit();
        }
    }
    
else{
    header("Location: index.php?error");
    exit();
}
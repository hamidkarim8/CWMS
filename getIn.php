<?php
session_start();
include("dbConnect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $myusername = mysqli_real_escape_string($conn, $_POST['username']);
    $mypassword = mysqli_real_escape_string($conn, $_POST['pass']);
    // $role = mysqli_real_escape_string($conn, $_POST['role']);

    $sql = "SELECT * FROM user WHERE username='$myusername'and password='$mypassword'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    $role = $row['role'];
    $uid = $row['id'];


    $_SESSION['login_user'] = $myusername;
    $login_user=$_SESSION['login_user'];
            
    if ($count == 1) {
        if ($role == 'Admin') {
            $_SESSION['login_user'] = $myusername;
            $_SESSION['role'] = $role;
            $_SESSION['uid'] = $uid;
            echo "
            <script type='text/javascript'>
        window.location.href ='Admin/index.php';
    </script>";
            // header("location: Admin/Index.php");
        } elseif ($role == 'Customer') {
                $_SESSION['login_user'] = $myusername;
                $_SESSION['role'] = $role;
                $_SESSION['uid'] = $uid;
                echo "
                <script type='text/javascript'>
            window.location.href ='Customer/index.php';
        </script>";
        } 
    } else {
        $error = "Incorrect username or password!";
        echo "<script>alert('Incorrect username or password !');</script>";
        echo "
            <script type='text/javascript'>
        window.location.href ='index.php';
    </script>";
    }
}
?>


<?php
session_start();
if (!$_SESSION["login_user"]) {
    echo "
    <script type='text/javascript'>
window.location.href ='../../index.php';
</script>";
}
$login_session = $_SESSION['login_user'];
include_once("../../dbConnect.php");


$nama = $_POST["nama"];
$email = $_POST["email"];
$noMatrik = $_POST["noMatrik"];
$noFon = $_POST["noFon"];

    $query="INSERT INTO student (nama,noMatrik,noFon,email) VALUES ('$nama','$noMatrik','$noFon','$email')";
    $run_query=mysqli_query($conn,$query);
    if($run_query){
            echo "
                  <script type='text/javascript'>
                  alert('Register Success');
              window.location.href ='../studentList.php';
            </script>";
     
    }
    else{
          echo "
          <script type='text/javascript'>
          alert('Error Register');
          window.location.href ='../studentList.php';
    </script>";
    }

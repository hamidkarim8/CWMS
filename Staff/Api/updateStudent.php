<?php
session_start();
if(!$_SESSION["login_user"]){
    echo "
    <script type='text/javascript'>
window.location.href ='../../index.php';
</script>";
 }
$login_session =$_SESSION['login_user'];
$uid =$_SESSION['uid'];
include_once("../../dbConnect.php");

$nama = $_POST["nama"];
$email = $_POST["email"];
$noMatrik = $_POST["noMatrik"];
$noFon = $_POST["noFon"];
$id = $_POST["id"];


            $sql = "UPDATE student SET nama='$nama', noMatrik='$noMatrik',noFon='$noFon'
            WHERE id='$id'";
      
            if ($conn->query($sql) === TRUE){
              echo "<script>alert('Update Success')</script>" ;
                    echo "
                    <script type='text/javascript'>
                window.location.href ='../studentList.php';
              </script>";
            }
            else{
            echo "<script>alert('Error Update')</script>" ;
                    echo "
                    <script type='text/javascript'>
                window.location.href ='../studentList.php';
              </script>";
            }
     
   

?>
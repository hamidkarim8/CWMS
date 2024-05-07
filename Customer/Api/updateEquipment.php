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

$item = $_POST["item"];
$quantity = $_POST["quantity"];
$id = $_POST["id"];


            $sql = "UPDATE inventory SET item='$item', quantity='$quantity'
            WHERE id='$id'";
            
            if ($conn->query($sql) === TRUE){
              echo "<script>alert('Update Success')</script>" ;
                    echo "
                    <script type='text/javascript'>
                window.location.href ='../equipment.php';
              </script>";
            }
            else{
            echo "<script>alert('Error Update')</script>" ;
                    echo "
                    <script type='text/javascript'>
                window.location.href ='../equipment.php';
              </script>";
            }
     
   

?>
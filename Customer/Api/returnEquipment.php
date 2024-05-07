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

$id = $_GET["id"];
$itemId = $_GET["itemId"];
$quantity = $_GET["quantity"];


            $sql = "UPDATE history SET status='Return',dateReturn=NOW()
            WHERE id='$id'";
            
            if ($conn->query($sql) === TRUE){

              $sql2 = "SELECT * FROM inventory WHERE id='$itemId'";
              $result2 = mysqli_query($conn, $sql2);
              $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
              $borrow2 = $row2['borrow'];
              $TotalBorrow=$borrow2-$quantity;
              echo $TotalBorrow;
              $query1 = "UPDATE inventory SET borrow='$TotalBorrow' WHERE id='$itemId'";
              $run_query1 = mysqli_query($conn, $query1);


              echo "<script>alert('Item Return Success')</script>" ;
                    echo "
                    <script type='text/javascript'>
                window.location.href ='../returnFile.php';
              </script>";
            }
            else{
            echo "<script>alert('Error Return')</script>" ;
                    echo "
                    <script type='text/javascript'>
                window.location.href ='../returnFile.php';
              </script>";
            }
     
   

?>
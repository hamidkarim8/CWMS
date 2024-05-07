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


$item = $_POST["item"];
$quantity = $_POST["quantity"];
$inventoryNo = generateRandomString();

    $query="INSERT INTO inventory (item,quantity,inventoryNo) VALUES ('$item','$quantity','$inventoryNo')";
    $run_query=mysqli_query($conn,$query);
    if($run_query){
            echo "
                  <script type='text/javascript'>
                  alert('Register Equipment Success');
              window.location.href ='../equipment.php';
            </script>";
    }
    else{
          echo "
          <script type='text/javascript'>
          alert('Error');
          window.location.href ='../equipment.php';
    </script>";
    }

function generateRandomString($length = 6) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
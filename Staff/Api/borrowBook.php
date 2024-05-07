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


$id = $_POST["id"];
$equipment = $_POST["equipment"];
$quantity = $_POST["quantity"];
$borrow = date('Y-m-d');
$return = $_POST["return"];

    $query="INSERT INTO history (student_id,inventory_id,return_date,borrow_date,status,quantity) VALUES ('$id','$equipment','$return','$borrow','Borrow','$quantity')";
    $run_query=mysqli_query($conn,$query);
    if($run_query){
        $sql2 = "SELECT * FROM inventory WHERE id='$equipment'";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
        $borrow2 = $row2['borrow'];
        $TotalBorrow=$quantity+$borrow2;
        echo $TotalBorrow;
        $query1 = "UPDATE inventory SET borrow='$TotalBorrow' WHERE id='$equipment'";
        $run_query1 = mysqli_query($conn, $query1);

            echo "
                  <script type='text/javascript'>
                  alert('Borrow Equipment Success');
              window.location.href ='../studentList.php';
            </script>";
    }
    else{
          echo "
          <script type='text/javascript'>
          alert('Error');
          window.location.href ='../studentList.php';
    </script>";
    }

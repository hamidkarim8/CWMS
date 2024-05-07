<?php
session_start();
include('../../dbConnect.php');

$id = $_POST['id'];
$tarikh = $_POST['tarikh'];
$uid = $_SESSION['uid'];

    $sql = "UPDATE filepelajar set status='Not Available' WHERE id='$id'";
    $run_query = mysqli_query($conn, $sql);
    $sql2 = "INSERT INTO filehistory (user_id, dateBorrow,dateReturn, status,filePelajar_id) VALUES ('$uid', NOW(),'$tarikh', 'Borrow','$id')";
    $run_query2 = mysqli_query($conn, $sql2);
    

        if ($conn->query($sql) === TRUE) {
                echo "<script>alert('File Borrow')</script>";
                echo "
                <script type='text/javascript'>
                   window.location.href ='../senaraiFilePinjam.php';
                </script>";

        } else {
            echo "<script>alert('Error')</script>";
        }

?>

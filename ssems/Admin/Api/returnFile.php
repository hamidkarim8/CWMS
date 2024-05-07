<?php

include('../../dbConnect.php');

$filehistoryId = $_GET['filehistoryId'];
$filepelajarId = $_GET['filepelajarId'];

    $sql = "UPDATE filepelajar set status='Available' WHERE id='$filepelajarId'";
    $run_query = mysqli_query($conn, $sql);
    $sql2 = "UPDATE filehistory SET status='Return', returnDateTime=NOW() WHERE id='$filehistoryId'";
    $run_query2 = mysqli_query($conn, $sql2);
    
    

        if ($conn->query($sql) === TRUE) {
                echo "<script>alert('File Return')</script>";
                echo "
                <script type='text/javascript'>
                   window.location.href ='../returnFile.php';
                </script>";

        } else {
            echo "<script>alert('Error')</script>";
        }

?>

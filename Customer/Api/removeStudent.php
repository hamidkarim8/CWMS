<?php

include('../../dbConnect.php');

$id = $_GET['id'];

    $sql2 = "DELETE FROM student WHERE id='$id'";
    $run_query2 = mysqli_query($conn, $sql2);
 

        if ($conn->query($sql2) === TRUE) {
                echo "<script>alert('Student Remove')</script>";
                echo "
                <script type='text/javascript'>
                   window.location.href ='../studentList.php';
                </script>";

        } else {
            echo "<script>alert('Error')</script>";
        }

?>

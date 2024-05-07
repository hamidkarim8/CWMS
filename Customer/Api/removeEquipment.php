<?php

include('../../dbConnect.php');

$id = $_GET['id'];

    $sql2 = "DELETE FROM inventory WHERE id='$id'";
    $run_query2 = mysqli_query($conn, $sql2);
        if ($conn->query($sql2) === TRUE) {
                echo "<script>alert('Remove Success')</script>";
                echo "
                <script type='text/javascript'>
                   window.location.href ='../equipment.php';
                </script>";

        } else {
            echo "<script>alert('Error Remove')</script>";
            echo "
            <script type='text/javascript'>
               window.location.href ='../equipment.php';
            </script>";
        }

?>

<!doctype html>
<html lang='en' data-layout='vertical' data-topbar='light' data-sidebar='dark' data-sidebar-size='lg' data-sidebar-image='none' data-preloader='disable'>

<?php include 'Component/head.php' ?>
<script>
        
            window.print();
    </script>
    
<body>


                <br>
                <div class='container-fluid'>
                <h5>Student List Report</h5>
                <table class="table table-primary table-striped align-middle table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">No. Matrik</th>
                                            <th scope="col">No. Phone</th>
                                            <th scope="col">Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include('../dbConnect.php');
                                        $query = "SELECT * FROM student;";
                                        $result = $conn->query($query);
                                        $modal = 1;
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $nama = $row['nama'];
                                                $noMatrik = $row['noMatrik'];
                                                $noFon = $row['noFon'];
                                                $email = $row['email'];
                                                $id = $row['id'];
                                                echo "
                                                    <tr>
                                                    <th scope='row'>$modal</th>
                                                    <td>$nama</td>
                                                    <td>$noMatrik</td>
                                                    <td>$noFon</td>
                                                    <td>$email</td>
                                                </tr>
                                                    ";
                                                $modal++;
                                            }
                                        } else {
                                            echo "
                                                <tr>
                                                <td colspan='8' align='center'>No Student</td>
                                                </tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                       

                </div>

        

    <?php include 'Component/javascript.php' ?>


</body>

</html>
<!doctype html>
<html lang='en' data-layout='vertical' data-topbar='light' data-sidebar='dark' data-sidebar-size='lg' data-sidebar-image='none' data-preloader='disable'>

<?php include 'Component/head.php' ?>
<script>
        
            window.print();
    </script>
    
<body>


                <br>
                <div class='container-fluid'>
                <h5>History List Report</h5>
                <table class="table table-primary table-striped align-middle table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">No. Phone</th>
                                            <th scope="col">No. Matriculation</th>
                                            <th scope="col">Equipment</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Borrow Date</th>
                                            <th scope="col">Return Date</th>
                                            <th scope="col">Date Equipement Return</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include('../dbConnect.php');
                                        $query = "SELECT history.id, history.student_id, history.inventory_id,history.dateReturn,
                                        student.nama, student.noMatrik, student.noFon,student.email, inventory.item, history.quantity,history.borrow_date, history.return_date
                                        FROM history
                                        JOIN inventory ON inventory.id=history.inventory_id 
                                        JOIN student ON student.id=history.student_id
                                        WHERE history.status='Return';";
                                        $result = $conn->query($query);
                                        $modal = 1;
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $id = $row['id'];
                                                $student_id = $row['student_id'];
                                                $inventory_id = $row['inventory_id'];
                                                $nama = $row['nama'];
                                                $noMatrik = $row['noMatrik'];
                                                $noFon = $row['noFon'];
                                                $email = $row['email'];
                                                $item = $row['item'];
                                                $quantity = $row['quantity'];
                                                $borrow_date = $row['borrow_date'];
                                                $return_date = $row['return_date'];
                                                $dateReturn = $row['dateReturn'];

                                                $dateReturn = date("d/m/Y",strtotime($dateReturn));
                                                $borrow = date("d/m/Y",strtotime($borrow_date));
                                                $return = date("d/m/Y",strtotime($return_date));
                                            
                                                    echo "
                                                    <tr >
                                                        <th scope='row'>$modal</th>
                                                        <td >$nama</td>
                                                        <td>$email</td>
                                                        <td>$noFon</td>
                                                        <td>$noMatrik</td>
                                                        <td>$item</td>
                                                        <td>$quantity</td>
                                                        <td>$borrow</td>
                                                        <td>$return</td>
                                                        <td><b>$dateReturn</b></td>
                                                    </tr>
                                                    ";


                                                $modal++;
                                            }
                                        } else {
                                            echo "
                                                <tr>
                                                <td colspan='9' align='center'>No Equipment</td>
                                                </tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                       

                </div>

        

    <?php include 'Component/javascript.php' ?>


</body>

</html>
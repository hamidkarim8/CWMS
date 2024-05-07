<!doctype html>
<html lang='en' data-layout='vertical' data-topbar='light' data-sidebar='dark' data-sidebar-size='lg' data-sidebar-image='none' data-preloader='disable'>

<?php include 'Component/head.php' ?>
<script>
        
            window.print();
    </script>
    
<body>


                <br>
                <div class='container-fluid'>
                <h5>Equipement List Report</h5>
                <table class="table table-primary table-striped align-middle table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Equipment Id</th>
                                            <th scope="col">Equipement</th>
                                            <th scope="col" >Quantity</th>
                                            <th scope="col">Equipement Borrow</th>
                                            <th scope="col">Available</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include('../dbConnect.php');
                                        $query = "SELECT * FROM inventory;";
                                        $result = $conn->query($query);
                                        $modal = 1;
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $item = $row['item'];
                                                $id = $row['id'];
                                                $inventoryNo = $row['inventoryNo'];
                                                $quantity = $row['quantity'];
                                                $borrow = $row['borrow'] ?? 0;
                                                $available=$quantity-$borrow;
                                                echo "
                                                    <tr>
                                                    <th scope='row'>$modal</th>
                                                    <td>$inventoryNo</td>
                                                    <td>$item</td>
                                                    <td>$quantity</td>
                                                    <td>$borrow</td>
                                                    <td>$available</td>
                                                  
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
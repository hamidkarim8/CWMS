<?php 

include_once("dbConnect.php");

$nama=$_POST["nama"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$matric=$_POST["matric"];
$role="Student";

    $query="INSERT INTO user (email,password,role) VALUES ('$email','$pass','$role')";
    $run_query=mysqli_query($conn,$query);
    if($run_query){

        $sql = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        $userId = $row['id'];

        $query1="INSERT INTO profile (user_id,nama,noMatrik) VALUES ('$userId','$nama','$matric')";
        $run_query1=mysqli_query($conn,$query1);
        if($run_query1){
            echo "
                  <script type='text/javascript'>
                  alert('Pendaftaran Berjaya');
              window.location.href ='index.php';
            </script>";
     
        }
        else{
            echo "
                  <script type='text/javascript'>
                  alert('Ralat Daftar');
              window.location.href ='index.php';
            </script>";
        }
    }
    else{
          echo "
          <script type='text/javascript'>
          alert('Pendaftaran Tidak Berjaya');
      window.location.href ='index.php';
    </script>";
    }


?>
<?php
session_start();
if (!$_SESSION["login_user"] || $_SESSION["role"] !='Staff') {
    echo "
    <script type='text/javascript'>
window.location.href ='../index.php';
</script>";
}
include('../dbConnect.php');
$uid = $_SESSION['uid'];
$sql = "SELECT * FROM profile WHERE user_id='$uid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$nama = $row['nama'];
$noKp = $row['noKp'];
$noFon = $row['noFon'];
$login_session = $_SESSION['login_user'];
$role=$_SESSION['role'];

?>
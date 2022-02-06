<?php
 include 'conexion.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
$delete="DELETE FROM students WHERE id='$id'";
$query=$conn->query($delete);
if(! $query=$conn->query($delete)){
    echo "kulchi mzn";
}
}
?>
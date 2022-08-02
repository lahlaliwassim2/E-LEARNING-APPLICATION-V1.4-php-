<?php
 include 'conexion.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
$delete="DELETE FROM courses WHERE id='$id'";
$query=$conn->query($delete);
echo "
<script>
window.location.href = 'courses.php';
</script>
";
if(! $query=$conn->query($delete)){
    echo "kulchi mzn";
}
}
?>
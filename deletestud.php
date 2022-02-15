<?php
 include 'conexion.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
$delete="DELETE FROM students WHERE id='$id'";
$query=$conn->query($delete);
echo "
<script>
window.location.href = 'espace_etudiantss.php';
</script>
";
if(! $query=$conn->query($delete)){
   
}
}
?>
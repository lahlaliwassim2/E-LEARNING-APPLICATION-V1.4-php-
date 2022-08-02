<?php
include 'conexion.php';
$select="SELECT * FROM students";
$query=$conn->query($select); 
$compteur=mysqli_num_rows($query);   //Retourne le nombre de lignes dans un résultat
?>

<?php
 $somme= " SELECT SUM(amount_paid) as somme FROM payment_details";
 if(! $result= $conn->query($somme)){ die("connection failed". $conn->error);}
 else{$somme=$result->fetch_assoc();}
?>


<?php 
include 'conexion.php';
$select="SELECT * FROM courses";
$query=$conn->query($select);
$compteurcourses=mysqli_num_rows($query);
?>


<?php
include 'conexion.php';
$select="SELECT * FROM comptes";
$query=$conn->query($select); 
$compteurs=mysqli_num_rows($query);   //Retourne le nombre de lignes dans un résultat
?>
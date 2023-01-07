<?php
session_start();
if(!isset($_SESSION['monlogin'])) header('location: ../Anonyme/Login.php');
include("../Connexion_database.php");
$select = "delete from type_accident where id_type='".$_GET['id']."'";
if($query = mysqli_query($connexion,$select))
{
header('Refresh: 0; url=AfficherType.php');
}
else
{
echo '<script>alert(\'Une erreur est survenue Veuillez ressayer\');</script>';
header('Refresh: 0; url=AfficherType.php');
}
?>
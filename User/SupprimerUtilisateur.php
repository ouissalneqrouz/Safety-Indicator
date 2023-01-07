<?php
session_start();
if(!isset($_SESSION['monlogin'])) header('location: ../Anonyme/login.php');
include("../Connexion_database.php");
$select = "delete from utilisateur where id_utilisateur='".$_GET['id']."'";
if($query = mysqli_query($connexion,$select))
{
echo '<script>alert(\'Suppression avec succes :)\');</script>';
header('Refresh: 0; url=AfficherUtilisateur.php');
}
else
{
echo '<script>alert(\'Une erreur est survenue Veuillez reessayer\');</script>';
header('Refresh: 0; url=AfficherUtilisateur.php');
}
?>


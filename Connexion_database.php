<?php
$connexion = mysqli_connect("localhost","root","");
  if( !$connexion) 
  { 
   echo "Desolé, connexion à localhost impossible"; 
   exit; 
  }
 if( !mysqli_select_db($connexion,'safety_indicator')) 
 { 
  echo "Désolé, accès à la base safety_indicator impossible";  
  exit;
 }
?>
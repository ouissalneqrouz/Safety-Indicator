<?php
     session_start();  
    if(!isset($_SESSION['monlogin'])) header('location: ../Anonyme/Login.php');
?>
<!doctype html>
<html >

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/font.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/da4d3dfc16.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
</head>

<body>
    <?php  include'Menu.php'; ?>
        
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                
                <div class="card">
                    <h5 class="card-header">Modifier accident</h5>
                    <div class="card-body">
                        <?php
                        include('../Connexion_database.php');
                        

                            $result1 = mysqli_query($connexion ,"SELECT id_accident  , date_accident,nom_accidente,id_gravite,id_type,description  FROM accident where id_accident=".$_GET['id']);
                               while($ligne = mysqli_fetch_object($result1)){
                               
                                  $ID=$ligne->id_accident;
                                   echo '

                                   <form method="POST" action="ModifierAccident.php?id='.$_GET['id'].'">
                                   <div class="form-group">
                                       <label for="dateAccident" class="col-form-label">Date accident</label>
                                       <input id="dateAccident"  name="dateAccident" type="date" value="'.$ligne->date_accident.'" class="form-control" required>
                                   </div>
       
       
                                   <div class="form-group">
                                       <label for="description" class="col-form-label">Description</label>
                                       <input id="description"  name="description" type="text" value="'.$ligne->description.'" class="form-control" required>
                                   </div>
                                   <div class="form-group">
                                       <label for="accidente" class="col-form-label">Accidenté</label>
                                       <input id="accidente"  name="accidente" type="text" value="'.$ligne->nom_accidente.'" class="form-control" required>
                                                                   
                                   </div>
       
       
                                   <div class="form-group">
                                       <label for="typeAccident" class="col-form-label">Type accident</label>
                                       <select name="typeAccident" class="form-control">      
                                           ';?> 
                                           <?php 
                                           include ('../Connexion_database.php');
       
                                           $sql2="SELECT id_type, nom_type from type_accident";
                                           $res2= mysqli_query($connexion,$sql2) ;
                                           while($ligne=mysqli_fetch_array($res2)) {
                                           echo'<option value="'.$ligne['id_type'].'">'.$ligne["nom_type"].'</option> ';}
                                   
                                           ?>
                                           
                                       </select><br> 
                                   </div>
       
                                    <?php
                                    echo '
                                   <div class="form-group">
                                       <label for="niveauGravite" class="col-form-label">Niveau de gravité</label>
                                       <select name="niveauGravite" class="form-control">';?>       
                                       <?php 
                                           include ('../Connexion_database.php');
       
                                           $sql2="SELECT id_gravite, gravite  from niveau_gravite";
                                           $res2= mysqli_query($connexion,$sql2) ;
                                           while($ligne=mysqli_fetch_array($res2)) {
                                           echo'<option value="'.$ligne['id_gravite'].'">'.$ligne["gravite"].'</option> ';}
                                   
                                   ?>    
                                   
                                       </select><br> 
                                   </div>
                                   
                                   
       
       
                               
       
                                   <div style="text-align: center;">
                                       <button class="btn btn-outline-success" type="submit" name="submit">Modifier</button>
                                       <button class="btn btn-outline-danger" name="annuler">Annuler</button>
                                       
                                   </div>
                                   
                                   </form>
                                   <?php

                                if(isset($_POST['submit']))
                                {
                                  $id=$_GET['id'];
                                  $dateAccident=$_POST['dateAccident'];
                                  $description=$_POST['description'];
                                  $niveauGravite=$_POST['niveauGravite'];
                                  $accidente=$_POST['accidente'];
                                  $typeAccident=$_POST['typeAccident'];
                                 $result = mysqli_query($connexion ,"UPDATE accident SET date_accident ='$dateAccident',description='$description',id_gravite='$niveauGravite',id_type='$typeAccident',nom_accidente='$accidente'  where id_accident=$id");
                                 { 
                                    echo "<script>location.href='AfficherAccident.php';</script>";
                                 }
                                    
                                } 
                                else if(isset($_POST['annuler']))
                                {
                                   echo "<script>location.href='AfficherAccident.php';</script>";
                                }          
                            
                               } 
  
                                
                        ?>
                    </div>
            </div>
        </div>
           
        </div>
    </div>
 
</body>
 
</html>
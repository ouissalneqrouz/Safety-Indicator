<?php
     session_start();  
    if(!isset($_SESSION['monlogin'])) header('location: ../Anonyme/Login.php');
?>
<!doctype html>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-select.css">
    <link href="../css/font.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/da4d3dfc16.js" crossorigin="anonymous"></script>
    <style>
        .selectpicker{
            width: 900px;
           
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
        <?php  include'Menu2.php'; ?>
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                
                <div class="card">
                    <h2 class="card-header">Ajouter nouvelle accident </h2>
                    <div class="card-body">
                        <form method="POST" action="AjouterAccident.php" >
                            <div class="form-group">
                                <label for="dateAccident" class="col-form-label">Date d'accident</label>
                                <input id="dateAccident"  name="dateAccident" type="date" class="form-control" required>
                            </div>


                            <div class="form-group">
                                <label for="description" class="col-form-label">Description</label>
                                <input id="description"  name="description" type="text" class="form-control" required>
                            </div>


                            <div class="form-group">
                                <label for="typeAccident" class="col-form-label">Type d'accident</label>
                                <select name="typeAccident" class="form-control">      
                                    <option>--Choisir le type--</option>
                                    <?php 
                                    include ('../Connexion_database.php');

                                    $sql2="SELECT id_type, nom_type from type_accident";
                                    $res2= mysqli_query($connexion,$sql2) ;
                                    while($ligne=mysqli_fetch_array($res2)) {
                                    echo'<option value="'.$ligne['id_type'].'">'.$ligne["nom_type"].'</option> ';}
                            
                                    ?>
                                     
                                </select><br> 
                            </div>


                            <div class="form-group">
                                <label for="niveauGravite" class="col-form-label">Niveau de gravité</label>
                                <select name="niveauGravite" class="form-control">      
                                <?php 
                                    include ('../Connexion_database.php');

                                    $sql2="SELECT id_gravite, gravite  from niveau_gravite";
                                    $res2= mysqli_query($connexion,$sql2) ;
                                    while($ligne=mysqli_fetch_array($res2)) {
                                    echo'<option value="'.$ligne['id_gravite'].'">'.$ligne["gravite"].'</option> ';}
                            
                            ?>    
                                </select><br> 
                            </div>

                            <div class="form-group">
                                <label for="accidente" class="col-form-label">Accidenté</label>
                                <input id="accidente"  name="accidente" type="text" class="form-control" required>
                                                            
                            </div>


                        

                            <div style="text-align: center;">
                                <button class="btn btn-outline-success" type="submit" name="submit">Ajouter</button>
                                <button class="btn btn-outline-danger" name="annuler">Annuler</button>
                                
                            </div>
                            
                            </form>
                            <?php
                                include ('../Connexion_database.php');
                                if(isset($_POST['submit']))
                                {
                                $dateAccident=$_POST['dateAccident'];
                                $description=$_POST['description'];
                                $typeAccident=$_POST['typeAccident'];
                                $niveauGravite=$_POST['niveauGravite'];
                                $accidente=$_POST['accidente'];
                                if ($dateAccident&&$description&&$typeAccident&&$niveauGravite&&$accidente)
                                { 
                               
                                   $sql="INSERT INTO accident(id_accident, date_accident, description, id_type, id_gravite, nom_accidente) 
                                   VALUES ('','$dateAccident','$description','$typeAccident','$niveauGravite','$accidente')";
                                    // On envoie la requête
                                    if($res = $connexion->query($sql))
                                    {
                                       echo "<script>location.href='AfficherAccident.php';</script>";
                                     }
                                    
                                                                                
                                    
                                }

                                }
                                else if(isset($_POST['annuler'])){
                                    echo "<script>location.href='AfficherAccident.php';</script>";
                                }

                            ?>
                    </div>
            </div>
        </div>
            
        </div>
    </div>
   
</body>
 
</html>
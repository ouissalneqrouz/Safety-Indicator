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
                    <h5 class="card-header">Ajouter nouveau type d'accident</h5>
                    <div class="card-body">
                        <form method="POST" action="AjouterType.php" >
                             <div class="form-group">
                                <label for="typeAccident" class="col-form-label">Type d'accident</label>
                                <input id="typeAccident"  name="typeAccident" type="text" class="form-control" required>
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
                                $typeAccident=$_POST['typeAccident'];
                                if ($typeAccident)
                                { 
                                   $sql = "INSERT INTO type_accident(id_type,nom_type) values ('','$typeAccident')";
                                    // On envoie la requête
                                   if($res = $connexion->query($sql))
                                   {
                                      echo "<script>location.href='AfficherType.php';</script>";
                                    }
                                }

                                }
                                else if(isset($_POST['annuler'])){
                                    echo "<script>location.href='AfficherType.php';</script>";
                                }

                            ?>
                    </div>
            </div>
        </div>
        </div>
    </div>
   
</body>
 
</html>
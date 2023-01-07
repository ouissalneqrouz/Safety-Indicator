<?php
     session_start();  
    if(!isset($_SESSION['monlogin'])) header('location: ../Anonyme/Login2.php');
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
        <?php  include'Menu.php'; ?>
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                
                <div class="card">
                    <h5 class="card-header">Ajouter utilisateur</h5>
                    <div class="card-body">
                        <form method="POST" action="AjouterUtilisateur.php" >
                            <div class="form-group">
                                <label for="cin" class="col-form-label">CIN</label>
                                <input id="cin"  name="cin" type="text"  placeholder="CIN" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nom" class="col-form-label">Nom complet</label>
                                <input id="nom"  name="nom" type="text" placeholder="Nom complet" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="role" class="col-form-label">Role</label>
                                <select name="role" class="form-control">';?>    
                                    <?php 
                                        include ('../Connexion_database.php');

                                        $sql2="SELECT id_role, designation  from r_ole";
                                        $res2= mysqli_query($connexion,$sql2) ;
                                        while($ligne=mysqli_fetch_array($res2)) {
                                        echo'<option value="'.$ligne['id_role'].'">'.$ligne["designation"].'</option> ';}
                                    ?>     
                                </select><br> 
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
                                    $CIN=$_POST['cin'];
                                    $nom=$_POST['nom'];
                                    $role=$_POST['role'];
                                    if($CIN&&$nom&&$role)
                                    { 
                                       $sql = "INSERT INTO utilisateur(id_utilisateur,login,CIN,id_role) values ('','$nom','$CIN','$role')";
                                        // On envoie la requête
                                       $result = mysqli_query($connexion ,"INSERT INTO utilisateur(id_utilisateur,login,CIN,id_role) values ('','$nom','$CIN','$role')");
                                       {
                                          echo '<script>alert(\'Utilisateur bien ajouté.\');</script>';
                                          echo "<script>location.href='AfficherUtilisateur.php';</script>";
                                        }
                                    }
                                }
                                else if(isset($_POST['annuler'])){
                                    echo "<script>location.href='AfficherUtilisateur.php';</script>";
                                }

                            ?>
                    </div>
            </div>
        </div>
            
        </div>
    </div>
   
</body>
 
</html>
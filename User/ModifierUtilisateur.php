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
    
</head>

<body> 
    <?php  include'Menu.php'; ?>

        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                
                <div class="card">
                    <h2 class="card-header">Modifier Utilisateur</h2>
                    <div class="card-body">
                        <?php 
                        include('../Connexion_database.php');
                        

                            $result1 = mysqli_query($connexion ,"SELECT id_utilisateur , login ,id_role , CIN
                            FROM utilisateur
                            where id_utilisateur=".$_GET['id']);
                               $ligne = mysqli_fetch_object($result1);
                               
                                  $ID=$ligne->id_utilisateur;
                                  

                                   echo '
                                            <form method="POST" action="ModifierUtilisateur.php?id='.$_GET['id'].'">
                                                <div class="form-group">
                                                    <label for="CIN" class="col-form-label">CIN</label>
                                                    <input id="CIN" name="CIN" type="text" value="'.$ligne->CIN.'" class="form-control" Required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="login" class="col-form-label">Nom complet</label>
                                                    <input id="login" name="login" type="text" value="'.$ligne->login.'" class="form-control" Required>
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
                                                    <button class="btn btn-outline-success" type="submit" name="submit">Modifier</button>
                                                    <button class="btn btn-outline-danger" type="submit" name="annuler">Annuler</button>   
                                                </div>
                                                
                                            </form>
                            <?php
                                if(isset($_POST['submit']))
                                {
                                  $id=$_GET['id'];
                                  $CIN=$_POST['CIN'];
                                  $login=$_POST['login'];
                                  $role=$_POST['role'];
                                 $result = mysqli_query($connexion ,"UPDATE utilisateur SET CIN='$CIN', login='$login' ,id_role='$role'  
                                 where id_utilisateur=$id");
                                 {
                                    echo '<script>alert(\'Modification avec succes.....\');</script>';
                                    
                                    echo "<script>location.href='AfficherUtilisateur.php';</script>";
                                    
                                 }
                                    
                                } 
                                else if(isset($_POST['annuler']))
                                {
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
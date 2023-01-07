<?php
     session_start();  
    if(!isset($_SESSION['monlogin'])) header('location: ../Anonyme/Login.php');
?>
<!doctype html>
<html>

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/font.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/da4d3dfc16.js" crossorigin="anonymous"></script>
    <style>
        img{
            width: 30px;
            height: 30px;
        }
    </style>
</head>

<body> 
   <?php  include'Menu.php'; ?>
        
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <div class="row">
                    
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Responsable</h5> 
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                    <thead>
                                            <tr>
                                                <th>CIN</th>
                                                <th>Nom complet</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php   
                                            include ('../Connexion_database.php');
                                            $Utilisateur=$_POST['RechercheUtilisateur'];
                                            $resultat1=mysqli_query($connexion,"SELECT id_utilisateur , login , CIN ,role ,utilisateur.id_role,r_ole.id_role FROM utilisateur , r_ole  where utilisateur.id_role=r_ole.id_role and login like '%".$Utilisateur."%' OR CIN like '%".$Utilisateur."%' OR role like '%".$Utilisateur."%'");
                                            while($ligne = mysqli_fetch_object($resultat1))
                                             {
                                                echo '<tr align="center">
                                                <td class="class2">'. $ligne->CIN.'</td> 
                                                <td class="class3">'. $ligne->login.'</td>
                                                <td class="class4">'. $ligne->role.'</td> 
                                                <td><a onclick="deleteRespo('. $ligne->id_utilisateur.')"  name="Delete" class="cc1"><i class="fas fa-trash-alt"></i></a>    &nbsp&nbsp&nbsp    <a onclick="updateRespo('.$ligne->id_utilisateur.')"  name="update" class="cc2"><i class="fa fa-pencil"></i></a></td> 
                                                 <script language="javascript">
                                                        function deleteRespo(delid)
                                                        {
                                                          if(confirm("Vous voulez supprimer ce responsable?")){
                                                            window.location.href="SupprimerRespo.php?id="+delid+" ";
                                                            return true;
                                                          }
                                                        }   
                                                        function updateRespo(upid)
                                                        {
                                                          if(confirm("Vous voulez modifier ce responsable?")){
                                                            window.location.href="ModifierRespo.php?id="+upid+" ";
                                                            return true;
                                                          }
                                                        }   

                                                      
                                                     </script>
                                                     
                                             </tr>';} 
                                             ?>      
                                        </tbody>               
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
           
        </div>
    </div>
    
</body>
 
</html> 
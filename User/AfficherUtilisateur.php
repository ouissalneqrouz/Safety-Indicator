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
        thead tr th{
            text-align:center
        }
        .table-responsive{display:contents !important;
                            width:100% ;}
     
    </style>
</head>

<body>
   <?php  include'Menu.php'; ?>
   
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <div class="row">
                  
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h2 class="card-header">Utilisateurs</h2>
                           
                            <div><a href="AjouterUtilisateur.php" id="btn" class="btnAgt"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></a></div> 
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
                                            $resultat1 = mysqli_query($connexion ,"SELECT id_utilisateur , CIN , login , utilisateur.id_role ,r_ole.designation ,r_ole.id_role  FROM utilisateur , r_ole where r_ole.id_role=utilisateur.id_role");
                                                while($ligne = mysqli_fetch_object($resultat1)) {
                                                echo '<tr align="center"><td class="class2">'. $ligne->CIN.'</td>
                                                <td class="class3">'. $ligne->login.'</td>
                                                <td class="class3">'. $ligne->designation.'</td>
                                                <td><a onclick="deleteUtilisateur('. $ligne->id_utilisateur.')"  name="Delete" class="cc1"><i class="fas fa-trash-alt"></i></a>    &nbsp&nbsp&nbsp    <a onclick="updateUtilisateur('.$ligne->id_utilisateur.')"  name="update" class="cc2"><i class="fa fa-pencil"></i></a></td> 
                                                     <script language="javascript">
                                                        function deleteUtilisateur(delid)
                                                        {
                                                          if(confirm("Vous voulez supprimer cet utilisateur?")){
                                                            window.location.href="SupprimerUtilisateur.php?id="+delid+" ";
                                                            return true;
                                                          }
                                                        }   
                                                        function updateUtilisateur(upid)
                                                        {
                                                          
                                                            window.location.href="ModifierUtilisateur.php?id="+upid+" ";
                                                            return true;
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
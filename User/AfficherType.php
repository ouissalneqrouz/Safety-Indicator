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
        .table-responsive{display:contents !important;
                            width:100% ;}
         thead tr th {
            text-align:center;
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
                            <h2 class="card-header">Types accident</h2>
                           

                            <div><a href="AjouterType.php" id="btn" class="btnAgt"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></a></div> 
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Type d'accident</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php   
                                            include ('../Connexion_database.php');
                                            $resultat1 = mysqli_query($connexion ,"SELECT nom_type ,id_type FROM type_accident;");
                                                while($ligne = mysqli_fetch_object($resultat1)) {
                                                echo '<tr align="center">
                                                <td class="class2">'. $ligne->nom_type.'</td>
                                                <td><a onclick="deleteSer('. $ligne->id_type.')"  name="Delete" class="cc1"><i class="fas fa-trash-alt"></i></a>&nbsp&nbsp&nbsp<a onclick="updateSer('.$ligne->id_type.')"  name="update" class="cc2"><i class="fa fa-pencil"></i></a> </td> 
                                                 <script language="javascript">
                                                        function deleteSer(delid)
                                                        {
                                                          if(confirm("Vous voulez supprimer ce type?")){
                                                            window.location.href="SupprimerType.php?id="+delid+" ";
                                                            return true;
                                                          }
                                                        }   
                                                        function updateSer(upid)
                                                        {
                                                          
                                                            window.location.href="ModifierType.php?id="+upid+" ";
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
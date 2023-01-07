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
                            <h3 class="card-header">Historique</h3> 
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                        <tr>
                                                <th>Date Accident</th>
                                                <th>Type Accident</th>
                                                <th>Description</th>
                                                <th>Accidenté</th>
                                                <th>Gravité</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php   
                                            include ('../Connexion_database.php');
                                            $data1=$_POST['dateDebut'];
                                            $data2=$_POST['dateFin'];
                                            $data3=$_POST['typeAccident'];
                                            $requete1="SELECT distinct accident.date_accident , type_accident.nom_type , accident.description , accident.nom_accidente ,  niveau_gravite.gravite 
                                            from accident , type_accident , niveau_gravite 
                                            where accident.id_type=type_accident.id_type 
                                            and accident.id_gravite=niveau_gravite.id_gravite 
                                            and accident.date_accident between '".$data1."' and '".$data2."'
                                            and type_accident.nom_type like '%".$data3."%'";
                                             $resultat1 = mysqli_query($connexion ,$requete1);
                                             while($ligne = mysqli_fetch_object($resultat1))
                                             {
                                                echo '<tr align="center">
                                                <td class="class2">'. $ligne->date_accident.'</td> 
                                                <td class="class3">'. $ligne->nom_type.'</td>
                                                <td class="class2">'. $ligne->description.'</td>
                                                <td class="class2">'. $ligne->nom_accidente.'</td>
                                                <td class="class3">'. $ligne->gravite.'</td>
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
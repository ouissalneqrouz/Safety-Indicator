<?php
     session_start();  
    if(!isset($_SESSION['monlogin'])) header('location: ../Anonyme/login.php');
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
                            width:100% ;
        }
        thead tr th {
            text-align:center;
        }
    </style>
</head>

<body>
   <?php  include'Menu2.php'; ?>
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <div class="row">
                  
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h2 class="card-header">Historiques</h2>
                            <form method="post" action="RechercheAccident.php" style="margin:12px 0px -20px 185px">
                                    Du <input type="date" size="50" name="dateDebut" id="d" style="padding: 8px 14px ;border:none; border-radius:20px; background-color:#ffd5af;width:140px;" >
                                    Au <input type="date" size="50" name="dateFin" id="f" style="padding: 8px 14px ;border:none; border-radius:20px; background-color:#ffd5af;width:140px;" >
                                    <select name="typeAccident" id="t" style="padding: 8px 14px ;border:none; border-radius:20px; background-color:#ffd5af">
                                        <option value="Premier soin">Choisir le type</option>
                                        <option value="Premier soin">Premier soin</option>
                                        <option value="Accident de travail sans arrêt">Accident de travail sans arrêt</option>
                                        <option value="Accident de travail avec arrêt">Accident de travail avec arrêt</option>
                                        <option value="Presse accident">Presse accident</option>
                                        <option value="Accident mortelle">Accident mortelle</option>
                                    </select>
                                    <button type="submit" id="p" style="padding: 8px 14px ;border:none; border-radius:20px; background-color:#ffa05a margin-left:360px">Filtrer</button>   
                            </form>
                            <div><a href="AjouterAccident.php" id="btn" class="btnAgt"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></a></div> 
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
                                            $resultat1 = mysqli_query($connexion ,"SELECT id_accident,nom_accidente, accident.date_accident , type_accident.nom_type , accident.description ,  niveau_gravite.gravite 
                                            from accident , type_accident , niveau_gravite 
                                            where accident.id_type=type_accident.id_type 
                                            and accident.id_gravite=niveau_gravite.id_gravite");
                                                while($ligne = mysqli_fetch_object($resultat1)) {
                                                echo '<tr align="center">
                                                <td class="class2">'. $ligne->date_accident.'</td> 
                                                <td class="class3">'. $ligne->nom_type.'</td>
                                                <td class="class2">'. $ligne->description.'</td>
                                                <td class="class2">'. $ligne->nom_accidente.'</td>
                                                <td class="class3">'. $ligne->gravite.'</td>
                                                <td><a onclick="deleteAccident('. $ligne->id_accident.')"  name="Delete" class="cc1"><i class="fas fa-trash-alt"></i></a>    &nbsp&nbsp&nbsp    <a onclick="updateAccident('.$ligne->id_accident.')"  name="update" class="cc2"><i class="fa fa-pencil"></i></a></td> 
                                                <script language="javascript">
                                                   function deleteAccident(delid)
                                                   {
                                                     if(confirm("Vous voulez supprimer cet accident?")){
                                                       window.location.href="SupprimerAccident.php?id="+delid+" ";
                                                       return true;
                                                     }
                                                   }   
                                                   function updateAccident(upid)
                                                   {
                                                     
                                                       window.location.href="ModifierAccident.php?id="+upid+" ";
                                                       return true;
                                                   }                                 
                                                </script>
                                                </tr>';
                                            }
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
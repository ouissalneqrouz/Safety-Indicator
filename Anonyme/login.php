<?php
ob_start();
?>
<!doctype html>
<html>
    <heade>
        <title>login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css.styleLogin.css">
    </head>
    <body>

        <!-- Section: Design Block -->
        <section class="text-center">
        <!-- Background image -->
            <div class="p-5 bg-image" style="
                    background-image: url('../img/background.png');
                    height: 300px;
                    "></div>
            <!-- Background image -->

            <div class="card mx-4 mx-md-5 shadow-5-strong" style="
                    margin-top: -130px;
                    background: hsla(0, 0%, 100%, 0.8);
                    backdrop-filter: blur(30px);
                    padding-right: 4rem;
                    padding-left: 4rem;
                    width: 900px;
                    left:175px;
                    ">
                <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                    <h2 class="fw-bold mb-5">Sign up now</h2>
                    <form method="POST">

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3">Username</label>
                        <input type="text" id="form3Example3" class="form-control" name="login" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example4">Password</label>
                        <input type="password" id="form3Example4" class="form-control" name="mdp" />
                        </div>

                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-primary btn-block mb-4" 
                        style="color: #fff;
                        background-color: #e85c2a;
                        border-color: #f6f6f6;">
                        Sign up
                        </button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </section>
             
             <?php
            include ('../Connexion_database.php');
            if (isset($_POST['submit']))
            {
              $Email=trim($_POST['login']);
              $Pass=trim($_POST['mdp']);
              $requete1="select login, mdp ,utilisateur.id_role,r_ole.id_role,designation from utilisateur,r_ole where utilisateur.id_role=r_ole.id_role and designation='Animateur de sécurit'";
              $resultat1 = mysqli_query($connexion ,$requete1);
              $cpt2=0;
              if($ligne2 = mysqli_fetch_object($resultat1))
              {
                if(($ligne2->login==$Email)&&($ligne2->mdp==$Pass))
                {
                  $cpt2++;
                }
              }
              if($cpt2==0)
              {
                echo '<p class="R">Votre nom ou mot de passe est incorrect !</p>';
              }
              if($cpt2!=0)
              {
                session_start();
                $_SESSION['monlogin'] =$Email;
                header('location: ../Animateur_sécurité/AfficherAccident.php');
              }


              $requete2="select login, mdp ,utilisateur.id_role,r_ole.id_role,designation from utilisateur,r_ole where utilisateur.id_role=r_ole.id_role and designation='Administrateur'";
              $resultat2 = mysqli_query($connexion ,$requete2);
              $cpt2=0;
              if($ligne2 = mysqli_fetch_object($resultat2))
              {
                if(($ligne2->login==$Email)&&($ligne2->mdp==$Pass))
                {
                  $cpt2++;
                }
              }
              if($cpt2==0)
              {
                echo '<p class="R">Votre nom ou mot de passe est incorrect !</p>';
              }
              if($cpt2!=0)
              {
                session_start();
                $_SESSION['monlogin'] =$Email;
                header('location: ../User/AfficherAccident.php');
              }


             
            }
            mysqli_close($connexion);
          ?> 
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
 

     <?php
     ob_end_flush();
   ?>
</body>
 
</html>
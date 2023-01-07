
<link rel="stylesheet"  href="CSS/Style_index.css">
<!DOCTYPE html>
<html>
  <head>
  <title>Page1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/styleIndex.css">
        <script src="https://kit.fontawesome.com/fbaa2b2eb1.js" crossorigin="anonymous"></script>

        <script>
            function startTime() {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('txt').innerHTML =
                h + ":" + m + ":" + s;
                var t = setTimeout(startTime, 500);
            }
            function checkTime(i) {
                if (i < 10) {i = "0" + i};  //add zero in front of numbers < 10
                return i;
            }
        </script>
  </head>
  <body onload="startTime()">
        <div class="parent">
                <div class="one" style="display:inline;margin-left: 0px;">
                    <button id="" style="margin-left=0px; margin-top:0px;" ><a href="Anonyme/login.php"><img style="height: 30px;" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTERUSExMWEhMXFhgXGRUYFhsYGxgYFxweFx4aGBgkJCggGh8mGxUXITEhJSorLi8uHR81ODMtNygtMS8BCgoKDg0OGxAQGzUlHiUrLS0rKy0rNTcyMTctNy0vLSstLS0rLS0tMi0vLS0tNi0tLS03LTAtLTYrNy0tKy0xLf/AABEIAE0AjgMBIgACEQEDEQH/xAAbAAADAQEBAQEAAAAAAAAAAAAABQYHBAMCAf/EADwQAAIAAwYBCAgFAwUAAAAAAAECAAMRBAUGEiExQRNRYXFygZHBByIyNEKhsdEjUlOy4RQWc2OCg+Lw/8QAGgEBAAIDAQAAAAAAAAAAAAAAAAECAwQGBf/EACwRAAIABAMGBQUAAAAAAAAAAAABAgMRIQQSMQUTQVGRsRQiUnGBMzTR4fD/2gAMAwEAAhEDEQA/ANpggggAggggAiP9IvsSe030EWES+NZYZrMrbGbQ9RKgxq4xVkxL27m7s50xML9+zOXC2EVZBOtAqDqsvbTgW+0NsUWxbJZxyKKjscqkKBl0qT1/eKMCEWMbpa0SKJq6HMBz6UI6/tFYpClSWpavTXiZIcU5+Ihc5+WunAzCdNZyWZizHck1J7455ix0TZTKSrKVYbgihHdHPMaPP2bvN/bTievtfdeG81K2y/r4PiCCCOiORNZwn7nJ7PmYbwown7nJ7PmYbxieplWgQQQRBIQQQQAQQQQAQQQQARIekQ+pJ7TfQRXxH+kX2JPab6CNXG/Qi/uJvbN+6g+ezHWGMQpaECsQJwHrKfip8S8/lD6MQViDUaHnihuvGNolUDETl5m37m38axpyNpKlJnU9HFbHbbikv4/BptIT3phizT6lpeVj8aeqe/ge8Rz3ZjCzzaBjyLcz7dzbeNIoFYEVGoPGPTlzYY1WB1PEmyJkt0mKhm17YEnS6tJYTl5vZbw2Pj3RJzJZUlWBUjQgihB6RG7RI4/uVXkm0KKTJdKn8yba9W/VWMyi5mBw8jvwn7nJ7PmYbwown7nJ7PmYbxV6lloEEEEQSEEEEAEEEEAEEEEAER/pF9iT2m+giwiYxxYJk1ZQloXoWrThUCNbGJuTEkbuzolDiYW3RX7Mz6CGn9vWr9F/lB/b1q/Rf5Rz+5mel9DrPESvWuqFcNriv+bZmFCWl19aWToRxpzHpj5/t61fov8AKGN1YPnOwM0cknGpBYjmAHnGSVKnqJOBNMwz5+GcDUyJNe5pEqYGUMNiAR1HWE2NLWsuxzK7uMijnLfxU90ddrt/JLSXKmTSBQKq0Gm2pp5xA39Z7fanzPIYKPZQbKPM9MdNCuZxcT5FhhP3OT2fMw3hbhuQyWWUjgqwWhB4amGUHqFoEEEEQSEEEEAfMxwoqSAOcmkeUq2y2NFmIx5gwMZXiG8XnWh87HKHKqvBQDTb6x2zMLlgps8+XaCdwCFI7iftF8pTMadHnOnqgqzKo5yQIklvG02Oxty4rMzBZRLBtwTrQ/DQ784ES92XdOts1vXqQKs7Emg/9sIhQkuI1STaEf2HVuywP0j7ZgNyB1xld9XLOsTq2fQ+y6kggjh0GOq9r5NosSZ9ZiTQGPOCrUPyPhDKMxpSuDsQeowNMA3IHWYybDl8GzTg+6HR151+43H8w59Ic1XeQymqtLJBHEEwy3GaxoKsDsax+M4G5A6zE56P/dP+RvKJHFltM+1sF9YKeTUDjQ6062J+UFDcOKxqSuDsQeqP2M79Hl4ZJzSSdJgqO0uvzFfAR7ekK8pnKLIBKpkDEDTMSTvzgUhlvQZrVLX+vlVpyqV5s61+sdAMZVd9xpOk51tEsTdfwW9U6cKkjfqpFFhi7rZZyyzF/BZWqM6nKaVBAr3ac8HCEyxE5fzDxEfnLL+YeIjHrn94k/5U/cI8mTNMKjctTxMTkIzm0K4OxB6jH1GW3pha0WdOVJVlFKlCajhXUD5Q2whigjNKnuWUCqsdSNQMpPHeIy8ic3M+L5lXfPmFktBlTGOv4b5STxIIFOk1hTfeHJlmUTC6OhNAVOtd9u7hWH+LMLyxmnoxSpqUpUEniNdIkbusXKzAmbLU70r8ouirOidb5s6z5XJdZTghjqQGBFCeaoFOuHno6tyI82WxClwpWulctajr9b6xUXTh2VJktKpymf2yfi+wHCIvFGHFs5zI5KnUKRqO/j4RFU7CjVxr6RbchSXKVgzhsxoa0FKa9dflEokgiys/wmcijrVXJ/cIYYZuAWlvWcqBqQBqeo8PAxV4muVP6aXJl/hqr1GleB3131rWFaWFK3I65rmNokz2TWZLyFR+YHNUdegp1dMLJk9iqqTUJXKOaupHjGh4Iu3keV9bNmycKUpm6TzwtxPhpDPLo2TOMxXLUZuJGo33hW4y2PS4LfyF2PM+LMwXtNQD790TOG7XLlWhZs2uVanQVq1KD617odzroP8ATS5PKUUO7n1dzoBx4a+MM8OYWkcmxmqJrZtCarQUGlAemFUhRkU9pEu0GZJ9lZmZKimlagEfKLTENpsFoCcrMMuZlDKwViQrDMAaAgjXbrjmxJheUGQyvwhQ1FC1SDvqemP2z4XWdZgGch5ZYK4X4faykV11JprxhVBJimdhQmUZ8mck6WATXVDQdB2PQSI88KXtMlzVlBiZb1UoTUCo3HNCifZcszJWutK08ovMM4ZSWvLli7lTl0oFqKbVNT0wegWtiGuf3iT/AJU/cI+ZZpOB/wBQfuh/d2Hss6W3KVo6mmXmIPPHjNw5VieV4n4P5iaoijKvFd8yRZpiCYju4yhVYMdeOm2kQF0Xa89yiCpC5u6oHnDmxYSztl5an+z/ALRb3HcsuzIVSpJ9pjuafQdEVqki1G2f/9k="/></a></button>
                </div>  
                <div class="one" style="display:inline;margin: 600px;">
                    <div id="txt" style="display:inline;"></div>
                </div>
            <hr>
            <div class="partiehaute">
                <table class="table1">
                    <tr>
                        <th class="left">DATE DU DERNIER ACCIDENT</th>


                        <?php
                            include ('Connexion_database.php');
                            $resultat1 = mysqli_query($connexion ,"SELECT date_accident FROM accident WHERE date_accident =(SELECT MAX(date_accident) FROM accident)");
                            while($ligne = mysqli_fetch_object($resultat1)) {
                                echo '<th class="center">'. $ligne->date_accident.'</th>';
                            }
                        ?>         
                        
                        
                        <th class="right">تاريخ اخر حادثة</th>
                    </tr>
                    <tr>
                        <th class="left">JOURS SANS ACCIDENT</th>
                        <th class="center">


                            <?php
                            include ('Connexion_database.php');
                                $resultat1 = mysqli_query($connexion ,"SELECT date_accident FROM accident WHERE date_accident =(SELECT MAX(date_accident) FROM accident)");
                                while($ligne = mysqli_fetch_object($resultat1)) {
                                    $dd=$ligne->date_accident;
                                }
                                #date de aujourd'hui :
                                $dateTime = new \DateTime('now', new \DateTimeZone('Europe/Dublin'));
                                $d=$dateTime->format('Y-m-d');
                                #-----------------------------------
                                error_reporting(E_ALL);
                                ini_set("display_errors", 1);
                                $date_debut = strtotime("$dd"); 
                                $date_fin = strtotime("$d"); 
                                echo round(($date_fin - $date_debut)/60/60/24,0);
                            ?>
                        </th>
                        <th class="right">يوم بدون حادثة</th>
                    </tr>
                    <tr>
                        <th class="left">CUMUL DU MOIS</th>
                            <?php
                                include ('Connexion_database.php');
                                $sql = "SELECT * FROM accident where date_accident between 20220801 and 20220831";
                                if ($result=mysqli_query($connexion,$sql)) {
                                    $rowcount=mysqli_num_rows($result);
                                    echo '<th class="center">'.$rowcount.'</th>'; 
                                }
                                
                            ?>
                        
                        <th class="right">مجموع الشهر</th>
                    </tr>
                    <tr>
                        <th class="left">CUMUL DE L'ANNEE</th>
                        <?php
                            include ('Connexion_database.php');
                           
                            $sql = "SELECT * FROM accident where date_accident between 20220101 and 20221231";
                            if ($result=mysqli_query($connexion,$sql)) {
                                $rowcount=mysqli_num_rows($result);
                                echo '<th class="center">'.$rowcount.'</th>'; 
                            }


                        ?> 
                        <th class="right">مجموع السنة</th>
                    </tr>
                    <tr>
                        <th class="attention"colspan="3">حذرني نحذرك<th>
                    </tr>
                </table>
            </div>
        
            <div class="partiebasse">
                <table class="table2">
                    <tr>
                        <th style="padding-top: 10px; padding-bottom: 10px;border: 1px solid black;"class="center" colspan="4">Régles de sécurité</th>
                    <tr>
                    <tr>
                        <th class="cln">Le casque de sécurité doit etre porté </th>
                        <th class="cln"><i class="fa-solid fa-helmet-safety"></i></th>
                        <th class="cln">Des vetements haute visibilité doivent etre portés</th>
                        <th class="cln"><i class="fa-solid fa-vest"></i></th>
                    </tr>
                    <tr>
                        <th class="cln">Les lunettes de protection doivent etre portées</th>
                        <th class="cln"><i class="fa-solid fa-glasses"></i></th>
                        <th class="cln">Des chaussures de sécurit doivent etre portées</th>
                        <th class="cln"><i class="fa-solid fa-triangle-exclamation"></i></th>
                    </tr>
                    <tr>
                        <th class="cln">Protège-oreilles dans la zone désignée</th>
                        <th class="cln"><i class="fa-solid fa-headphones"></i></th>
                        <th class="cln">Pas d'enfants et de personnes non autorisées</th>
                        <th class="cln"><i class="fa-solid fa-triangle-exclamation"></i></th>
                    </tr>
                    <tr>
                        <th class="cln">Porter des gants pour les taches de manutention manuelle</th>
                        <th class="cln"><i class="fa-solid fa-mitten"></i></th>
                        <th class="cln">Tous les conducteurs et visiteurs doivent se presenter au bureau XXX du site</th>
                        <th class="cln"><i class="fa-solid fa-triangle-exclamation"></i></th>
                    </tr>
                </table>
            </div>
        </div>
 
  </body>
</html>








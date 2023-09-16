<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moyenne</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <h1 class="display-1 text-center text-dark"> Calcul Moyenne </h1>
    <form method="post" action="moyenne.php" class="text-center">
        <input type="number" name="moyenne" id="moyenne" placeholder="ajouter la moyenne">
        <button type="submit" name="valider" id="valider">valider</button><br><br>
    
     <table border="1" align="center" text="white">
        <?php
  
        if (isset($_POST["valider"])) {
            $moyenne = $_POST["moyenne"];
           

            if($moyenne >=0 && $moyenne <= 20){

            if ($moyenne >= 17) {
                 echo "<tr> <td bgcolor='green'>mention Excellent</td> </tr>";
               // echo "mention Excellent";
            } elseif ($moyenne >= 16) {
                echo "<tr> <td bgcolor='bue'>Très Bien</td> </tr>";
              //  echo "mention Très Bien";
            } elseif ($moyenne >= 14) {
                echo "<tr> <td bgcolor='yellow'>mention Bien</td> </tr>";
               // echo "mention Bien";
            } elseif ($moyenne >= 12) {
                echo "<tr> <td bgcolor='orange'> Assez Bien</td> </tr>";
               // echo "mention Assez Bien";
            } elseif ($moyenne >= 10) {
                echo "<tr> <td bgcolor='indigo'>mention Passable</td> </tr>";
               // echo "mention Passable";
            } elseif ($moyenne == "") {}
             else {
                echo "<tr> <td bgcolor='red'>eliminer</td> </tr>";
               // echo "eliminer";
            }
        }
        elseif ($moyenne == "") {}
   else
    {
        echo "Entrez une valeur entre 0 et 20";
    }
}
    

        ?>
        </table>
    </form>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>
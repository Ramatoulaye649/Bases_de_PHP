<html>
<head>
    <meta charset="UTF-8">
<style>
    
     .mention {
    font-size: 23px;
    margin: 6px;
    }


    .excellent {
        color: green;
        font-size: 23px;
        margin: 6px;
    }

    .tres-bien {
        color: yellow;
        font-size: 23px;
        margin: 6px;  
    }

    .bien {
        color: blue;
        font-size: 23px;
        margin: 6px;
    }

    .assez-bien {
        color: orange;
        font-size: 23px;
        margin: 6px;
    }

    .passable {
        color: red;
        font-size: 23px;
        margin: 6px;
    }

    .echoue {
        color: blueviolet;
        font-size: 23px;
        margin: 6px;
    }
</style>
</head>

<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Supposons que vous ayez une variable $moyenne contenant la moyenne obtenue
    $moyenne = $_POST['moyenne']; // Changez cette valeur pour tester différentes situations

    if ($moyenne >= 17) {
        $mention = "Excellent";
        $mentionClass = "excellent";
    } elseif ($moyenne >= 16) {
        $mention = "Très Bien";
        $mentionClass = "tres-bien";
    } elseif ($moyenne >= 14) {
        $mention = "Bien";
        $mentionClass = "bien";
    } elseif ($moyenne >= 12) {
        $mention = "Assez Bien";
        $mentionClass = "assez-bien";
    } elseif ($moyenne >= 10) {
        $mention = "Passable";
        $mentionClass = "passable";
    }
    echo"<h1>Félicitation,</h2>";
    echo "<h3>Vous avez obtenu la mention <span class='mention $mentionClass'>$mention</span>.</h3>";
} else {
    echo "<p>Veuillez entrer une moyenne.</p>";
}
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <title>Resultado</title>
</head>
<body>
    <center>
    <div>
    <?php 

    $temp = $_POST['meuInput'];

    if ($temp < 0){
        echo "<br>$temp ° é muito frio<br>Está congelando<br><br><img src='emojiCongelando.png' width='150px' height='150px'>";
    }
    else if ($temp >= 0 && $temp < 15){
        echo "<br>$temp ° é bem frio<br>Está muito frio<br><br><img src='emojiFrio.png' width='150px' height='150px'>";
    } 
    else if ($temp >= 15 && $temp < 25){
        echo "<br>$temp ° é Razoável<br>Está fresco<br><br><img src='emojiNormal.png' width='150px' height='150px'>";
    }
    else if ($temp >= 25){
        echo "<br>$temp ° é bem quente<br>Está calor<br><br><img src='emojiCalor.png' width='150px' height='150px'>";
    }

    ?>
    </div>
    </center>
</body>
</html>
<?php 
// DecisionForge v.0.01 beta - Just a simple framework for interactive adventure books
// github.com/disketteomelette - 2023 (cc) Attribution. J.C. Rueda.  
$worldCode = isset($_GET['w']) ? $_GET['w'] : '';
$worlds = file("worlds.dat", FILE_IGNORE_NEW_LINES);
$currentWorld = null;
foreach ($worlds as $world) {
    $worldData = explode(";", $world);
    if ($worldData[0] === $worldCode) {
        $currentWorld = $worldData;
        break;
    }
} 
echo '<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <title>Crónicas de la Ilusión</title>
    <style>
        body {
            background-color: #000000; 
            color: #fff; 
            font-family: "Amatic SC", cursive;
        }
        .btn-group-vertical {
            text-align: center;  
        }
    </style>
</head> 
<body>
    <audio autoplay loop> <source src="bgm.mp3" type="audio/mp3">Tu navegador no soporta la reproducción de audio.</audio><div class="container-fluid"><div class="row justify-content-center mt-5"><div class="col-md-6 border text-white p-2">';
if ($currentWorld) {
    echo '<div class="ml-5 mr-5"><h1>CRÓNICAS DE LA ILUSIÓN</h1></div>';
    echo '<div class="border text-white p-4"><p align="center"><img width="50%" height="50%" src="images/' . $currentWorld[0] . '.jpg" class="img-fluid mb-3" alt="Mundo"></p></div>';
    echo '<div class="p-2 text-justify"><p class="lead p-2 text-justify"><h2>' . $currentWorld[1] . '</h2></p></div>';
    echo '<div class="text-center">'; 
    for ($i = 2; $i < count($currentWorld); $i++) {
        $actionData = explode("[", $currentWorld[$i]);
        $actionCode = rtrim($actionData[1], "]");
        echo '<a href="world.php?w=' . urlencode($actionCode) . '" class="btn btn-dark btn-lg">' . $actionData[0] . '</a> ';
    }
    echo '</div>';
} else {
    echo '<div class="ml-5 mr-5"><h1>CRÓNICAS DE LA ILUSIÓN</h1><div class="row justify-content-center mt-5"><image src="images/portada.jpg" /></div>';
    echo '<br><h3>Embárcate en un viaje a través de dimensiones entrelazadas y descubre los secretos tras las ilusiones del tiempo. Enfréntate a desafíos místicos, donde la realidad y la fantasía se entrelazan en un baile eterno. Sumérgete en una travesía única donde cada elección podría desvelar la verdad o tejer una nueva ilusión. </h3><br>';
    echo '<table style="border-collapse: collapse; width: 100%;">';
echo '<tr>';
echo '<td style="padding: 10px;">';
echo '<a href="world.php?w=primer_mundo" class="btn btn-info btn-lg">Comenzar</a>';
echo '</td>';
echo '<td style="padding: 10px; text-align: right;">';
echo '<form action="world.php" method="GET">';
echo '<input type="text" name="w" placeholder="Introduce el código de partida">';
echo '<button type="submit" class="btn btn-light btn-lg">CARGAR PARTIDA</button>';
echo '</form></td></tr></table>'; 
}
echo '</div></div></div><p align="right"><p align="right"><a href="https://github.com/disketteomelette">Ejercicio de programación by J.C. Rueda - https://github.com/disketteomelette</a></p><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script></body></html>';
?>

<?php
    $nombre = 'gerardo ' . 'anaya';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
</head>
<body>
    <main>
        <h1>hola mundo <?=$nombre?></h1>
    </main>
</body>
</html>

<?php
    unset($nombre);

    $nombre = "lopez";
    if($nombre == "gerardo"){
        //echo "Eres ing";
    }elseif($nombre == "cristian"){
        //echo "Ya casi es ing";
    }else{
        //echo "no es ing";
    }

    //echo "<br>";
    $mensaje = ($nombre == "josue")? "ya es ing": "No es ing";
    //echo $mensaje . "<br>";

    switch ($nombre) {
        case 'Josue':
            //echo "ya es ing";
            break;
        case 'Cristian':
        case 'Andres':
            //echo "ya casi andres";
            break;
        default:
            //echo "no es ing";
            break;
    }

    /*
    1. Crear una variable que guarde un numero
        y verificar si es negativo, positivo o cero
    */

    $num = 4;
    if($num > 0){
        echo "El numero es positivo: " . $num;
    }elseif($num == 0){
        echo "El numero es 0";
    }else{
        echo "El numero es negativo: " . $num;
    }

    $mes = "mayo";
    switch ($mes) {
        case 'marzo':
        case 'abril':
        case 'mayo':
            echo "Es primavera";
            break;

        case 'junio':
        case 'julio':
        case 'agosto':
            echo "Es verano";
            break;

        case 'septiembre':
        case 'octubre':
        case 'noviembre':
            echo "Es otoño";
                break;

        case 'diciembre':
        case 'enero':
        case 'febrero':
            echo "Es invierno";
        break;
        default:
            echo "no es ninguna estacion";
            break;
    }
?>
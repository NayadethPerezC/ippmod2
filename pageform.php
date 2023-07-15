<?php
//Se obtienen los valores ingresados por el usuario mediante nuestro formulario, enviados por el metodo post
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$interesado = isset($_POST["interesado"]) ? $_POST["interesado"] : "no";

//Definimos los arreglos con los parrafos respectivos

//Definimos el arreglo "$parrafos" que tendrá el contenido para mayores de 18 años
//Definimos el segundo "$parrafos_menores" que tendrá el contenido para menores de 18 años

$parrafos =["Inscríbete en nuestro torneo de League of Legends",
    "Puedes venir con tu equipo y se categorizarán según su división",
    "Puedes jugar SOLO/DUO y recibirás un regalo si eres soporte",
    "Tendremos premios para los ganadores",
    "Para quienes no quieran competir, tendremos partidas amistosas en Aram"];

$parrafos_menores =["Eres un niño rata?",
    "Para los más jóvenes tenemos un concurso de arquitectura en Minecraft",
    "Tendremos una categoría de 10 a 12 años, una de 13 a 15 años y otra de 16 a 17 años",
    "Todos los inscritos se llevan un regalo sorpresa",
    "Podras ganar increibles premios como contenido de Rubius y Auronplay"];
//Definimos las imagenes a utilizar
$imagenes = [ 
    "lol1.jpg",
    "lol2.jpg",
    "LoL3.jpg",
    "lol4.png",
    "lol5.jpg"
];

$imagenes_menores =[
"mine1.jpg",
"mine2.png",
"mine3.jpg",
"mine3.jpg",
"mine4.jpeg",
"mine5.jpg"
];
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./Style/style.css">
        
        <title>Formulario</title>
    </head>
    <body>
        <?php
            //Verificaremos si el usuario es menor de edad utilizando if/else
            //Si es menor se muestran los parrafos para menores, con contenido de Minecraft
            if($edad < 18){

                for($i=0; $i < count($parrafos_menores);$i++){
                    echo "<h". ($i+1) . ">". $parrafos_menores[$i] . "</h" . ($i+1) . ">";
                    echo "<img src='" . $imagenes_menores[$i] . "' />";
                } 
            //Si el usuario es mayor se muestran los parrafos para mayores, con contenido de League of Legends 
            }else{
                for($i=0; $i < count($parrafos);$i++){
                    echo "<h". ($i+1) . ">". $parrafos[$i] . "</h" . ($i+1) . ">";
                    echo "<img src='" . $imagenes[$i] . "' />";
                } 
            }

            //Verificaremos si el usuario esta interesado en ver mas contenido
            if($interesado == 'si'){
            //Si el usuario está interesado, se muestran las fotos adicionales
            echo '<div class="carousel">';
            echo 'img src ="banner.jpg"';
            echo 'img src ="banner2.jpg"';
            echo '</div>';
            }
        ?>

        <footer>
            Desarrollado por Nayadeth
        </footer>
    </body>
    </html>
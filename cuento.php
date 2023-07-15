<?php
//Elegí un cuento de Edgar Alan Poe, pero solo use un extracto, use idioma español, ingles y frances
$storyText = [
    "es" => "¡Es cierto! Siempre he sido nervioso, muy nervioso, terriblemente nervioso. ¿Pero por qué afirman ustedes que estoy loco? La enfermedad había agudizado mis sentidos, en vez de destruirlos o embotarlos. Y mi oído era el más agudo de todos. Oía todo lo que puede oírse en la tierra y en el cielo. Muchas cosas oí en el infierno. ¿Cómo puedo estar loco, entonces? Escuchen… y observen con cuánta cordura, con cuánta tranquilidad les cuento mi historia. (...)",
    "en" => "TRUE! -- nervous -- very, very dreadfully nervous I had been and am; but why will you say that I am mad? The disease had sharpened my senses -- not destroyed -- not dulled them. Above all was the sense of hearing acute. I heard all things in the heaven and in the earth. I heard many things in hell. How, then, am I mad? Hearken! and observe how healthily -- how calmly I can tell you the whole story. (...)",
    "fr" => "Vrai ! - je suis très nerveux, épouvantablement nerveux, - je l'ai toujours été ; mais pourquoi prétendez-vous que je suis fou ? La maladie a aiguisé mes sens, - elle ne les a pas détruits, - elle ne les a pas émoussés. Plus que tous les autres, j'avais le sens de l'ouïe très fin. J'ai entendu toutes choses du ciel et de la terre. J'ai entendu bien des choses de l'enfer. Comment donc suis-je fou ? Attention ! Et observez avec quelle santé, - avec quel calme je puis vous raconter toute I'histoire.(...)"
]; //Los cuentos estan contenidos en la variable "$storytext"

$selectedLanguage = $_POST["language"] ?? "es";
?>

<!DOCTYPE html>
<html>
    <!-- Quise ponerle el titulo y que estuviera centrado y en negrita -->
<style>
        #nombrecuento {
            text-align: center;
            font-weight: bold;
        }
        
    </style>
<head> 
    <div id="nombrecuento">
    <h1> Tell-Tale Heart
    </div>
    <!-- Estos son los estilos usados para el texto -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        #container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        #languageSelectorContainer {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }
        #storyContainer {
            text-align: justify;
        }
        
    </style>
</head>
<body>
    <div id="container">
        <div id="languageSelectorContainer">
            <form method="POST">
                <!-- Se crea el formulario para cambiar el idioma -->
                <select name="language">
                    <option value="es" <?= $selectedLanguage === "es" ? "selected" : "" ?>>Español</option>
                    <option value="en" <?= $selectedLanguage === "en" ? "selected" : "" ?>>Inglés</option>
                    <option value="fr" <?= $selectedLanguage === "fr" ? "selected" : "" ?>>Francés</option>
                </select>
                <button type="submit">Cambiar idioma</button>
            </form>
        </div>
        <div id="storyContainer">
        <img id="corazon" img src="./IMG/tth.jpg" alt="...">
            <p id="storyText"><?= $storyText[$selectedLanguage] ?></p>
        </div>
    </div>
<footer>
    <!-- Como el cuento no le inventé yo, puse el autor y el año de publicacion, lo puse en cursiva
        y lo acomode en el footer -->
<style>
        #Credits {
            text-align: center;
            font-style: italic;
        }
    </style>
<div id="Credits">
    Edgar Allan Poe
    (Publicado en 1843)
</div>
</footer>
</body>
</html>
<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    // Si el usuario no ha iniciado sesión, redirige a la página de inicio de sesión
    header("Location: login.php");
    exit;
}

// Procesar el cierre de sesión si se hace clic en el botón "Cerrar sesión"
if (isset($_POST['cerrar_sesion'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Educacin</title>
    <link href="https://fonts.googleapis.com/css?family=Comic+Sans+MS" rel="stylesheet">
    <link rel="stylesheet" href="../recursos/css/estilos.css">
    <link rel="stylesheet" href="../recursos/css/game.css">
    <link rel="stylesheet" href="../recursos/css/game2.css">
    <link rel="stylesheet" href="../recursos/css/game3.css">
    <link rel="stylesheet" href="../recursos/css/style.css">
    <link rel="stylesheet" href="../recursos/css/stylee.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <script src="../recursos/script.js" defer></script>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* Establece el tamaño del cuerpo y el HTML al 100% de la altura y ancho */
        html, body {
            height: 100%;
            width: 100%;
            font-family: 'Comic Sans MS', sans-serif; /* Cambia la fuente según tus preferencias */
            overflow: hidden; /* Evita las barras de desplazamiento */
        }

        body {
            background-color: #f1f1f1;
            display: flex;
            flex-direction: row;
            margin-top: 0px;
            margin-left: 0px;
        }

        /* Estilo para la barra de pestañas */
        .tab {
            background-color: #3a3ad1;
            width: 20%; /* Cambia el ancho según tus preferencias */
            height: 100%;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .tab button {
            display: block;
            background-color: inherit;
            font-size: 20px;
            color: #fff;
            padding: 12px 16px;
            width: 100%;
            margin-top: 20px;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
        }

        .tab button:hover {
            background-color: #3a3ad1;
            border-radius: 20px;
        }

        /* Contenido de las pestañas */
        .tabcontent-container {
            width: 100%; /* Cambia el ancho según tus preferencias */
            height: 100%;
            margin-left: -20px;
            display: flex;
            flex-direction: column; /* Alinea el contenido en columna */
            justify-content: center; /* Centra verticalmente el contenido */
            align-items: flex-start; /* Alinea el contenido a la izquierda */
            overflow: auto; /* Agrega una barra de desplazamiento cuando sea necesario */
        }

        .tabcontent {
            padding: 20px;
            width: 100%; /* El contenido ocupa todo el ancho */
            /* display: none; */ /* Puedes comentar esta línea para que el contenido esté visible por defecto */
        }

        /* Estilos para los títulos y párrafos en el contenido */
        h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
        }

        /* Añade un estilo "active" para resaltar la pestaña seleccionada */
        .active {
            background-color: #ccc;
        }
        .button {
            background-color: #3a3ad1; /* Color de fondo */
            color: #fff; /* Color del texto */
            border: none; /* Sin borde */
            padding: 12px 20px; /* Espaciado interno */
            font-size: 18px; /* Tamaño de fuente */
            border-radius: 5px; /* Bordes redondeados */
            cursor: pointer;
            transition: background-color 0.3s; /* Transición suave de color de fondo */
        }

        /* Estilo de hover para el botón */
        .button:hover {
            background-color: #3a3ad1; /* Cambia el color de fondo al pasar el mouse */
        }
        .close{
            display: block;
            background-color: inherit;
            font-size: 20px;
            color: #fff;
            padding: 12px 16px;
            width: 100%;
            margin-top: 20px;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
        }
    </style>
</head>
<body>
    <div class="tab">
        <a href="index.php" style="cursor: pointer; font-size: 24px; color: white;">MyEducacin</a>

        <button class="tablinks" onclick="openCity(event, 'Home')" >Inicio</button>
        <button class="tablinks" onclick="openCity(event, 'Nileves')" >Juegos</button>
        <button href= class="tablinks" type="submit" name="cerrar_sesion">Cerrar Sesion</button>
    </div>

    <div class="tabcontent-container">
        <div id="Home" class="tabcontent">
            <main>
                <h1 style="text-align: center; margin-top: 2px;">Educación Financiera Infantil</h1><br>
                <p></p> <br>

                <p style="font-size: 23px; text-align: right; word-spacing: -0.1em;">
                
                <p style=" font-size: 23px; text-align: center;"> 
                    El aprendizaje desde niños es más enriquecedor cuando es constante.
                    Esto es lo que ocurre con la Educación Financiera, un concepto que abarca 
                    diferentes aspectos de la vida y que si es enseñado desde temprana edad, 
                    preparará a los más pequeños para tomar mejores decisiones en el futuro.
                </p>
            </main>

            <div style="display: flex; flex-direction: column;">
                <div class="video-container-2" style="margin: 0 auto;">
                    <iframe style="width: 600px; height: 300px; border: 15px solid #3a3ad1; border-radius: 20px;" width="400" height="225" src="https://www.youtube.com/embed/gl37c399tJQ" frameborder="0" allowfullscreen></iframe>
                </div>

                <button class="chatbot-toggler">
                    <span class="material-symbols-rounded">mode_comment</span>
                    <span class="material-symbols-outlined">close</span>
                    </button>
                    <div style="height: 550px;"class="chatbot">
                    <header>
                        <h2>Chatbot</h2>
                        <span class="close-btn material-symbols-outlined">Cerrar</span>
                    </header>
                    <ul class="chatbox">
                        <li class="chat incoming">
                        <span class="material-symbols-outlined">smart_toy</span>
                        <p>Hola 👋<br>En que puedo ayudarte hoy?<br>Por ejemplo: consejos de ahorro, como ganar monedas, como funciona la pagina, etc.</p>
                        </li>
                    </ul>
                    <div class="chat-input">
                        <textarea placeholder="Ecribe tu mensaje..." spellcheck="false" required></textarea>
                        <span id="send-btn" class="material-symbols-rounded">Enviar</span>
                    </div>
                </div>
            </div>
        </div>

        <div id="Nileves" class="tabcontent" style="background-image: url(../recursos/img/fondo1.jpeg); height: 100%; width: 100%;">
            <a style="display: flex; justify-content: center; font-size: 30px;">Juegos Disponibles</a>
            <div class="container_a">
                <div class="image-container">
                    <a class="imagess" onclick="openCity(event, 'Game')">
                        <img style="cursor: pointer;" class="myImage" src="../recursos/img/nicel1.jpeg" alt="Image 1">
                        <span class="image-text">Nivel 1 !Monedas!</span>
                    </a>
                </div>
                <div class="image-container">
                    <a class="imagess" onclick="openCity(event, 'Game2')">
                        <img style="cursor: pointer;" class="myImage" src="../recursos/img/nivel2.jpeg" alt="Image 2">
                        <span class="image-text">Nivel 2 !Billetes!</span>
                    </a>
                </div>
                <div class="image-container">
                    <a class="imagess" onclick="openCity(event, 'Game3')">
                        <img style="cursor: pointer;" class="myImage" src="../recursos/img/nivel3.jpeg" alt="Image 3">
                        <span class="image-text">Nivel 3 !Monedas Euros!</span>
                    </a>
                </div>
            </div>   
        </div>

        <div id="Game" class="tabcontent" style="display: none;">
            <div class="container">
                <h3>
                    Arrastre y suelte las monedas en sus respectivos valores de moneda
                </h3>
                <div class="draggable-objects"></div>
                <div class="drop-points"></div>
            </div>
            <div style="color:rgb(84, 62, 192); font-size: 15px; margin-left: 10px; margin-top: -250px;" class="timer">Tiempo restante: <span id="countdown">60</span></div>
            <div class="controls-container">
                <p class="result"></p>
                <button id="start" style="margin-right: 10px">Empezar Juego</button>
            </div>
        </div>

        <div id="Game2" class="tabcontent" style="display: none;">
            <div class="container2">
                <h3>
                    Arrastre y suelte las monedas en sus respectivos valores de moneda
                </h3>
                <div class="draggable-objects2"></div>
                <div class="drop-points2"></div>
            </div>
            <div style="color:rgb(84, 62, 192); font-size: 15px; margin-left: 10px; margin-top: -250px;" class="timer2">Tiempo restante: <span id="countdown2">60</span></div>
            <div class="controls2-container2">
                <p class="result2"></p>
                <button id="start2" style="margin-right: 10px">Empezar Juego</button>
            </div>
        </div>

        <div id="Game3" class="tabcontent" style="display: none;">
            <div class="container3">
                <h3>
                    Arrastre y suelte las monedas en sus respectivos valores de moneda
                </h3>
                <div class="draggable-objects3"></div>
                <div class="drop-points3"></div>
            </div>
            <div style="color:rgb(84, 62, 192); font-size: 24px; margin-left: 30px; margin-top: -350px;" class="timer3">Tiempo restante: <span id="countdown3">60</span></div>
            <div class="controls3-container3">
                <p class="result3"></p>
                <button id="start3" style="margin-right: 10px">Empezar Juego</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Oculta todos los contenidos de las pestañas al cargar la página
            var tabcontents = document.getElementsByClassName("tabcontent");
            for (var i = 0; i < tabcontents.length; i++) {
                tabcontents[i].style.display = "none";
            }
    
            // Muestra el contenido de "Home" por defecto
            document.getElementById("Home").style.display = "block";
        });
    
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
    
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
    
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
    
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        function cerrarSesion(){
            window.location.href = 'logou'
        }
    </script>

    <script src="../recursos/game.js"></script>
    <script src="../recursos/game2.js" ></script>
    <script src="../recursos/game3.js" ></script>
</body>
</html>

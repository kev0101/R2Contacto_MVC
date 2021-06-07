<?php require_once '../Modelos/consultas.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <link rel="stylesheet" href="main.css">
    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    
    <div class="content">

        <h1 class="logo">Contact <span>Us</span></h1>

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3>Contact us</h3>
                <form action="../Controlador/contacto_controlador.php?a=ingr" method="POST">
                    <p>
                        <label>Usuario</label>
                        <input type="text" name="_user">
                    </p>
                    <p>
                        <label>Correo</label>
                        <input type="email" name="_correo" placeholder="example@gmail.com">
                    </p>
                    <p>
                        <label>Telefono</label>
                        <input type="tel" name="_tel">
                    </p>
                    <p>
                        <label>Asunto</label>
                        <input type="text" name="_asunto">
                    </p>
                    <p class="block">
                       <label>Mensaje</label> 
                        <textarea name="_msg" rows="3"></textarea>
                    </p>
                    <p class="block">
                        <button>
                            Enviar
                        </button>
                    </p>
                </form>
            </div>
            <div class="contact-info">
                <h4>More Info</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Baker Street</li>
                    <li><i class="fas fa-phone"></i> (111) 111 111 111</li>
                    <li><i class="fas fa-envelope-open-text"></i> contact@website.com</li>
                </ul>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero provident ipsam necessitatibus repellendus?</p>
                <p>Company.com</p>
            </div>
        </div>

    </div>

</body>
</html>
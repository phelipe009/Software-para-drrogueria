<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
</head>
<body>


    <form id="contactar"  method="post">
        <div class="form">
            <h1>Contactanos</h1>
            <div class="grupo">
                <input type="text" name="nombre"  placeholder="Nombre" required><span class="barra"></span>
           </div>
            <div class="grupo">
                <input type="email" name="correo" placeholder="Correo" required><span class="barra"></span>
            </div>
            <div class="grupo">
                <input type="telefono" name="telefono" placeholder="Telefono" required><span class="barra"></span>
            </div>
            <div class="grupo">
                <textarea name="mensaje"  placeholder="Mensaje"  rows="3" required></textarea><span class="barra"></span>
            </div>
            <button type="submit" name="enviar" >Enviar</button><h4 id="txt2">Gracias por dejarnos tu mensaje con el nos ayudas a mejorar cada dia mas <a href="index.php"> ir a pagina principal</a> </h4>
        </div>
        <style type="text/css">
            #txt2{
    padding: 50px;
    text-align: center;
    text-align: justify;
    font-size: 15px;
    font-weight: lighter;
}
        </style>
    </form>

    <?php

    include("registar.php");
     ?>

    
<script type="text/javascript"
src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>


</body>
</html>
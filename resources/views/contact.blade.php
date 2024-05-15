<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
@include('header')

<section class="contact">

   <h1 class="title">Contactanos</h1>

   <form action="" method="POST">
    <input type="text" name="nombre" class="box" required placeholder="Ingrese su nombre">
    <input type="email" name="correo" class="box" required placeholder="Ingrese su correo electrónico">
    <input type="number" name="numero" min="0" class="box" required placeholder="Ingrese su número de teléfono">
    <textarea name="mensaje" class="box" required placeholder="Escriba su mensaje" cols="30" rows="10"></textarea>
    <input type="submit" value="Enviar mensaje" class="btn" name="send">
</form>


</section>









@include('footer')

<script src="js/script.js"></script>

</body>
</html>

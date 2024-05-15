<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title>Inicio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

@include('header')

   
<div class="home-bg">

   <section class="home">

      <div class="content">
         <span>Pureza y Frescura en Cada Producto</span>
         <h3>Nueva línea Infantil</h3>
         <p>Nuestra nueva línea infantil está diseñada para brindar una limpieza suave y nutritiva, dejando el cabello de tus pequeños fresco, suave y radiante.</p>
         <a href="about.php" class="btn">comprar ahora</a>
      </div>

   </section>

</div>

<section class="home-category">

   <h1 class="title">Nuestros Productos</h1>

   <div class="box-container">

      <div class="box box-1">
         <br><h3>Líneas Capilares</h3><br>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p><br>
         <a href="category.php?category=fruits" class="btn">Líneas Capilares</a>
      </div>

      <div class="box box-2">
        <br> <h3>Línea Infantil</h3><br>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p><br>
         <a href="category.php?category=fruits" class="btn">Línea Infantil</a>
      </div>

      <div class="box box-3">
         <br><h3>Línea Masculina</h3><br>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p><br>
         <a href="category.php?category=fruits" class="btn">Línea Masculina</a>
      </div>

      <div class="box box-4">
        <br> <h3>Catalogo</h3><br>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p><br>
         <a href="category.php?category=fruits" class="btn">Catalogo</a>
      </div>

   </div>

</section>

<section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container">

   <form action="" class="box" method="POST">
      <div class="price">$<span>Price</span>/-</div>
      <a href="view_page.php?pid=1" class="fas fa-eye"></a>
      <img src="uploaded_img/default_product_image.jpg" alt="">
      <div class="name">Product Name</div>
      <input type="hidden" name="pid" value="1">
      <input type="hidden" name="p_name" value="Product Name">
      <input type="hidden" name="p_price" value="Price">
      <input type="hidden" name="p_image" value="default_product_image.jpg">
      <input type="number" min="1" value="1" name="p_qty" class="qty">
      <input type="submit" value="add to wishlist" class="option-btn" name="add_to_wishlist">
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>

   </div>

</section>

@include('footer')

<script src="js/script.js"></script>

</body>
</html>

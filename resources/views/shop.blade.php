<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tienda</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
@include('header')

<section class="p-category">

   <a href="category.php?category=fruits">Líneas Capilares</a>
   <a href="category.php?category=vegitables">Línea Infantil</a>
   <a href="category.php?category=fish">Línea Masculina</a>
   <a href="category.php?category=meat">Catalogo</a>

</section>

<section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container">

   @foreach ($products as $product)
   <form action="" class="box" method="POST">
      <div class="price">$<span>{{ $product['price'] }}</span>/-</div>
      <a href="view_page.php?pid={{ $product['id'] }}" class="fas fa-eye"></a>
      <img src="uploaded_img/{{ $product['image'] }}" alt="">
      <div class="name">{{ $product['name'] }}</div>
      <input type="hidden" name="pid" value="{{ $product['id'] }}">
      <input type="hidden" name="p_name" value="{{ $product['name'] }}">
      <input type="hidden" name="p_price" value="{{ $product['price'] }}">
      <input type="hidden" name="p_image" value="{{ $product['image'] }}">
      <input type="number" min="1" value="1" name="p_qty" class="qty">
      <input type="submit" value="add to wishlist" class="option-btn" name="add_to_wishlist">
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   @endforeach

   </div>

</section>

@include('footer')

<script src="js/script.js"></script>

</body>
</html>

<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}

if (isset($_POST['add_to_cart'])) {

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if (mysqli_num_rows($check_cart_numbers) > 0) {
      $message[] = 'Đã được thêm vào giỏ hàng';
   } else {
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'Sản phẩm được thêm vào giỏ hàng!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Trang chủ</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'header.php'; ?>

   <section class="home">

      <div class="content">
         <h3>THẾ GIỚI BALO </h3>
         <p>Cần mua balo chất lượng ư ? => Quá dễ với BAG DTV</p>
         <a href="about.php" class="white-btn">Khám phá nhiều hơn nhé</a>
      </div>

   </section>

   <section class="products">

      <h1 class="title">sản phẩm mới nhất</h1>

      <div class="box-container">

         <?php
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if (mysqli_num_rows($select_products) > 0) {
            while ($fetch_products = mysqli_fetch_assoc($select_products)) {
         ?>
               <form action="" method="post" class="box">
                  <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
                  <div class="name"><?php echo $fetch_products['name']; ?></div>
                  <div class="price">$<?php echo $fetch_products['price']; ?></div>
                  <input type="number" min="1" name="product_quantity" value="1" class="qty">
                  <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                  <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                  <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                  <input type="submit" value="thêm vào giỏ hàng" name="add_to_cart" class="btn">
               </form>
         <?php
            }
         } else {
            echo '<p class="empty">chưa có sản phẩm nào được thêm vào!</p>';
         }
         ?>
      </div>

      <div class="load-more" style="margin-top: 2rem; text-align:center">
         <a href="shop.php" class="option-btn">Thêm</a>
      </div>

   </section>

   <section class="about">

      <div class="flex">

         <div class="image">
            <img src="images/about-img.jpg" alt="">
         </div>

         <div class="content">
            <h3>về BAG DTV</h3>
            <p>BAG DTV là cửa hàng Vali, Balo, Túi Xách chính hãng hàng đầu Việt Nam.
               Với hơn 2.000 sản phẩm, hàng trăm mẫu balo, túi xách từ bình dân đến cao cấp. Hàng Chính Hãng. Giao Hàng Nhanh Chóng.
            
            Shop được điều hành bởi nhiều bạn trẻ có tình yêu lớn với các sản phẩm balo, túi xách, chính hãng với tiêu chí mang đến người tiêu dùng Việt Nam cơ hội tiếp cận,
               trải nghiệm những mẫu balo đang được ưa chuộng nhất tại Việt Nam và trên thế giới, BAG DTV luôn cố gắng mang đến cho khách hàng những sản phẩm
               độc đáo, chất lượng, phù hợp với phong cách của giới trẻ.
               Các loại balo của shop rất đa dạng, balo du lịch, balo laptop, balo máy ảnh…, túi du lịch, túi thể thao, balo thời trang,
               đến những mẫu balo học sinh, balo đi học ngộ nghĩnh dễ thương.
               Phần lớn các sản phẩm của shop đều được gia công tỉ mỉ tại Việt Nam vởi các người thợ lành nghề với nhiều năm kinh nghiệm,
               các mẫu mã cực chất không giống như những mẫu balo, túi xách hàng giả hàng nhái đang bán ngoài thị trường,
               trên hết là trong đó còn chứa đựng cả tình yêu thương BAG DTV chúng mình gửi đến khách hàng.
            <a href="about.php" class="btn">Nhiều hơn</a>
            </p>
         </div>

      </div>

   </section>

   <section class="home-contact">

      <div class="content">
         <h3>Bạn có câu hỏi gì không?</h3>
         <p>Nếu có thắc mắc hay cần tư vấn, bạn hãy thoải mái liên hệ với BAG DTV nhé. Chúng tôi ở đây vì bạn!</p>
         <a href="contact.php" class="white-btn">Liên hệ</a>
      </div>

   </section>





   <?php include 'footer.php'; ?>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>
<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'header.php'; ?>

   <div class="heading">
      <h3>BAG DTV</h3>
      <p> <a href="home.php">Trang Chủ</a></p>
   </div>

   <section class="about">

      <div class="flex">

         <div class="image">
            <img src="images/about-img.jpg" alt="">
         </div>

         <div class="content">
            <h3 style="color: purple;">Tại sao bạn nên chọn BAG DTV</h3>

            <ul style="font-size: 15px;">
               <br>
               Bạn đang có nhu cầu tìm kiếm balo, túi xách đẹp nhưng vẫn còn gặp phải nhiều khó khăn khi tìm kiếm một nhà sản xuất có uy tín tốt và giá thành phải chăng. Hãy liên hệ ngay với cơ sở balo túi xách BAG DTV của chúng tôi để có được sự hài lòng tuyệt đối.
               Bạn đang có nhu cầu đặt may balo túi xách với số lượng lớn nhưng vẫn còn gặp phải nhiều khó khăn khi tìm kiếm một nhà sản xuất có uy tín tốt và giá thành phải chăng. Hãy liên hệ ngay với cơ sở may balo túi xách của chúng tôi để có được sự hài lòng tuyệt đối.
               <ul>
                  <br>
                  <li>Về chất lượng: Chất lượng luôn là niềm tự hào của cơ sở may balo túi xách BAG DTV. Sản phẩm balo túi xách của chúng tôi luôn nhận được sự khen ngợi về chất lượng từ phía các bạn hàng. Đặc biệt, đã có trên dưới 1000 đối tác có đánh giá hết sức tích cực về chất lượng sản phẩm do chúng tôi sản xuất.</li>
                  <br>
                  <li>Về giá cả: Bạn thực sự không cần phải lo lắng về điều này bởi giá thành chúng tôi đưa ra cho các đối tác luôn cực kì cạnh tranh. Ngoài ra chúng tôi còn có nhiều chương trình ưu đãi và thật nhiều những món quà có giá trị khác nữa cho mọi khách hàng vào những dịp đặc biệt trong năm.</li>
                  <br>
                  <li>Với phương châm: ” Sự thành công của khách hàng cũng chính là sự thành công của chúng tôi ” . Chất lượng và giá cả của cơ sở balo túi xách BAG DTV luôn làm hài lòng những khách hàng khó tính nhất.
                     Toàn thể công ty rất hoan nghênh sự ghé thăm của quý khách. Chúng tôi rất mong nhận được sự quan tâm của quý khách khắp mọi miền đất nước.</li>
               </ul>
               <br>
               <p> <b> HÃY CHỌN CHÚNG TÔI ĐỂ ĐƯỢC PHỤC VỤ TỐT NHẤT!

                     <a href="contact.php" class="btn">Liên hệ ngay</a></b>
               </p>
            </ul>
         </div>

      </div>

   </section>

   <section class="reviews">

      <h1 class="title">Đánh giá khách hàng</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/pic-1.jpg" alt="">
            <p>
               Khi được biết tới bộ ba lô thời trang 5 món học sinh nên mình mua cho bé yêu nhà mình sử dụng.
               Nhưng mình sẽ tập trung nói về chất lượng của chiếc balo nhé!
               Mình cảm thấy đây là bộ balo khá tiện lợi, do đi kèm là túi nhỏ, ví và túi dây rút.
               Balo có ngăn chứa rộng, dây đeo chắc chắn và dễ dàng điều chỉnh kích cỡ cho phù hợp với vóc dáng nên khá thích hợp cho bé.
               Ngoài ra, màu sắc tươi tắn cùng họa tiết đám mây nổi bật sẽ giúp cho vẻ ngoài của bé thêm phần năng động và cá tính.
               Chất lượng sản phẩm tuyệt vời hơn cả mong đợi.
            </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>QuangViet11</h3>
         </div>

         <div class="box">
            <img src="images/pic-2.jpg" alt="">
            <p>
               Tôi thấy Balo nữ đi học thời trang kèm sticker kiểu dáng Hàn Quốc có thiết kế mang phong cách Hàn Quốc kèm theo các sticker đáng yêu phù hợp đi học, dạo phố, đi chơi,…
               Ngoài ra, chiếc balo này có khá nhiều màu sắc để các bạn có thể dễ dàng lựa chọn và phối đồ.
               Chất liệu vải Canvas chống nước, nên các bạn có thể yên tâm có thể bảo vệ được các vật dụng trong balo.
               Với thiết kế quai xách và quai đeo chắc chắn, tiện lợi cho các bạn khi sử dụng hơn.
               Nhiều ngăn tiện dụng cho các bạn để nhiều vật dụng cần thiết nhưng vai đeo vẫn cảm thấy ổn.
            </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>MongThanh123</h3>
         </div>

         <div class="box">
            <img src="images/pic-3.jpg" alt="">
            <p>
               Do được làm từ da PU nên tôi cũng khá yên tâm về độ bền cũng như tôi rất thích màu sắc của em này khá tinh tế.
               Ngoài ra, còn có thể vệ sinh nhanh và dễ dàng bằng khăn ẩm và các dung dịch làm sạch đã pha loãng.
               Thiết kế thêm nhiều ngăn nhỏ tiện dụng để đồ như ví, thìa, khóa, sổ tay… để các bạn nữ có thể để những vật dụng nhỏ đáng yêu.
               Chiếc túi này phù hợp với đi chơi nhiều hơn là đi làm, do tôi thấy kích thước của nó khá nhỏ.
               Ngoài ra chiếc túi này hiện nay có rất nhiều mẫu hàng nhái, nhưng tôi đã check và đúng hàng chính hãng nên rất yên tâm.
               Cảm ơn shop nhé.
            </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>KhanhDuyen312</h3>
         </div>

         <div class="box">
            <img src="images/pic-4.jpg" alt="">
            <p> Tôi mua balo laptop cao cấp Haras HRTK198 cho em trai mình dùng để đi học.
               Tôi thấy chiếc balo này được thiết kế tinh tế, hiện đại theo phong cách Hàn Quốc.
               Với form chuẩn dành cho các bạn nam thì khá thời trang và năng động.
               Phù hợp dành cho các hoạt động ngoài trời hoặc đi học, gặp đối tác mà vẫn lịch sự.
               Được gia công bằng chất liệu vải Polyester chất lượng cao, khó phai màu và bền bỉ.
               Phần dây đeo có thể điều chỉnh độ ngắn dài, được may bằng kỹ thuật gấp mép dây viền, thiết kế ôm rất sát hai vai.
               Nhược điểm của chiếc balo này là vai đeo tôi cảm thấy dễ đứt do khá mỏng.
               Bên cạnh đó, nếu đậy quá nhiều đồ thì không thể đậy hết balo, bị hở ra.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>ThanhMong</h3>
         </div>

         <div class="box">
            <img src="images/pic-5.jpg" alt="">
            <p>Hiện nay balo thời trang thiết kế bằng da đang là xu hướng của các bạn trẻ. Tôi cũng nằm trong số đó, nên đã lựa chọn mua Balo thời trang da cao cấp NV0279 dùng thử.
               Theo cảm nhận đầu tiên chạm vào balo thì tôi thấy balo hơi mỏng, tôi nghĩ đây chỉ nên sử dụng như món phụ kiện thôi chứ không nên sử dụng quá nhiều.
               Em này mang một kiểu dáng trẻ trung phong cách cùng với kích thước vừa phải nên tôi nghĩ khá tạo sức hút.
               Theo tôi thấy thì em này có một điểm tiện lợi là có ngăn trong và cả ngăn ngoài. Ngăn trong, tôi đựng cũng khá nhiều vật dụng cá nhân.
               Hiện tại mẫu chỉ có một màu đen duy nhất, hi vọng shop sẽ sản xuất thêm nhiều màu nữa.
            </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>VietQuang</h3>
         </div>

         <div class="box">
            <img src="images/pic-6.jpg" alt="">
            <p>Ba lô nữ thời trang cao cấp phong cách Châu Âu có thiết kế hiện đại, trẻ trung và sang trọng. Tôi cảm thấy khá thích kiểu dáng của em này.
               Em này có kích thước khá vừa phải nên có thể đựng được các vật dụng cần thiết cho bạn.
               Chất liệu của em này được làm từ da vi sợi cao cấp với màu xanh và hồng. Có thể cho các chị em các sự lựa chọn theo ý thích của mình và đồng thời cũng có thể phối với các bộ đồ dạo phố thì khá tuyệt vời.
               Nhưng balo mặc dù ghi xuất xứ thương hiệu tại Châu Âu, nhưng khi mình nhận là thương hiệu của Việt Nam.
               Màu sắc của balo không giống với hình ảnh lắm, nhưng mình thấy không tệ lắm do màu sắc ở ngoài nhìn tương đối ổn.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>DuyenKhanh</h3>
         </div>

      </div>

   </section>

   <!-- <section class="authors">

      <h1 class="title">greate authors</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/author-1.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="box">
            <img src="images/author-2.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="box">
            <img src="images/author-3.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="box">
            <img src="images/author-4.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="box">
            <img src="images/author-5.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="box">
            <img src="images/author-6.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>john deo</h3>
         </div>

      </div>

   </section> -->







   <?php include 'footer.php'; ?>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>
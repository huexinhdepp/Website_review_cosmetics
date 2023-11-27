<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/like_post.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Thể loại</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->




<section class="categories">

   <h1 class="heading">Bài viết về thể loại :</h1>

   <div class="box-container">
      <div class="box"><span>01</span><a href="category.php?category=nature">Chăm sóc da</a></div>
      <div class="box"><span>02</span><a href="category.php?category=eduction">Chăm sóc cổ</a></div>
      <div class="box"><span>03</span><a href="category.php?category=pets and animals">Chăm sóc mắt</a></div>
      <div class="box"><span>04</span><a href="category.php?category=technology">Chăm sóc trắng da</a></div>
      <div class="box"><span>05</span><a href="category.php?category=fashion">Chăm sóc cơ thể</a></div>
      <div class="box"><span>06</span><a href="category.php?category=entertainment">Chăm sóc nếp nhăn</a></div>
      <div class="box"><span>07</span><a href="category.php?category=movies">Chống nắng</a></div>
      <div class="box"><span>08</span><a href="category.php?category=gaming">Thực phẩm chức năng</a></div>
      <div class="box"><span>09</span><a href="category.php?category=music">Tẩy da chết</a></div>
      <div class="box"><span>10</span><a href="category.php?category=sports">Sữa rửa mặt</a></div>
      <div class="box"><span>11</span><a href="category.php?category=news">Tẩy trang</a></div>
      <div class="box"><span>12</span><a href="category.php?category=travel">Dầu gội</a></div>
      <div class="box"><span>13</span><a href="category.php?category=comedy">Dầu xả</a></div>
      <div class="box"><span>14</span><a href="category.php?category=design and development">Kem dưỡng da</a></div>
      <div class="box"><span>15</span><a href="category.php?category=food and drinks">Lotion</a></div>
      <div class="box"><span>16</span><a href="category.php?category=lifestyle">Toner</a></div>
      <div class="box"><span>16</span><a href="category.php?category=personal">Xịt khoáng</a></div>
      <div class="box"><span>17</span><a href="category.php?category=health and fitness">Trang điểm mặt</a></div>
      <div class="box"><span>18</span><a href="category.php?category=business">Trang điểm mắt</a></div>
      <div class="box"><span>19</span><a href="category.php?category=shopping">Trang điểm môi</a></div>
      <div class="box"><span>20</span><a href="category.php?category=animations">Mặt nạ</a></div>
   </div>

</section>

<?php include 'components/footer.php'; ?>







<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<header class="header">

   <section class="flex">

      <a href="home.php" class="logo"><img src="https://review-ty.com/assets/icons/logo.svg" alt="" /> </a>

      <form action="search.php" method="POST" class="search-form">
         <input type="text" name="search_box" class="box" maxlength="100" placeholder="Tìm kiếm" required>
         <button type="submit" class="fas fa-search" name="search_btn"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <nav class="navbar">
         <a href="home.php"> <i class="fas fa-angle-right"></i> Trang Chủ</a>
         <a href="posts.php"> <i class="fas fa-angle-right"></i> Bài Đăng</a>
         <a href="all_category.php"> <i class="fas fa-angle-right"></i>Danh mục</a>
         <a href="authors.php"> <i class="fas fa-angle-right"></i> Tác Giả</a>
      </nav>


      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p class="name"><?= $fetch_profile['name']; ?></p>
         <a href="update.php" class="btn">update profile</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">Đăng nhập</a>
            <a href="register.php" class="option-btn">Đăng ký</a>
         </div> 
         <a href="components/user_logout.php" onclick="return confirm('Bạn muốn đăng xuất?');" class="delete-btn">logout</a>
         <?php
            }else{
         ?>
            <p class="name">Xin mời đăng nhập !</p>
            <a href="login.php" class="option-btn">Đăng nhập</a>
         <?php
            }
         ?>
      </div>

   </section>
   <div class="menu">
      <a href="home.php"><i class="fas fa-home"></i> Trang Chủ</a>
      <a href="posts.php"><i class="fas fa-file-alt"></i> Bài Đăng</a>
      <a href="all_category.php"><i class="fas fa-list"></i> Danh mục</a>
      <a href="authors.php"><i class="fas fa-users"></i> Tác Giả</a>
</div>
<style>
    .menu {
        display: flex;
        list-style-type: none;
        padding: 0px;
        background-color: #333;
        margin-top: 10px;
        justify-content: center;
        border-radius: 10px;
        overflow: hidden;
    }

    .menu a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 25px;
        margin: 0 65px;
        font-style: normal;
        border-radius: 10px;
        transition: background-color 0.3s ease;
        
        
    }

    .menu a:hover {
        background-color: #555;
    }

    .menu i {
        margin-right: 8px;
    }
</style>

</header>




<?php

@include 'config.php';
@include 'connect.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}
if(isset($_POST['add_product']))
{
   $product_name=$_POST['product_name'];
   $product_price=$_POST['product_price'];
   $product_image=$_FILES['product_image']['name'];
   $product_image_temp_name=$_FILES['product_image']['tmp_name'];
   $product_image_folder='images/'.$product_image;
   $insert_query=mysqli_query($conn,"insert into `products` (name,price,image) values('$product_name','$product_price','$product_image')");
   if($insert_query)
   {
      move_uploaded_file($product_image_temp_name,$product_image_folder);
      
   }
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style4.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
   
<header>

<nav>
  <a href="index.php" class="head">ClientEase</a>
  <div class="right">
    <a href="admin_page.php" class="login">Add Products</a>
    <p><a href="view.php" class="login">View Products</p>
    <a href="feedback.php" class="login">Feedbacks</a>
    <a href="logout.php" class="login">logout</a>
    
  </div>
</nav>
</header>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      
   </div>

</div>
<div class="main_form">
   <h2>Add Product</h2>
   <form action="" class="add_product" method="post" enctype="multipart/form-data">
      <input type="text" name="product_name" class="input_fields" placeholder="Enter product name" required>
      <input type="number" name="product_price" class="input_fields" placeholder="Enter product price" required>
      <input type="file" name="product_image"  id="upload">
      <input type="submit" name="add_product" class="submit_field" value="Add Product">
   </form>
</div>

</body>
</html>
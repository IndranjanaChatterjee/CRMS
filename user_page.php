<?php

@include 'config.php';



@include 'connect.php';


session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="user_style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<header>

<nav>
  <a href="index.php" class="head">ClientEase</a>
  <div class="right">
    <p><a href="user_page.php" class="login"><i class="fa-solid fa-cart-shopping"></i>Cart</a></p>
    <a href="logout.php" class="login">logout</a>
    
  </div>
</nav>
</header>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      
      
   </div>

</div>
<div class="show">
   <h2>Show Data</h2>
   <section class="display">
        <table>
            <thead>
                
                <th class="th">Product Name</th>
                <th>Product Image</th>
                <th>Product Price</th>
                <th>Buy</th>
            </thead>
            <tbody>
                <?php

                 $display_products=mysqli_query($conn,"Select * from `products`");
                 if(mysqli_num_rows($display_products)>0)
                 {
                    while($row=mysqli_fetch_assoc($display_products))
                    {
                        $product_name=$row['name'];
                        ?>
                        <tr>
                    <td><?php echo $product_name ?></td>
                    
                    <td><img src="images/<?php echo $row['image']?>" alt="img"></td>
                    <td><?php echo $row['price']?></td>
                    <td>
                    <a href="delete.php?delete=<?php echo $row['id']?>" onclick="return alert('Successfully bought');">BUY</a>
                        
                    
                    
                    </td>
                </tr>
                        <?php
                    }
                 }
                 
                 
                ?>
                

            </tbody>
        </table>
    </section>
</div>

</body>
</html>
<?php


@include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
    <link rel="stylesheet" href="style5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>

<nav>
  <a href="index.php" class="head">ClientEase</a>
  <div class="right">
    <a href="admin_page.php" class="login">Add Products</a>
    <p><a href="view.php" class="login">View Products</p>
    <a href="logout.php" class="login">logout</a>
    
  </div>
</nav>
</header>
<div class="container">
    <section class="display">
        <table>
            <thead>
                
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Product Price</th>
                <th>Action</th>
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
                        <a href="#"><i class="fa-solid fa-trash"></i></a>
                        <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                    
                    
                    </td>
                </tr>
                        <?php
                    }
                 }
                 else
                 {
                    echo "no";
                 }
                ?>
                

            </tbody>
        </table>
    </section>
</div>
    
</body>
</html>
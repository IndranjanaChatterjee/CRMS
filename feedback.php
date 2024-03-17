<?php


@include 'connect1.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedbacks</title>
    <link rel="stylesheet" href="admin_feed.css">
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
    <section class="display">
        <table>
            <thead>
                
                <th class="th">Name</th>
                <th>Email</th>
                <th>Feedback</th>
                
            </thead>
            <tbody>
                <?php

                 $display_products=mysqli_query($conn,"Select * from `feedback`");
                 if(mysqli_num_rows($display_products)>0)
                 {
                    while($row=mysqli_fetch_assoc($display_products))
                    {
                        $product_name=$row['name'];
                        ?>
                        <tr>
                    <th><?php echo $product_name ?></th>
                    
                    
                    <th><?php echo $row['email']?></th>
                    <th><?php echo $row['response']?></th>
                    
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
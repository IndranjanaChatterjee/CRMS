<?php


@include 'connect1.php';

session_start();


if(isset($_POST['submit_feed']))
{
   $user_name=$_POST['user_name'];
   $user_email=$_POST['user_email'];
   $user_feedback=$_POST['feedback'];
   $insert_query=mysqli_query($conn,"insert into `feedback` (name,email,response) values('$user_name','$user_email','$user_feedback')");
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="feedback_style.css">
</head>
<body>
<header>

<nav>
  <a href="index.php" class="head">ClientEase</a>
  <div class="right">
    <p><a href="user_page.php" class="login">ShopIt</a></p>
    <a href="user_feedback.php" class="login">Feedback</a>
    <a href="logout.php" class="login">logout</a>
    
  </div>
</nav>
</header>
<div class="main_form">
   <h2>Give Feedback</h2>
   <form action="" class="add_product" method="post" enctype="multipart/form-data">
      <input type="text" name="user_name" class="input_fields" placeholder="Enter your name" required>
      <input type="email" name="user_email" class="input_fields" placeholder="Enter your email" required>
      <label for="feedback">Give your Feedback:</label>
      <textarea name="feedback" id="feedback" cols="30" rows="10" value="Give your feedback"></textarea>
      <input type="submit" name="submit_feed" class="submit_field" value="Submit">
   </form>
</div>
    
</body>
</html>
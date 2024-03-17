<?php
@include 'connect.php';
if(isset($_GET['delete']))
{
   $delete_id=$_GET['delete'];
   
   $delete_query=mysqli_query($conn,"delete from `products` where id=$delete_id");
   if($delete_query)
   {
      header('location:user_page.php');
      
   }
   
   
}
?>

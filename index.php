
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClientEase</title>
    <link rel="stylesheet" href="mainstyle.css">
    
</head>
<body>

<header>

<nav>
  <h1>ClientEase</h1>
  <div class="right">
    <p><a href="login_form.php" class="login">Login</a></p>
    <p><a href="register_form.php" class="login">Register</a></p>
  </div>
</nav>
</header>
<section class="about">
    <div class="left">
        <h2>About Us</h2>
        <p>
        Welcome to CRM Hub – Your All-in-One Solution for Streamlining Customer Relationships. Our intuitive platform empowers businesses to effortlessly manage contacts, track interactions, and drive growth. Join us and unlock the potential of seamless customer relations management today!
        </p>
        <a href="#faq"><button>Explore Now</button></a>
    </div>
    <div class="pic">
        <img src="crm.png" alt="img">
    </div>
</section>
<section class="faq" id="faq">
<div class="accordion-body">
  <div class="accordion">
    <h1 class="faq_h1">EXPLORE</h1>
    <hr>
    <div class="container">
      <div class="label">What is CRM (customer relationship management)?</div>
      <div class="content">CRM (customer relationship management) is the combination of practices, strategies and technologies that companies use to manage and analyze customer interactions and data throughout the customer lifecycle. The goal is to improve customer service relationships and assist with customer retention and drive sales growth.</div>
    </div>
    <hr>
    <div class="container">
      <div class="label">Can your CRM system integrate with other tools we're already using in our business?</div>
      <div class="content">Yes, our CRM software is designed to integrate seamlessly with a wide range of third-party applications and tools commonly used in businesses such as email marketing platforms, accounting software, and productivity tools. This ensures smooth data flow across your business ecosystem.
</div>
    </div>
    <hr>
    
    <div class="container">
      <div class="label">How does your CRM system help in improving customer engagement and retention?</div>
      <div class="content"> Our CRM solution provides tools for personalized communication, automated follow-ups, and customer segmentation, enabling you to engage with your audience in a more targeted and meaningful way. By understanding customer preferences and behavior, you can deliver tailored experiences that foster loyalty and satisfaction.</div>
    </div>
    
  </div>
  </div>

</section>
<hr>
<div class="footer">
  <p> @2024 ClientEase</p>
</div>
<script>
const accordion = document.getElementsByClassName('container');

for (i=0; i<accordion.length; i++) {
  accordion[i].addEventListener('click', function () {
    this.classList.toggle('active');
  })
}
</script>
    
</body>
</html>
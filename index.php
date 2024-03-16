
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    
</head>
<body>

<header>

<nav>
  <h1>ClientEase</h1>
  <div class="right">
    <p><a href="login.php" class="login">Login</a></p>
    <p><a href="register.php" class="login">Register</a></p>
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
      <div class="label">What is HTML</div>
      <div class="content">Hypertext Markup Language (HTML) is a computer language that makes up most web pages and online applications. A hypertext is a text that is used to reference other pieces of text, while a markup language is a series of markings that tells web servers the style and structure of a document. HTML is very simple to learn and use.</div>
    </div>
    <hr>
    <div class="container">
      <div class="label">What is CSS?</div>
      <div class="content">CSS stands for Cascading Style Sheets. It is the language for describing the presentation of Web pages, including colours, layout, and fonts, thus making our web pages presentable to the users. CSS is designed to make style sheets for the web. It is independent of HTML and can be used with any XML-based markup language. CSS is popularly called the design language of the web.
</div>
    </div>
    <hr>
    
    <div class="container">
      <div class="label">What is HTML</div>
      <div class="content">Hypertext Markup Language (HTML) is a computer language that makes up most web pages and online applications. A hypertext is a text that is used to reference other pieces of text, while a markup language is a series of markings that tells web servers the style and structure of a document. HTML is very simple to learn and use.</div>
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
    this.classList.toggle('active')
  })
}
</script>
    
</body>
</html>
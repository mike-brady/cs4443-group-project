<?php
require_once("db/conn.php");
$conn = connect();

// Add PHP to get order info from database to display bellow
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>The Hamburger Palace</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="custom.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">"Hamburgers to the World"</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/index.php#about">ABOUT</a></li>
        <li><a href="/index.php#services">SERVICES</a></li>
        <li><a href="/index.php#portfolio">CUSTOMERS</a></li>
        <li><a href="/index.php#pricing">PRICING</a></li>
        <li><a href="/index.php#order">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>The Hamburger Palace</h1>
  <p>Hamburgers are our thing!</p>
  <form>
    </div>
  </form>
</div>

<!-- Container (Order Confirmation Section) -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <h2>Thank you for your order!</h2><br>
      <h4>Order Details</h4>
      <table>
        <tr><th>Item</th><th>Qty</th><th>Item Total</th></tr>
        <tr><th>Items from order_lines table in DB go here</th><th>0</th><th>$0.00</th></tr>
        <tr><th colspan="2" style="text-align:right;">Total</th><th>$0.00</th></tr>
      </table>
    </div>
  </div>
</div>

<?php include("includes/footer.php") ?>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>

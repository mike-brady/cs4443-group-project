<?php
require_once("db/conn.php");
$conn = connect();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Add PHP to enter order into database
  // Redirect to order.php?id=[order_id_from_database]
}

$stmt = $conn->prepare("SELECT id, name, description, price, image FROM items");
$stmt->execute();

$items = $stmt->fetchAll();
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
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">CUSTOMERS</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#order">ORDER</a></li>
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

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About The Hamburger Palace</h2><br>
      <h4>The Hamburger Palace was founded in 1908 with the vision of hamburgers dancing through the founder's, Thomas Hamburger, head.</h4><br>
      <p>We will strive to make the best hamburgers in the world. They are not very good right now but we are still working on it. I realize we have been around for a long time, since 1908, but we have had some other stuff pop up. We didn't have time to dedicate to hamburgers. OK? We are trying our best! Also we are NOT located on top of an ancient burial ground. Who keeps telling people this?!</p>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-cutlery logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-thumbs-up logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission is to inspire the world through hamburgers.</h4><br>
      <p><strong>VISION:</strong> We are unshakeable, unless we are making milkshakes, in our beliefs.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>Join our team</h2>
  <h4>Interested in joing the Hamburger Palace team?</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-envelope logo-small"></span>
      <h4>EMAIL US</h4>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-phone logo-small"></span>
      <h4>CALL US</h4>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE US</h4>
    </div>
  </div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">


  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"I would fight someone for these hamburgers!"<br><span>Tabitha, Hackensack, NJ</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>Bruce, Ft. Walton Beach, FL</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company? I can't! I am in love with them!"<br><span>Timmy, Mobile, AL</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Meal Options</h2>
    <h4>Choose a meal you would enjoy</h4>
  </div>
  <div class="row slideanim">
    <?php foreach($items as $item): ?>
      <div class="col-sm-4 col-xs-12">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h1><?= $item['name']; ?></h1>
          </div>
          <div class="panel-body">
            <?= $item['description']; ?>
          </div>
          <div class="panel-footer">
            <h3>$<?= $item['price']; ?></h3>
            <a href="#order"><button class="btn btn-lg">Order</button></a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- Container (Order Section) -->
<div id="order" class="container-fluid">
  <div class="text-center">
    <h2>Order</h2>
  </div>
  <div class="row slideanim">
    <form method="POST">
      <table>
        <tr><th>Item</th><th>Description</th><th>Price</th><th>Qty</th><th>Total</th><tr>
      <?php foreach($items as $item): ?>
        <tr>
          <td><?= $item['name'] ?></td>
          <td><?= $item['description'] ?></td>
          <td>$<?= $item['price'] ?></td>
          <td><input type="number" name="<?= item['id'] ?>" value="0" step="1" min="0" onchange="updateTotal(<?= $item['price']; ?>, this.value, '<?= $item['id'] ?>-total');" /></td>
          <td id="<?= $item['id'] ?>-total">$0.00</td>
        </tr>
      <?php endforeach; ?>
      <tr><th colspan="4">Total</th><th id="total">$0.00</th><tr>
    </table>
    <hr>
    <table>
      <tr><th>Name:</th><td colspan="2"><input type="text" name="name" /></td></tr>
      <tr><th>Address:</th><td colspan="2"><input type="text" name="addrss" /></td></tr>
      <tr><th>Phone Number:</th><td><input type="text" name="phone" /></td><td>
      <input type="submit" value="Place Order" /></td></tr>
    </table>
    </form>
    <hr>
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
});

function updateTotal(price, qty, id) {
  itemTotal = price * qty;
  document.getElementById(id).innerHTML = "$" + itemTotal.toFixed(2);

  items = document.querySelectorAll('[id$="-total"]');
  total = 0;
  for(i=0; i<items.length; i++) {
    total += parseInt(items[i].innerHTML.substr(1));
  }
  document.getElementById("total").innerHTML = "$" + total.toFixed(2);
}
</script>

</body>
</html>

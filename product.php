<?php

session_start();
include('connection/dbconfig.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysql_query("SELECT * FROM `products` WHERE `code`='$code'");///
$row = mysql_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>
<html>
<head>
<title>Audios</title>
<link rel='stylesheet' href='css/main.css' type='text/css' media='all' />
</head>
<body>
<div class="container">
    <header>
        <img src="images/logo.png" alt="audios logo" class="logo">

        <nav>
            <a href="#" class="hide-desktop">
                <img src="images/Hamburger_icon.svg.png" alt="toggle menu" class="menu" id="menu">
            </a>
            <ul class="show-desktop hide-mobile" id="nav">
                <li id="exit" class="exit-btn hide-desktop">
                    <img src="images/exit.png" alt="exit menu">
                </li>
                <li><a href="product.php">Products</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>
        </nav>
    </header>


<h2>Latest Speaker's</h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php"><img src="cart-icon.png" /> Cart<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}



$result = mysql_query("SELECT * FROM `products`");
while($row = mysql_fetch_assoc($result)){
		echo "<div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div class='image'><img src='".$row['image']."' /></div>
			  <div class='name'>".$row['name']."</div>
		   	  <div class='price'>$".$row['price']."</div>
			  <button type='submit' class='buy'>Buy Now</button>
			  </form>
		   	  </div>";
        }
mysql_close($selected);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

<br /><br /> 
</div>

<footer>
            <div class="footer-container">
                <div class="container">
                    <a href="#">
                        <img src="images/logo.png" class="logo" alt="logo">
                        <p class="address">San Francisco, CA <br> USA</p> </p>
                        <ul class="footer-links">
                            
                            <li><a href="privacypolicy.html"> Privacy Policy</a></li>
                        </ul>
                    </a>
                </div>
            </div>
        </footer>

<script>
    var menu = document.getElementById('menu');
    var nav = document.getElementById('nav');
    var exit = document.getElementById('exit');

    menu.addEventListener('click', function(e)
    {
        nav.classList.toggle('hide-mobile');
        e.preventDefault();
    });

    exit.addEventListener('click', function(e)
    {
        nav.classList.add('hide-mobile');
        e.preventDefault();
    });

</script>
</body>
</html>
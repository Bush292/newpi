

<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> pizza</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css"> 
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="fotter.css">
</head>
<body>
	
	<div class="container">
		<header class="header">
			<a href="index.html" class="logo"><img src="/img/food1.png" alt="logo"></a>
			<!-- <input type="text" class="input input-addres" placeholder="Delivery Address"> -->
			<a href="/new.html" class="btn transparent">Our Team</a>
			<a href="/index.html" class="btn transparent">Home</a>
			<a href="" class="btn transparent">About us</a>
			<div class="buttons">
			
				<button class="button button-primary">
					<img src="img/user.svg" alt="user" class="button-icon">
					<span class="button-text">Login</span>
				</button>
				<?php
        $count=0;
        if(isset($_SESSION['cart']))
        {
          $count=count($_SESSION['cart']);
        }
        ?>
				<button class="button" id="cart-button">
					<!-- <img src="img/shopping-cart.svg" alt="shopping cart" class="button-icon"> -->
					<a href="mycart.php" class="button-icon" id="cart-button">My Cart (<?php echo $count; ?>)</a>
					<!-- <span class="button-text"> Basket</span>   -->
				
				</button>
			</div>
		</header>
	</div>

	<main class="main">
		<div class="container">
			<section class="restaurantas">
			<div class="section-heading">
				<h2 class="section-title">MENU</h2>
				<div class="card-info">
							<div class="raiting">
								<img src="img/star.svg" alt="raiting" class="raiting-star">
								4.5
							</div>
							<div class="price">From 600 ₹</div>
							<div class="category">Pizza </div>
						</div>	
			</div>
			<div class="cards">
				<div class="card wow fadeInUp" data-wow-delay="0.2s">
				<form  action="manage_cart.php" method="POST">
					<img src="img/pizza1.jpeg" class="card-img">
					<div class="card-text">
						<div class="card-heading">
							<h3 class="card-title card-title-reg">Margherita Pizza</h3>
						</div>
						<div class="card-info">
							<div class="ingredients">cheese sauce, Seasonings, etc.</div>
						</div>
						<div class="card-buttons">	
						<button type="submit" name="Add_To_Cart" class="button button-primary">
								<span class="button-card-text">Add To Cart</span> 
								<img src="img/cart.svg" alt="shopping-cart" class="button-card-image">
							</button>

							<input type="hidden" name="Item_Name" value="margherita"> 
							<input type="hidden" name="Price" value="150"> 

							<strong class="card-price-bold">150 ₹</strong>
						</div>	
					</div>
					</form>
				</div>
				<div class="card wow fadeInUp" data-wow-delay="0.4s">
				<form  action="manage_cart.php" method="POST">
					<img src="img/pizza2.jpeg" class="card-img">
					<div class="card-text">
						<div class="card-heading">
							<h3 class="card-title card-title-reg">Farmhouse Pizza</h3>
						</div>
						<div class="card-info">
							<div class="ingredients">Fresh veggies, Cheese sauce, seasonings, etc.</div>
						</div>
						<div class="card-buttons">
						<button type="submit" name="Add_To_Cart" class="button button-primary">
								<span class="button-card-text">Add To Cart</span> 
								<img src="img/cart.svg" alt="shopping-cart" class="button-card-image">
							</button>
							<input type="hidden" name="Item_Name" value="farmhouse pizza"> 
							<input type="hidden" name="Price" value="300"> 
							
							<strong class="card-price-bold">300 ₹</strong>
						</div>	
					</div>
</form>
				</div>
				<div class="card wow fadeInUp" data-wow-delay="0.6s">
				<form  action="manage_cart.php" method="POST">
					<img src="img/pizza3.jpeg" class="card-img">
					<div class="card-text">
						<div class="card-heading">
							<h3 class="card-title card-title-reg">Capsicum Corn Pizza</h3>
						</div>
						<div class="card-info">	
							<div class="ingredients">Capsicum, Corn, Cheese sauce, Seasonings, etc.</div>
						</div>
						<div class="card-buttons">
						<button type="submit" name="Add_To_Cart"class="button button-primary">
								<span class="button-card-text">Add To Cart</span> 
								<img src="img/cart.svg" alt="shopping-cart" class="button-card-image">
							</button>
							<input type="hidden" name="Item_Name" value="capsicum pizza"> 
							<input type="hidden" name="Price" value="150"> 
							<strong class="card-price-bold">150 ₹</strong>
						</div>	
					</div>
					</form>
				</div>
				<div class="card wow fadeInUp" data-wow-delay="0.2s">
				<form  action="manage_cart.php" method="POST">
					<img src="img/pizza4.jpeg" class="card-img">
					<div class="card-text">
						<div class="card-heading">
							<h3 class="card-title card-title-reg">Makhani Pizza</h3>
						</div>
						<div class="card-info">
							<div class="ingredients">Makhani sauce, Cheese sauce, Toppings, Seasoning, etc.</div>
						</div>
						<div class="card-buttons">
						<button type="submit" name="Add_To_Cart" class="button button-primary">
								<span class="button-card-text">Add To Cart</span> 
								<img src="img/cart.svg" alt="shopping-cart" class="button-card-image">
							</button>
							<input type="hidden" name="Item_Name" value="makhani pizza"> 
							<input type="hidden" name="Price" value="350"> 
							<strong class="card-price-bold">350 ₹</strong>
						</div>	
					</div>
					</form>
				</div>
				<div class="card wow fadeInUp" data-wow-delay="0.4s">
				<form  action="manage_cart.php" method="POST">
					<img src="img/pizza5.jpeg" class="card-img">
					<div class="card-text">
						<div class="card-heading">
							<h3 class="card-title card-title-reg">Sausage Pizza</h3>
						</div>
						<div class="card-info">
							<div class="ingredients">Chicken sausage, cheese sauce ,seasonings,etc.</div>
						</div>
						<div class="card-buttons">
						<button type="submit" name="Add_To_Cart" class="button button-primary">
								<span class="button-card-text">Add To Cart</span> 
								<img src="img/cart.svg" alt="shopping-cart" class="button-card-image">
							</button>
							<input type="hidden" name="Item_Name" value="chicken sausage"> 
							<input type="hidden" name="Price" value="400"> 
							<strong class="card-price-bold">400 ₹</strong>
						</div>	
					</div>
					</form>
				</div>

				<div class="card wow fadeInUp" data-wow-delay="0.6s"> 
				<form  action="manage_cart.php" method="POST">
					<img src="img/pizza6.jpeg" class="card-img">
					<div class="card-text">
						<div class="card-heading">
							<h3 class="card-title card-title-reg">chicken Tikka Pizza</h3>
						</div>
						<div class="card-info">
							<div class="ingredients">Smoked grilled chicken, cheese sauce, toppings, seasonings.</div>
						</div>
						<div class="card-buttons">
						<button type="submit" name="Add_To_Cart" class="button button-primary">
								<span class="button-card-text">Add To Cart</span> 
								<img src="img/cart.svg" alt="shopping-cart" class="button-card-image">
							</button>
							<input type="hidden" name="Item_Name" value="chicken tikka"> 
							<input type="hidden" name="Price" value="450"> 
							<strong class="card-price-bold">450 ₹</strong>
						</div>	
					</div>
					</form>
				</div>
			</div>	
		</section>
		</div>
	</main>

	<!-- <footer class="footer">
		<div class="container">
			<div class="footer-block"> -->
				<!-- <img src="img/logo.svg" alt="logo" class="logo footer-logo"> -->
				<!-- <nav class="footer-nav">
					<a href="#" class="footer-link">Restaurants</a>
					<a href="#" class="footer-link"> Couriers</a>
					<a href="#" class="footer-link"> Press-center</a>
					<a href="#" class="footer-link">Contacts</a>
				</nav> -->
				<!-- <div class="social-links">
					<a href="#" class="social-link"><img src="img/insta.svg" alt=""></a>
					<a href="#" class="social-link"><img src="img/fb.svg" alt=""></a> -->
					
				<!-- </div>
			</div> -->
			<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col">
				<h4>company</h4>
				<ul>
					<li><a href="#">about us</a></li>
					<li><a href="#">our service</a></li>
					<li><a href="#">privacy policy</a></li>
					<li><a href="#">affiliate program</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>get help</h4>
				<ul>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">shipping</a></li>
					<li><a href="#">returns</a></li>
					<li><a href="#">order status</a></li>
					<li><a href="#">payment options</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>online shop</h4>
				<ul>
					<li><a href="#">biryani</a></li>
					<li><a href="#">tanuki</a></li>
					<li><a href="#">sourthern tadka</a></li>
					<li><a href="#">Pizza</a></li>
					<li><a href="#">fries</a></li>
					<li><a href="#">Deserts</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>follow us</h4>
				<div class="social links">
					<a href="https://ibighit.com/bts/eng/"> <img src="/img/fb.svg" alt="logo"></a>
					<br></br>
					<a href="#"> <img src="/img/insta.svg" alt="logo"></a>
					<!-- <a href="#"><i class="fab fa- instagram"</i></a>
					<a href="#"><i class="fab fa- linkedin-in"</i></a> -->
				</div>
			</div>
		</div>
	</div>
</footer>
		</div>
	</footer>

	<!-- <div class="modal">
		<div class="modal-dialog">
			<div class="modal-header">
				<h3 class="modal-title">Basket</h3>
				<button class="close">&times;</button>
			</div>
			<div class="modal-body">
				<div class="food-row">
					<span class="food-name">Eel Roll Standard</span>
					<strong class="food-price">600 ₹</strong>
					<div class="food-counter">
						<button class="counter-button">-</button>
						<span class="counter">1</span>
						<button class="counter-button">+</button>
					</div>
				</div>
				<div class="food-row">
					<span class="food-name">California Standard</span>
					<strong class="food-price">600 ₹</strong>
					<div class="food-counter">
						<button class="counter-button">-</button>
						<span class="counter">1</span>
						<button class="counter-button">+</button>
					</div>
				</div>
				<div class="food-row">
					<span class="food-name">Oikawa Standards</span>
					<strong class="food-price">600 ₹</strong>
					<div class="food-counter">
						<button class="counter-button">-</button>
						<span class="counter">1</span>
						<button class="counter-button">+</button>
					</div>
				</div>
				<div class="food-row">
					<span class="food-name">Caesar Maci xl</span>
					<strong class="food-price">600 ₹</strong>
					<div class="food-counter">
						<button class="counter-button">-</button>
						<span class="counter">1</span>
						<button class="counter-button">+</button>
					</div>
				</div>
				<div class="food-row">
					<span class="food-name">Yasai maki standard 185 g</span>
					<strong class="food-price">350 ₹</strong>
					<div class="food-counter">
						<button class="counter-button">-</button>
						<span class="counter">1</span>
						<button class="counter-button">+</button>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<span class="modal-pricetag">2750 ₹</span>
				<div class="footer-buttons">
					<button class="button button-primary">Checkout</button>
					<button class="button">Cancel</button>
				</div>
			</div>
		</div>
	</div>
	<script src="js/wow.min.js"></script>
	<script src="js/main.js"></script>
</body> -->

</body>
</html>

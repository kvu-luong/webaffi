<!DOCTYPE html>
<html>
	<head>
		<title>HOME</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="../style/style.css">

	</head>
	<body>

		<header>
			<div class="menu-container">
			  <div class="menu" id="menu">
			    <input type="radio" id="radio-0" name="menu" checked />
				<label class="tab" for="radio-0">
			      <div class="item">
			        <i class="fas fa-home fa-2x"></i>
			        <div class="item-title">Home</div>
			      </div>
		    	</label>
			    
			    <input type="radio" id="radio-1" name="menu" />
				<label class="tab" for="radio-1">
			      <div class="item">
			        <i class="fas fa-chart-pie fa-2x"></i>
			        <div class="item-title">Promotion Code</div>
			      </div>
			    </label>
			    
			    <input type="radio" id="radio-2" name="menu" />
				<label class="tab" for="radio-2">
			      <div class="item">
			        <i class="fas fa-truck fa-2x"></i>
			        <div class="item-title">Blog</div> <!-- course, link , tips, news -->
			      </div>
			    </label>
			    
			    <input type="radio" id="radio-3" name="menu" />
					<label class="tab" for="radio-3">
			      <div class="item">
			        <i class="fas fa-shopping-cart fa-2x"></i>
			        <div class="item-title">About Us</div> <!-- collect all cheap and best product -->
			      </div>
			    </label>
			    
			    <input type="radio" id="radio-3" name="menu" />
					<label class="tab" for="radio-3">
			      <div class="item">
			        <i class="fas fa-shopping-cart fa-2x"></i>
			        <div class="item-title">Own Shop</div>
			      </div>
			    </label>

			  </div>
			</div>
		</header>
		<main>
			<div>
				<!-- for product category above + ads bot-->
				<div id="left-bar">
				</div>
				<div id="main-content">
					<div id="search"></div>
					<div id="product">
						<div id="hot-product"></div> <!-- best click & hot sale on other website -->
						<div>Ads</div>
						<div id="normal-product"></div> <!-- random product  -->
					</div>
				</div>
				<!-- for all ads -->
				<div id="right-bar">
				</div>
			</div>
			<div id="comments">
			</div>
			<div> Ads</div>
		</main>
		<footer>
			Copyright + GroupPage FB
		</footer>


		<script src="../script/jquery.min.js"></script>
		<script src="../script/script.js"></script>
	</body>
</html>
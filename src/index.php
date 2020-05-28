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
			<div id="main">
				<!-- for product category above + ads bot-->
				<div id="left-bar">
				</div>
				<div id="main-content">
					<div id="search">
						<div class="search-item">
							<select id="category-product">
								<option>Kem</option>
								<option>Banh</option>
								<option>Milk</option>
							</select>
						</div>
						<div class="search-item">
							<select id="price-detail">
								<option> < 1 tr</option>
								<option> 1tr ~ 5tr</option>
								<option> > 5tr </option>
							</select>
						</div>
						<div class="search-item">
							<select id="price-detail">
								<option> < 1 tr</option>
								<option> 1tr ~ 5tr</option>
								<option> > 5tr </option>
							</select>
						</div>
						<div class="search-item">
							<select id="nation-detail">
								<option>Vietnam</option>
								<option>China</option>
								<option>America</option>
							</select>
						</div>
						<div class="search-item">
							<button><img alt="icon-search" src="./assets/img/search.png"/></button>
						</div>
					</div>
					<div id="product">
						<div id="hot-product">
							<h4>Hot Product</h4>
							<div id="make-3D-space">
							    <div id="product-card">
							        <div id="product-front">
							        	<div class="shadow"></div>
							            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="" />
							            <div class="image_overlay"></div>
							            <div id="view_details">View details</div>
							            <div class="stats">        	
							                <div class="stats-container">
							                    <span class="product_price">$39</span>
							                    <span class="product_name">Adidas Originals</span>    
							                    <p>Men's running shirt</p>                                            
							                    
							                    <div class="product-options">
							                    <strong>SIZES</strong>
							                    <span>XS, S, M, L, XL, XXL</span>
							                    <strong>COLORS</strong>
							                    <div class="colors">
							                        <div class="c-blue"><span></span></div>
							                        <div class="c-red"><span></span></div>
							                        <div class="c-white"><span></span></div>
							                        <div class="c-green"><span></span></div>
							                    </div>
							                </div>                       
							                </div>                         
							            </div>
							        </div>
							        <div id="product-back">
								        <div class="shadow"></div>
							            <div id="carousel">
							                <ul>
							                    <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large.png" alt="" /></li>
							                    <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large2.png" alt="" /></li>
							                    <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large3.png" alt="" /></li>
							                </ul>
							                <div class="arrows-perspective">
							                    <div class="carouselPrev">
							                        <div class="y"></div>
								                    <div class="x"></div>
							                    </div>
							                    <div class="carouselNext">
							                        <div class="y"></div>
								                    <div class="x"></div>
							                    </div>
							                </div>
							            </div>
							            <div id="flip-back">
							            	<div id="cy"></div>
							                <div id="cx"></div>
							            </div>
							        </div>	  
							    </div>	
							</div>	
						</div> <!-- best click & hot sale on other website -->
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
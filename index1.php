
<?php
	
			// Start the session
			session_start();
			//stocker les ajouts dans la session
			if (isset($_GET["ajouter"]))
			{
			if (!isset($_SESSION["list"]))
			{
				$_SESSION["list"] = array();
			}
			array_push($_SESSION["list"], $_GET["ajouter"]);
			}
			//compter elements dans panier
			$panier_count = 0;
			if (isset($_SESSION["list"]))
			{
			$panier_count = sizeof($_SESSION["list"]);
			}
	?>
	<?php include "header/header1.php" ?>
	<body >					

			<aside id="slideshow">
				<nav>
				
				
					<div class="container">
						<div class="c_slider"></div>
						<div class="slider">
							<figure>
								<a href="#"><img src="css/image/seki.jpg" alt="" width="720" height="400" /></a>
								<figcaption>1# Sekiro 49.99€ </figcaption>

							</figure><!--
							--><figure>
								<a href="#"><img src="css/image/divi.jpg" alt="" width="720" height="400" /></a>
								<figcaption>2# The Division 2 45.99€</figcaption>
							</figure><!--
							--><figure>
								<a href="#"><img src="css/image/GtavS.jpg" alt="" width="720" height="400" /></a>
								<figcaption>3# GTA V 24.99€ </figcaption>

							</figure><!--
							--><figure>
								<a href="#"><img src="css/image/fifa19S.jpg" alt="" width="720" height="400" /></a>
								<figcaption>4# Fifa 19 24.99€</figcaption>
							</figure>
							
						</div>
					</div>
							
					<span id="timeline"></span>
				</nav>
				</aside>
	<hr />
	
	

		<section> 
		<nav id="section">
			<ul>
				<li>
				<a href="connect/c_article.php?ajouter=<img src='css/image/btd1.jpg' alt='Battlefield 1 PC' height='200px'/> 39,99 €">
				<img src="css/image/btd1.jpg" alt="Battlefield 1 PC" height="200px"/>
				<p>Battlefield 1 - 39.99€</p>
				</a>
				</li>

				<li>
				<a href="connect/c_article.php?ajouter=<img src='css/image/Rust.jfif' alt='Rust PC' height='200px'/> 19,99 €">
				<img src="css/image/Rust.jfif" alt="Rust PC" height="200px"/>
				<p>Rust - 19.99€</p>
				</a>
				</li>

				<li>
				<a href="connect/c_article.php?ajouter=<img src='css/image/bo2.jpg' alt='Bo2 PC' height='200px'/> 7,99 €">
				<img src="css/image/bo2.jpg" alt="Bo2 PC" height="200px"/>
				<p>CoD Black ops II - 7.99€</p>
				</a>
				</li>

				<li>
				<a href="connect/c_article.php?ajouter=<img src='css/image/sekiro.jpg' alt='Sekiro PC' height='200px'/> 49,99 €">
				<img src="css/image/sekiro.jpg" alt="Rust PC" height="200px"/>
				<p>Sekiro - 49.99€</p>
				</a>
				</li>

				<li>
				<a href="connect/c_article.php?ajouter=<img src='css/image/bbd.jpg' alt='Day by deadlight PC' height='200px'/> 9,99 €">
				<img src="css/image/bbd.jpg" alt="Day by deadlight PC" height="200px"/>
				<p>Day by deadlight - 9.99€</p>
				</a>
				</li>

				<li>
				<a href="connect/c_article.php?ajouter=<img src='css/image/gta.jpg' alt='gta' height='200px'/> 24,99 €">
				<img src="css/image/gta.jpg" alt="gta" height="200px"/>
				<p>Grand theft auto V - 24.99€</p>
				</a>
				</li>

				<li>
				<a href='connect/c_article.php?ajouter=<img src="css/image/pubg.jpg" alt="pubg" height="200px"/> 19,99 €'>
				<img src="css/image/pubg.jpg" alt="pubg" height="200px"/>
				<p>PlayerUnknown's... - 19.99€</p>
				</a>
				</li>

				<li>
				<a href='connect/c_article.php?ajouter=<img src="css/image/fifa19o.jpg" alt="fifa 19" height="200px"/> 24,99 €'>
				<img src="css/image/fifa19o.jpg" alt="fifa 19" height="200px"/>
				<p>Fifa 19 - 24.99€</p>
				</a>
				</li>


				<li>
				<a href='connect/c_article.php?ajouter=<img src="css/image/mortal.jpg" alt="Mortal combat 11" height="200px"/> 44,99 €'>
				<img src="css/image/mortal.jpg" alt="Mortal combat 11" height="200px"/>
				<p>Mortal combat 11 - 44.99€</p>
				</a>
				</li>

				<li>
				<a href='connect/c_article.php?ajouter=<img src="css/image/Acu.jpg" alt="Assasins Creed Unity" height="200px"/> 49,99 €'>
				<img src="css/image/Acu.jpg" alt="Assasin's Creed Unity" height="200px"/>
				<p>Assasin's Creed Unity - 49.99€</p>
				</a>
				</li>
			
			</ul>
		</nav>
		</section>


		
	
	</body>

  <?php include "footer.php" ?> 
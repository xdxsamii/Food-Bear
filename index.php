


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>FOOD BEAR</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="assets/css/form-elements.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
</head>

 <body>

    <header id="home" class="header">
		<div class="main_menu_bg navbar-fixed-top wow slideInDown" data-wow-duration="1s"> 
			<div class="container">	

			 <ul                class="nav navbar-nav navbar-right">
							<li class="active"><a href="#home">HOME</a></li>
							<li><a href="#features">CATEGORIES</a></li>
							<li><a href="#special">MENU ITEMS</a></li>
							<li><a href="#order">SERVICES</a></li>
							<li><a href="user/user.php">USER</a></li>
				</ul>			  
			</div>	
		</div>
		
	</header> 	
	
	
	<section id="banner" class="banner">
		<div class="container">
			<div class="row">
				<div class="main_banner_area text-center">
					<div class="col-md-5 col-sm-5 col-md-offset-7 col-sm-offset-7">
						<div class="single_banner_text wow zoomIn" data-wow-duration="1s"> 
							<p><b>WELCOME FOODBEAR</b></p>
							
							<div class="separetor"></div>
						</div>
					</div>
					
				</div>
				
				
			</div>
		</div>
	</section>
	
	

	
	<section id="features" class="features sections">
		<div class="container">
			<div class="row">
				<div class="features_content text-center">
					<div class="col-md-4">
						<div class="sinle_features wow slideInUp" data-wow-duration="1s">
							<img src="images/icon1.png" alt="" />
							<h5>Fast Food</h5>
							<p>Home Made&Healthy.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="sinle_features wow slideInUp" data-wow-duration="1.5s">
							<img src="images/icon2.png" alt="" />
							<h5>Drinks</h5>
							<p>Soft Drinks like cola,juices.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="sinle_features wow slideInUp" data-wow-duration="2s">
							<img src="images/icon3.png" alt="" />
							<h5>Ice Cream</h5>
							<p> There have many types of ice creams. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	
	<section id="special" class="special sections">
<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "test1");





if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="show.php"</script>';
			}
		}
	}
}

?>

	
		<br/>
		<div class="container">
			<br />
			<br />
			<br />
			<h1 class="tit" id="TT">FOOD MENU</h1><br />
			<br /><br />
			<style type="text/css">
			.tit{  
				    font-size: 80px;
					margin: 0;
	                padding: 0 0 20px;
	                color:#778899;
	                text-align: center;
			}
			</style>
			<?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="user/user.php">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">Tk <?php echo $row["price"]; ?></h4>

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" onsubmit="confirmInput()" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			
		</div>
	</div>
	<br/>


	</section>


	
	
	<section id="order" class="order sections">
		<div class="container">
			<div class="row">
				<div class="main_order">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single_order wow slideInLeft" data-wow-duration="2s">
							<div class="tit">

								<!-- <img src="images/signature.png" margin-right="100" alt="" /> -->
                                  <img src="images/fb.png" margin-right="120"  >
							</div>
							<style type="text/css">
			.tit{  
				    font-size: 80px;
					margin: 0;
	                padding: 0 0 20px;
	                color:#778899;
	                text-align: center;
			}
			</style>
							<div class="head_title text-center">
								<h2>Services</h2>
								<div class="separetor"></div>
							</div>
							
							<p>We provide the best quality.it's 100% halal.</p>
							<p>We deliver food within half an hours in Dhaka city.</p>
							<p>Delivery Charge free. </p>
							<p>Please, place your oder asap</p>
						</br>
							
							<div class="tit">

								<h5>Contact Us:</h5>
								<h6>+880168927144</h6>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single_order wow slideInRight" data-wow-duration="2s">
							<img src="images/abimg.png" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	
	
	

	
	<div class="scrollup">
		<a href="#"><i class="fa fa-chevron-up"></i></a>
	</div>
	
	 <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script> 
	
  </body>
</html>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title>timezone</title>
  
   
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  	<!--banner-->
	<section id="banner" class="banner">
		<div class="bg-color">
			<nav class="navbar navbar-default navbar-fixed-top">
			  <div class="container">
			  	<div class="col-md-12">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				    
					  <h1 class="white"></h1>
					  
				    </div>
				    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
				      <ul class="nav navbar-nav">
				        <li class="active"><a href="#banner">Home</a></li>
				        
				       
				  
				        
				      </ul>
				    </div>
				</div>
			  </div>
			</nav>
			<div class="container">
				<div class="row">
					<div class="banner-info">
						
						
						
						<div class="banner-text text-center">
						
						
							<h1 class="white">TIME ZONE</h1>
							
							<p>if you want to check the time <br> please enter your Region and City</p><br>
							
							<form action="" method="POST">
								<p>REGION</P> <input type="text" style="background-color:Black;" value="" name="region" id="region"><br><br>
								<P>CITY</P><input type="text" style="background-color:Black;" value="" name="city" id="city"><br>
								<input type="submit" name= "btn" class="btn btn-appoint" onclick="">
							</form>
							
							
							
							
							<!--<a href="#contact" class="btn btn-appoint" >click</a>-->
							
							<!--<button class="btn btn-appoint" onclick="myFunction()">Click</button>-->
							
						
						</div>
						
						
						
						<div class="overlay-detail text-center">
						
						<h1 class="white">Time is : 
							<?php
						
							if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btn'])){
								select();
							}
						
							function select()
							{
								//$coun = '<script> document.getElementById("country").value </script>';
								//$reg = '<script> document.getElementById("region").value </script>';
								//$coun="Asia";
								//$reg="Karachi";
								//$var1 = '<h1 id="demo" class="white"></h1>';
								//$var2 = '<h1 id="demo1" class="white"></h1>';
								
								
								//if( isset($_POST['submit']) ){
								if (isset($_POST["region"]) && isset($_POST["city"])){
								
								$region = $_POST["region"];
								$city =  $_POST["city"];
								date_default_timezone_set("$region/$city");
								echo date("h:i:sa");
								//}
								}
							}
						?>
						</h1>

						<?php
							//$s= '<h1 id="demo" class="white"></h1>';
							//$html = str_get_content($s);
							//$ret = $html->find('div[id=demo]');
							//echo $ret;						
						?>
						
						<!--
						<h1 id="demo" class="white"></h1>
						<h1 id="demo1" class="white"></h1>
						-->
						
						<script type="text/javascript">
						/*		
								function myFunction() {
									
									var coun = document.getElementById("country").value;
									var reg = document.getElementById("region").value;
									document.getElementById("demo").innerHTML = coun;
									document.getElementById("demo1").innerHTML = reg;
								
								}
						*/
						</script>
								
								
			             </div>		
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ banner-->
	
  </body>
</html>
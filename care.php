<!DOCTYPE html>
<html>
<head>
	<title>costumer</title>

 	
 	<style type="text/css">
 		body{
			margin: 0px;
			padding: 0px;

		}
		#container{
			width: 100%;
			height: auto;
		}
		.header{
			width: 100%;
			height: 70px;
		}

 	 .nav{
			width: 100%;
			height: 70px;
			background: black;
			opacity: 0.7;
		
			position: fixed;
		}
		.nav .logo{
			margin: 0px 0px 0px 50px;
			float: left;
			font-size: 30px;
			color:white;

		}
		.nav .menubar{
			margin: 20px 0px 0px 300px;
			float: left;

		}
		.nav .menubar a{
			font-size: 20px;
			text-decoration: none;
			margin-left: 50px;
			color: white;
		}
		.nav .menubar input[type="submit"]{
			width: 100px;
			height: 35px;
			margin-left: 30px;
			background: yellow;
			color: black;
			padding: 5px;
		}
		.box1{
			width: 100%;
			height: auto;
			margin-top: 0px;
			border: 1px solid transparent;

		}
		.box1 h1{
			margin: 100px 0px 0px 550px;
		}
		.box1 p{
			margin: 30px 0px 50px 470px;
		}


			.footer{
				width: 100%;
				height: 300px;
				background: black;
				float: left;
				margin-top: 30px;
				padding-top: 30px;
			}
			.footer P3{
				font-size: 20px;
				color: white;
				margin: 0px 0px 0px 250px;
				
			}
			.footer P4{
				font-size: 15px;
				color: white;
				margin: 0px 0px 0px 1110px;
				float: left;
				
			}
			.footer input[type="submit"]{
				width: 309px;
				height: 35px;
			margin: 10px 0px 0px 600px;
			padding:0px 25px 0px 25px;
			font-size: 20px;

			}
			.footer input[type="email"]{
				width: 300px;
				height: 35px;
				margin: -50px 0px 0px 600px;
				border:2px solid red;
				background: transparent;
				font-size: 15px;
			}
			.box1  .type input[type="text1"]{
				width: 380px;
				height: 33px;
				margin: 0px 0px 5px 0px;

			}
			.box1 .type input[type="text"]{
				width: 380px;
				height: 33px;
				margin: 0px 0px 5px 0px;
			}
			.box1 .type textarea{
				width: 380px;
				height: 80px;
				margin: 0px 0px 5px 0px;

			}
			.box1  .type input[type="Submit"]{
				width: 130px;
				height: 35px;
				margin: 0px 0px 5px 0px;
				background: black;
				color: white;
				border: 2px solid
				black;

			}
			.box1 .type{
			    width: 30%;
			    float: left;
			    margin-left: 350px;

				
			}
			.box1 .write {
				width: 30%;
				
				float: left;
				margin: 0px 0px 0px 100px;
			}
				.footer .icons{
				background-image: url(font.png);
				background-position: -23px -28px;
				width: 47px;
				height: 48px;
				float: left;
				margin: -80px 0px 0px 250px;
			}
			.footer .icons2{
				background-image: url(font.png);
				background-position: -249px -24px;
				width: 48px;
				height: 45px;
				float: left;
				margin:-80px 0px 0px 300px ;
			}
			.footer .icons3{
				background-image: url(font.png);
				background-position: -247px -112px;
				width: 48px;
				height: 48px;
				float: left;
				margin:-80px 0px 0px 350px ;
			}


			
		
			

	</style>
</head>
<body>
<div id="container">
		<div class="header">
			<div class="nav">
				<div class="logo"><b>Selling<font color="red" size="12px">.</font></b></div>
				<div class="menubar"><a href="Acadamy.php">HOME</a>
					<a href="home.html">SHOP</a>
					<a href="home.html">SALE</a>
					<a href="care.php">CUSTOMER CARE</a>
					<a href="#">STOCKISTS</a>
					
				<a href="http://localhost/hello/getename3.php">	<input type="submit" name="btn" value="LOG IN" ></a>
				</div>
			</div>
			<div class="box1"><h1>CUSTOMER CARE</h1><<br><p>I'm a paragraph. Click her to add your own text and edit me. It's easy<br>
				just click "Edit Text" or double click me to add your own content<br> and make changes to the font I'm a great place for you to tell a story and <br>your users known a little more about you</p><br><br><div class="write"><p1>Have any quations or concerns?</p1><br><p1>We're always ready to help!</p1>
				<br><br><p1><b>Call us at</b></p1><br><br><p1>123-456-7890</p1><br><p1>or send us an email to:</p1><br><p1>info@mysite.com</p1></div>



				
			    <div class="type">
			    	<input type="text1" name="name" placeholder="Name">
				<br>
				<input type="text" name="email" placeholder="Email"><br>
				<input type="text" name="subject" placeholder="Subject">
				<br>
				<textarea name="message" placeholder="Message"></textarea>
				<br>
				<input type="Submit" name="btn" value="Submit">
			    </div>



			    </div>
			<div class="footer">
			<p3>STAY CONNECTED</p3>

			<p3>BE OUR FRIEND </p3>
			<p3>NEED ASSISTANCE?</p3>
				<p4><br> 123-456-879<br>info@mysite.com</p4>
				<input type="email" name=" emal" placeholder="Enter your email here*">
				<br>
				<input type="submit" name="subsribe" value="Subscribe Now">
				<div class="icons"></div>
			<div class="icons2"></div>
			<div class="icons3"></div>



		</div>
	</div>




</body>
</html>
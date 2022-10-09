<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> AgroFair | Home	</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>
<style>

body{
	overflow-x: hidden;
}

	a{
		margin-top: 20px;
		font-size: 20px;
	}
	
.navbar-brand{
	font-size: 30px;
}
	
	.navbar-default{
		background-color: transparent;
	}

	.about h1{
		font-size: 50px;
	}

	.about p{
		font-size: 20px;
		color: white;
	}

	@font-face {
	font-family: "Helvetica";
	src: url('fonts/helv.ttf');
	}

	@font-face{
		
	font-family: "SF UI Display";
	src:url('fonts/sf.otf');
	}

	.container{
		margin-top: 20px;
	}

	#head{
		margin-left: 30px;
		margin-top: 10px;
		font-size: 40px;
	}

	body{
	background-color: #f9f9f9;
	height: 100%;
	}

	.main{
	background-color: #f9f9f9;
	min-height: 100vh;
	}

	h4{
	font-family: "Helvetica";
	font-weight: lighter;
	font-size: 23px;
	margin-left: 30px;
	}


	img#logo{
		width: 100px;
		height: 100px;
	}

	img#andro{
		width: 450px;
		margin: 0px;
	}

	@media screen and (max-width: 500px){
		img#andro{
			width: 300px;
		}
	}

	.slant{  
    width: 0;
	height: 0;
	border-style: solid;
	border-width: 0 0 500px 1920px;
	border-color: transparent transparent #92ef00 transparent;
	margin-top: -500px;
	}

	.about{
		width: 100%;
		height: 90px;
		background-color: #92ef00;
		margin-top: 0px;
	}

	.inp{
		background-color: #f7f7f7;
		margin-bottom: 50px;
		border: none;
		width: 50%;
		box-shadow: none;
		border-bottom: 1px solid black;
		border-radius: 0;
		padding: 0px;
	}

	.inp:focus{
		box-shadow: none;
		border-bottom: 1px solid #7ed221;
	}

	.btn{
		margin:auto;
		margin-top: 80px;
		background-color: #92ef00;
		border: none;
		height: 60px;
		font-size: 20px;
		padding-top: 15px;
		font-weight: bold;
		max-width: 270px;
		margin-left: 0px;
		border-radius: 5px;
		-webkit-transition:0.3s ease;
	}

	.btn:hover{
		background-color: #6eb420;
	}

	.btn:active .btn-primary:active{
		background-color: #6eb420;
	}

</style>
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
			<h1 class="navbar-brand">Agrofair</h1>
		</div>
		
	</div>
</nav>
<div class="container main">
<div class="row">
		<div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
		<h1 id="intro">Introducing the Agrofair Webapp</h1><br><br>
		<p>We feel that most farmers in India today are not in-line with continuously changing technology. Agrofair attempts to bridge this gap between the two by providing recommendations of crop based on the weather, soil type, rain and tries to increase the overall profitability of the farmer.
</p>
<p>
Currently, our product uses RGB image recognition in order to determine the soil type and geolocation to aggregate weather information, thus giving inputs on what crop the farmer should plant in order to make the most money.
</p>
We plan to 1. Add support for using an IoT device in order to determine various properties of the soil 2. Add english-text-to-hindi-speech support to increase user accessibility 3. Collect data based on the %age of farmers using our app and fine-tune our recommendations to enable them to earn more overall</p>
			<form>
				<a href="/login.php" type="submit" class="btn btn-primary btn-block">
					Start Using Agrofair
				</a>
			</form>
	</div>
	<div class="col-lg-4 col-lg-offset-2 col-md-5 col-md-offset-5 col-sm-4 col-sm-offset-4">
		<img src="img/andro.png" id="andro">
	</div>
	</div>
</div>
<div class="slant">	
</div>
<div class="about">
</div>
</body>
</html>
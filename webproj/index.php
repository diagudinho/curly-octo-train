<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
	<title>Web Project</title>
</head>
<style type="text/css">
	

.glow {
  font-size: 75px;
  color: #000000;
  font-family: 'Tangerine', serif;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
  position: absolute;
		top: 25%;
		left: 50%;
		transform: translate(-50%,-50%);
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
body {
  font-family: Arial, Helvetica, sans-serif;
}
input[type="button"]
{
	border-radius: 15px;
	width: 30%;
	height: 20%;
	background-color: black;
	color: white;
	border-color: silver;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 20px 16px;
  text-decoration: none;
  float: right;


}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 18px 16px ;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #cc0052;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ff4d94;
}

.dropdown:hover .dropdown-content {
  display: block;
}

	.one
	{
		position: relative;
		width: 100%;
		background-size: cover;
	}
	.three
	{	
		padding-bottom: 230px;
		padding-top: 230px;
	}
	div
	{
		font-size: 40px;
	}
	input[type="button"]
	{
		font-size: 25px;
		font-style: italic;
		font-family: "Times New Roman";
		padding: 10px;
	}
	img
	{
		background-size: 100%;
	}
	.centered
	{
		position: absolute;
		top: 20%;
		left: 50%;
		transform: translate(-50%,-50%);
	}
	
	.container
	{
		position: relative;
		width: 100%;
	}
	.image
	{
		opacity: 1;
		display: block;
		width: 100%;
		height: auto;
		transition: .5s ease;
		backface-visibility: hidden;
	}
	.middle
	{
		transition: .5s ease;
		opacity: 3;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);

	}
	.container:hover.image
	{
		opacity: 0.3;
		
	}
	.container:hover.middle
	{
		opacity: 1;
	}
	
	
</style>
<body>
<center>
	<div class="navbar">
  <a href="contactus.php">Contact Us</a>
  <a href="aboutus.php">About Us</a>
  <div class="dropdown">
    <button class="dropbtn">Home 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="allcrops.php">Food crops</a>
     <a href="allfruits.php">Fruits</a>
    </div>
  </div> 
</div>


<div class="one" id="slide_bg">
		<img name="slide"  src="img5.jpeg" style="width: 100%">
		<div class="glow"><h1>Online Crop Inventory</h1>
		<a href="map.php">
		<input type="button" name="Show" value="Show"></a></div></div>
	

<div class="container">
	<img src="img12.jpeg" class="image" style="width: 100%">
	<div class="centered"><h1>Let's discover the different Seasons</h1></div>
	<div class="middle">
		<a href="seasons.php"><input type="button" value="One Click to Discover" style="width: 100%"></a>
		
	</div>
</div>
<div class="container"> 
	<img src="img11.jpeg" class="image" style="width: 100%">
	<div class="centered"><h1>Types of Crops</h1>
		<a href="d1.php?tname=Kharif"><input type="button" name="kharif" value="Kharif" ></a>
		<a href="d1.php?tname=Rabi"><input type="button" name="rabi" value="Rabi"></a>
		<a href="d1.php?tname=Summer"><input type="button" name="summer" value="Summer"></a>
</div>

</center>
<script type="text/javascript">
	var i=0;
	var images=[];
	var time=2000;
	images[0]="img5.jpeg";
	images[1]="img8.jpeg";
	images[2]="img6.jpeg";
	images[3]="img9.jpeg";

	function imageSlide()
	{
		document.slide.src=images[i];
		if(i<images.length-1)
		{
			i++;
		}
		else
		{
			i=0;
		}
		setTimeout("imageSlide()",time);
	}
	window.onload=imageSlide;
</script>

</body>
</html>
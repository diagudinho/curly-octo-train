<!DOCTYPE html>
<html>
<head>
	<title>Web Project</title>
	<style type="text/css">
		body
		{
			background-image: url(img16.jpeg);
		}
		h1
		{
			color: #C70039 ;
			font-style: italic;
			background-color: lightgreen;
		}
		p{
			font-size: 45px;
			color: #C70039 ;
			background-color: lightgreen;
			font-style: bold;
		}
	</style>
</head>
<body>
	<center>
	<h1>Welcome to the</h1>
	<p>CROP INVENTORY SYSTEM</p>
	<?php
	 $host ="localhost";
        $uname = "root";
        $pwd = '';
        $db_name = "cropinventory";

	?>
	<img src="karnataka52.gif" alt="Karnataka Map" title="Karnataka Map"/ usemap="#kmap">
	<map name="kmap">
		<area shape="circle" coords="105,589,65" href="data.php?district=19" title="Uttara Kannada" >
		<area shape="circle" coords="142,393,62" href="data.php?district=20" title="Belgavi" name="Belgavi">
		<area shape="circle" coords="320,282,63" href="data.php?district=21" title="Bijapur" name="Bijapur">
		<area shape="circle" coords="471,203,67" href="data.php?district=26" title="Gulbarga" name="Gulbarga">
		<area shape="circle" coords="528,89,48" href="data.php?district=27" title="Bidar" name="Bidar">
		<area shape="circle" coords="191,500,37" href="data.php?district=16" title="Dharwad" name="Dharwad">
		<area shape="circle" coords="189,721,53" href="data.php?district=5" title="Shimoga" name="Shimoga">
		<area shape="circle" coords="466,385,49" href="data.php?district=23" title="Raichur" name="Raichur">
		<area shape="circle" coords="364,480,40" href="data.php?district=24" title="Koppal" name="Koppal">
		<area shape="circle" coords="230,602,42" href="data.php?district=18" title="Haveri" name="Haveri">
		<area shape="circle" coords="449,828,57" href="data.php?district=4" title="Tumkur" name="Tumkur">
		<area shape="circle" coords="342,894,50" href="data.php?district=12" title="Hassan" name="Hassan">
		<area shape="circle" coords="301,683,39" href="data.php?district=7" title="Davangere" name="Davangere">
		<area shape="circle" coords="615,802,48" href="data.php?district=28" title="Chikkaballapur" name="Chikkaballapur">
		<area shape="circle" coords="674,881,48" href="data.php?district=3" title="Kolar" name="Kolar">
		<area shape="circle" coords="437,953,46" href="data.php?district=10" title="Mandya" name="Mandya">
		<area shape="circle" coords="201,916,43" href="data.php?district=14" title="Dakshina Kannada" name="Dakshina Kannada">
		<area shape="circle" coords="389,1033,47" href="data.php?district=8" title="Mysore" name="Mysore">
		<area shape="circle" coords="573,900,30" href="data.php?district=1" title="Bangalore Urban" name="Bangalore Urban">
		
		<area shape="poly" coords="188,335,240,295,329,384,266,436" href="data.php?district=22" title="Bagalkot" name="Bagalkot">
		<area shape="poly" coords="253,449,307,447,307,549,253,548" href="data.php?district=17" title="Gadag" name="Gadag">
		<area shape="poly" coords="105,773,146,758,182,846,124,867" href="data.php?district=15" title="Udupi" name="Udupi">
		<area shape="poly" coords="402,292,541,262,538,319,400,342" href="data.php?district=29" title="Yadgir" name="Yadgir">
		<area shape="poly" coords="188,824,308,754,344,802,241,879" href="data.php?district=13" title="Chikkamaglur" name="Chikkamaglur">
		<area shape="poly" coords="300,572,459,493,487,547,313,631" href="data.php?district=25" title="Bellary" name="Bellary">
		<area shape="poly" coords="400,1076,519,1009,587,1052,430,1121" href="data.php?district=9" title="Chamrajnagar" name="Chamrajnagar">
		<area shape="poly" coords="508,874,544,820,627,857,624,883,559,857,532,889" href="data.php?district=2" title="Bangalore Rural" name="Bangalore Rural">
		<area shape="poly" coords="224,997,282,945,315,971,310,998,340,1032,301,1065" href="data.php?district=11" title="Kodagu" name="Kodagu">
		<area shape="poly" coords="503,898,527,884,576,940,568,1005,503,976" href="data.php?district=30" title="Ramanagara" name="Ramanagara">
		<area shape="poly" coords="437,614,482,695,525,680,541,712,510,731,477,704,382,797,328,746,352,665" href="data.php?district=6" title="Chitradurga" name="Chitradurga">
		
	</map>
	</center>
</body>
</html>

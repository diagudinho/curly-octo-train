<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<title>Show Image in PHP - Campuslife</title>
<style type="text/css">
    div.polaroid {
  width: 30%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.container {
  text-align: left;
  padding: 10px 20px;
}
</style>
</head>
    <body>
   <?php
        $host ="localhost";
        $uname = "root";
        $pwd = '';
        $db_name = "cropinventory";

        $file_path = 'crop details/';
        $result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
        mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
        $image_query = mysqli_query($result,"select crop_id,crop_name,image from crops");
        while($rows = mysqli_fetch_array($image_query))
        {
            $img_id =$rows['crop_id'];
            $img_name = $rows['crop_name'];
            $img_src = $rows['image'];
            $imageType="jpeg";

        ?>

        <div class="polaroid">
            
        <img src="./cropdetails/<?php echo $img_src; ?>" alt="" title="<?php echo $img_name; ?>" style="width: 100%" class="img-responsive"/>
        <div class="container">
            <p><?php echo $img_id; ?></p>
        <p><strong><?php echo $img_name; ?></strong></p></div>

        </div>

        <?php
        
        }
    ?>
    
</body>
</html>


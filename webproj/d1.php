<!DOCTYPE html>
<html>
<head>
  <title>Web Project</title>
  <style type="text/css">
    body
    {
      background-color: lightyellow;
    }
    div.polaroid {
  width: 30%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  display: inline-grid;
  
}

div.container {
  text-align: left;
  padding: 10px 20px;
}
body
{
  
  padding-left:40px;
}

</style>
</head>
<body>

<?php
session_start();
        $t_name=$_GET['tname'];
        $count=0;
        $host ="localhost";
        $uname = "root";
        $pwd = '';
        $db_name = "cropinventory";
        $result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
        mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());

        $query="select crop_name,sci_name,image from crops c, typeof t where c.crop_id=t.crop_id and t.type_id in (select type_id from croptype where type_name='$t_name')";
        $result1=mysqli_query($result,$query);
        ?>
        <center><h1><?php echo "$t_name"; ?> Crops</h1></center>
        <?php
        while($rows = mysqli_fetch_array($result1))
        {
            $img_id =$rows['crop_name'];
            $img_name = $rows['sci_name'];
            $img_src = $rows['image'];
            $count++;
        ?>

        <div class="polaroid">
         
        <img src="./cropdetails/<?php echo $img_src; ?>" alt="" title="<?php echo $img_name; ?>" style="width: 100%" class="img-responsive"/>
        <div class="container">
          <center>
            <p><?php echo $img_id; ?></p>
        <p><strong><?php echo $img_name; ?></strong></p></center></div>
       </div>


        <?php
        
        }
?>
<center><h1>The crops grown in <?php echo "$t_name"; ?> are <?php echo "$count"; ?>!</h1></center>
</body>
</html>
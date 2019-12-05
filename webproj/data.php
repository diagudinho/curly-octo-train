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
  display: inline-block;
}

div.container {
  text-align: left;
  padding: 10px 20px;
}
</style>
</head>

<?php
session_start();
$region_id=$_GET['district'];
        $host ="localhost";
        $uname = "root";
        $pwd = '';
        $db_name = "cropinventory";
        $result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
        mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());

        $query="select crop_name,sci_name,image from crops where crop_id in (select crop_id from belongs where region_id='$region_id') ";
        $result1=mysqli_query($result,$query);
        while($rows = mysqli_fetch_array($result1))
        {
            $img_id =$rows['crop_name'];
            $img_name = $rows['sci_name'];
            $img_src = $rows['image'];
            

        ?>

        <div class="polaroid">
            
        <img src="./cropdetails/<?php echo $img_src; ?>" alt="" title="<?php echo $img_name; ?>" style="width: 100%" class="img-responsive"/>
        <div class="container">
          <center>
          <table>
            <tr><?php echo $img_id; ?>
        <p><strong><?php echo $img_name; ?></strong></tr></p>
        </table>
      </center></div>
       </div>

        <?php
        
        }
    ?>
    </html>
<?php
include("connection.php");
$query="select quantity from motorsproduct";
$sql=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($sql)

?>



<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <link rel="stylesheet" type="text/css" href="motorsproduct.css">
   

  
</head>
<body>
  <!-- <center> -->
  <form method="post" action="motorsproductadd.php" autocomplete="off" style="padding-top: 100px;padding-left: 400px">

    <fieldset class="fieldset" style="background-color: rgba(0, 0, 0, 0.1);width: 48%;">
    <center><h4 >Add Product</h4></center>
    <label>Enter Product Name</label><br>
    <input type="text" name="productname" id="search" class="label1" style="width: 400px;height: 40px; padding: 5px 15px;margin: 2px 0;" required=""><br>
        <div class="list-group list-group-item-action" id="content" style="width: 400px; ">
        </div>
        
    <label>Enter Quantity</label><br>
<input type="text" name="qty1" class="label1" style="width: 400px;height: 40px;padding: 5px 10px;margin: 2px 0;" required=""><br>
   
              
   


    <label>Enter Price</label><br>
   <input type="text" name="price" class="label1" style="width: 400px;height: 40px;padding: 5px 10px;margin: 2px 0;" required=""><br>

   <input type="text" name="qty" class="label1" style="width: 400px;height: 40px;padding: 5px 10px;margin: 2px 0;" value="<?php echo $result['quantity'] ?>" hidden ><br>

    <center><input type="submit" name="submit" value="Add" style="height: 40px; width: 100px;"><br><br></center>
    </fieldset>
  </form>
<!-- </center> -->
</body>
</html>

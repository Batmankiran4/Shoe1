<!DOCTYPE html>
<html lang="en">
<head>
    
    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
  <title>Product Search</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" type="text/css" href="motorsproduct1.css">
  
</head>
<!-- <center style="padding-top: 100px;"> -->
<!-- <fieldset style="font: 14px Roboto,Arial,Helvetica,sans-serif;
     float: inherit;   
    padding: 10px;
    margin-bottom: 30px;
    z-index: 2;
    width: 40%;
    box-sizing: border-box;"> -->
<body style="padding-left: 20px">
<!-- <div class="wrapper"><center>
    </center> -->
  
  
  
  <table id="customers" class="content-table" style="">
    <thead>
    
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
        
    </tr>
  </thead>
  <tbody>
    <?php
    
        
          $pname = (isset($_POST['pname']) ? $_POST['pname']:'');

          $quantity = (isset($_POST['qty']) ? $_POST['qty']:'');

          $price = (isset($_POST['price']) ? $_POST['price']:'');
         
          
        
          if(empty($pname)){
            $pname = "";
          }
          if(empty($quantity)){
            $quantity = "";
          }
          

          if(empty($price)){
            $price = "";
          }
          
        
           
          $servername = "localhost";
          $username  = "root";
          $password = "";
          $dbname = "shoe";
          $conn =  new mysqli($servername,$username,$password,$dbname);
              
        
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        
        
        $sql = "select * from motorsproduct where (pname like '%$pname%') and (quantity like '%$quantity%') and (price like '%$price%')";
            $result = mysqli_query($conn,$sql);
        if($result){
            if ($result->num_rows > 0) {
                while($rows=$result->fetch_assoc()) {
     ?>
    <tr class="active-row">
           <td><?php echo $rows['id'];?></td>
        <td><?php echo $rows['pname'];?></td>
        <td><?php echo $rows['quantity'];?></td>
        <td><?php echo $rows['price'];?></td>
        
    </tr>
    <?php
                }
            } 
        }
        else{
          echo "database error";
        }
        $conn->close();
     ?>
     </tbody>
</table>

    <br>
    <br>
    <!-- <center> -->
      
        <a href="motorsproduct.php"> <button class="submit2">Another search</button></a>
        <span ></span>
      </center>
      
          <br>
    <br>
</div>
</fieldset>
</center>
</body>
</html>
  





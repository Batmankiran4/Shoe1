<!DOCTYPE html>
<html lang="en">
<head>
    
    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
  <title>Product Add</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" type="text/css" href="showproduct.css">
  
</head>

<body style="padding-left: 20px">

  
  
  
  <table id="customers" class="content-table" style="">
    <thead>
    
    <tr>
        
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
        
    </tr>
  </thead>
  <tbody>
    <?php
    
        
         include("connection.php");
              
        
        
        
        $sql = "select * from motorsproduct";
            $result = mysqli_query($conn,$sql);
        if($result){
            if ($result->num_rows > 0) {
                while($rows=$result->fetch_assoc()) {
     ?>
    <tr class="active-row">
          
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
      
        <!-- <a href="motorsproduct.php"> <button class="submit2">Another search</button></a>
        <span ></span> -->
      </center>
      
          <br>
    <br>
</div>
</fieldset>
</center>
</body>
</html>
  





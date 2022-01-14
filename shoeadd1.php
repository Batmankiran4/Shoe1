<?php

include("connection.php");
if(isset($_POST['submit']))
{
    $pname = $_POST['pname'];
    $qty = $_POST['qty'];
    $price=$_POST['price'];

      

    foreach($pname as $index => $names)
    {

        

         $p_name = $names;
         $p_name=$pname[$index];
         $p_qty=$qty[$index];
         $p_price=$price[$index];

        
          // $totalquantity = ((int) $qtyy + (int) $p_qty);
          
         $query="UPDATE `motorsproduct` SET `quantity`=quantity+$p_qty,`price`=price+($p_qty*$p_price) WHERE pname='$p_name' ";
      
          
         $query1="INSERT INTO `motorsproduct`(`pname`, `quantity`, `price`) VALUES ('$p_name','$p_qty','$p_price')";
            
         
        $query_run=mysqli_query($conn,$query);
        $query_run1=mysqli_query($conn,$query1);

          if($query_run or $query_run1)
           {
         
                echo "sucess<br>";

            }
          
      }

}

?>
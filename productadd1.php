<?php
session_start();
include("connection.php");
$query="select * from motorsproduct";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if ($total!=0)
 {
    ?>
    <table border="1">
        
    
    <?php
    $i=1;







    while($result=mysqli_fetch_assoc($data))
    {


          

           $qtyy = $result['quantity'];

            if(isset($_SESSION['quantity']))
        {
            $_SESSION['pname']['quantity']++;
            echo "<script>alert('".$result['quantity']." has been added to your cart.');</script>";

        }

          
    }
}
else
{
    echo "record not found";
}
?>
</table>

<?php












include("connection.php");
if(isset($_POST['submit']))
{
    $pname = $_POST['pname'];
    $qty = $_POST['qty'];
    $price=$_POST['price'];

     //echo $pname,$qty,$price;

        $totalquantity = ((int) $qtyy + (int) $qty);

         $query="UPDATE `motorsproduct` SET `quantity`='$totalquantity',`price`='$price' WHERE pname='$pname'";

         $query1="INSERT INTO `motorsproduct`(`pname`, `quantity`, `price`) VALUES ('$p_name','$p_qty','$p_price')";


        $query_run=mysqli_query($conn,$query);
        $query_run1=mysqli_query($conn,$query1);

          if($query_run or $query_run1)
           {
         // $_SESSION['status']="sucess";
         // header("location:motorsproductsales.php");
         // exit(0);
                echo "sucess";

            }

     
    foreach($pname as $index => $names)
    {

        

         $p_name = $names;
         
         $p_qty=$qty[$index];
         $p_price=$price[$index];

        // $query="INSERT INTO `motorsproduct`(`pname`, `quantity`, `price`) VALUES ('$p_name','$p_qty','$p_price')";

         $totalquantity = ((int) $qtyy + (int) $p_qty);

         $query="UPDATE `motorsproduct` SET `quantity`='$totalquantity',`price`='$p_price' WHERE pname='$p_name'";

         $query1="INSERT INTO `motorsproduct`(`pname`, `quantity`, `price`) VALUES ('$p_name','$p_qty','$p_price')";


        $query_run=mysqli_query($conn,$query);
        $query_run1=mysqli_query($conn,$query1);

          if($query_run or $query_run1)
           {
         // $_SESSION['status']="sucess";
         // header("location:motorsproductsales.php");
         // exit(0);
                echo "sucess";

            }

       //    else
       //    {
       //       $pname1 = $_POST['pname'];
       // $qty1 = $_POST['qty'];
       // $price1=$_POST['price'];


       //  foreach($pname as $index => $names)
       //    {

        

       //   $p_name1 = $names;
       //   $p_qty1=$qty1[$index];
       //   $p_price1=$price1[$index];

       //  // $query1="UPDATE `motorsproduct` SET `quantity`='$p_qty1',`price`='$p_price1' WHERE pname='$p_name1'";

       //   $query1="INSERT INTO `motorsproduct`(`pname`, `quantity`, `price`) VALUES ('$p_name1','$p_qty1','$p_price1')";

       //  $query_run1=mysqli_query($conn,$query1);


                
       //                if($query_run1)
       //                  {
       //                     // $_SESSION['status']="sucess";
       //                    // header("location:motorsproductsales.php");
       //                  // exit(0);
       //                  echo "update";

       //                 }


       //     }
       //    }



      }

   



}

    
    // else if(isset($_POST['submit']))
    // {
    //    // $_SESSION['status']="not sucess";
    //    // header("location:motorsproductsales.php");
    //    // exit(0);
       
         


    // }



     
    


// else
// {

     

        
// }

?>
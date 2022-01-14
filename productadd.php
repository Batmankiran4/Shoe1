<?php session_start(); ?>
<?php
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
        ?>
        <tr>
            <!-- <td> <?php echo $i;$i++; ?> </td> -->

            <td> <?php echo $result['pname'];?> 
            </td>
            <td> <?php echo $result['quantity'];?>
            </td>

            <td> <?php echo $result['price'];?>
            </td>

            
                
            </td>
            
            

        </tr>
        <?php
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
$query="select quantity from motorsproduct";
$sql=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($sql)

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>Dashboad admin</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>  
</head>

<body>


 <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong></strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>



 <input type="checkbox" id="nav-toggle">
 <div class="asidebar">
   <div class="sidebar-brand">
     <h2><i class="fa fa-car fa"></i><span>Dashbord</span></h2>
   </div>
    <div class="sidebar-menu">
      <ul>
        <li>
          <a href="menu.php" class="active">
            <span class="las la-igloo"></span>
            <span>Current Product</span>
          </a>
        </li>
        <li>
          <a href="additems.php">
            <span class="las la-users"></span>
            <span> Add Products</span>
          </a>
        </li>
        <li>
          <a href="">
            <span class="las la-receipt"></span>
            <span> Sales Product</span>
          </a>
        </li>
        <li>
          <a href="">
            <span class="las la-clipboard-list"></span>
            <span> option3</span>
          </a>
        </li>
        <li>
          <a href="">
            <span class="fa fa-refresh "></span>
            <span> option4</span>
          </a>
        </li>
        <li>
          <a href="">
            <span class="fa fa-cog"></span>
            <span> option5</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="main-content">
    <header>
      <h2 style="color: #FF0000;">
      <label for="nav-toggle">
          <span class="las la-bars"></span>
        </label>
        Dashbord
      </h2>
      <div class="search-wrapper">
        <span class="las la-search"></span>
        <input type="search" placeholder="Search here" />
      </div>
      <div class="user-wrapper">
        <img src="img/2.jpg" width="30px" hight="30px" alt="">
        <div>
          <h4> Name name</h4>
          <small>Operator</small>
        </div>
      </div>
    </header>
     <main>
      <div class="cards">
        <div class="card-single">
          <div>
            <h1>54</h1>
            <span>Customers</span>
          </div>
          <div>
            <span class="las la-users"></span>
          </div>
        </div>
        <div class="card-single">
          <div>
            <h1>*</h1>
            <span>Option</span>
          </div>
          <div>
            <span class="lab la-google-wallet"></span>
          </div>
        </div>
        <div class="card-single">
          <div>
            <h1>*</h1>
            <span>Option</span>
          </div>
          <div>
            <span class="lab la-google-wallet"></span>
          </div>
        </div>

      </div>


          <div class="card-body">
              
              <form method="post" action="productadd1.php" >

                <div class="main-form mt-3 border-bottom">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for="">Prodect name</lebel>
                                <input type="text" name="pname[]" class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for="">Quantity</lebel>
                                <input type="text" name="qty[]" class="form-control"  placeholder="Enter Quantity">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for="">Price</lebel>
                                <input type="text" name="price[]" class="form-control"  placeholder="Enter Price">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="main-form mt-3 border-bottom">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="pname[]" class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="qty[]" class="form-control"  placeholder="Enter price">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="price[]" class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="main-form mt-3 border-bottom">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="pname[]" class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="qty[]" class="form-control"  placeholder="Enter price">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="price[]" class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="main-form mt-3 border-bottom">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="pname[]" class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="qty[]" class="form-control"  placeholder="Enter price">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="price[]" class="form-control"  placeholder="Enter Quantity">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="main-form mt-3 border-bottom">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="pname[]" class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="qty[]" class="form-control"  placeholder="Enter price">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="price[]" class="form-control"  placeholder="Enter Quantity">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="main-form mt-3 border-bottom">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="pname[]" class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="qty[]" class="form-control"  placeholder="Enter price">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="price[]" class="form-control"  placeholder="Enter Quantity">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="main-form mt-3 border-bottom">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="pname[]" class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="qty[]" class="form-control"  placeholder="Enter price">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="price[]" class="form-control"  placeholder="Enter Quantity">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="main-form mt-3 border-bottom">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="pname[]" class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="qty[]" class="form-control"  placeholder="Enter price">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="price[]" class="form-control" placeholder="Enter Quantity">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="main-form mt-3 border-bottom">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="pname[]" class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="qty[]" class="form-control"  placeholder="Enter price">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="price[]" class="form-control"  placeholder="Enter Quantity">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="main-form mt-3 border-bottom">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="pname[]" class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="qty[]" class="form-control"  placeholder="Enter price">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="price[]" class="form-control"  placeholder="Enter Quantity">
                            </div>
                        </div>

                    </div>
                </div>


                <div class="paste-new-forms">

                </div>
                <button type="submit" name="submit" class="btn btn-primary">save data</buttton>
              </form>
          </div>
          <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function(){
                $(document).on('click','.remove-btn',function(){
                    $(this).closest('.main-form').remove();
                });
               $(document).on('click','.add-more-form',function(){
                   $('.paste-new-forms').append('<div class="main-form mt-3 border-bottom">\
                    <div class="row">\
                        <div class="col-md-4">\
                            <div class="form-group mb-2">\
                                <lebel for=""></lebel>\
                                <input type="text" name="pname[]" class="form-control" required placeholder="Enter Name">\
                            </div>\
                        </div>\
                        <div class="col-md-4">\
                            <div class="form-group mb-2">\
                                <lebel for=""></lebel>\
                                <input type="text" name="qty[]" class="form-control" required placeholder="Enter price">\
                            </div>\
                        </div>\
                        <div class="col-md-4">\
                            <div class="form-group mb-2">\
                                <lebel for=""></lebel>\
                                <input type="text" name="price[]" class="form-control" required placeholder="Enter Name">\
                            </div>\
                        </div>\
                        <div class="col-md-4">\
                            <div class="form-group mb-2">\
                                <br>\
                                <button type="button" class="remove-btn btn btn-danger">Remove</button>\
                            </div>\
                        </div>\
                    </div>\
                    </div>');               
               });
            });
        </script>
        <div class="addb">
        <a href="javascript:void(0)" class="add-more-form float-inherit btn btn-primary" style="padding-left:38px;padding-right:37px;">Add</a>
        </div>
    </main>
   
  </div>
</body>
</html>
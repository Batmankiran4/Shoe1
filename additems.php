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
          <a href="motorsproductsales.php">
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
            <h1>***</h1>
            <span>Option</span>
          </div>
          <div>
            <span class="lab la-google-wallet"></span>
          </div>
        </div>


     
         <div class="card-single">
          <div>
            <h1>***</h1>
            <span>Option</span>
          </div>
          <div>
            <span class="lab la-google-wallet"></span>
          </div>
        </div>



        <div class="card-single">
          <div>
            <h1>***</h1>
            <span>Option</span>
          </div>
          <div>
            <span class="lab la-google-wallet"></span>
          </div>
        </div>

      </div>

      <div class="recent-grid">
                  <div class="add-items">
                      <!-- <center> -->
                         <form method="post" action="motorsproductadd.php" autocomplete="off" style="padding-top: 100px;padding-left: 400px;">

                            <fieldset class="card" style="background-color: rgba(0, 0, 0, 0.1);">
                                <center><h4 >Add Product</h4></center>
                                 <label class="level">Enter Product Name</label>
                                  <input type="text" name="productname" id="search" class="label1" >
                                  <div class="list-group list-group-item-action" id="content" style="width: 400px; ">
                                  </div>
    
                                   <label class="level">Enter Quantity</label>
                                   <input type="text" name="qty1" class="label1">

                                   <label class="level">Enter Price</label>
                                   <input type="text" name="price" class="label1">
                                   <input type="text" name="qty" class="label1"  value="<?php echo $result['quantity'] ?>" hidden >
                                   <center><input type="submit" name="submit" value="Add" style="height: 40px; width: 100px;"></center>
                            </fieldset>
                           </form>
                     <!-- </center> -->   
             </div>
      </div>

    </main>
  </div>
</body>
</html>

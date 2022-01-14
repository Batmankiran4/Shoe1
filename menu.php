<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>Dashboad admin</title>
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="menu.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                            <a href="" class="active">
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
          <small>Post</small>
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
          <div class="projects">
             <div class="card">
                 <div class="card-head">
                    <h3>Current Product List</h3>
                    <button>See all <span class="las la-arrow-right"></span></button>
                 </div>
                 <div class="card-body">
                     <div class="table-responsive">
                      <table width="100%">
                       <thead>
                           <tr>
                               <td>Product Name</td>
                               <td>Quantity</td>
                               <td>Price</td>
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
                     </div>
                 </div>
             </div>
          </div>
          <div class="customers"></div>
      </div>

    </main>
  </div>
</body>
</html>

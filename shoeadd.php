<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
  </head>
<body>
  
    <div class="container">
        <div class="row">
            <div class="col-md-12">

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

                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Shoes details
                            <a href="javascript:void(0)" class="add-more-form float-end btn btn-primary">Add Shoes</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="shoeadd1.php" method="POST">
                        
                            <div class="main-form mt-3 border-bottom">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">Product Name</label>
                                            <input type="text" name="pname[]" class="form-control" required placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">Enter Quantity</label>
                                            <input type="text" name="qty[]" class="form-control" required placeholder="Enter Phone Number">
                                        </div>
                                    </div>


                                 <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">Product Price</label>
                                            <input type="text" name="price[]" class="form-control" required placeholder="Enter Price">
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="paste-new-forms"></div>

                            <button type="submit" name="submit" class="btn btn-primary">Add Shoe</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {

            $(document).on('click', '.remove-btn', function () {
                $(this).closest('.main-form').remove();
            });
            
            $(document).on('click', '.add-more-form', function () {
                $('.paste-new-forms').append('<div class="main-form mt-3 border-bottom">\
                                <div class="row">\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">Product Name</label>\
                                            <input type="text" name="pname[]" class="form-control" required placeholder="Enter Name">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">Enter Quantity</label>\
                                            <input type="text" name="qty[]" class="form-control" required placeholder="Enter Quantity">\
                                        </div>\
                                    </div>\
                                 <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">Enter Price</label>\
                                            <input type="text" name="price[]" class="form-control" required placeholder="Enter Price">\
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

</body>
</html>


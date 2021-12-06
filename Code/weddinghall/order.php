<?php include('config/constants.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width" />
    <title>Wedding Restaurant</title>
    <meta name="description" content="Vietnamese">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script type="text/javascript" src="js/critical.js"></script>
    <link rel="stylesheet" href="css/cookieconsent.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="css./styles.css">
    <link rel="shortcut icon" type="image/x-icon" href="./images/logopage.png" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@Weddingrestaurant">
    <meta name="twitter:title" content="Wedding Restaurant">
    <meta name="twitter:description" content="Steakhouse &amp; Grill | Almancil - Algarve, Portugal">
    <meta name="twitter:creator" content="@Weddingrestaurant">
    <meta name="twitter:image:src" content="images/image-shared.jpg">
    <meta property="og:title" content="Wedding Restaurant" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="index.php" />
    <meta property="og:image" content="images/image-shared.jpg" />
    <meta property="og:description" content="Vietnamese" />
    <meta property="og:site_name" content="Wedding Natural" />
</head>

<body>
    <header>
        <div class="black-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="tel:0123456789">
                            <img src="./images/phone-icon.png" alt="Phone">
                            <span class="hidden-xs">0123456789</span>
                            <span class="visible-xs-inline-block">Call now</span>
                        </a>
                        <a href="https://www.google.pt/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+C%C3%B4ng+ngh%E1%BB%87+Th%C3%B4ng+tin+%C4%90HQG+TP.HCM/@10.8700089,106.8008654,17z/data=!3m1!4b1!4m5!3m4!1s0x317527587e9ad5bf:0xafa66f9c8be3c91!8m2!3d10.8700089!4d106.8030541"
                            target="_blank">
                            <img src="./images/directions-icon.png" alt="directions">
                            <span>directions</span>
                        </a>
                        <div class="social">
                            <span class="hidden-xs">follow us</span>

                            <a href="https://www.facebook.com/vietkitoo.01072001" target="_blank"><img
                                    src="./images/fb.png" alt="Facebook" class="hidden-xs"></a>
                            <a href="https://www.instagram.com/foodysaigon/" target="_blank"><img
                                    src="./images/instagram.png" alt="Instagram" class="hidden-xs"></a>
                            <a></a>
                            <a href="./admin/Login.php"> Log in admin</a>
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="index.php"><img src="./images/logo.png "
                                        alt="Parrilla natural"></a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href=" index.php">home</a></li>
                                    <li><a href=" Weddinghall.php">Wedding hall</a></li>
                                    <li><a href="Menu.php">Menu</a></li>
                                    <li><a href="Gallery.php">Gallery</a></li>
                                    <li class="active"><a href="categories.php" class="btn btn-default">book now</a>
                                    </li>
                                </ul>
                                <div class="visible-xs">
                                    <hr class="hide-line">
                                    <a href="https://www.google.pt/maps/place/Gourmet+Natural/@37.0722239,-8.0548575,17z/data=!3m1!4b1!4m5!3m4!1s0xd1ab47bf0ab0241:0x247897df028f1744!8m2!3d37.0722239!4d-8.0526688"
                                        target="_blank" class="btn-directins">
                                        <img src="./images/directions-icon.png" alt="directions">
                                        <span>directions</span>
                                    </a>
                                    <div class="social">
                                        <a href="https://www.facebook.com/gourmetnatural/" target="_blank"><img
                                                src="/static/images/fb.png" alt="Facebook"></a>
                                        <a href="https://www.instagram.com/gourmetnatural/" target="_blank"><img
                                                src="/static/images/instagram.png" alt="Instagram"></a>

                                    </div>
                                </div>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php 
        //CHeck whether food id is set or not
        if(isset($_GET['food_id']))
        {
            //Get the Food id and details of the selected food
            $food_id = $_GET['food_id'];

            //Get the DEtails of the SElected Food
            $sql = "SELECT * FROM tbl_food WHERE id=$food_id";
            //Execute the Query
            $res = mysqli_query($conn, $sql);
            //Count the rows
            $count = mysqli_num_rows($res);
            //CHeck whether the data is available or not
            if($count==1)
            {
                //WE Have DAta
                //GEt the Data from Database
                $row = mysqli_fetch_assoc($res);

                $title = $row['title'];
                $price = $row['price'];
                $image_name = $row['image_name'];
            }
            else
            {
                //Food not Availabe
                //REdirect to Home Page
                header('location:'.SITEURL);
            }
        }
        else
        {
            //Redirect to homepage
            header('location:'.SITEURL);
        }
    ?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">

            <h2 class="text-center text-white">Order n</h2>
            <form action="" method="POST" class="order">
                <fieldset>
                    <legend>Selected Food</legend>

                    <div class="food-menu-img">
                        <?php 
                        
                            //CHeck whether the image is available or not
                            if($image_name=="")
                            {
                                //Image not Availabe
                                echo "<div class='error'>Image not Available.</div>";
                            }
                            else
                            {
                                //Image is Available
                                ?>
                        <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>"
                            alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                        <?php
                            }
                        
                        ?>

                    </div>

                    <div class="food-menu-desc">
                        <h3><?php echo $title; ?></h3>
                        <input type="hidden" name="food" value="<?php echo $title; ?>">

                        <p class="food-price">$<?php echo $price; ?></p>
                        <input type="hidden" name="price" value="<?php echo $price; ?>">

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>

                    </div>

                </fieldset>

                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Vijay Thapa" class="input-responsive"
                        required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. hi@vijaythapa.com" class="input-responsive"
                        required>
                    <div class="order-label">Date Wedding</div>
                    <textarea name="date_wedding" placeholder="Ex: 15/10/2022" class="input-responsive"
                        required></textarea>
                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive"
                        required></textarea>


                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

            <?php 

                //CHeck whether submit button is clicked or not
                if(isset($_POST['submit']))
                {
                    // Get all the details from the form

                    $food = $_POST['food'];
                    $price = $_POST['price'];
                    $qty = $_POST['qty'];
                    
                    $total = $price * $qty; // total = price x qty 
         
                    $order_date = date("Y-m-d h:i:sa"); //Order DAte

                    $status = "Ordered";  // Ordered, On Delivery, Delivered, Cancelled

                    $customer_name = $_POST['full-name'];
                    $customer_contact = $_POST['contact'];
                    $customer_email = $_POST['email'];
                    $customer_address = $_POST['address'];
                    $date_wedding = $_POST['date_wedding'];
                    
                    //Save the Order in Databaase
                    //Create SQL to save the data
                    $sql2 = "INSERT INTO tbl_order SET 
                        food = '$food',
                        price = $price,
                        qty = $qty,
                        total = $total,
                        order_date = '$order_date',
                        status = '$status',
                        customer_name = '$customer_name',
                        customer_contact = '$customer_contact',
                        customer_email = '$customer_email',
                        customer_address = '$customer_address',
                        date_wedding = '$date_wedding'
                    ";

                    //echo $sql2; die();

                    //Execute the Query
                    $res2 = mysqli_query($conn, $sql2);

                    //Check whether query executed successfully or not
                    if($res2==true)
                    {
                        //Query Executed and Order Saved
                        $_SESSION['order'] = "<div class='success text-center'>Food Ordered Successfully.</div>";
                        header('location:'.SITEURL);
                    }
                    else
                    {
                        //Failed to Save Order
                        $_SESSION['order'] = "<div class='error text-center'>Failed to Order Food.</div>";
                        header('location:'.SITEURL);
                    }

                }
            
            ?>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <?php include('partials-front/footer.php'); ?>
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
                                    <li class="active"><a href="Menu.php">Menu</a></li>
                                    <li><a href="Gallery.php">Gallery</a></li>
                                    <li><a href="order.php" class="btn btn-default">book now</a></li>
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
        if(isset($_SESSION['order']))
        {
            echo $_SESSION['order'];
            unset($_SESSION['order']);
        }
    ?>


    <div class="wrapper">
        <div class="homapage-banner" style="background-image:url(images/7\ am.jfif) !important; ">
            <div class="container">
                <div class="scroll">
                    <img src="https://www.gourmetnaturalrestaurant.com/uploads/media/e8cd4e3d9291e3c0323465eaa9f0c152.png"
                        alt="{% trans " />
               </div>
            </div>
         </div>
         <div class="events">
            <div class="container">
               <div class="row">
                  <div class="   ">
                     <h1 style="text-align:center">
                        Menu
                     </h1>
                     <p style="text-align:center">
                        Thực đơn được tập hợp tất cả các món ăn truyền thống của Việt Nam và cũng có nhiều món chế biến từ phương pháp nước ngoài.
                     </p>
               
                  </div>
               </div>
               <hr class="hide-line"/>
               <hr class="hide-line"/>
               <div class="row">
                  <div class="event">
                  <?php 
                //Create SQL Query to Display CAtegories from Database
                $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' LIMIT 3";
                //Execute the Query
                $res = mysqli_query($conn, $sql);
                //Count rows to check whether the category is available or not
                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    //CAtegories Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values like id, title, image_name
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>

            <a  href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                <div class="col-xs-4 col-sm-4 col-md-4 " style="text-align:center" >
                    <?php 
                                    //Check whether Image is available or not
                                    if($image_name=="")
                                    {
                                        //Display MEssage
                                        echo "<div class='error'>Image not Available</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                    <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Pizza"
                        class="img-responsive img-curve">
                    <?php
                                    }
                                ?>
      <h3 class="float-text text-white"><?php echo $title; ?></h3>
                </div>
            </a>
            
            <?php
                    }
                }
                else
                {
                    //Categories not Available
                    echo "<div class='error'>Category not Added.</div>";
                }
            ?>

               </div>
            </div>
         </div>
       </div>
   </div>
               
</div>
      <?php include('partials-front/footer.php'); ?>
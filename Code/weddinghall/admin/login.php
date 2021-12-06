<?php include('../config/constants.php'); ?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
</head>

<body>
    <section>
        <div class="img-bg">
            <img src="../images/home.jfif" alt="Hình Ảnh Minh Họa">
        </div>
        <div class="noi-dung">
            <div class="login">
                <h1 class="text-center">Trang đăng nhập</h1>
                <br><br>

                <?php 
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
                <br><br>
                <!-- Login Form Starts HEre -->
                <form action="" method="POST">
                    <div class="input-form">
                        <span>Tên đăng nhập</span>
                        <input type="text" name="username" placeholder="Enter Username"><br><br>
                    </div>

                    <div class="input-form">
                        <span>Mật Khẩu</span>
                        <input type="password" name="password" placeholder="Enter Password"><br><br>
                    </div>
                    <div class="input-form">
                        <input type="submit" name="submit" value="Đăng nhập" class="btn-primary">
                    </div>
                    <br><br>
                </form>
                <!-- Login Form Ends HEre -->

            </div>
        </div>
    </section>
</body>

</html>

<?php 

    //CHeck whether the Submit Button is Clicked or NOt
    if(isset($_POST['submit']))
    {
        //Process for Login
        //1. Get the Data from Login form
        // $username = $_POST['username'];
        // $password = md5($_POST['password']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        
        $password = $_POST['password'];
        $password = mysqli_real_escape_string($conn, $password);

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

        //3. Execute the Query
        $res = mysqli_query($conn, $sql);

        //4. COunt rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            //User AVailable and Login Success
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['user'] = $username; //TO check whether the user is logged in or not and logout will unset it

            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'admin/');
        }
        else
        {
            //User not Available and Login FAil
            $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'admin/login.php');
        }


    }

?>
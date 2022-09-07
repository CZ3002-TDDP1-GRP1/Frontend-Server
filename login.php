<!doctype html>
<html lang="en">
    <head>

        <meta charset="utf-8">

        <!-- Control website from being scrolled horizontally on mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=10.0, user-scalable=yes">


        <!--Title of webpage here-->
        <title>WeGymLater - CZ3002 Advanced Software Engineering Project</title>

        <?php require_once "require/meta.php"; ?>

    </head>


    <body>

        <div id="wrapper" class="main-home" >            

            <!-- Insert Nav Bar Here -->
            <?php require_once "require/nav.php"; ?>

            <!--Main content -->

            <div class="full-width main-content">
                <div class="home-content">

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">

                            <div class="item active">
                                <img src="images/ML3.png" style="filter: brightness(30%); object-fit: cover; min-height: 100vh;">
                            </div>


                            <div class="item">
                                <img src="images/ML4.png" style="filter: brightness(30%); object-fit: cover; min-height: 100vh;">

                            </div>

                            <div class="item">
                                <img src="images/ML2.png" style="filter: brightness(30%); object-fit: cover; min-height: 100vh;">                            
                            </div>

                            <div class="carousel-content2">
                                <div class="row">
                                    <h1>
                                        Welcome to WeGymLater
                                    </h1>
                                    <p>Please enter your login details</p>
                                    <br />
                                    <div class="row">

                                        <div class="col-md-12">
                                            <input type="email" name="e" id="e" class="form-control" placeholder="Login" required /> <br />   
                                        </div>

                                        <div class="col-md-12">

                                            <input type="password" name="p" id="p" class="form-control" placeholder="Password" /> <br />  
                                        </div>
                                    </div>
                                    
                                    <a href="index" class="btn btn-info" style="width: 80px; padding: 0.5em; text-decoration: none;">
                                        Login
                                    </a> 
                                    <br />
                                    <a href="register" style="padding-top: 1em; text-decoration: none;">
                                        New? Click Here to Register
                                    </a> 
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>

            <!-- End content -->




    </body>

</html>
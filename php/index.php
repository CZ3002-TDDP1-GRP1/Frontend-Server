<!doctype html>
<html lang="en">
    <head>
        <?php require_once 'require/tags.php' ?>

        <!--Title of webpage here-->
        <title>GoWhereEat - CZ2006 Software Engineering Project</title>

        <!--Link of webpage here-->
        <link rel="canonical" href="https://www.dafoods.com.sg"/>

        <?php require_once 'require/meta.php' ?>

    </head>

    <body>

        <div id="wrapper" class="main-home" >            

            <!-- Navigation Bar -->

            <?php require_once 'require/nav.php' ?>

            <!-- End Navigation Bar -->

            <!--Main content -->

            <div class="full-width main-content">
                <div class="home-content">

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="images/ML2.jpg" style="filter: brightness(50%);">
                                <div class="carousel-content2">
                                    Restaurant of the Week
                                </div>
                            </div>

                            <div class="item">
                                <img src="images/ML3.jpg" style="filter: brightness(50%);">
                                <div class="carousel-content2">
                                    The perfect place to bring your date
                                </div>
                            </div>
                            

                            <div class="item">
                                <img src="images/ML4.jpg" style="filter: brightness(50%);">
                                <div class="carousel-content2">
                                    Dining at the Sky
                                </div>
                            </div>

                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>	
                            </ol>

                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>

                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>

                        </div>
                    </div>


                    <div class="content text-center">

                        <div class="home">
                            <h3>ABOUT GoWhereEat</h3>
                            <br />
                            <p>
                            App Description
                            </p>
                        </div>
                    </div>

                    <div class="contenthome">
                        <div class="row">
                            <div class=" contenthome2 col-md-6 col-xs-8 text-left homebox">
                                <h3>HEADER 1</h3>
                                <br />
                                <p>
                                    Description 1
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" contenthome2 col-md-6 col-md-offset-6 col-xs-8 col-xs-offset-4 text-right homebox">
                                <h3>HEADER 2</h3>
                                <br />
                                <p>
                                    Description 2
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class=" contenthome2 col-md-6 col-xs-8 text-left homebox">
                                <h3>HEADER 3</h3>
                                <br />
                                <p>
                                    Description 3
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class=" contenthome2 col-md-12 col-xs-12 text-center">
                                <a href="about" class="button2">About Us</a>
                            </div>
                        </div>

                    </div>



                    <div class="content row text-center">
                        <h3>HEADER 4</h3>
                        <br /> <br />
                        <p>
                            Description 4
                        </p>
                        </div>
                </div>


                    </div>


                </div>
            </div>

            <!-- Footer -->

            <?php require_once 'require/footer.php' ?>

            <!-- End Footer -->

        </div>

        <!-- End content -->

    </body>

</html>
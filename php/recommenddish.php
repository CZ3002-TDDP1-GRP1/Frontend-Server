<!doctype html>
<html lang="en">
    <head>
        <?php require_once 'require/tags.php' ?>

        <!--Title of webpage here-->
        <title>GoWhereEat - CZ2006 Software Engineering Project</title>

        <!--Link of webpage here-->
        <link rel="canonical" href="https://www.dafoods.com.sg/about"/>

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


                    <div class="content row text-center">
                        
                        <div class="modal fade" id="services" role="dialog" style="top: -30px">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background: rgb(20,20,20);">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Category</h2>
                 
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 text-center" style="margin: 0 auto;">
                            <h3 style="margin-bottom:0.2em;">List of Places</h3>
                            <li>Place 1</li>
                            <li>Place 2</li>
                            <li>Place 3</li>
                            <li>Place 4</li>
                            <br />

                            
                            <a href="" class="buttonblack" data-dismiss="modal"
                               style="text-decoration: none;margin-right:0.5em;background: rgb(20,20,20); color:rgb(240,240,240); padding:1em; border-radius: 25px;">
                                Close Tab
                            </a>
                            <hr />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
                        
                        <div class='container' style="padding:2em;">

                            <h3>Not sure what to eat? Let us recommend you something</h3>
                            <br />
                            
                            <div style="border: 1px solid black; background: white; padding: 1em" >
                                1. Do you have any religious requirements?
                                <br /> <br />
                                    <a href="" style="color:white;" class="btn btn-primary" data-dismiss="modal">
                                        Halal options only
                                    </a>
                                    <a href="" style="color:white;" class="btn btn-primary" data-dismiss="modal">
                                        Non-Halal options only
                                    </a>
                                    <a href="" style="color:white;" class="btn btn-primary" data-dismiss="modal">
                                        Both are fine to me
                                    </a>
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
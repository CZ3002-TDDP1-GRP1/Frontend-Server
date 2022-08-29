<!doctype html>
<html lang="en">
    <head>
        <?php require_once 'require/tags.php' ?>

        <!--Title of webpage here-->
        <title>GoWhereEat - CZ2006 Software Engineering Project</title>

        <!--Link of webpage here-->
        <link rel="canonical" href="https://www.dafoods.com.sg/contact"/>

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

                                <img src="images/ML2.jpg" style="filter: brightness(50%);" alt="Contact" class="center-block">

                                <div class="carousel-content2" style="font-family: 'Ubuntu';">

                                    Let's get connected

                                </div>

                            </div>
                        </div>
                    </div>



                    <div class="content">

                        <div class="row">
                            <div class="col-md-12 text-left">
                                <div class="text-center">
                                    <h1>Contact Us</h1>
                                    <div class="greyfont">*All fields are required.</div>
                                </div>
                                <hr />

                                <form action="#" method="post" class="container" onsubmit="return checkForm(this)" >

                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required /> <br />   
                                        </div>

                                        <div class="col-md-6">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required /> <br />   
                                        </div>
                                    </div>


                                    <div class="row">

                                        <div class="col-md-6">
                                            <input type="text" name="coy" id="coy" class="form-control" placeholder="Company" required /> <br />   
                                        </div>

                                        <div class="col-md-6">

                                            <input type="text" name="type" id="type" class="form-control" placeholder="Type of Business" required /> <br />  
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="tel" id="tel" name="tel" class="form-control" pattern="[0-9]{8}"
                                                   placeholder = "Contact Number" required /> 
                                            <i class="greyfont">*Please do not include country code or spaces. (i.e. 91234567)</i>
                                            <br />
                                            <br />
                                        </div>
                                    </div>
                                    <textarea id = "msg" name="msg" maxlength="5000" cols="5" rows="5" 
                                              class="form-control" placeholder="Message/Enquiry" required></textarea> <br />


                                    <div class="text-center">
                                        <input type="submit" name="Submit" value="Submit Message" class="button">
                                    </div>
                                </form> 

                                <hr />

                                <div class="row">

                                    <div id="googleMap" style="width:80%;height:300px;margin:0 auto;"></div>

                                    <script>

                                        function myMap() {
                                        var mapProp = {
                                        center:new google.maps.LatLng(1.3483, 103.6831),
                                                zoom:17,
                                                disableDefaultUI: true

                                        };
                                        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                                        var marker = new google.maps.Marker({
                                        position: {lat: 1.3483, lng:103.6831},
                                                animation:google.maps.Animation.BOUNCE

                                        });
                                        marker.setMap(map);
                                        }

                                    </script>

                                    <div class="col-md-12 text-center">
                                        <br /> 
                                        <h3>We are located at 50 Nanyang Ave, 639798</h3>
                                        <div class='greyfont'>
                                            <br />

                                            Tel: <a class="greyfont" href='tel:(+65)92964767'>(+65) 9296 4767</a> <br />
                                            Email: <a class="greyfont" href='mailto:ZGOH024@e.ntu.edu.sg'>ZGOH024@e.ntu.edu.sg</a>
                                        </div>
                                    </div>

                                    <script src="
                                            https://maps.googleapis.com/maps/api/js?key=AIzaSyDweOz_Y4ZFlZwQAXtspECEwqV2LDdeElQ&callback=myMap
                                    "></script>

                                </div> 

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
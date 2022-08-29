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


        <div class="modal fade" id="services" role="dialog" style="top: -30px">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="background: rgb(20,20,20);">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title">Places Near 76 Nanyang Dr, Singapore 637331</h2>

                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-12 container">
                                <a href ="" style="color:white;" class="btn btn-danger dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Limit by Distance
                                </a> 
                                <div class="dropdown-menu" style="left: 40%; margin: 0 auto;" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">200m</a><br />
                                    <a class="dropdown-item" href="#">500m</a><br />
                                    <a class="dropdown-item" href="#">1km</a> <br/>
                                </div>
                            </div>       
                            <br />
                            <div class="text-center padding-top: 1em;">
                                <h3 style="margin-bottom:0.2em;">Fast Food</h3>
                                <li>McDonalds</li>
                                <li>KFC</li>
                                <li>Long John Silvers</li>
                                <li>Subway</li>
                                <br />

                                <h3 style="margin-bottom:0.2em;">Restaurants</h3>
                                <li>Pen & Inc</li>
                                <li>The Soup Spoon</li>
                                <li>Pasta Express</li>
                                <br />

                                <h3 style="margin-bottom:0.2em;">Others</h3>
                                <li>Koufu @ North Spine</li>
                                <li>Umi Sushi</li>
                                <br />

                                <a href="" style="color:white;" class="btn btn-danger" data-dismiss="modal">
                                    Close Tab
                                </a>
                                <hr />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div id="wrapper" class="main-home" >            

            <!-- Navigation Bar -->

            <?php require_once 'require/nav.php' ?>

            <!-- End Navigation Bar -->

            <!--Main content -->

            <div class="full-width main-content">
                <div class="home-content">


                    <div class="content row text-center">
                        <div class='container' style="padding:2em;">

                            <form class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="text" placeholder="Enter a location (Postal, Address Line, etc.)">
                                    </div>
                                    <div class="col-md-2">
                                        <a href="" data-toggle="modal" data-target="#services" style="text-decoration: none;" class="btn btn-danger">Search for Places</button>
                                        </a>
                                    </div>
                                </div>
                            </form>


                            <div class="btn btn-primary">Get Current Location</div>

                            <br /> <br />
                            <div id="googleMap" style="width:100%;height:500px;margin:0 auto;"></div>

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

                            <script src="
                                    https://maps.googleapis.com/maps/api/js?key=AIzaSyDweOz_Y4ZFlZwQAXtspECEwqV2LDdeElQ&callback=myMap
                            "></script>

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
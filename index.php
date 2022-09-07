<!doctype html>
<html lang="en">
    <head>

        <meta charset="utf-8">

        <!-- Control website from being scrolled horizontally on mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=10.0, user-scalable=yes">


        <!--Title of webpage here-->
        <title>WeGymLater - CZ3002 Advanced Software Engineering Project</title>

        <?php require_once "require/meta.php"; ?>

        <script>

            function showresult() {
                document.getElementById("result").innerHTML = "YOU ARE FAT";
            }


        </script>

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

                            <div class="carousel-content3" style="    
                                 position: absolute; 
                                 font-family: 'Ubuntu';
                                 text-align: center; 
                                 margin-left: auto;
                                 margin-right: auto;
                                 top: 50%;
                                 left: 50%;
                                 transform: translate(-50%, -50%);
                                 color: white;">

                                <div class="row text-center" style="background: white; padding: 1.5em; color: black; left: 0; right: 0;">


                                    <div class="row pushup form-check" style="padding: 0.5em;">
                                        <div class="col-md-2">
                                            <input class="form-check-input" type="checkbox" value="" id="pushup">
                                        </div>
                                        <div class="col-md-5">
                                            <label class="form-check-label" for="pushup" style="font-size: 13px;">
                                                <b>Push Ups</b>
                                            </label>
                                        </div>
                                        <div class="col-md-5">
                                            <a href="#" class="btn btn-danger" style="padding: 0.5em; text-decoration: none;">
                                                <span class="glyphicon glyphicon-pencil"></span> 
                                            </a> 
                                            <a href="#" class="btn btn-info" style="padding: 0.5em; text-decoration: none;">
                                                <span class="glyphicon glyphicon-trash"></span> 
                                            </a> 
                                        </div>
                                        <br /> <br /> <br />
                                        <div class="col-md-6">
                                            Reps: 30
                                            <br />
                                            Sets: 3
                                        </div>
                                        <div class="col-md-6">
                                            <span class="glyphicon glyphicon-fire"></span> 102.60kcal
                                            <br />
                                            burned
                                        </div>
                                    </div>

                                    <hr />

                                    <div class="row yoga form-check" style="padding: 0.5em;">
                                        <div class="col-md-2">
                                            <input class="form-check-input" type="checkbox" value="" id="yoga">
                                        </div>
                                        <div class="col-md-5">
                                            <label class="form-check-label" for="pushup" style="font-size: 13px;">
                                                <b>Yoga</b>
                                            </label>
                                        </div>
                                        <div class="col-md-5">
                                            <a href="#" class="btn btn-danger" style="padding: 0.5em; text-decoration: none;">
                                                <span class="glyphicon glyphicon-pencil"></span> 
                                            </a> 
                                            <a href="#" class="btn btn-info" style="padding: 0.5em; text-decoration: none;">
                                                <span class="glyphicon glyphicon-trash"></span> 
                                            </a> 
                                        </div>
                                        <br /> <br /> <br />
                                        <div class="col-md-6">
                                            Duration: 50 mins
                                        </div>
                                        <div class="col-md-6">
                                            <span class="glyphicon glyphicon-fire"></span> 187.50kcal
                                            <br />
                                            burned
                                        </div>
                                    </div>

                                    <hr />

                                    <div class="row cycling form-check" style="padding: 0.5em;">
                                        <div class="col-md-2">
                                            <input class="form-check-input" type="checkbox" value="" id="cycling">
                                        </div>
                                        <div class="col-md-5">
                                            <label class="form-check-label" for="pushup" style="font-size: 13px;">
                                                <b>Cycling</b>
                                            </label>
                                        </div>
                                        <div class="col-md-5">
                                            <a href="#" class="btn btn-danger" style="padding: 0.5em; text-decoration: none;">
                                                <span class="glyphicon glyphicon-pencil"></span> 
                                            </a> 
                                            <a href="#" class="btn btn-info" style="padding: 0.5em; text-decoration: none;">
                                                <span class="glyphicon glyphicon-trash"></span> 
                                            </a> 
                                        </div>
                                        <br /> <br /> <br />
                                        <div class="col-md-6">
                                            Distance: 1.8km
                                        </div>
                                        <div class="col-md-6">
                                            <span class="glyphicon glyphicon-fire"></span> 52.56kcal
                                            <br />
                                            burned
                                        </div>
                                    </div>

                                    <hr />

                                    <b>Alternative Exercises:

                                        <br /> 

                                        Push Up, Sit Up, Swimming, Yoga, Weightlifting
                                    </b>

                                </div>

                            </div>

                        </div>
                    </div>


                </div>
            </div>

            <!-- End content -->




    </body>

</html>
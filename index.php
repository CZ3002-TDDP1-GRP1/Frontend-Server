<!doctype html>
<html lang="en">
    <head>

        <meta charset="utf-8">

        <!-- Control website from being scrolled horizontally on mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=10.0, user-scalable=yes">


        <!--Title of webpage here-->
        <title>WeGymLater - CZ3002 Advanced Software Engineering Project</title>

        <?php require_once "require/meta.php"; ?>

        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        
        <script>

            $(document).ready(function () {
                $("#d").datepicker({minDate: 0, maxDate: "+1Y"});
            
    
    
    })

        </script>

        <style>

            input[type="checkbox"] {
                appearance: none;
                /* background, border etc to customize */ 
                border: 1px solid black;
                width: 20px;
                height: 20px;
            }

            input[type="checkbox"]:checked {
                /* checked state CSS */ 
                background: black;
            }

        </style>

    </head>

    <body>

        <div id="wrapper" class="main-home" >            

            <!-- Insert Nav Bar Here -->
            <?php require_once "require/nav.php"; ?>

            <!--Main content -->

            <div class="full-width main-content" >
                <div class="home-content" style="
                     background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('images/ML4.png');
                     background-position: center;
                     background-repeat: no-repeat;
                     -moz-background-size: cover;
                     -o-background-size: cover;
                     -webkit-background-size: cover;
                     background-size: cover;
                     padding: 2em;
                     min-height: 100vh;
                     ">
                    
                    <div class="row text-center" style="background: white; padding: 2.5em; color: black; width: 60%; margin: 0 auto;">

                        <div class="row">
                            <div class="col-md-4 btn" style="border: 0.4em solid;border-radius: 2em;border-color:royalblue;">
                                <img src="images/thundercloud.png" style="max-height: 7em;" aria-label="weather"/>
                                <p style="font-weight: bold;font-size: 1.3em;padding: 0.3em;">Nov 10</p>
                            </div>
                            <div class="col-md-2 btn">
                                <img src="images/thundercloud.png" style="max-height: 7em;" aria-label="weather"/>
                                <p style="font-weight: bold;font-size: 1.3em;padding: 0.3em;">Nov 11</p>
                            </div>
                            <div class="col-md-2 btn">
                                <img src="images/thundercloud.png" style="max-height: 7em;" aria-label="weather"/>
                                <p style="font-weight: bold;font-size: 1.3em;padding: 0.3em;">Nov 12</p>
                            </div>
                            <div class="col-md-2 btn">
                                <img src="images/thundercloud.png" style="max-height: 7em;" aria-label="weather"/>
                                <p style="font-weight: bold;font-size: 1.3em;padding: 0.3em;">Nov 13</p>
                            </div>
                            <div class="col-md-2 btn">
                                <div class="glyphicon glyphicon-calendar" style="font-size: 3em; padding: 0.42em;"></div>
                                <p style="font-weight: bold;font-size: 1.3em;padding: 0.3em;">Calendar</p>
                            </div>
                        </div>
                        <div class="content row" style="border-radius: 3em;background-color: white;margin: 1rem; border: 0.1em solid black;height:fit-content;vertical-align: top;padding:1rem;clear: both;padding-bottom: 1rem;"> 
                                    <p class="col-sm-3" style="font-weight: bold;font-size: 2rem; text-align: center;padding-top: 4rem;">10 Nov</p>
                                <div class="col-sm-5">
                                    <img src="images/thundercloud.png" style="max-height: 7em;" aria-label="weather"/>
                                    <p style="font-weight: bold; text-align:center; font-size: 2rem;padding: 0.1rem;">Thundery Showers</p>
                                </div>
                                <div class="col-sm-4">
                                    <div class="row" style="padding-top: 18%;text-align: left;">
                                        <img src="images/hot.png" style="max-height: 3em;">
                                        <span style="position:absolute;bottom: 50%;">32&#8451;</span>
                                    </div>
                                    <div class="row" style="text-align: left;">
                                        <img src="images/cold.png" style="max-height: 3em;"/>
                                        <span style="position:absolute;bottom: 13%;">24&#8451;</span>
                                    </div>
                                </div>
                        </div>
                        
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
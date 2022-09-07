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
                <div class="home-content" style="
                     background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('images/ML2.png');
                     background-position: center;
                     background-repeat: no-repeat;
                     -moz-background-size: cover;
                     -o-background-size: cover;
                     -webkit-background-size: cover;
                     background-size: cover;
                     padding: 2em;
                     min-height: 100vh;
                     ">

                    <div class="row text-center" style="background: white; padding: 1.5em; color: black; width: 50%; margin: 0 auto;">
                        <h1>
                            BMI Calculator
                        </h1>
                        <p>Please enter your height and weight.</p>
                        <br />
                        <div class="row">

                            <div class="col-md-12">
                                <input type="number" name="height" id="h" class="form-control" placeholder="Height (in kg)" required /> <br />   
                            </div>

                            <div class="col-md-12">

                                <input type="number" name="weight" id="w" class="form-control" placeholder="Weight (in kg)" /> <br />  
                            </div>

                        </div>
                        <br />

                        <a onclick ="showresult()" class="btn btn-success" style="width: 80px; padding: 0.5em; text-decoration: none;">
                            Calculate
                        </a> 
                        <br />
                        
                        <div id="result"></div>
                    </div>
                </div>

            </div>
        </div>


        <!-- End content -->




    </body>

</html>
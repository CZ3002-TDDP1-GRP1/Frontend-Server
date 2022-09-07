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
                document.getElementById("result").innerHTML = "YOU FAIL";
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

                            
<div class="carousel-content2">
                                <div class="row" style="background: white; padding: 1.5em; color: black; top: 500px;">
                                    <h1>
                                        IPPT Calculator
                                    </h1>
                                    <p>Please fill in the following.</p>
                                    <br />
                                    <label for='Gender' class='col-md-4'>Gender: </label>
                                    <select class="form-select col-md-7 text-center" aria-label=".form-select-lg example" id= 'Gender'>
                                        <option selected>(select)</option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                    <br /> <br />
                                    <label for='Service' class='col-md-4'>Type of Service: </label>
                                    <select class="form-select col-md-7 text-center form-select-md" aria-label=".form-select-md example" id='Service'>
                                        <option selected>(select)</option>
                                        <option value="1">Active</option>
                                        <option value="2">NSman</option>
                                    </select>
                                    <br />
                                    <br />
                                    <label for='Age' class='col-md-4'>Enter your age: </label>
                                    <div class="col-md-7">
                                        <input type="number" class="form-control text-center form-control-md" placeholder="Age" aria-label="age" id='age'>

                                    </div>
                                    <br />
                                    <br />
                                    <div class="col-md-4">
                                        <label for='run-mins' class="col-form-label col-form-label-md">2.4 km run: </label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control form-control-md" placeholder="min" aria-label="2.4 run mins" id='run-mins'>
                                    </div>
                                    <!--
                                    <br />
                                    <label for='run-secs' class="col-sm-2 ">mins</label>
                                    <label for='run-secs' class="row g-0">s </label>
                                    -->
                                    <div class="col-md-3">
                                        <input type="number" class="form-control form-control-md" placeholder="sec" aria-label="2.4 run sec" id='run-sec'>
                                    </div>
                                    <br />
                                    <br />

                                    <div class="col-md-4">
                                        <label for='pushup' class="col-form-label col-form-label-md">Push-ups: </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="number" class="form-control form-control-md" placeholder="reps" aria-label="Push-ups" id='pushup'>
                                    </div>
                                    <br />
                                    <br />
                                    <div class="col-md-4">
                                        <label for="situp" class="col-form-label col-form-label-md"
                                               >Sit-ups:
                                        </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input
                                            type="number"
                                            class="form-control form-control-md"
                                            placeholder="reps"
                                            aria-label="Sit-ups"
                                            id="situp"
                                            />
                                    </div>
                                    <br />
                                    <br />
                                    <br />


                                    <a href="#" onclick ="showresult()" class="btn btn-success" style="width: 80px; padding: 0.5em; text-decoration: none;">
                                        Calculate
                                    </a> 
                                    <div id="result"></div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>

            <!-- End content -->




    </body>

</html>
<!doctype html>
<html lang="en">
    <head>

        <meta charset="utf-8">

        <!-- Control website from being scrolled horizontally on mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=10.0, user-scalable=yes">


        <!--Title of webpage here-->
        <title>WeGymLater - CZ3002 Advanced Software Engineering Project</title>

        <?php require_once "require/meta.php"; ?>
<!--Meta Description here-->
<meta name="description" content= "CZ3002 Project" />


<!--Static CSS-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">

<!--Static Scripts-->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="js/validate.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script src="js/bootstrap.min.js"></script>

<!--Fonts-->
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css"> 

<script src="js/imagelightbox.min.js"></script>
<script src="js/imagelightbox.js"></script>
<link rel="stylesheet" type="text/css" href="css/imagelightbox.css">
<script>

    function showresult() {
        document.getElementById("result").innerHTML = "81 pts / Silver";
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
                                <div class="row" style="background: white; padding: 1.5em; color: black;">
                                    <h1>
                                        IPPT Calculator
                                    </h1>
                                    <p>Please fill in the following.</p>
                                    <br />
                                    <label for='Gender' class='col-sm-5'>Gender: </label>
                                    <select class="form-select col-sm-6 form-select-lg mb-3" aria-label=".form-select-lg example" id= 'Gender'>
                                        <option selected>Choose your Gender</option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                    <br />
                                    <label for='Service' class='col-sm-5'>Type of Service : </label>
                                    <select class="form-select col-sm-6 form-select-sm" aria-label=".form-select-sm example" id='Service'>
                                        <option selected>Choose service type</option>
                                        <option value="1">Active</option>
                                        <option value="2">NSman</option>
                                    </select>
                                    <br />
                                    <br />
                                    <div class="row">
                                        <div class="row-mb-3">
                                            <label for='Age' class="col-sm-4 col-form-label col-form-label-sm">Enter your age: </label>
                                            <div class="col-sm-2">
                                                <input type="number" class="form-control form-control-sm" placeholder="age" aria-label="age" id='Age'>
                                            </div>
                                        </div>
                                        <br />
                                        <br />

                                    </div>
                                    <div class="row">
                                        <div class="row-mb-3">
                                            <label for='run-mins' class="col-sm-4 col-form-label col-form-label-sm">2.4 km run: </label>
                                            <div class="col-sm-2">
                                                <input type="number" class="form-control form-control-sm" placeholder="min" aria-label="2.4 run mins" id='run-mins'>
                                            </div>
                                            <label for='run-secs' class="col-sm-1 col-form-label col-form-label-sm">mins </label>
                                            <label for='run-secs' class="row g-0">s </label>
                                            <div class="col-sm-2">
                                                <input type="number" class="form-control form-control-sm" placeholder="sec" aria-label="2.4 run sec" id='run-sec'>
                                            </div>
                                        </div>
                                        <br />

                                    </div>
                                    <div class="row g-3">
                                        <div class="row-mb-3">
                                            <label for='pushup' class="col-sm-4 col-form-label col-form-label-sm">Push-ups: </label>
                                            <div class="col-sm-2">
                                                <input type="number" class="form-control form-control-sm" placeholder="reps" aria-label="Push-ups" id='pushup'>
                                            </div>
                                        </div>
                                        <br />
                                        <br />

                                    </div>
                                    <div class="row g-3">
                                        <div class="row-mb-3">
                                            <label for='situp' class="col-sm-4 col-form-label col-form-label-sm">Sit-ups: </label>
                                            <div class="col-sm-2">
                                                <input type="number" class="form-control form-control-sm" placeholder="reps" aria-label="Sit-ups" id='situp'>
                                            </div>
                                        </div>
                                        <br />
                                        <br />

                                    </div>

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
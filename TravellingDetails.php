<?php
    session_start();   
        // CREATING SESSION  
        $kgpdoa        = $_SESSION['kgpdoa']      ;
        $kgptimetocome = $_SESSION['kgptimetocome']   ;
        $kgpmodeofT    = $_SESSION['kgpmodeofT']   ;
        $kgppickup     = $_SESSION['kgppickup']      ; 
        $kgppcount     = $_SESSION['kgppcount']   ;
        $kgpcarseater  = $_SESSION['kgpcarseater']      ; 

        $airdoa        = $_SESSION['airdoa']      ;
        $airtimetocome = $_SESSION['airtimetocome']   ;
        $airmodeofT    = $_SESSION['airmodeofT']   ;
        $airpickup     = $_SESSION['airpickup']      ; 
        $airpcount     = $_SESSION['airpcount']   ;
        $aircarseater  = $_SESSION['aircarseater']      ; 
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/loginpage.css">

    <style>
        body{
                background-image: url("css/bkt.png");
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
            .station {
                font-family: 'Raleway', sans-serif;
                font-size:20;
            }
            .section2{
               display: none;
            }
    
    .bttons button {
        outline: none;
        background-color: transparent;
        border: 0px solid transparent;
        
        width: max-content;
    }
    .bttons .bttons:hover {
        background-color: rgb(255, 255, 255);
        border: 0px solid transparent;
        border-radius: 10px;
    }
    .bttons button:focus {
        text-decoration: underline;
        font-weight: bold;
    }
            
    </style>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/"
        crossorigin="anonymous"></script>-->

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>

<body>
    <?php include 'navbar.php' ?>
    <section>
        <div class="wrappers">
            <center>
                <h2 style="font-size: 180%; color: black; font-family: 'Raleway', sans-serif;">
                    Travelling Details
                </h2>
            </center>
            <div class = "row station p-2">
                 <div class = "col-6 bttons text-center"><button class=" my-1" onclick="kgpin()" >KHARAGPUR STATION</button></div>
                 <div class = "col-6 bttons text-center"><button class=" my-1" onclick="kolin()" > KOLKATA AIRPORT</button></div>
            </div>
            <div class="progress" style="height:0.2rem;">
                <div id="one" class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height:0.4rem;"></div>
            </div>
            <br>
            <form id="login" action = "back_travel.php" method = "post">
                <div class="section1">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="kgpdoa">Date of Arrival (KGP)<span style="color:red;"></span></label>
                                <input class="form-control" type="date" name="kgpdoa" id="kgpdoa" value = "<?php echo "$kgpdoa"?>">
                            </div>
                            <div class="col-sm-12 ">
                                <label for="kgptimetocome" class="form-label">
                                    Time to reach Kharagpur Station
                                    <span style="color:red;">**expected time</span>
                                </label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="font-weight: 600;" id="basic-addon1"><i class='far fa-clock'></i></span>
                                    <input class="form-control" type="text" name="kgptimetocome" id="kgptimetocome" class="validate" value = "<?php echo "$kgptimetocome"?>">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="kgpmodeofT">Mode of Transportation <span style="color:red;"></span></label>
                                <div class="input-group mb-3">
                                    <select  class="form-control form-select" type="list" list="kgpmodeofT" id="kgpmodeofT" name="kgpmodeofT" value = "<?php echo "$kgpmodeofT"?>">
                                     <option value=""></option>
                                     <option value="Train">Train</option> 
                                     <option value="Plane">Plane</option>
                                     <option value="Car">Car</option>
                                    </select>
                                </div >
                            </div >
                            <div class="col-sm-12">
                                <label for="kgppickup">Do you want us to pick up you from station <span style="color:red;"></span></label>
                                <div class="input-group mb-3">
                                    <select  class="form-control form-select" type="list" list="kgppickup" id="kgppickup" name="kgppickup" value = "<?php echo "$kgppickup"?>">
                                        <option value=""></option> 
                                        <option value="Yes">Yes</option> 
                                        <option value="No">No</option>
                                    </select>
                                </div >
                            </div >
                            <div class="col-sm-12">
                                <label for="kgppcount">How many people come together (including you)<span style="color:red;"></span></label>
                                <input class="form-control" type="text" name="kgppcount" id="kgppcount" value = "<?php echo "$kgppcount"?>">   
                            </div >
                            <div class="col-sm-12">
                                <label for="kgpcarseater">Do you want us to pick up you from station <span style="color:red;"></span></label>
                                <div class="input-group mb-3">
                                    <select  class="form-control form-select" type="list" list="kgpcarseater" id="kgpcarseater" name="kgpcarseater" value = "<?php echo "$kgpcarseater"?>">
                                        <option value=""></option> 
                                        <option value="4">04 <span style = "left : 2%"> (₹)1000 </span></option> 
                                        <option value="6">06 <span style = "left : 2%"> (₹)2000 </span></option>
                                    </select>
                                </div >
                            </div >


                        </div>
                       
                    </div>

                    <div class="row justify-content-between" style = " margin-right:3%;"> 
                        <div class="col-4 text-center">
                            <a class="btn btn-outline-danger " href="get_update.php" role="button">Skip for Now</a>
                        </div>
                        <div class="col-2 text-center">      
                             <div class=" col-md-1 col-3"> <button class="btn btn-dark" type = "button" onclick="next()">Next</button></div>
                        </div>
                   </div>
                </div>

                <div class="section2">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="airdoa">Date of Arrival<span style="color:red;"></span></label>
                                <input class="form-control" type="date" name="airdoa" id="airdoa" value = "<?php echo "$airdoa"?>">
                            </div>
                            <div class="col-sm-12 ">
                                <label for="airtimetocome" class="form-label">
                                    Time to reach Kolkata Airport/Station
                                    <span style="color:red;">**expected time</span>
                                </label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="font-weight: 600;" id="basic-addon1"><i class='far fa-clock'></i></span>
                                    <input class="form-control" type="text" name="airtimetocome" id="airtimetocome" class="validate" value = "<?php echo "$airtimetocome"?>">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="airmodeofT">Mode of Transportation <span style="color:red;"></span></label>
                                <div class="input-group mb-3">
                                    <select  class="form-control form-select" type="list" list="airmodeofT" id="airmodeofT" name="airmodeofT" value = "<?php echo "$airmodeofT"?>">
                                     <option value=""></option>
                                     <option value="Train">Train</option> 
                                     <option value="Plane">Plane</option>
                                     <option value="Car">Car</option>
                                    </select>
                                </div >
                            </div >
                            <div class="col-sm-12">
                                <label for="airpickup">Do you want us to pick up you from station <span style="color:red;"></span></label>
                                <div class="input-group mb-3">
                                    <select  class="form-control form-select" type="list" list="airpickup" id="airpickup" name="airpickup" value = "<?php echo "$airpickup"?>">
                                        <option value=""></option> 
                                        <option value="Yes">Yes</option> 
                                        <option value="No">No</option>
                                    </select>
                                </div >
                            </div >
                            <div class="col-sm-12">
                                <label for="airpcount">How many people come together (including you)<span style="color:red;"></span></label>
                                <input class="form-control" type="text" name="airpcount" id="airpcount" value = "<?php echo "$airpcount"?>">   
                            </div >
                            <div class="col-sm-12">
                                <label for="aircarseater">Do you want us to pick up you from station <span style="color:red;"></span></label>
                                <div class="input-group mb-3">
                                    <select  class="form-control form-select" type="list" list="aircarseater" id="aircarseater" name="aircarseater" value = "<?php echo "$aircarseater"?>">
                                        <option value=""></option> 
                                        <option value="4">04 <span style = "left : 2%"> (₹)1000 </span></option> 
                                        <option value="6">06 <span style = "left : 2%"> (₹)2000 </span></option>
                                    </select>
                                </div >
                            </div >


                        </div>
                       
                    </div>

                    <div class="row justify-content-between" style = " margin-right:3%;"> 
                        <div class="col-4 text-center">
                           <div class=" col-md-1 col-3">  <button class="btn btn-dark" type = "button" onclick="back()">Back</button> </div>
                        </div>
                        <div class="col-2 text-center">      
                           <button class="btn btn-success" type="submit" value = "submit">Submit</button>
                        </div>
                   </div>
                </div>
            </form>
            <hr />
            <center>
                        <h6>You Can also tell us your travelling details on </h6>
                        <h6><i class="contact-icon fas fa-envelope"></i> Mail: aao@hijli.iitkgp.ernet.in</h6>
                        <h6>informing your date and timing to reach KGP station.........</h6>
                        <!--<h6><i class="contact-icon fas fa-phone"></i> Tarun Majety: 7602443444</h6>             
                        <h6>  <i class="contact-icon fas fa-phone"></i> Vikas Ahlawat: 8397070108</h6>             
                        <h6>&nbsp;  <i class="contact-icon fas fa-phone"></i> Shikha Bagaria: 7479222951</h6> -->            
              </center>
        </div>
    </section>
    <?php include 'footer.php' ?>
    <script>
        function back(){
          document.getElementsByClassName("section1")[0].style.display = 'block';
          document.getElementsByClassName("section2")[0].style.display = 'none';
        } 

        function next(){
           document.getElementsByClassName("section1")[0].style.display = 'none';
           document.getElementsByClassName("section2")[0].style.display = 'block';
        }
        function kgpin(){
            document.getElementsByClassName('section1')[0].style.display = "block";
            document.getElementsByClassName('section2')[0].style.display = "none";
        }
        function kolin(){
            document.getElementsByClassName('section1')[0].style.display = "none";
            document.getElementsByClassName('section2')[0].style.display = "block";
        }
    </script>
</body>
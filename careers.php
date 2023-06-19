<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pixl</title>

    <!-- css file link -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
    

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <style>
    label{
        font-family: Oswald-ExtraLight !important;
    }
    .btn:not(:disabled):not(.disabled) {
        cursor: pointer;
        font-family: Oswald-ExtraLight !important;
    }
    option{
        font-family: Oswald-ExtraLight !important;
    }
    select{
        font-family: Oswald-ExtraLight !important;
        color:black !important;
        z-index: 1;
    }
    </style>
</head>
<body>

<!---------------------------- NAVBAR section------------------------- -->
<?php include 'navbar.php';?>
<!-------------------------------END-------------------------------------->
    
<section>
    <div class="careers-section-one">
        <div class="container">
            <div class="row">
                <div class="careers-text">
                    <h1>CAREERS</h1>
                </div>
            </div>
        </div>
    </div>
</section>


        
            
            <form action="">
                <div class="container py-5">
                  <div class="row">
                    <div class="col-12 ">
                    <label for="basic-url" class="form-label rounded-0">First Name</label><b class="text-danger">*</b>
                        <div class="input-group mb-3">
                        <span class="input-group-text rounded-0" id="basic-addon3"><i class="fa fa-address-book"></i></span>
                        <input type="text" class="form-control rounded-0" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label class="mb-1">Last Name</label><b class="text-danger"></b>
                            <input type="text" id="Last_name" name="last_name" class="form-control rounded-0" placeholder=""/> 
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label class="mb-1">Email</label><b class="text-danger"> *</b>
                            <input type="text" id="Email" name="Email" class="form-control rounded-0" placeholder=""/> 
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label class="mb-1">Phone</label><b class="text-danger"> *</b>
                            <input type="number" id="phone" name="phone" class="form-control rounded-0" required/> 
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label class="mb-1">Country</label><b class="text-danger"> *</b>
                            <input type="text" id="Country" name="Country" class="form-control rounded-0" required/> 
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label class="mb-1">City</label><b class="text-danger"> *</b>
                            <input type="text" id="City" name="City" class="form-control rounded-0" required/> 
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label class="mb-1">CV/Resume</label><b class="text-danger"> *</b>
                            <input type="file" id="file" name="file" class="form-control rounded-0"/> 
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label class="mb-1">Showreel link</label><b class="text-danger"> *</b>
                            <input type="text" id="Showreel link" name="Showreel link" class="form-control rounded-0" required/> 
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label class="mb-1">Showreel password (if required)</label><b class="text-danger"></b>
                            <input type="text" id="Showreel password" name="Showreel password" class="form-control rounded-0"/> 
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label class="mb-1">LinkedIn</label><b class="text-danger"></b> 
                            <input type="text" id="LinkedIn" name="LinkedIn" class="form-control rounded-0"/> 
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label class="mb-1">LinkedIn</label><b class="text-danger"></b>
                            <input type="text" id="LinkedIn" name="LinkedIn" class="form-control rounded-0"/> 
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label class="mb-1">Artstation</label><b class="text-danger"></b>
                            <input type="text" id="Artstation" name="Artstation" class="form-control rounded-0"/> 
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label class="mb-1">IMDb</label><b class="text-danger"></b>
                            <input type="text" id="IMDb" name="IMDb" class="form-control rounded-0"/> 
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label class="mb-1">Website</label><b class="text-danger"></b>
                            <input type="text" id="Website" name="Website" class="form-control rounded-0"/> 
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label class="mb-1">Department</label><b class="text-danger">*</b>
                            <select name="Department" id="Department" class="form-control rounded-0">
                                <option value="" selected disabled>Select Deparment..</option>
                                <option value="">CG Generalist</option>
                                <option value="">Character Modelling</option>
                                <option value="">Prop Modelling</option>
                                <option value="">Unity Artist</option>
                                <option value="">Unreal Artist</option>
                                <option value="">Animation</option>
                                <option value="">Concept Art</option>
                                <option value="">Lighting</option>
                                <option value="">Rigging</option>
                                <option value="">Texturing</option>
                                <option value="">Prop Modelling</option>
                              </select>
                        </div>
                    </div>
                    <div class="col-12 ">
                        <div class="form-group mb-3">
                            <label class="mb-1">Software's known</label><b class="text-danger">*</b>
                            <select name="Softwares" id="Softwares" class="form-control rounded-0" aria-placeholder="Select Software">
                                <option value="" selected disabled>Select Software..</option>
                                <option value="">Blender</option>
                                <option value="">Houdini</option>
                                <option value="">Maya</option>
                                <option value="">Nuke</option>
                                <option value="">Unreal</option>
                                <option value="">Unity</option>
                                <option value="">Xgen</option>
                              </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label class="mb-1">Experience in years</label>*<b class="text-danger"></b>
                            <input type="text" id="Experience" name="Experience" class="form-control rounded-0"/> 
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label class="mb-1">Work mode</label>*<b class="text-danger"></b>
                            <select name="Work mode" id="Work mode" class="form-control rounded-0">
                                <option value="in studio" selected disabled > select..</option>
                                <option value="">Remote</option>
                                <option value="">On site</option>
                                <option value="">Full times</option>
                              </select>  
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3 ">
                            <label class="mb-1">Available from</label>*<b class="text-danger"></b>
                            <input type="date" id="from" name="from" class="form-control rounded-0"/> 
                        </div>
                    </div>
                    </div>
                                  
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <div class="form-group mb-3">
                            <img id="captchaImage" src="captcha.php" alt="Captcha Image">
                            <input type="text" id="captchaInput" name="Email" class="form-control rounded-0" placeholder="Enter Captcha"> 
                        </div>
                        <div class="d-grid gap-2 d-md-flex ">
                            <button class="btn btn-dark rounded-0 me-md-2" type="button" id="refreshButton">Refresh</button>
                            <button class="btn btn-dark rounded-0" type="button" id="verifyButton" src="verify_captcha.php">Verify</button>
                        </div>
                    </div>
                  
                    <div class="col-6  mt-3">
                        <div class="form-group">
                             <a href="#" class="btn btn-primary mt-5 rounded-0" role="button" data-bs-toggle="button">Submit</a>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-text form-group pt-5">
                            <p>The success of our employees is an important part of our vision. We are here to attract people that are visionary and want to be part of our team that imagine, yes we are extraordinary!</p>
                        </div>
                    </div>    
              </form>
            </div>
        </div>
   </div>








































<!---------------------------- Footer section------------------------- -->
<?php include 'footer.php';?>
<!-------------------------------END-------------------------------------->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/lightbox.js"></script>


</body>
</html>
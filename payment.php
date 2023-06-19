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
        .payment-section p{
            letter-spacing: 3px;    
            font-size:22px;
            font-family: NexaXBold, sans-serif !important;
        }
        .form-label{
           
            font-family: NexaXBold, sans-serif !important;
            font-weight: 100;
        }
        .payment-section-one p{
            letter-spacing: 3px;    
            font-size:22px;
            font-family: NexaXBold, sans-serif !important;
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
                    <h1>PAYMENT</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="payment-section">
        <div class="container">
            <div class="row">
                <p class="mt-5">CUSTOMER COMPANY DETAILS</p>
            </div>
            <div class="col-12">
                <form>
                <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label text-muted">Company Name <span class="required text-danger">*</span></label>
                        <input type="name" class="form-control  rounded-0 p-4" id="name" name="name">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label text-muted">Company GSTIN <span class="required text-danger">*</span></label>
                        <input type="text" class="form-control  rounded-0 p-4" id="exampleFormControlInput1"   name="text">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label text-muted ">Company PAN <span class="required text-danger">*</span></label>
                        <input type="text" class="form-control  rounded-0 p-4" id="exampleFormControlInput1"   name="text">
                    </div>
                    <div class="address mb-3">
                        <label for="exampleInputPassword1" class="form-label text-muted">Address</label>
                        <textarea id="exampleFormControlTextarea1" class="form-control form-control-lg  p-4 rounded-0" name="subject"  rows="3" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" style="height:170px"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="payment-section-one">
        <div class="container">
            <div class="row">
                <p class="mt-5">CUSTOMER CONTACT DETAILS</p>
            </div>
            <div class="col-12">
                <form action="#">
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label text-muted">Name <span class="required text-danger">*</span></label>
                        <input type="name" class="form-control  rounded-0 p-4" id="name" name="name">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label text-muted">Email <span class="required text-danger">*</span></label>
                        <input type="email" class="form-control  rounded-0 p-4" id="exampleFormControlInput1"   name="email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label text-muted">Contact Number <span class="required text-danger">*</span></label>
                        <input type="text" class="form-control  rounded-0 p-4" id="name" name="number">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label text-muted">Amount <span class="required text-danger">*</span></label>
                        <input type="text" class="form-control  rounded-0 p-4" id="exampleFormControlInput1"   name="name">
                    </div>
                   
                        <a href="#" class="btn btn-dark rounded-0 btn btn-outline-secondary" role="button" data-bs-toggle="button">PAY NOW</a>
                    <div class="mb-3"></div>
                </form>   
            </div>
        </div>
    </div>
</section>






























































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
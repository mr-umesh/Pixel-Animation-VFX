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
    <link rel="stylesheet" href="css/animated.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    
   
</head>
<style>
.hero-content p {      
    position: relative;
    animation: mymove 5s infinite;
    animation-delay:2s;
}
@keyframes mymove {
 
 from {left: 200px;}
 to {left: 0px;}
}
.text-effec h1 {      
    position: relative;
    animation: mymoves 5s infinite;
    animation-delay: 2s;
}
@keyframes mymoves {
 
 from {right: 200px;}
 to {right: 0px;}
}
video::-webkit-media-controls-panel {
display: none !important;
opacity: 1 !important;
}
</style>
<body>
  <!---------------------------- NAVBAR section------------------------- -->
    <?php include 'navbar.php';?>
<!-------------------------------END-------------------------------------->


<!-------------------------------VIDEO-------------------------------------->
    <section class="hero-section" id="section_1">
        <div class="section-overlay"></div>
            <div class="container-fluid d-flex justify-content-center align-items-center p-0">
                <div class="row">
                    <video class="custom-video" poster="" controls autoplay loop >
                        <source src="video/pixl.mp4" type="video/mp4">
                    </video>
                   
                    <!-- <div class="hero-content mb-5 text-center">
                        <p class="text-white ">An Award Winning VFX Studio</p>
                        
                        <div class="text-effec">
                            <h1 class="text-white text-uppercase"> Pixl Visual Effects</h1>    
                        </div> 
                        <div style="width:70%; text-align:center; margin-left:80px; border:1px solid green;"> </div>                      
                    </div> -->
                </div>
            </div>
        <div>    
    </section>
  
<!--------------------------------END------------------------------------->

<!--------------------------------CARD------------------------------------->
    <div class="card-section mt-3 mb-3">
        <div class="container">
            <div class="row">
                <div class="column">
                    <div class="card">
                        <div class="content">
                            <div class="front">
                                <img class="profile" width="100%" src="images/card-1.jpg" alt="Neymar"> 
                                <h2 class="mt-2">PIXL EFFECT</h2>      
                            </div>
                            <div class="back from-left"> 
                                <div >
                                  <p class="des">  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, in animi doloribus reprehenderit debitis voluptas pariatur eaque! Rem, accusamus tempora?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="content">
                            <div class="front">
                                <img class="profile" width="100%" src="images/card-2.jpg" alt="Ronaldo">
                                <h2 class="mt-2">PIXL EFFECT</h2>
                            </div>
                            <div class="back from-bottom"> 
                                <p class="des">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, in animi doloribus reprehenderit debitis voluptas pariatur eaque! Rem, accusamus tempora?
                                </p>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="content">
                            <div class="front">
                                    <img class="profile" width="100%" src="images/card-3.jpg" alt="Messi">
                                    <h2 class="mt-2">PIXL EFFECT</h2>
                                </div>
                                <div class="back from-right">                                                                
                                    <p class="des">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, in animi doloribus reprehenderit debitis voluptas pariatur eaque! Rem, accusamus tempora?
                                </p>                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--------------------------------END------------------------------------->

<!--------------------------------PAGE_THREE------------------------------------>

    <div class="page-three">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">   
                    <div class="page-three-text text-center text-white">
                       <p>OUR PURPOSE</p>
                       <h1>TO ENTERTAIN,INSPIRE AND IMPRESS</h1>
                       <P>IN HIGH-END, ANIMATION AND CREATIVE SERVICES</P>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--------------------------------END------------------------------------>

<!--------------------------------PAGE_FOUR------------------------------------>
    <div class="page-four">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="col-8 page-four-text text-left text-white">
                       <h6>WHAT WE BELIEVE IN</h6>
                       <h1>3 PILLARS  GUIDE  US</h1>
                       <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi magni aperiam et cum maxime delectus possimus fugit ex,repudiandae illum quas voluptatibus.</P>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--------------------------------END------------------------------------>

<!--------------------------------PAGE FIVE------------------------------>
    
    <div class="container-fluid slideshow-container p-0">
        <div class="mySlides fade">          
            <img src="images/slider-5.jpg"  class="img-fluid" style="width:100%; height:500px;">
            <div class="text">
                <h6>PILLAR 1</h6>
                <h1>STAY CREATIVE</h1>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, veniam. </p>
                <h5>CREATIVE SOLUTION-DRIVEN AGILE</h5>
            </div>
        </div>
        <div class="mySlides fade">          
            <img src="images/slider-4.jpg"  class="img-fluid" style="width:100%; height:500px;">
            <div class="text">
                <h6>PILLAR 1</h6>
                <h1>STAY CREATIVE</h1>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, veniam. </p>
                <h5>CREATIVE SOLUTION-DRIVEN AGILE</h5>
            </div>
        </div>
        <div class="mySlides fade">          
            <img src="images/slider-7.jpg" class="img-fluid" style="width:100%; height:500px;">
            <div class="text">
                <h6>PILLAR 1</h6>
                <h1>STAY CREATIVE</h1>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, veniam. </p>
                <h5>CREATIVE SOLUTION-DRIVEN AGILE</h5>
            </div>
        </div>
        <a class="prev text-white" onclick="plusSlides(-1)">PRVE</a>
        <a class="next text-white" onclick="plusSlides(1)">NEXT</a>
        
    </div>
<!--------------------------------END------------------------------------>
<div class="hrrr"> </div>         
<!--------------------------------PAGE FIVE------------------------------>
    <div class="page-six py-3">
        <div class="container-fluid p-0">
            <div class="row">
                <div class=" col-sm-6 col-sm-6 col-md-6">
                    <img src="images/page-six.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-sm-4 col-sm-4 col-md-4">
                    <div class="page-six-text text-white mt-3">
                        <h1>The value of Digital Twins</h1>
                        <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus laboriosam voluptates delectus ullam debitis ipsam eius repudiandae fuga suscipit illo at voluptatibus commodi aliquid quae dolorem minima nemo, architecto explicabo. </p>
                        <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus assumenda perspiciatis, praesentium amet adipisci magnam maxime facilis quos? Incidunt officiis accusamus labore sapiente magni quod eligendi quis vero vitae modi. </p>
                    </div>
                    <div class="btn-btn mb-3">
                        <a href="#" class="btn btn-success   btn-lg active mt-3 rounded-pill" role="button" aria-pressed="true">Listen to the Eposide</a>
                    </div>
                   
                </div>  
                <div class=" col-sm-2 col-sm-2 col-md-2">   
                </div>
            </div>
        </div>
    </div>
<!--------------------------------END------------------------------------>
    <div class="container-fluid p-0">
        <?php include 'gallery.php';?>
    </div>
<!---------------------------- Footer section------------------------- -->
    <?php include 'footer.php';?>
<!-------------------------------END-------------------------------------->

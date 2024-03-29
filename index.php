<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIXL Visual Effects - Home</title>

    <link rel="icon" href="images/favicon.png" sizes="32x32" />
    <!-- css file link -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
/* Added PseudoCode CSS to Hide the Controls of Video as on adding Controls Attribute to Video, the controls of video get visible easily. So to control that case also, this needs to be present on CSS End */

video::-webkit-media-controls {
    display: none;
}

video {
  pointer-events: none;
}
.btn-sound {
    position: relative;
    top: -292px;
    left:1100px;
    border: 2px solid #FFf;
    border-radius: 50%;
    color: #eee2e2;
    background: rgba(0,0,0,0.2);
    height:60px !important;
    width: 60px !important;
    display: block;
    font-size: 16px;
}
.btn-sound:hover {
  box-shadow: 0 0 10px 0 #00d7c3 inset, 0 0 20px 2px #00d7c3;
  border: 3px solid #00d7c3;
}
@media screen and (max-width: 991px) {
    .btn-sound {
        position: relative;
    top: -339px;
    left: 325px;
    border: 2px solid #FFf;
    border-radius: 50%;
    color: #eee2e2;
    background: rgba(0,0,0,0.2);
    height: 50px !important;
    width: 50px !important;
    font-size: 11px;
}
.hero-section{
    margin-top: -152px;
}

h1.text-center.py-5.wbb {
    position: relative;
    top: -43px;
}
.card-section {
    position: relative;
    /* margin-top: -132px; */
    top: -270px !important;
    height: 1298px !important;
}
 }
 i.fa {
    font-size: 50px;
    cursor: pointer;
    user-select: none;
}


.wbb{
    font-weight: 600 !important;
    font-size: 50px;
    font-family: Oswald-Bold !important;
    margin-top:80px;
}
/* .wbb {
  
  position: relative;
  animation: mymove 5s infinite;
  animation-delay: 0.3s;
}

@keyframes mymove {
  from {left: 0px;}
  to {left: 200px;}
} */
h1.text-center.py-5.wbb {
    position: relative;
    top: 3px;
}
.card-section {
    position: relative;
    top: -58px;
}


/* .column{
  position: relative;
  animation: umesh 1s infinite;
  animation-delay: 0s;
}


@keyframes umesh {
  from {top: 500px;}
  to {top: 0px;}
} */
</style>
<body>
  <!---------------------------- NAVBAR section------------------------- -->
    <?php include 'navbar.php';?>
<!-------------------------------END-------------------------------------->
 

<!-------------------------------VIDEO-------------------------------------->
    <section class="hero-section" id="section_1" >
        <div class="section-overlay"></div>
            <div class="container-fluid d-flex justify-content-center align-items-center p-0">
                <div class="row">
                    <video id="video" autoplay muted width="100%" height="633">
                        <source src="video/pixel.mp4" type="video/mp4">
                    </video>
                    <!-- <button class="btn-sound" type="button" onclick="showVideo()" id="button"><i class='fas fa-volume-up accordion__item__header'></i></button> -->
                  
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

    <!-- <script>
                function toggleMute() {
                var video = document.getElementById('video');
                if (video.muted) {
                    video.muted = false;
                } else {
                    video.muted = true;
                }
            }
          
                function delay(time) {
                return new Promise((resolve) => setTimeout(resolve, time));
            }
          
                function showVideo() {
                var element = document.getElementById('video');
                var button = document.getElementById('button');
                element.style.display = 'block';
                button.style.display = 'block';
                delay(100).then(() => toggleMute());
                
            }
    </script> -->
<!--------------------------------END------------------------------------->

<!--------------------------------CARD------------------------------------->
    <div class="card-section cardddd">
        <div class="container">
            <div class="row">
            <h1 class="text-center wbb wow fadeInUp" data-wow-delay="0.3s">OUR PRODUCTION</h1> 
                <div class="column wow rollIn" data-wow-duration="0.5s" data-wow-delay="1s">
                    <div class="card">
                        <div class="content">
                            <div class="front">
                                <img class="profile" width="100%" src="images/card-1.jpg" alt="Neymar"> 
                                <h2 class="mt-2">VFX</h2>      
                            </div>
                            <div class="back from-left"> 
                                <div >
                                <div class="back-text-edit">
                                    <p>PROJECTS</p>
                                </div>
                                 <p class="des">Visual effects (sometimes abbreviated VFX) is the process by which imagery is created or manipulated outside the context of a live action shot in filmmaking and video production.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column wow rollIn" data-wow-duration="0.5s" data-wow-delay="1s">
                    <div class="card">
                        <div class="content">
                            <div class="front">
                                <img class="profile" width="100%" src="images/card-2.jpg" alt="Ronaldo">
                                <h2 class="mt-2">CONCEPT</h2>
                            </div>
                            <div class="back from-bottom"> 
                                <div class="back-text-edit">
                                    <p>PROJECTS</p>
                                </div>
                                    <p class="des">Concept artists create artwork to inspire the look of the visual effects (VFX) in a film or TV production. They draw the characters or creatures and environments as well as vehicles, props and buildings. </p>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column wow rollIn" data-wow-duration="0.7s" data-wow-delay="1s">
                    <div class="card">
                        <div class="content">
                            <div class="front">
                                    <img class="profile" width="100%" src="images/card-3.jpg" alt="Messi">
                                    <h2 class="mt-2">CROWD SIMULATION</h2>
                                </div>
                                <div class="back from-right">   
                                    <div class="back-text-edit">
                                    <p>PROJECTS</p>
                                </div>                                                            
                                    <p class="des">Crowd simulation is the process of simulating the movement (or dynamics) of a large number of entities or characters. It is commonly used to create virtual scenes for visual media like films and video games. </p>                           
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
                <div class="col-12 col-lg-12 wow fadeInUp" data-wow-delay="0.9s">   
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
                <div class="col-12 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="col-8 page-four-text text-left text-white">
                       <h6>SOUTH INDIA</h6>
                       <h1>THE PIXLVFX</h1>
                       <P class="wow fadeInUp" data-wow-delay="0.5s">This incredible studio, conveniently located in White Town – Puducherry, bear a strong resemblance to the colonial French rule of the ancient times. Also PIXL is one of the best and promising visual-effects studio in down-south. The co-founders holding the strength & quality of producing visual-effects imagery under budget.</P>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--------------------------------END------------------------------------>

<!--------------------------------PAGE FIVE------------------------------>
    
    
    <div class="owl-carousel-section-qq" style="background:black;">
        <div id="carouselExampleControlsNoTouching" class="carousel slide " data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-inner wow fadeInUp" data-wow-delay="0.5s">
                <div class="carousel-item active">
                    <img src="images/slider-5.jpg"  class="img-fluid" style="width:100%; height:500px;">
                    <div class="text">
                        <h6>PROJECTS</h6>
                        <h1>OUR PRODUCTION</h1>
                        <h5>FX</h5>
                        <P>Visual effects (sometimes abbreviated VFX) is the process by which imagery is created or manipulated outside the context of a live action shot in filmmaking and video production.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slider-4.jpg"  class="img-fluid" style="width:100%; height:500px;">
                    <div class="text">
                        <h6>PROJECTS</h6>
                        <h1>OUR PRODUCTION</h1>
                        <h5>CONCEPT</h5>
                        <P>Concept artists create artwork to inspire the look of the visual effects (VFX) in a film or TV production. They draw the characters or creatures and environments as well as vehicles, props and buildings. </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slider-7.jpg" class="img-fluid" style="width:100%; height:500px;">
                    <div class="text">
                        <h6>PROJECTS</h6>
                        <h1>OUR PRODUCTION</h1>
                        <h5>CROWD SIMULATION</h5>
                        <P >Crowd simulation is the process of simulating the movement (or dynamics) of a large number of entities or characters. It is commonly used to create virtual scenes for visual media like films and video games. </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                <div class="prve-t wow fadeInRight" data-wow-delay="0.1s">
                    <span class="prve-prve ">PRVE</span>
                </div>
               
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                
                <div class="next-t wow fadeInUp" data-wow-delay="0.3s">
                    <span class="next-next">NEXT</span>
                </div>
                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>  -->
            </button>
        </div>
    </div>
<!--------------------------------END------------------------------------>
<!--<div class="hrrr"> </div>-->
<!--------------------------------PAGE FIVE------------------------------>
    <div class="page-six py-3">
        <div class="container-fluid p-0">
            <div class="row">
                <div class=" col-sm-6 col-sm-6 col-md-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <img src="images/page-six.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-sm-4 col-sm-4 col-md-4 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="page-six-text text-white mt-3">
                        <h1>The value of Digital Twins</h1>
                        <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus laboriosam voluptates delectus ullam debitis ipsam eius repudiandae fuga suscipit illo at voluptatibus commodi aliquid quae dolorem minima nemo, architecto explicabo. </p>
                        <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus assumenda perspiciatis, praesentium amet adipisci magnam maxime facilis quos? Incidunt officiis accusamus labore sapiente magni quod eligendi quis vero vitae modi. </p>
                    </div>
                    <div class="btn-btn mb-3 wow fadeInUp" data-wow-delay="0.7s">
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

<html lang="en">

<head>
  <meta Content-Type:html,text; charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Font links -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  
   <!-- Icon Font Stylesheet -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <!-- CSS links-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- fancybox -->
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css'>
  <!-- magnific-popup -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
</head>
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: "Open Sans", sans-serif;
  color: #fff;
  background-color: #000000;
  z-index: 0;
}
p {
  color: #fff;
}
/* Nexa Font */
@font-face{
  font-family: NexaThin;
  src: url(../fonts/Nexa/NexaThin.otf);
}
@font-face{
  font-family: NexaThinItalic;
  src: url(../fonts/Nexa/NexaThinItalic.otf);
}
@font-face{
  font-family: NexaLight;
  src: url(../fonts/Nexa/NexaLight.otf);
}
@font-face{
  font-family: NexaLightItalic;
  src: url(../fonts/Nexa/NexaLightItalic.otf);
}
@font-face{
  font-family: NexaRegular;
  src: url(../fonts/Nexa/NexaRegular.otf);
}
@font-face{
  font-family: NexaRegularItalic;
  src: url(../fonts/Nexa/NexaRegularItalic.otf);
}
@font-face{
  font-family: NexaBook;
  src: url(../fonts/Nexa/NexaBook.otf);
}
@font-face{
  font-family: NexaBookItalic;
  src: url(../fonts/Nexa/NexaBookItalic.otf);
}
@font-face{
  font-family: NexaBold;
  src: url(../fonts/Nexa/NexaBold.otf);
}
@font-face{
  font-family: NexaBoldItalic;
  src: url(../fonts/Nexa/NexaBoldItalic.otf);
}
@font-face{
  font-family: NexaBlack;
  src: url(../fonts/Nexa/NexaBlack.otf);
}
@font-face{
  font-family: NexaBlackItalic;
  src: url(../fonts/Nexa/NexaBlackItalic.otf);
}
@font-face{
  font-family: NexaHeavy;
  src: url(../fonts/Nexa/NexaHeavy.otf);
}
@font-face{
  font-family: NexaHeavyItalic;
  src: url(../fonts/Nexa/NexaHeavyItalic.otf);
}

/* Oswald Font */
@font-face{
  font-family: Oswald-ExtraLight;
  src: url(../fonts/Oswald/Oswald-ExtraLight.ttf);
}
@font-face{
  font-family: Oswald-Light;
  src: url(../fonts/Oswald/Oswald-Light.ttf);
}
@font-face{
  font-family: Oswald-Regular;
  src: url(../fonts/Oswald/Oswald-Regular.ttf);
}
@font-face{
  font-family: Oswald-Medium;
  src: url(../fonts/Oswald/Oswald-Medium.ttf);
}
@font-face{
  font-family: Oswald-SemiBold;
  src: url(../fonts/Oswald/Oswald-SemiBold.ttf);
}
@font-face{
  font-family: Oswald-Bold;
  src: url(../fonts/Oswald/Oswald-Bold.ttf);
}
/* -----------------------------------
      Gallery Section
--------------------------------------*/
.portfolio-section {
  padding: 50px 0;
  background-color: #000;
}
.portfolio-section h2 {
  font-size: 28px;
  font-weight: 600;
  color: #fff;
  text-transform: uppercase;
}
.portfolio-menu {
  text-align: center;
}
.control {
  background: #000;
  color: #fff;
  padding: 5px 10px;
  border: 1px solid #343a40;
  border-radius: 3px;
  margin: 5px;
  cursor: pointer;
  -webkit-transition: all 05s ease;
  -moz-transition: all 05s ease;
  -ms-transition: all 05s ease;
  -o-transition: all 05s ease;
  transition: all 0.5s ease;
}
.control:hover {
  background: #343a40;
}
[type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
    cursor: pointer;
    font-family: 'NexaBold' !important;
}
.mixitup-control-active {
  color: #fff;
  background: #343a40;
}
.fancybox-container button:focus {
  outline: 0;
  box-shadow: none;
}
.portfolio-item {
  padding-top: 30px;
}
.pd {
  padding: 0;
  padding: 10px;
}
.pd img {
  height: 180px;
  transition: all 0.5s;
}
.portfolio-overlay {
  position: absolute;
  z-index: 2;
  top: 0;
  left: 0;
  background: rgba(0, 0, 0, 0.7);
  width: 100%;
  height: 100%;
  text-align: center;
  visibility: hidden;
  transition: all 0.5s;
  transform: scale(0);
}
.portfolio-overlay p,
.portfolio-overlay a {
  position: relative;
  z-index: 4;
}
.portfolio-overlay::before {
  content: "";
  width: 0;
  height: 0;
  border-width: 0;
  position: absolute;
  left: 10%;
  top: 10%;
  transition: 50ms height ease 150ms;
  z-index: 3;
}
.portfolio-overlay::after {
  content: "";
  width: 0;
  height: 0;
  border-width: 0;
  position: absolute;
  right: 10%;
  bottom: 10%;
  transition: 100ms width ease 200ms;
  z-index: 3;
}
.portfolio-item:hover .portfolio-overlay::before {
  /* width: 80%;
  height: 80%; */
  /* border-top: 1px solid #50977f;
  border-right: 1px solid #50977f; */
  transition: width 0.1s ease 0.3s, height 0.1s ease 0.5s;
}
.portfolio-item:hover .portfolio-overlay::after {
  /* width: 80%;
  height: 80%; */
    /* border-bottom: 1px solid #50977f;
    border-left: 1px solid #50977f; */
  transition: width 0.1s ease 0.6s, height 0.1s ease 0.7s;
}
.portfolio-item li:hover .portfolio-overlay {
  visibility: visible;
  transform: scale(1);
}
.portfolio-overlay .category {
  margin-top: 70px;
  margin-bottom: 20px;
  font-size: 16px;
  color: #fff;
  font-weight: 500;
}
.portfolio-overlay .magnify-icon {
  height: 40px;
  width: 40px;
  border-radius: 20px;
  background: #50977f;
  margin: 80px;
  cursor: pointer;
  display: inline-block;
  transition: all 0.25s;
}
.portfolio-overlay .magnify-icon:hover {
  background: #000;
}
.portfolio-overlay .magnify-icon p span i {
  font-size: 15px;
  color: #fff;
  line-height: 40px;
  cursor: pointer;
}
.{
    justify-content: center !important;
    text-align: center !important;
    margin: auto;
}

/*******Responsive media query******/

/* Extra small devices (portrait phones, less than 576px)*/
.text-h1  {
    font-size: 50px;
    font-weight: 700;
    font-family: Oswald-Bold!important;
    color:white;
}
.text-p  {
    font-size:20px;
    font-family: NexaBook, sans-serif !important;
}
.portfolio-section ul{
  margin:auto  !important;
}
    </style>
<body>
  <section class="portfolio-section" id="portfolio">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="text-h1">Gallery</h1>
          <!-- <p class="text-p">  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore corporis voluptate sunt,</p> -->
      </div>
      <div class="portfolio-menu mt-2 mb-4">
        <nav class="controls">
          <button type="button" class="control outline" data-filter="all">All</button>
          <button type="button" class="control outline" data-filter=".web">VFX</button>
          <button type="button" class="control outline" data-filter=".dev">GAMING</button>
          <button type="button" class="control outline" data-filter=".wp">ART WORK</button>
        </nav>
      </div>
      <ul class="row portfolio-item text-center">
        <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="images/gallery/gall-1.png" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <!-- <p class="category">Project Name</p> -->
              <!-- <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a> -->
              <a data-fancybox="item" title="click to zoom-in" href="images/gallery/gall-1.jpg">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="images/gallery/gall-2.png" temprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <!-- <p class="category">Project Name</p> -->
              <!-- <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a> -->
              <a data-fancybox="item" title="click to zoom-in" href="images/gallery/gall-2.jpg"ata-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="images/gallery/gal/gall-art-1.png" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <!-- <p class="category">Project Name</p> -->
              <!-- <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a> -->
              <a data-fancybox="item" title="click to zoom-in" href="images/gallery/gal/gall-art-1.jpg" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        
        <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd ">
          <img src="images/gallery/gall-4.png" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <!-- <p class="category">Project Name</p> -->
              <!-- <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a> -->
              <a data-fancybox="item" title="click to zoom-in" href="images/gallery/gall-4.jpg" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd ">
          <img src="images/gallery/gall-5.png" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <!-- <p class="category">Project Name</p> -->
              <!-- <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a> -->
              <a data-fancybox="item" title="click to zoom-in" href="images/gallery/gall-5.jpg" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd ">
          <img src="images/gallery/gal/gall-art-2.png" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <!-- <p class="category">Project Name</p> -->
              <!-- <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a> -->
              <a data-fancybox="item" title="click to zoom-in" href="images/gallery/gal/gall-art-2.jpg" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="images/gallery/gall-7.png" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <!-- <p class="category">Project Name</p> -->
              <!-- <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a> -->
              <a data-fancybox="item" title="click to zoom-in" href="images/gallery/gall-7.jpg" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="images/gallery/gall-8.png" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <!-- <p class="category">Project Name</p> -->
              <!-- <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a> -->
              <a data-fancybox="item" title="click to zoom-in" href="images/gallery/gall-8.jpg" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="images/gallery/gal/gall-art-3.png" emprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <!-- <p class="category">Project Name</p> -->
              <!-- <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a> -->
              <a data-fancybox="item" title="click to zoom-in" href="images/gallery/gal/gall-art-3.jpg" ta-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="images/gallery/gall-13.png" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <!-- <p class="category">Project Name</p> -->
              <!-- <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a> -->
              <a data-fancybox="item" title="click to zoom-in" href="images/gallery/gall-13.jpg" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="images/gallery/gall-11.png" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <!-- <p class="category">Project Name</p> -->
              <!-- <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a> -->
              <a data-fancybox="item" title="click to zoom-in" href="images/gallery/gall-11.jpg" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="images/gallery/gal/gall-art-5.png" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <!-- <p class="category">Project Name</p> -->
              <!-- <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a> -->
              <a data-fancybox="item" title="click to zoom-in" href="images/gallery/gal/gall-art-5.jpg" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- JS Links -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></s>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <!-- Mixitup -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.2.2/mixitup.min.js'></script>
  <!-- fancybox -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js'></script>
  <!-- Fancybox js -->
  <script>
    /*Downloaded from https://www.codeseek.co/ezra_siton/mixitup-fancybox3-JydYqm */
    // 1. querySelector
    var containerEl = document.querySelector(".portfolio-item");
    // 2. Passing the configuration object inline
    //https://www.kunkalabs.com/mixitup/docs/configuration-object/
    var mixer = mixitup(containerEl, {
      animation: {
        effects: "fade translateZ(-100px)",
        effectsIn: "fade translateY(-100%)",
        easing: "cubic-bezier(0.645, 0.045, 0.355, 1)"
      }
    });
    // fancybox insilaze & options //
    $("[data-fancybox]").fancybox({
      loop: true,
      hash: true,
      transitionEffect: "slide",
      /* zoom VS next////////////////////
      clickContent - i modify the deafult - now when you click on the image you go to the next image - i more like this approach than zoom on desktop (This idea was in the classic/first lightbox) */
      clickContent: function(current, event) {
        return current.type === "image" ? "next" : false;
      }
    });
  </script>
</body>

</html>
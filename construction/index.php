<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("../includes/compatibility.php"); ?>
   <meta name="description" content="">
   <title>Mint || About Us </title>
   <?php include("../includes/style.php"); ?>
   <!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->

   <style>
      a:hover {
         color: white;
      }
   </style>
</head>

<body id="content">
   <?php include("header.php"); ?>


   <div class="mainBanner padLMain" id="mainBanner" style="background-image: url(../assets/images/cAbout.png);">
      <div class="container-fluid">
         <div class="row mainBannerRow">
         </div>
      </div>

      <a href="#footer" id="toggleButton2" class="scrollMain">
         <button>
            <i class="fas fa-chevron-down"></i>
            <i class="fas fa-chevron-down"></i>
            <i class="fas fa-chevron-down"></i>
         </button>
         <h4>Scroll TO Explore</h4>
      </a>


      <div class="hBannerBotMain">
         <div class="hBannerBot">
            <div class="hBannerBL">
               <button id="toggleButton4"><i class="fas fa-times"></i></button>
               <h5>Follow Mint Architecture</h5>
            </div>
            <div class="hBannerBR">
               <span></span>
               <ul>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   </div>
   <div class="titus padLMain" id="titus">
      <div class="col-md-12">
         <div class="mydiv bannerText">
            <div class="hBannerTop mb-5">
               <div class="row">
                  <div class="col-md-5">
                     <div class="hBannerTopMain">
                        <a href="../construction/" class="hBannerTopM active">
                           <div class="mb-4">
                              <img src="../assets/images/mintConst.png" class="mintConst" alt="">
                           </div>
                           <div class="hBannerTopBBox">
                              <div id="draggableElement" class="draggable " style="border-color: white; overflow:visible; border: 2px solid;border-radius: 50%;">
                                 <i class="fas fa-hand-point-up" style="font-size:24px; padding:10px;"></i>
                              </div>
                           </div>
                        </a>
                        <a id="architecture" href="../architecture/" class="hBannerTopM">
                           <div class="hBannerTopBBox hBannerTopBBoxR justify-content-end">
                              <button><i class="fas fa-hand-point-up"></i></button>
                           </div>
                           <div class="mb-4">
                              <img src="../assets/images/mintArchi.png" class="mintConst" alt="">
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="hBannerMid " id="hBannerMid">
               <h1>About Us</h1>
            </div>
         </div>
      </div>
   </div>





   <div class="main mt-5" id="footer">
      <div class="seclogo">
         <div class="d-flex justify-content-between">
            <a href="#titus">
               <img src="../assets//images/sideLogo.png" alt="">
            </a>
            <button class="btnClose" id="toggleButton"><i class="fas fa-times"></i> </button>
         </div>
      </div>
      <section class="secPAboutTop padSec secMTop" id="secMTop" style="top:120px;">
         <div class="container-fluid">
            <div class="row border-bottom align-items-center">
               <div class="col-md-6">
                  <div class="paboutToptext">
                     <h3 class="headingF mb-3">About Us</h3>
                     <p class="para mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                     <h4 class="font-weight-bold headingT text-body text-uppercase">OUR core VALUES</h4>
                     <ul>
                        <li>
                           <h4 class="font-weight-bold headingT text-body text-uppercase">INNOVATION</h4>
                           <p class="para">We employ cutting edge innovations and technologies for all phases of construction.</p>
                        </li>
                        <li>
                           <h4 class="font-weight-bold headingT text-body text-uppercase">POSITIVITY</h4>
                           <p class="para">We build other up, see the glass as half full, show respect, have fun, and enjoy building perfect spaces.</p>
                        </li>
                        <li>
                           <h4 class="font-weight-bold headingT text-body text-uppercase">MInt Experience</h4>
                           <p class="para">We provide an unprecedented level of commitment to make the experience of building with MiNT a positive one for all involved.</p>
                        </li>
                        <li>
                           <h4 class="font-weight-bold headingT text-body text-uppercase">PROFESSIONALISM</h4>
                           <p class="para">We honor the trust placed in us and ensure professionalism, proactivity, respect, solutions, and preparedness.</p>
                        </li>
                        <li>
                           <h4 class="font-weight-bold headingT text-body text-uppercase">IMAGE</h4>
                           <p class="para">We maintain a clean, fresh, and confident image in all we do, say, and build.</p>
                        </li>
                     </ul>

                  </div>
               </div>
               <div class="col-md-6">
                  <div class="paboutTopImg">
                     <img src="../assets/images/paboutTopImg.png" class="img-fluid" alt="whoWeAreBImg">
                     <h5 class="whoWeAreBoxTextSide">01 / Mint Construction</h5>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="secPAboutMid padSec pt-0 border-bottom">
         <div class="container-fluid">
            <div class="row border-bottom pb-4">
               <div class="col-md-12">
                  <div class="pAboutMidImg">
                     <img src="../assets/images/pAboutMidImg.png" alt="">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="secPAboutTop padSec secMTop">
         <div class="container-fluid">
            <div class="row border-bottom align-items-center">
               <div class="col-md-6">
                  <div class="paboutTopImg">
                     <img src="../assets/images/paboutBotImg.png" class="img-fluid" alt="whoWeAreBImg">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="paboutToptext">
                     <h4 class="font-weight-bold headingT text-body text-uppercase">OUR PERSONALITY (7 C’s)</h4>
                     <ul>
                        <li>
                           <h4 class="font-weight-bold headingT text-body text-uppercase">CLEAR</h4>
                           <p class="para">MiNT offers clear accountability, accounting, schedules, and lines of communication.</p>
                        </li>
                        <li>
                           <h4 class="font-weight-bold headingT text-body text-uppercase">COST</h4>
                           <p class="para">MiNT offers a superior product at a competitive price. MINT provides continual cost analysis during the design-build process and designs to a budget.</p>
                        </li>
                        <li>
                           <h4 class="font-weight-bold headingT text-body text-uppercase">CLEAN</h4>
                           <p class="para">MINT portrays a clean image in our office, on our job sites, and through our employees — in both appearance and behavior.</p>
                        </li>
                        <li>
                           <h4 class="font-weight-bold headingT text-body text-uppercase">CREATIVE</h4>
                           <p class="para">MINT passionately discovers the purpose of each space and pushes the limits to find creative and innovative solutions for each design-build project.</p>
                        </li>
                        <li>
                           <h4 class="font-weight-bold headingT text-body text-uppercase">CUTTING-EDGE</h4>
                           <p class="para">MINT employs the most cutting-edge technologies, software, and tools for architecture and construction.</p>
                        </li>
                        <li>
                           <h4 class="font-weight-bold headingT text-body text-uppercase">COLLABORATIVE</h4>
                           <p class="para">MINT fosters strong collaboration and cultivates meaningful, trusting relationships that are essential to creating perfect spaces.</p>
                        </li>
                        <li>
                           <h4 class="font-weight-bold headingT text-body text-uppercase">COMPETENT</h4>
                           <p class="para">MINT delivers on its promise by matching the most qualified and proven managers to each project.</p>
                        </li>
                     </ul>

                     <a href="#mainBanner" class="whoWeAreBoxTextSide">
                        <button>
                           <i class="fas fa-chevron-down"></i>
                           <i class="fas fa-chevron-down"></i>
                           <i class="fas fa-chevron-down"></i>
                        </button>
                        Go Back
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
   <?php include("footer.php"); ?>
   <?php include("../includes/scripts.php"); ?>
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script>
      $(document).ready(function() {
         $(".draggable").draggable({
            containment: "parent",
            axis: "x",
            stop: function(event, ui) {
               var leftPosition = ui.position.left;
               console.log(leftPosition);
               if (leftPosition > 0) {
                  var link = $('#architecture').attr("href");
                  console.log(link);
                  if (link) {
                     window.location.href = link;
                  }
               }
            }
         });

         $('#toggleButton2').on('click', function() {
            $('.seclogo').css('top', '72px');


         });

         $('#toggleButton4').on('click', function() {
            // Toggle between fa-times and fa-plus
            var icon = $(this).find('i');
            icon.toggleClass('fa-times fa-plus');

            // Toggle the visibility of hBannerBR
            $('.hBannerBR').toggle();
         });

         $('#toggleButton').on('click', function() {
            var currentIcon = $(this).find('i');

            if (currentIcon.hasClass('fa-times')) {
               currentIcon.removeClass('fa-times').addClass('fa-bars');
            } else {
               currentIcon.removeClass('fa-bars').addClass('fa-times');
            }
         });
      });
   </script>

</body>

</html>
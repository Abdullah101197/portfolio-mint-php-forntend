<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("../includes/compatibility.php"); ?>
   <meta name="description" content="">
   <title>Mint || Home</title>
   <?php include("../includes/style.php"); ?>
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

   <style>
      a:hover {
         color: white;
      }
   </style>
</head>

<body>
   <div class="loader-container" id="loader-container">
      <svg width="200" height="200" viewBox="0 0 40 60">
         <polygon class="triangle" fill="none" stroke="#fff" stroke-width="1" points="16,1 32,32 1,32" />
         <text class="loading" x="0" y="45" fill="#fff">Loading...</text>
      </svg>
   </div>
   <?php include("header.php"); ?>


   <div class="mainBanner padLMain" id="mainBanner" style="background-image: url(../assets/images/hBannerBg.png);">
      <div class="container-fluid">
         <div class="row mainBannerRow">
         </div>
      </div>

      <a href="#footer" id="toggleButton2" class="scrollMain">
         <button>
            <i class=" fas fa-chevron-down"></i>
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
                        <a id="construction" href="../construction/" class="hBannerTopM">
                           <div class="mb-4">
                              <img src="../assets/images/mintConst.png" class="mintConst" alt="">
                           </div>
                           <div class="hBannerTopBBox">
                              <h6 class="pr-3">01</h6>
                              <button><i class="fas fa-hand-point-up"></i></button>
                           </div>
                        </a>
                        <a href="../architecture/" class="hBannerTopM active">
                           <div class="hBannerTopBBox hBannerTopBBoxR justify-content-end">

                              <div id="draggableElement" class="draggable " style="border-color: white; overflow:visible; border: 2px solid;border-radius: 50%;">
                                 <i class="fas fa-hand-point-up" style="font-size:24px; padding:10px;"></i>
                              </div>
                              <h6 class="pl-3">02</h6>
                           </div>
                           <div class="mb-4">
                              <img src="../assets/images/mintArchi.png" class="mintConst" alt="">
                           </div>
                        </a>
                     </div>





                  </div>
               </div>
            </div>
            <div class="hBannerMid" id="hBannerMid">
               <h1>Architecture</h1>
            </div>
         </div>
      </div>
   </div>
   <div class="main" id="footer">
      <div class="seclogo">
         <div class="d-flex justify-content-between">
            <a href="#titus">
               <img src="../assets//images/sideLogo.png" alt="">
            </a>

            <button class="btnClose" id="toggleButton"><i class="fas fa-times"></i> </button>
         </div>
      </div>
      <section class="secWhoWeAre padSec secMTop" style="top:122px;">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="whoWeAreBoxMain">
                     <div class="whoWeAreBoxImg">
                        <img src="../assets/images/whoWeAreBImg.png" class="img-fluid" alt="whoWeAreBImg">
                     </div>
                     <div class="whoWeAreBoxText border-bottom">
                        <h4 class="headingT">01 / Mint Architecture</h4>
                        <h3 class="headingF">Who We Are</h3>
                        <p class="para">We feel strongly about the advantage of having a true Design/Build option for our clients. In 2020 Mint Construction partnered with Corey Middleton to help facilitate this option through the creation of Mint Architecture. Both Mint Companies are committed to creating a unique experience for clients by working together. However, the two companies are two distinct entities who are anxious to develop and maintain relationships through other partnerships with architects, contractors, developers, etc. outside of the Mint ownership umbrella. While working with those outside of the Mint group of companies, we strive to be sensitive of feelings that we are competing with other service providers,but rather, we are committed to growing through additional partnerships outside of the Mint ownership group.</p>
                        <h5 class="whoWeAreBoxTextSide">01 / Mint Architecture</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="secHightPoin padSec">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-md-12">
                  <div class="hightPoinBoxText mb-5">
                     <h4 class="headingT">01 / FEATURED PROJECTS</h4>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="hightPoinBoxText">
                     <h3 class="headingS mb-4">HIGH POINTE OFFICES</h3>
                     <p class="para mb-4">We feel strongly about the advantage of having a true Design/Build option for our clients. In 2020 Mint Construction partnered with Corey Middleton to help facilitate this option through the creation of Mint Architecture. Both Mint Companies are committed to creating a unique experience for clients by working together. However, the two companies are two distinct entities who are anxious to develop and maintain relationships through other partnerships with architects, contractors, developers, etc. outside of the Mint ownership umbrella. While working with those outside of the Mint group of companies, we strive to be sensitive of feelings that we are competing with other service providers,but rather, we are committed to growing through additional partnerships outside of the Mint ownership group.</p>
                     <p class="para mb-1 font-weight-normal">Location: Draper, Utah</p>
                     <p class="para mb-1 font-weight-normal">Status: Under-Construction (TBC 2024)</p>
                     <p class="para mb-1 font-weight-normal">Size: 112,500 SF</p>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="hightPoinBoxImg">
                     <img src="../assets/images/hightPoinBoxImg.png" class="img-fluid" alt="hightPoinBoxImg">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="secHightPoin padSec">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-md-5">
                  <div class="hightPoinBoxImg">
                     <img src="../assets/images/pacificYardBoxImg.png" class="img-fluid" alt="pacificYardBoxImg">
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="hightPoinBoxText">
                     <h3 class="headingS mb-4">PACIFIC YARD APARTMENTS</h3>
                     <p class="para mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                     <p class="para mb-1 font-weight-normal">Location: Salt Lake City, Utah</p>
                     <p class="para mb-1 font-weight-normal">Status: Permitting</p>
                     <p class="para mb-1 font-weight-normal">Size: 300,000 SF</p>
                     <p class="para mb-1 font-weight-normal">Units: 277</p>

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

      <section class="secHightPoin padSec">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-md-7">
                  <div class="hightPoinBoxText">
                     <h3 class="headingS mb-4">KALISPELL APARTMENTS</h3>
                     <p class="para mb-4">We feel strongly about the advantage of having a true Design/Build option for our clients. In 2020 Mint Construction partnered with Corey Middleton to help facilitate this option through the creation of Mint Architecture. Both Mint Companies are committed to creating a unique experience for clients by working together. However, the two companies are two distinct entities who are anxious to develop and maintain relationships through other partnerships with architects, contractors, developers, etc. outside of the Mint ownership umbrella. While working with those outside of the Mint group of companies, we strive to be sensitive of feelings that we are competing with other service providers,but rather, we are committed to growing through additional partnerships outside of the Mint ownership group.</p>
                     <p class="para mb-1 font-weight-normal">Location: Kalispell, Montana</p>
                     <p class="para mb-1 font-weight-normal">Status: Schematic Design</p>
                     <p class="para mb-1 font-weight-normal">Size: 464 Units</p>
                     <div class="button mt-5">
                        <a href="#" class="btn_gray text-dark">VIEW ALL PROJECTS</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="hightPoinBoxImg">
                     <img src="../assets/images/kalispellBoxImg.png" class="img-fluid" alt="kalispellBoxImg">
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>


   <?php include("footer.php"); ?>

   <script>
      // Hide the loader after a longer timeout
      setTimeout(function() {
         var loaderContainer = document.getElementById("loader-container");
         if (loaderContainer) {
            loaderContainer.style.display = "none";
         }
      }, 0000);
   </script>

   <script>
      $(document).ready(function() {
         $(".draggable").draggable({
            containment: "parent",
            axis: "x",
            stop: function(event, ui) {
               var leftPosition = ui.position.left;
               console.log(leftPosition);
               if (leftPosition < 0) {
                  var link = $('#construction').attr("href");
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
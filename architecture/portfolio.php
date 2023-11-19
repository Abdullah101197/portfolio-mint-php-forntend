<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("../includes/compatibility.php"); ?>
      <meta name="description" content="">
      <title>Mint || Portfolio</title>
      <?php include("../includes/style.php"); ?>
   </head>
   <style>
    /* Your CSS styles for the loader container */
    .loader-container {
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 1); /* Initially, set background to black */
        z-index: 9999;
    }

    .content {
        display: none; /* Initially, hide the content */
    }


</style>
   <body>
   <div class="loader-container" id="loader-container">
    <svg width="200" height="200" viewBox="0 0 40 60">
        <polygon class="triangle" fill="none" stroke="#fff" stroke-width="1" points="16,1 32,32 1,32" />
        <text class="loading" x="0" y="45" fill="#fff">Loading...</text>
    </svg>
</div>

<div class="content"  id="content">
      <?php include("header.php"); ?>

      <div class="mainBanner padLMain" id="mainBanner" style="background-image: url(../assets/images/portfolio.png);">
         <div class="container-fluid">
            <div class="row mainBannerRow">
            </div>
         </div>

         <a href="#footer" class="scrollMain">
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
                     <button><i class="fas fa-times"></i></button>
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
                                 <button><i class="fas fa-hand-point-up"></i></button>
                              </div>
                           </a>
                           <a href="../architecture/" class="hBannerTopM">
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
               <div class="hBannerMid" id="hBannerMid">
                  <h1>Portfolio</h1>
               </div>
            </div>
         </div>
      </div>





      <div class="main" id="footer" >
         <div class="seclogo">
            <div class="d-flex justify-content-between">
               <a href="#titus">
                  <img src="../assets//images/sideLogo.png" alt="">
               </a>
               <button class="btnClose" onclick="toggleClass()"><i class="fas fa-times"></i> </button>
            </div>
         </div>
         <section class="secWhoWeAre padSec secMTop">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <div class="whoWeAreBoxMain">
                        <div class="whoWeAreBoxImg">
                           <img src="./../assets/images/officeImg.png" class="img-fluid" alt="officeImg">
                        </div>
                        <div class="whoWeAreBoxText border-bottom">
                           <h3 class="headingF">Office</h3>
                           <h5 class="whoWeAreBoxTextSide">01 / Portfolio</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="secWhoWeAre padSec secMTop">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <div class="whoWeAreBoxMain">
                        <div class="whoWeAreBoxImg">
                           <img src="./../assets/images/multifamilyImg.png" class="img-fluid" alt="multifamilyImg">
                        </div>
                        <div class="whoWeAreBoxText border-bottom">
                           <h3 class="headingF">Multifamily</h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="secWhoWeAre padSec secMTop">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <div class="whoWeAreBoxMain">
                        <div class="whoWeAreBoxImg">
                           <img src="./../assets/images/medicalImg.png" class="img-fluid" alt="medicalImg">
                        </div>
                        <div class="whoWeAreBoxText border-bottom">
                           <h3 class="headingF">Medical</h3>
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
            </div>
         </section>
         <section class="secWhoWeAre padSec secMTop">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <div class="whoWeAreBoxMain">
                        <div class="whoWeAreBoxImg">
                           <img src="./../assets/images/retailImg.png" class="img-fluid" alt="retailImg">
                        </div>
                        <div class="whoWeAreBoxText p-0">
                           <h3 class="headingF">Retail</h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
      </div>

      <?php include("footer.php"); ?>
      <?php include("../includes/scripts.php"); ?>
      <script>
    // Display black background for 5 seconds
    setTimeout(function () {
        var loaderContainer = document.getElementById("loader-container");
        if (loaderContainer) {
            loaderContainer.style.backgroundColor = "transparent"; // Set background to transparent
        }

        // Hide the loader and the triangle
        var triangle = document.querySelector(".triangle");
        if (loaderContainer && triangle) {
            loaderContainer.style.display = "none";
            triangle.style.display = "none";
        }

        // Show the content immediately after the loader is hidden
        var content = document.getElementById("content");
        if (content) {
            content.style.display = "block"; // Show the content
        }
    }, 5000); // Wait for 5 seconds (5000 milliseconds)
</script>
   </body>
</html>

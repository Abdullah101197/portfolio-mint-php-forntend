<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("../includes/compatibility.php"); ?>
      <meta name="description" content="">
      <title>Mint || Safety</title>
      <?php include("../includes/style.php"); ?>
   </head>
   <body>
      <?php include("header.php"); ?>

      <div class="mainBanner padLMain" id="mainBanner" style="background-image: url(../assets/images/psafetyBg.png);">
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
                     <h5>Safety</h5>
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
                  <h1>About Us</h1>
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
         <section class="secContact padSec secMTop">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <div class="MeetTeamHeading mb-5">
                        <h3 class="headingS mb-3">MINT SAFETY PROGRAM</h3>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <h5 class="whoWeAreBoxTextSide">01 / Mint Construction</h5>
                  </div>
                  <div class="col-md-12">
                    <img src="../assets/images/safetyImg.png" alt="">
                  </div>
               </div>
            </div>
         </section>
         <section class="secForm padSec secMTop">
            <div class="container-fluid">
               <div class="row border-top py-5 border-bottom">
                <div class="col-md-12 py-4">
                    <p class="headingT text-center">SHIELD (hoplon or aspis) – The hoplite’s most important piece of equipment. A Spartan could lose his helmet or breastplate with impunity but would be disgraced if he threw away his shield because, <span class="textGreen">“You wear the armor for your protection but you carry your shield for the protection of the entire line.”</span></p>
                </div>

                  <div class="col-md-12">
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
         </section>
         <section class="secContact padSec secMTop">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <div class="MeetTeamHeading mb-5">
                        <h3 class="headingS mb-3">MINT SAFETY FORMS</h3>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="contactBoxM mr-0 border-0">
                        <h4 class="headingT textGreen mb-3">1. Jsa Deskstop Guide</h4>
                        <a href="#" class="btnGray">Download Form <i class="fas fa-file-alt"></i></a>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="contactBoxM mr-0 border-0">
                        <h4 class="headingT textGreen mb-3">2. Safety</h4>
                        <a href="#" class="btnGray">Download Form <i class="fas fa-file-alt"></i></a>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="contactBoxM mr-0 border-0">
                        <h4 class="headingT textGreen mb-3">1. Jsa Mobile Guide</h4>
                        <a href="#" class="btnGray">Download Form <i class="fas fa-file-alt"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>


      <?php include("footer.php"); ?>
      <?php include("../includes/scripts.php"); ?>
   </body>
</html>
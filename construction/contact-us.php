<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("../includes/compatibility.php"); ?>
      <meta name="description" content="">
      <title>Mint || Contact Us</title>
      <?php include("../includes/style.php"); ?>
   </head>
   <body>
      <?php include("header.php"); ?>

      <div class="mainBanner padLMain" id="mainBanner" style="background-image: url(../assets/images/pContactBg.png);">
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
                  <h1>CONTACT US</h1>
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
         <section class="secForm padSec secMTop">
            <div class="container-fluid">
               <div class="row border-bottom pb-5">
                  <div class="col-md-12">
                     <div class="MeetTeamHeading mb-5">
                        <h3 class="headingS mb-3">MINT SAFETY PROGRAM</h3>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <h5 class="whoWeAreBoxTextSide">01 / Mint Construction</h5>
                  </div>
                  <div class="col-md-4">
                     <div class="formBoxM mb-5">
                        <label for="" class="lableFelid mb-3">Your Name <span class="text-danger">*</span></label>
                        <input type="email" placeholder="Enter Your Name" class="inputFelid">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="formBoxM mb-3">
                        <label for="" class="lableFelid mb-3">Your Email <span class="text-danger">*</span></label>
                        <input type="email" placeholder="Enter Your Name" class="inputFelid">
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="formBoxM mb-3">
                        <label for="" class="lableFelid mb-3">Subject</label>
                        <input type="email" placeholder="Enter Your Subject" class="inputFelid">
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="formBoxM mb-3">
                        <label for="" class="lableFelid mb-3">Message</label>
                        <!-- <input type="email" placeholder="Enter Your Subject" class="inputFelid"> -->
                        <textarea name="" id="" cols="30" rows="10" class="inputFelid" placeholder="Enter Your Message"></textarea>
                     </div>
                  </div>
                  <div class="col-md-5">
                     <div class="formBoxM mb-3 text-center">
                        <button class="btn_green w-100 mb-3">Send</button>
                     </div>
                  </div>                 
               </div>
            </div>
         </section>

         <section class="secContact padSec secMTop">
            <div class="container-fluid">
               <div class="row">
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
                  <div class="col-md-4">
                     <div class="contactBoxM">
                        <h4 class="headingT text-dark">Contact</h4>
                        <a href="#" class="contactBox">
                           <i class="fas fa-envelope bgGreen"></i> 7585 S. Union Park Avenue Suite #100 Sandy, UT 84047
                        </a>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="contactBoxM">
                        <h4 class="headingT text-dark">Email</h4>
                        <a href="#" class="contactBox">
                           <i class="fas fa-envelope bgGreen"></i> hello@buildwithmint.com
                        </a>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="contactBoxM border-right-0">
                        <h4 class="headingT text-dark">Phone</h4>
                        <a href="#" class="contactBox">
                           <i class="fas fa-envelope bgGreen"></i> 801-996.3646
                        </a>
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
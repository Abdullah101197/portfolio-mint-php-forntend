<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include "../includes/compatibility.php";?>
      <meta name="description" content="">
      <title>Mint || About Us  </title>
      <?php include "../includes/style.php";?>
   </head>



   <body >
   <div class="loader-container" id="loader-container" >
    <svg width="200" height="200" viewBox="0 0 40 60">
        <polygon class="triangle" fill="none" stroke="#fff" stroke-width="1" points="16,1 32,32 1,32" />
        <text class="loading" x="0" y="45" fill="#fff">Loading...</text>
    </svg>
</div>


      <?php include "header.php";?>

      <div class="mainBanner padLMain" id="mainBanner" style="background-image: url(../assets/images/aboutBg.png);">
         <div class="container-fluid">

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
            <section class="secMeetTeam padSec secMTop">
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="MeetTeamHeading mb-5">
                            <h3 class="headingS textBlue">MEET OUR TEAM</h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h5 class="whoWeAreBoxTextSide">02 / About Us</h5>
                    </div>
                    <div class="col-md-4">
                        <div class="meetTeamBoxMain">
                            <div class="meetTeamBoxImg">
                            <img src="../assets/images/teamImg1.png" class="img-fluid" alt="officeImg">
                            </div>
                            <div class="meetTeamBoxText">
                            <h4>COREY MIDDLETON</h4>
                            <h5>PRINCIPAL ARCHITECT</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="meetTeamBoxMain">
                            <div class="meetTeamBoxImg">
                            <img src="../assets/images/teamImg2.png" class="img-fluid" alt="officeImg">
                            </div>
                            <div class="meetTeamBoxText">
                            <h4>DAN TEED</h4>
                            <h5>PRINCIPAL ARCHITECT</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="meetTeamBoxMain">
                            <div class="meetTeamBoxImg">
                            <img src="../assets/images/teamImg3.png" class="img-fluid" alt="officeImg">
                            </div>
                            <div class="meetTeamBoxText">
                            <h4>McCOY HILL</h4>
                            <h5>DIRECTOR OF FINANCE</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="meetTeamBoxMain">
                            <div class="meetTeamBoxImg">
                            <img src="../assets/images/teamImg4.png" class="img-fluid" alt="officeImg">
                            </div>
                            <div class="meetTeamBoxText">
                            <h4>RILEY YOUNG</h4>
                            <h5>PROJECT MANAGER</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="meetTeamBoxMain">
                            <div class="meetTeamBoxImg">
                            <img src="../assets/images/teamImg5.png" class="img-fluid" alt="officeImg">
                            </div>
                            <div class="meetTeamBoxText">
                            <h4>TAYLOR CARPENTER</h4>
                            <h5>ARCHITECT, PROJECT MANAGER</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="meetTeamBoxMain">
                            <div class="meetTeamBoxImg">
                            <img src="../assets/images/teamImg0.png" class="img-fluid" alt="officeImg">
                            </div>
                            <div class="meetTeamBoxText">
                            <h4>HANNAH RICHLAND</h4>
                            <h5>ARCHITECTURAL DESIGNER II</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="meetTeamBoxMain">
                            <div class="meetTeamBoxImg">
                            <img src="../assets/images/teamImg6.png" class="img-fluid" alt="officeImg">
                            </div>
                            <div class="meetTeamBoxText">
                            <h4>PARKER THOMPSON</h4>
                            <h5>DRAFTER</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="meetTeamBoxMain">
                            <div class="meetTeamBoxImg">
                            <img src="../assets/images/teamImg7.png" class="img-fluid" alt="officeImg">
                            </div>
                            <div class="meetTeamBoxText">
                            <h4>ABI TENANGUENO</h4>
                            <h5>DRAFTER</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="meetTeamBoxMain">
                            <div class="meetTeamBoxImg">
                            <img src="../assets/images/teamImg8.png" class="img-fluid" alt="officeImg">
                            </div>
                            <div class="meetTeamBoxText">
                            <h4>LACEY CHUN</h4>
                            <h5>DRAFTER</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="meetTeamBoxMain">
                            <div class="meetTeamBoxImg">
                            <img src="../assets/images/teamImg0.png" class="img-fluid" alt="officeImg">
                            </div>
                            <div class="meetTeamBoxText">
                            <h4>KAT MALYGINA</h4>
                            <h5>DRAFTER</h5>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
      </div>


      <?php include "footer.php";?>
      <?php include "../includes/scripts.php";?>
      <script>
        // Hide the loader after a longer timeout
        setTimeout(function () {
            var loaderContainer = document.getElementById("loader-container");
            if (loaderContainer) {
                loaderContainer.style.display = "none";
            }
        }, 10000); // Wait for 10 seconds (10000 milliseconds) before hiding
      </script>
   </body>
</html>

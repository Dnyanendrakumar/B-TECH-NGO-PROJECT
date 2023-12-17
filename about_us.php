<?php
include_once "./includes/header.php";
?>


<style>
    /* Add some basic styling for better presentation */
    
    #cardContainer{
      display: flex;
      flex-direction: row;
      /* height: 100vh; */
      margin: 0;
      font-family: Arial, sans-serif;
      justify-content: space-evenly;
    }

    .card {
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 16px;
      margin: 16px;
      text-align: center;
      display: flex;
      flex-direction: column;
      box-shadow: ;
      max-width: 200px;
      
    }

    img {
      
      max-width: 100%;
      height: auto;
      border-radius: 5px;
    }
    
    .more{
      width: 10%;
      display: flex;
      align-items: center;
      text-align: center;
      justify-content: center;
      margin-left: 680px;
      /*margin: auto;*/
      
    }

    @media screen and (max-width: 767px) {
            .col-md-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            #cardContainer {
                flex-direction: column;
                align-items: center;
            }

            .card {
                max-width: 100%;
            }
        }
    </style>
  <!--  ************************* Page Title Starts Here ************************** -->
        
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>About Us</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> About Us</li>
                </ul>
            </div>
        </div>
    </div>
    
  <!--  ************************* About Us Starts Here ************************** -->    
       
<div class="about-us container-fluid">
    <div class="container">

        <!-- <div class="row natur-row no-margin w-100">
            <div class="text-part col-md-6">
                <h2>About Our Charity</h2>
                <p><?= $aboutUsData['about_us_text'] ?></p>
            </div>
            <div class="image-part col-md-6">
                <div class="about-quick-box row">
                    <div class="col-md-6">
                        <div class="about-qcard">
                           <i class="fas fa-user"></i>
                            <p>Becom a Volunteer</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <i class="fas fa-search-dollar red"></i>
                            <p>Quick Fundrais</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <i class="fas fa-donate yell"></i>
                            <p>Giv Donation</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <i class="fas fa-hands-helping blu"></i>
                            <p>Help Someone</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<h1 style=" margin-left: 640px; padding:20px">Our Team<h1>

    <div id="cardContainer">

      
    <!-- Card 1 -->
    <div class="card">
      <img src="logo.png" alt="Card 1 Image">
      <h2>Founder & President</h2>
      <p>This is the content of card 1.</p>
    </div>

    <!-- Card 2 -->
    <div class="card">
      <img src="logo.png" alt="Card 2 Image">
        <h2>Vice-President</h2>
      <p>This is the content of card 2.</p>
    </div>

    <!-- Card 3 -->
    <div class="card">
      <img src="logo.png" alt="Card 3 Image">
      <h2>Secretary</h2>
      <p>This is the content of card 3.</p>
    </div>

    <!-- Card 4 -->
    <div class="card">
      <img src="logo.png" alt="Card 4 Image">
      <h2>Treasurer</h2>
      <p>This is the content of card 4.</p>
    </div>
    
   
  </div>
 

    </div>
</div>     
   

 <!-- ################# Mission Vision Start Here #######################--->
  
  <section class="container-fluid mission-vision">
      <div class="container">
          <div class="row mission">
              <div class="col-md-6 mv-det">
                  <h1>Our Mission</h1>
                  <p><?= $aboutUsData['mission'] ?></p>
              </div>
              <div class="col-md-6 mv-img">
                  <img src="assets/images/misin.jpg" alt="">
              </div>
          </div>
          <div class="row vision">
              <div class="col-md-6 mv-img">
                   <img src="assets/images/vision.jpg" alt="">
              </div>
              <div class="col-md-6 mv-det">
                   <h1>Our Vision</h1>
                   <p><?= $aboutUsData['vision'] ?></p>
              </div>
          </div>
      </div>
  </section>   
   

  <?php
include_once "./includes/footer.php";
?> 
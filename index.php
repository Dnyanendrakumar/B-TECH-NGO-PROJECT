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
    #cardgallery{
      display: flex;
      flex-direction: row;
      /* height: 100vh; */
      margin: 0;
      font-family: Arial, sans-serif;
      justify-content: space-evenly;
    }


    .imggallery{

        height: 16rem;
        width: 100%;

    }

    .gallery {
    
      padding: 16px;
      margin: 16px;
      text-align: center;
      display: flex;
      flex-direction: column;
      box-shadow: ;
      max-width: 200px;
      
    }

 
    
    .allgallery{
      width: 10%;
      display: flex;
      align-items: center;
      text-align: center;
      justify-content: center;
      margin-left: 680px;
      /*margin: auto;*/
      
    }


    .moregallery{
      width: 50%;
      display: flex;
      align-items: center;
      text-align: center;
      justify-content: center;
      margin-left: 500px;
      /*margin: auto;*/
      
    }
    
    
    
    
  </style>


<div class="slider">
    
    <div class="owl-carousel ">

            <?php
                $sql = "SELECT * FROM home_slider";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
            ?>

        <div class="slider-img">
            <div class="item">

                <div class="slider-img"><img src="./admin/uploads/<?php echo $row['image'] ?>" alt="slider"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="animated bounceInDown slider-captions">
                                <h1 class="slider-title"><?= $row['primaryText'] ?></h1>
                                <p class="slider-text hidden-xs"><?= $row['secondaryText'] ?></p>
                                <a href="donate_detail.php?id=<?= $row['campaign_id'] ?>" class="btn btn-success">Go To Details</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php } ?>

    </div>
</div>

<div class="about-us container-fluid">
    <!-- <div class="container">

        <div class="row natur-row no-margin w-100">
            <div class="text-part col-md-6">
                <h2>About Our Charity</h2>
                <p><?= $aboutUsData['about_us_text'] ?></p>
            </div>
            <div class="image-part col-md-6">
                <div class="about-quick-box row">
                    <div class="col-md-6">
                        <div class="about-qcard">
                            <i class="fas fa-user"></i>
                            <p>Become a Volunteer</p>
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
  <br>
  
   <div class="more">
   <a style="background-color: #04AA6D; color: black;" href="about_us.php" class="previous"> More</a>
   </div>


</div>



<!-- ################# Mission Vision Start Here #######################-

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
</section> -->






<section class="events">
    <div class="container">
        <div class="session-title row">
            <h2>Support A Cause</h2>
            <p>We are a non-profital & Charity</p>
        </div>
        <div class="event-ro row">
            <?php 
            
            $sql = "SELECT * FROM campaign LIMIT 3";
            $result = $conn->query($sql);

            $campaignsData = [];

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $campaignsData[] = $row;
                
            
            ?>

            <div class="col-md-4 col-sm-6">
                <div class="event-box">
                    <img src="./admin/uploads/<?= $row['image'] ?>" alt="">
                    <h4><?= $row['name'] ?></h4>

                    <p class="raises"><span>To Be Raised : <?= $row['fundToRaise'] ?> </p>
                    <p class="desic"><?= $row['shortDescription'] ?></p>

                    <a href="donate.php">
                    <button class="btn btn-success btn-sm">Donate Now</button>
                    </a>
                    
                </div>
            </div>

            <?php 
                }
            }
            ?>
        </div>
    </div>
</section>

<!-- Upcoming Work -->
<section class="our-blog">
    <div class="container">
        <div class="row session-title">
            <h2>Upcoming Works</h2>
            <p>Take a look at what is coming up!</p>
        </div>
        <div class="blog-row row">
            <?php 
                    $sql = "SELECT * FROM upcoming_work LIMIT 3";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
            <div class="col-md-4 col-sm-6">
                <div class="single-blog">
                    <figure>
                        <img src="./admin/uploads/<?= $row['image'] ?>" alt="">
                    </figure>
                    <div class="blog-detail">
                        <!-- <small>By Admin</small> -->
                        <h4 style="color: orange;"><?= $row['title'] ?></h4>
                        <p> <?= $row['shortDescription'] ?></p>
                        <div class="link">
                            <!-- <a href="">Read more..</a><i class="fas fa-long-arrow-alt-right"></i> -->
                        </div>
                    </div>
                </div>
            </div>
            <?php } } ?>
        </div>
    </div>
</section>


<section>

<div class="container">
  <h1 style=" margin-left: 640px; padding:20px">Event Gallery<h1>

<div id="cardgallery">

  
<!-- Card 1 -->
<div class="gallery">
  <img class="imggallery" src="./assets/images/common/image_01.jpg" alt="Card 1 Image">
  
</div>

<!-- Card 2 -->
<div class="gallery">
  <img class="imggallery" src="./assets/images/common/image_02.jpg" alt="Card 2 Image">
  
</div>

<!-- Card 3 -->
<div class="gallery">
  <img class="imggallery" src="./assets/images/common/image_03.jpg" alt="Card 3 Image">
 
</div>

<!-- Card 4 -->
<div class="gallery">
  <img class="imggallery" src="./assets/images/common/image_04.jpg" alt="Card 4 Image">

</div>


</div>

<div class="moregallery">
   <a style="background-color: #04AA6D; color: black;" href="gallery.php" class="previous">See all event gallery</a>
   </div>






</section>
 

  



<?php
include_once "./includes/footer.php";
?>
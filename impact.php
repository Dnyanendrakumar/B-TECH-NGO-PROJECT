<?php
include_once "./includes/header.php";
?>

    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>The Impact !</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Impact</li>
                </ul>
            </div>
        </div>
    </div>
 
  <section class="container-fluid mission-vision">
      <div class="container">
          <div class="row mission">
              <div class="col-md-6 mv-det">
                  <h1>Impact !</h1>
                  <p><?= $aboutUsData['impact'] ?></p>
              </div>
              <div class="col-md-6 mv-img">
                  <img src="assets/images/misin.jpg" alt="">
              </div>
          </div>
      </div>
  </section>   
   

  <?php
include_once "./includes/footer.php";
?> 
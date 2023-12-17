<?php
include_once "./includes/header.php";
?>
  <!--  ************************* Page Title Starts Here ************************** -->

    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Our Upcoming Works</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Upcoming Works</li>
                </ul>
            </div>
        </div>
    </div>
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
                        <img src="./admin/uploads/<?=$row['image']?>" alt="">
                    </figure>
                    <div class="blog-detail">
                     
                        <h4><?=$row['title']?></h4>
                        <p> <?=$row['shortDescription']?></p>

                    </div>
                </div>
            </div>
            <?php }}?>
        </div>
    </div>
</section>


         <?php
include_once "./includes/footer.php";
?>
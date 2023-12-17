<?php
include_once "./includes/header.php";
?>
<!--  ************************* Page Title Starts Here ************************** -->

<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Support A Causes</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Donate</li>
            </ul>
        </div>
    </div>
</div>


<section class="events">
    <div class="container">

        <div class="event-ro row">
            <?php 
                $sql = "SELECT * FROM campaign";
                $result = $conn->query($sql); 
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { 
            ?>
            <div class="col-md-4 col-sm-6">
                <div class="event-box">
                    <img src="./admin/uploads/<?= $row['image'] ?>" alt="">
                    <h4><?= $row['name'] ?></h4>

                    <p class="raises"><span>To Be Raised : <?= $row['fundToRaise'] ?></p>
                    <p class="desic"><?= $row['shortDescription'] ?></p>
                    <a href="./donate_detail.php?id=<?= $row['id'] ?>" class="btn btn-success btn-sm">Donate Now</a>
                </div>
            </div>
            <?php } } ?>
            
        </div>
    </div>
</section>

<?php
include_once "./includes/footer.php";
?>
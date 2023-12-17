<?php
include_once "./includes/header.php";
?>

<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Donate Now</h2>
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
$id = $_GET['id'];
$sql = "SELECT * FROM campaign WHERE id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
            <div class="col-md-6 col-sm-6">
                <div class="event-box">
                    <img src="./admin/uploads/<?=$row['image']?>" alt="">
                    <h4><?=$row['name']?></h4>

                    <p class="raises"><span>To Be Raised : <?=$row['fundToRaise']?></p>
                    <p class="desic"><?=$row['shortDescription']?></p>
                    <p class="desic"><?=$row['description']?></p>
                </div>
            </div>
            <?php }}?>

            <div class="col-md-6">
                <form action="./payment/pay.php" method="post">
                    <div class="col-md-12">

                        <div class="row">
                            <div class="col-md-12">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    required>
                            </div>
                            <div class="col-md-12">
                                <label for="mail" class="form-label">Your Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Your Contact</label>
                                <input type="tel" class="form-control" id="phone" name="phone"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label for="donationAmount" class="form-label">Donation Amount</label>
                                <input type="number" class="form-control" id="donationAmount" name="donationAmount"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <input type="hidden" name="campaignID" value="<?= $id; ?>">
                        <button type="submit" class="btn btn-success w-100">Donate</button>
                    </div>
                    
                </form>
                <!-- Payment Gateway -->
            </div>

        </div>
    </div>
</section>

<?php
include_once "./includes/footer.php";
?>
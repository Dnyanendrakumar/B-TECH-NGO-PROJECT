<?php include_once "./includes/header.php"; ?>


<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Contact Us</h2>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Contact US</li>
            </ul>
        </div>
    </div>
</div>


<div class="row contact-rooo no-margin">
    <div class="container">
        <div class="row justify-content-center">
            
            <div style="padding: 20px" class="col-sm-7">
            
                <div class="container my-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <h1 class="mb-3">Contact Us</h1>
                            <form action="./includes/process.php" method="post">
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <label for="your-name" class="form-label">Your Name</label>
                                        <input type="text" class="form-control" id="your-name" name="your-name"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="your-email" class="form-label">Your Email</label>
                                        <input type="email" class="form-control" id="your-email" name="your-email"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="your-subject" class="form-label">Your Subject</label>
                                        <input type="text" class="form-control" id="your-subject" name="your-subject">
                                    </div>
                                    <div class="col-12">
                                        <label for="your-message" class="form-label">Your Message</label>
                                        <textarea class="form-control" id="your-message" name="your-message" rows="5"
                                            required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-dark w-100 fw-bold" name="sendMsg_">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div style="padding: 20px" class="col-sm-5">
                <div class="container my-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <h1 class="mb-3">Address</h1>
                            <address class="md-margin-bottom-40" style="overflow-x: auto">
                            <strong>Address:</strong> <?= $aboutUsData['address'] ?>
                            </br>
                            <strong>Email:</strong> <a href="mailto:<?= $aboutUsData['email'] ?>" target="_blank"
                                class=""><?= $aboutUsData['email'] ?></a><br>
                            </address>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<div class="row no-margin m-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center">Frequently Asked Questions (FAQs)</h2>
                <?php
                
                $sql = "SELECT * FROM faqs";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo '<div class="accordion" id="accordionExample">';
                    $counter = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="accordion-item">';
                        echo '<h2 class="accordion-header" id="heading' . $counter . '">';
                        echo '<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse' . $counter . '" aria-expanded="true" aria-controls="collapse' . $counter . '">';
                        echo $row['question'];
                        echo '</button>';
                        echo '</h2>';
                        echo '<div id="collapse' . $counter . '" class="accordion-collapse collapse" aria-labelledby="heading' . $counter . '" data-bs-parent="#accordionExample">';
                        echo '<div class="accordion-body">';
                        echo $row['answer'];
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        $counter++;
                    }
                    echo '</div>';
                } else {
                    echo '<p>No FAQs available at the moment.</p>';
                }
                ?>
            </div>
        </div>
    </div>
</div>


<div style="margin-top: 0px;" class="row no-margin">
    <h2 class="text-center">Locate Us On Map</h2>
    <?= $aboutUsData['maplinks'] ?>
</div>

<script>
    
window.onload = function() {
    var iframes = document.querySelectorAll('iframe');
    iframes.forEach(function(iframe) {
        iframe.style.width = '100%';
    });
};
</script>

<?php include_once "./includes/footer.php"; ?>
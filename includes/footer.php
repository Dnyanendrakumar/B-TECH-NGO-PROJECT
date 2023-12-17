<footer class="footer">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-4 col-sm-12" style="max-height:200px; overflow-y: auto">
                    <h2>About Us</h2>
                    <p><?= $aboutUsData['about_us_text'] ?></p>
                </div> -->
                <div class="col-md-4 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="about_us.php">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="internship" href="join.php">Join Us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="gallery.php">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <!-- <li><a ui-sref="contact" href="contact.php">Contact us</a><i class="fa fa-angle-right"></i></li> -->
                    </ul>
                </div>

                <div style="flex; flex-direction:row" class="col-lg-3 col-md-6 folouws">

<ul class="ulright">
    <li> <small>Follow Us </small>:</li>
    <li>
    <a href="<?=$aboutUsData['facebook']?>" target="_blank">
        <i class="fab fa-facebook-square"></i>
    </a>

    </li>
    <li>
        <a href="<?=$aboutUsData['twitter']?>" target="_blank">
        <i class="fab fa-twitter-square"></i></a>
    </li>
    <li>
        <a href="<?=$aboutUsData['instagram']?>" target="_blank">
        <i class="fab fa-instagram"></i></a>
    </li>
    <!-- <li>
        <a href="<?=$aboutUsData['linkedin']?>" target="_blank">
        <i class="fab fa-linkedin"></i></a>
    </li> -->
</ul>
</div>


                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40" style="overflow-x: auto">
                        Address: <?= $aboutUsData['address'] ?>
                        </br>
                        Email: <a href="mailto:<?= $aboutUsData['email'] ?>" target="_blank" class="">lovecareshare@gmail.com</a><br>
                    </address>

                </div>
            </div>
            
        </div>
        
    </footer>
    
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>
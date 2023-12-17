<?php
include_once "./includes/header.php";
?>

    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Our Gallery</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Gallery</li>
                </ul>
            </div>
        </div>
    </div>



        <div id="portfolio" class="gallery">
           <div class="container">

              <div class="row">

            <?php
            $sql = "SELECT * FROM `gallerytags`";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $filterValues = [];
                echo '<div class="gallery-filter d-none d-sm-block">';
                echo '<button class="btn btn-default filter-button mx-1" data-filter="all">All</button>';

                while ($row = $result->fetch_assoc()) {
                    echo '<button class="btn btn-default filter-button mx-1" data-filter="' . $row['tag'] . '">' . $row['tag'] . '</button>';
                    $filterValues[] = $row['tag'];
                }
                echo '</div></br>';
            }
            ?>

        <br/>

                <?php
                $getIMGSQL = "SELECT * FROM `gallery_imgs`";
                $res = $conn->query($getIMGSQL);
                if ($res->num_rows > 0) {
                    while ($row = $res->fetch_assoc()) {
                        ?>
                        <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter <?=$row['tag']?>">
                                <img src="./admin/uploads/<?=$row['image']?>" class="img-responsive">
                            </div>
                        <?php
                }

            }
            ?>

        </div>
    </div>
</div>


<?php
include_once "./includes/footer.php";
?>
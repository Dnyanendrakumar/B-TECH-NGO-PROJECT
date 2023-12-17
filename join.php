<?php include_once "./includes/header.php";?>




 <div class="container my-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <h1 class="mb-3">Join Us </h1>
                            <form method="post" action="./includes/process.php" enctype="multipart/form-data">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="your-name" class="form-label">Your Full Name</label>
                                        <input type="text" class="form-control" id="your-name" name="your-name"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Contact</label>
                                        <input type="number" class="form-control" id="phone" name="phone"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="your-email" class="form-label">Your Email</label>
                                        <input type="email" class="form-control" id="your-email" name="your-email"
                                            required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="internship-type" class="form-label">Select ID Proof</label>
                                        <select class="form-control" id="internship-type" name="internship-type">
                                            <option value="" disabled selected>Select ID Proof</option>
                                            <?php
                                            $Sql = "SELECT * FROM internship_types";
                                            $Result = $conn->query($Sql);

                                            while ($Row = $Result->fetch_assoc()) {
                                                echo "<option value='" . $Row['internship_name'] . "'>" . $Row['internship_name'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload ID</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="resume">
                                            <label class="custom-file-label" for="inputGroupFile01" accept=".pdf,.jpeg,.jpg,.docx,.doc,.png">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-dark w-100 fw-bold" name="applyForIntern">JOIN</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <?php
                        if(isset($_GET['applied'])) {
                            echo '<div class="mt-5">
                            <div class="alert alert-success" role="alert">
                                Applied Successfully.
                            </div>
                        </div>';
                        }
                        ?>
                    </div>
                </div>
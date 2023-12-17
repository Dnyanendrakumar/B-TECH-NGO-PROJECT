<?php
include_once './config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['applyForIntern'])) {
        $name = $_POST['your-name'];
        $email = $_POST['your-email'];
        $phone = $_POST['phone'];
        $internshipOption = $_POST['internship-type'];

        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $phone = filter_var($phone, FILTER_SANITIZE_STRING);
        $internshipOption = filter_var($internshipOption, FILTER_SANITIZE_STRING);

        if (isset($_FILES['resume'])) {
            $allowedFileTypes = ['pdf', 'doc', 'docx', 'jpeg', 'jpg', 'png'];
            $uploadedFileType = strtolower(pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION));

            if (!in_array($uploadedFileType, $allowedFileTypes)) {
                die('Invalid file type. Allowed types are pdf, doc, docx, jpeg, jpg, png.');
            }

            $uploadDirectory = '../resumes/';
            $resume = $name . '_resume.' . $uploadedFileType;
            $targetFile = $uploadDirectory . basename($resume);

            if (move_uploaded_file($_FILES['resume']['tmp_name'], $targetFile)) {
                $sql = "INSERT INTO `internship_applications` (`name`, `email`, `phone`, `internship_type`, `resume`) VALUES ('$name', '$email', '$phone', '$internshipOption', '$resume')";

                if ($conn->query($sql) === TRUE) {
                    header('location: ../join.php?applied=1');
                } else {
                    echo 'Error submitting application: ' . $conn->error;
                }
            } else {
                echo 'Error uploading resume';
            }
        } else {
            echo 'Resume file not provided';
        }
    }

    
    if(isset($_POST['sendMsg_'])){
        $name = mysqli_real_escape_string($conn, $_POST['your-name']);
        $email = mysqli_real_escape_string($conn, $_POST['your-email']);
        $subject = mysqli_real_escape_string($conn, $_POST['your-subject']);
        $message = mysqli_real_escape_string($conn, $_POST['your-message']);

        $sql = "INSERT INTO contact_us_form (name, email, subject, msg) VALUES ('$name', '$email', '$subject', '$message')";

        if ($conn->query($sql) === TRUE) {
            header('location: ../contact_us.php?submitted=1');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

} else {
    echo 'Invalid request';
}

$conn->close();
?>

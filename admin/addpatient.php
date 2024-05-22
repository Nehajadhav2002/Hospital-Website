<?php
$message = ""; // Initialize an empty message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection file
    include 'connection.php';

    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $medicalHistory = $_POST['medicalHistory'];

    // SQL query to insert data into the patients table
    $sql = "INSERT INTO patients (name, email, contact, address, gender, age, medical_history, registration_date)
            VALUES ('$name', '$email', '$contact', '$address', '$gender', $age, '$medicalHistory', NOW())";

    if ($con->query($sql) === TRUE) {
        $message = "New record created successfully";
         // Redirect to index.php
    header("Location: addpatient.php");
    exit(); // Ensure script execution stops after redirection
    } else {
        $message = "Error: " . $sql . "<br>" . $con->error;
    }

    // Close the database connection
    $con->close();
}

// Display success message if present
if (!empty($message)) {
    echo "<script>alert('$message');</script>";
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Add Patient
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="css/custom.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

 <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="body-overlay"></div>
        <?php require 'sidebar.php'?>
        <!-- Page Content  -->
        <div id="content" style="background-color:white;">
            <div class="top-navbar">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                            <span class="material-icons">arrow_back_ios</span>
                        </button>

                        <a class="navbar-brand" href="#"> Dashboard </a>

                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button"
                            data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons">more_vert</span>
                        </button>

                        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none"
                            id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="material-icons">person</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>


            <div class="main-content">
            <div class="container card shadow p-3 bg-white rounded">
        <h2 class="text-center">Add Patient</h2>
        <form class="mt-4" method="POST" enctype="multipart/form-data">
            <div class="form-row">
                <!-- Patient Name -->
                <div class="form-group col-md-6">
                    <label for="name" class="form-label">Patient Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Patient Name" required>
                </div>

                <!-- Patient Email -->
                <div class="form-group col-md-6">
                    <label for="email" class="form-label">Patient Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Patient Email" required>
                </div>
            </div>
            <div class="form-row">
                <!-- Patient Mobile Number -->
                <div class="form-group col-md-6">
                    <label for="contact" class="form-label">Patient Mobile Number</label>
                    <input type="tel" class="form-control" name="contact" id="contact" placeholder="Enter Patient Mobile Number" pattern="[0-9]{10}" required>
                </div>

                <!-- Patient Address -->
                <div class="form-group col-md-6">
                    <label for="address" class="form-label">Patient Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter Patient Address" required>
                </div>
            </div>
            <div class="form-row">
    <!-- Patient Gender -->
    <div class="form-group col-md-6">
        <label for="gender" class="form-label d-block">Patient Gender</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked required>
            <label class="form-check-label" for="male">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
            <label class="form-check-label" for="female">Female</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="other" value="other" required>
            <label class="form-check-label" for="other">Other</label>
        </div>
    </div>
    
    <!-- Patient Age -->
    <div class="form-group col-md-6">
        <label for="age" class="form-label">Patient Age</label>
        <input type="number" class="form-control" name="age" id="age" placeholder="Enter Patient Age" required>
    </div>
</div>
                <!-- Patient Medical History -->
                <div class="form-group col-md-12">
                    <label for="medicalHistory" class="form-label">Patient Medical History (if any)</label>
                    <textarea class="form-control" name="medicalHistory" id="medicalHistory" rows="4"></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary d-block mx-auto mb-3 mt-4" style="width: 200px;">Add Patient</button>
            </div>
        </form>
    </div>


            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>


    <script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
            $('#content').toggleClass('active');
        });

        $('.more-button,.body-overlay').on('click', function() {
            $('#sidebar,.body-overlay').toggleClass('show-nav');
        });

    });
    </script>

</body>

</html>
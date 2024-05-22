<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection file
    include 'connection.php';

    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $clinicAddress = $_POST['clinicAddress'];
    $consultancyFees = $_POST['consultancyFees'];
    $contact = $_POST['contact'];
    $specialization = $_POST['specialization'];

    // SQL query to insert data into the doctors table
    $sql = "INSERT INTO doctors (name, email, contact, clinic_address, specialization, consultancy_fees)
            VALUES ('$name', '$email', '$contact', '$clinicAddress', '$specialization', $consultancyFees)";

    // Execute the query
    if ($con->query($sql) === TRUE) {
        // Display success message using JavaScript
        echo "<script>alert('New record created successfully');</script>";
        header("Location: adddocter.php");
        exit(); // Ensure script execution stops after redirection
    } else {
        echo "<p class='text-danger'>Error: " . $sql . "<br>" . $con->error . "</p>";
    }

    // Close the database connection
    $con->close();
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
    <h2 class="text-center">Add Doctor</h2>
    <form class="mt-4" method="POST" enctype="multipart/form-data">
        <div class="form-row">
            <!-- Doctor Name -->
            <div class="form-group col-md-6">
                <label for="name" class="form-label">Doctor Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Doctor Name" required>
            </div>

            <!-- Doctor Email -->
            <div class="form-group col-md-6">
                <label for="email" class="form-label">Doctor Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Doctor Email" required>
            </div>
        </div>
        <div class="form-row">
            <!-- Doctor Clinic Address -->
            <div class="form-group col-md-6">
                <label for="clinicAddress" class="form-label">Doctor Clinic Address</label>
                <input type="text" class="form-control" name="clinicAddress" id="clinicAddress" placeholder="Enter Doctor Clinic Address" required>
            </div>

            <!-- Doctor Consultancy Fees -->
            <div class="form-group col-md-6">
                <label for="consultancyFees" class="form-label">Doctor Consultancy Fees</label>
                <input type="number" class="form-control" name="consultancyFees" id="consultancyFees" placeholder="Enter Doctor Consultancy Fees" required>
            </div>
        </div>
        <div class="form-row">
            <!-- Doctor Contact Number -->
            <div class="form-group col-md-6">
                <label for="contact" class="form-label">Doctor Contact Number</label>
                <input type="tel" class="form-control" name="contact" id="contact" placeholder="Enter Doctor Contact Number" pattern="[0-9]{10}" required>
            </div>

            <!-- Doctor Specialization -->
            <div class="form-group col-md-6">
                <label for="specialization" class="form-label">Doctor Specialization</label>
                <select class="form-control" name="specialization" id="specialization" required>
                    <option value="">Select Specialization</option>
                    <option value="Cardiology">Cardiology</option>
                    <option value="Dermatology">Dermatology</option>
                    <option value="Gastroenterology">Gastroenterology</option>
                    <option value="Neurology">Neurology</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
        </div>
      
        <button type="submit" name="submit" class="btn btn-primary d-block mx-auto mb-3 mt-4" style="width: 200px;">Add Doctor</button>
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
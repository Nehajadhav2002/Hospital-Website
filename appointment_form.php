  <!-- PHP logic to display success message -->
  <?php
    $message = ""; // Initialize an empty message variable

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Include the database connection file
        include 'connection.php';

        // Collect form data
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $doctor = $_POST['doctor'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $message = $_POST['message'];

        // SQL query to insert data into the appointments table
        $sql = "INSERT INTO appointments (full_name, email, phone_number, doctor, preferred_date, preferred_time, message, created_at)
                VALUES ('$fullName', '$email', '$phoneNumber', '$doctor', '$date', '$time', '$message', NOW())";

        if ($con->query($sql) === TRUE) {
            $message = "New appointment created successfully";
             // Redirect to index.php
        header("Location: index.php");
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make an Appointment</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 1000px;">
            <div class="card-header text-center">
                <h2 class="mb-0">Make an Appointment</h2>
            </div>
            <div class="card-body">
               <!-- Appointment Form -->
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="fullName">Full Name:</label>
                            <input type="text" class="form-control" id="fullName" name="fullName" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="phoneNumber">Phone Number:</label>
                            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="doctor">Select Doctor:</label>
                            <select class="form-control" id="doctor" name="doctor" required>
                                <option value="">Choose...</option>
                                <option value="Dr. John Doe">Dr. John Doe</option>
                                <option value="Dr. Jane Smith">Dr. Jane Smith</option>
                                <!-- Add more doctor options as needed -->
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="date">Preferred Date:</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="time">Preferred Time:</label>
                            <input type="time" class="form-control" id="time" name="time" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Additional Message:</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

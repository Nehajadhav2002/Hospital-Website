<?php
$message = ""; // Initialize an empty message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection file
    include 'connection.php';

    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // SQL query to insert data into the contactus table
    $sql = "INSERT INTO contactus (name, email, message, created_at)
            VALUES ('$name', '$email', '$message', NOW())";

    if ($con->query($sql) === TRUE) {
        $message = "New record created successfully";
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
  <title>LifeLine Hospital</title>
  <!-- Bootstrap CSS -->
  <script src="https://kit.fontawesome.com/c1df782baf.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">LifeLine Hospital</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#aboutus">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#ourdoctor">Doctors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#ourreviews">Reviews</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contactus">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Screen with Background Image -->
  <section class="main-screen" style="background-image: url('images/background2.jpg'); background-size: cover; background-position: center;">
    <div class="container main-screen-content">
      <h2>Welcome to LifeLine Hospital</h2>
      <p style="font-size: 18px;">We provide quality healthcare services.</p>
      <a href="appointment_form.php" class="btn btn-primary btn-appointment ">Make an Appointment</a>
    </div>
  </section>

 <!-- About Us Section -->
 <section class="about-section" id="aboutus">
  <div class="container">
    <h2 class="text-center mb-4 about-heading">About Us</h2> <!-- Added heading -->
    <div class="row">
      <div class="col-md-7 about-content">
        <p>We are a leading hospital dedicated to providing exceptional healthcare services to our patients. Our team of experienced doctors, nurses, and staff are committed to delivering personalized care and treatment to ensure the best possible outcomes for our patients.</p>
        <p>At LifeLine Hospital, we offer a wide range of medical services, including general surgery, internal medicine, pediatrics, obstetrics and gynecology, orthopedics, cardiology, and more. Our state-of-the-art facilities and advanced technology enable us to deliver the highest quality care to our patients.</p>
      </div>
      <div class="col-md-5 about-content">
        <img src="images/background1.jpg" alt="About Us" class="about-image">
      </div>
    </div>
  </div>
</section>

 <!-- Services Section -->
 <section class="our-service" id="services">
  <div class="container-fluid">
    <div class="service-heading text-center">
      <h2>Our Services</h2>
    </div>
    <div class="row main-services">
      <div class="col-md-4 col-12">
        <div class="inner-services text-center">
          <div class="service-icon">
            <i class="fas fa-truck-medical"></i>
          </div>
          <h3>Health Check</h3>
          <p>We offer extensive medical procedures to outbound & inbound patients what it is and we are very proud achievement staff.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="inner-services text-center">
          <div class="service-icon">
            <i class="fas fa-hospital"></i>
          </div>
          <h3>Emergency Care</h3>
          <p>We offer extensive medical procedures to outbound & inbound patients what it is and we are very proud achievement staff.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="inner-services text-center">
          <div class="service-icon">
            <i class="fas fa-heart"></i>
          </div>
          <h3>Cardiology</h3>
          <p>We offer extensive medical procedures to outbound & inbound patients what it is and we are very proud achievement staff.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="inner-services text-center">
          <div class="service-icon">
            <i class="fas fa-notes-medical"></i>
          </div>
          <h3>Medical Records</h3>
          <p>We offer extensive medical procedures to outbound & inbound patients what it is and we are very proud achievement staff.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="inner-services text-center">
          <div class="service-icon">
            <i class="fas fa-list-check"></i>
          </div>
          <h3>Check-ups</h3>
          <p>We offer extensive medical procedures to outbound & inbound patients what it is and we are very proud achievement staff.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="inner-services text-center">
          <div class="service-icon">
            <i class="fas fa-user-md"></i>
          </div>
          <h3>Specialists</h3>
          <p>We offer extensive medical procedures to outbound & inbound patients what it is and we are very proud achievement staff.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="best-doctors" id="ourdoctor">
  <div class="container">
    <div class="service-heading text-center">
      <h2>Our Best Doctors</h2>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="doctor">
          <img src="images/team1.jpg" alt="Doctor 1">
          <h3>Dr. Sophia Johnson</h3>
          <p>Specialty: Cardiology</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="doctor">
          <img src="images/team2.jpg" alt="Doctor 2">
          <h3>Dr. William Anderson</h3>
          <p>Specialty: Pediatrics</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="doctor">
          <img src="images/team3.jpg" alt="Doctor 3">
          <h3>Dr. Olivia Patel</h3>
          <p>Specialty: Orthopedics</p>
        </div>
      </div>
      <!-- Additional doctors -->
      <div class="col-md-4 col-sm-6">
        <div class="doctor">
          <img src="images/team4.jpg" alt="Doctor 4">
          <h3>Dr. Sarah Brown</h3>
          <p>Specialty: Neurology</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="doctor">
          <img src="images/team5.jpg" alt="Doctor 5">
          <h3>Dr. David Lee</h3>
          <p>Specialty: Ophthalmology</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="doctor">
          <img src="images/team6.jpg" alt="Doctor 6">
          <h3>Dr. Emily Johnson</h3>
          <p>Specialty: Dermatology</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="review-section" id="ourreviews">
  <h2 class="text-center mb-5 review-heading">Our Patient Reviews</h2>
  <div class="review-container mt-5">
      <div class="review-card">
          <img src="images/review1.jpg" alt="Reviewer 1" class="review-img">
          <div class="review-name">John Doe</div>
          <div class="review-text">"I had an excellent experience at this hospital. The staff was very caring and professional. The facilities were clean and well-maintained."</div>
      </div>
      <div class="review-card">
          <img src="images/review2.jpg" alt="Reviewer 2" class="review-img">
          <div class="review-name">Jane Smith</div>
          <div class="review-text">"The doctors and nurses at this hospital provided top-notch care. I felt confident in their expertise and received personalized attention throughout my treatment."</div>
      </div>
      <div class="review-card">
          <img src="images/review3.jpg" alt="Reviewer 3" class="review-img">
          <div class="review-name">Michael Johnson</div>
          <div class="review-text">"I was impressed by the professionalism and compassion of the staff at this hospital. They went above and beyond to ensure my comfort and well-being."</div>
      </div>
      <div class="review-card">
        <img src="images/review4.jpg" alt="Reviewer 3" class="review-img">
        <div class="review-name">Emily Smith</div>
        <div class="review-text">"The care I received at this hospital was exceptional. The doctors and nurses were incredibly attentive. I would highly recommend this hospital to anyone in need of medical care."</div>
      </div>
      
  </div>
</section>

<section class="contact-section" id="contactus">
  <div class="container">
      <h2 class="contact-heading">Contact Us</h2>
      <div class="row">
          <!-- Map -->
          <div class="col-md-6">
              <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.7826162087197!2d-74.00597438459658!3d40.71277599826958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2598f7e31cc4b%3A0xf2ffa7ebc8a1396d!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sca!4v1630898322642!5m2!1sen!2sca" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <!-- Form -->
          <div class="col-md-6 contact-form">
              <form method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                  <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="form-group">
                      <label for="message">Message:</label>
                      <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
      </div>
  </div>
</section>

<footer class="footer text-center">
  <div class="container">
    <p>&copy; 2024 LifeLine Hospital. All rights reserved.</p>
  </div>
</footer>

  <!-- Bootstrap JS and jQuery (required for Bootstrap) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

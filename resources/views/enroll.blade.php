<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Tumaini english medium Academy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- SEO Meta Tags -->
  <meta
    name="google-site-verification"
    content="orMZAPeq4-hA1ySv3TaBxID-wMS8kRBo3VRE6F17E08"
  />
  <meta
    name="keywords"
    content="Tumaini english medium academy, Best Preschool, Early Education, Kids Academy, Kindergarten, Child Development"
  />
  <meta
    name="description"
    content="Tumaini english medium academy offers a nurturing environment with fun-filled learning experiences, designed to foster creativity, curiosity, and growth in young children."
  />
  <meta name="author" content="Tumaini's academy" />

  <!-- Favicon -->
  <link rel="icon" href="/archive/tumaini_logo.jpg" type="image/x-icon" />
  <meta name="theme-color" content="#3498db" />

  <!-- Open Graph Meta Tags (For Social Media Sharing) -->
  <meta
    property="og:title"
    content="Tumaini english medium academy | Best Early Education Academy"
  />
  <meta
    property="og:description"
    content="Enroll your child at tumaini english medium academy – where fun learning meets creativity and growth!"
  />
  <!-- Twitter Card Meta Tags -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta
    name="twitter:title"
    content="Tumaini english medium academy | Best Early Education Academy"
  />
  <meta
    name="twitter:description"
    content="A fun and nurturing environment for early learning at Tumaini english medium academy."
  />
  
  <!-- Icon Font Stylesheet -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
    rel="stylesheet"
  />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    rel="stylesheet"
  />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/styles.css" rel="stylesheet" />
  <style>
    .form-control {
      border: 1px solid #ced4da;
      border-radius: .25rem;
      padding: .375rem .75rem;
    }
    .form-control:focus {
      border-color: #80bdff;
      outline: 0;
      box-shadow: 0 0 0 .2rem rgba(38, 143, 255, .25);
    }
  </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
          <!-- Logo -->
          <a href="index.html" class="navbar-brand">
            <img src="archive/tumaini_logo.jpg" alt="Tumaini academically Logo" style="height: 100px">
          </a>
      
          <!-- Mobile Menu Toggle Button -->
          <button 
              type="button" 
              class="navbar-toggler" 
              data-bs-toggle="collapse" 
              data-bs-target="#navbarCollapse" 
              aria-controls="navbarCollapse" 
              aria-expanded="false" 
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
      
             <!-- Navbar Items -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav mx-auto">
            <a href="{{ route('index') }}" class="nav-item nav-link ">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link"
              >About Tumaini’s Academy</a
            >
            <a href="{{ route('classes') }}"class="nav-item nav-link"
              >Preschool Programs</a
            >
            <a href="{{ route('facility') }}" class="nav-item nav-link">Our Facilities</a>
            <a href="{{ route('gallery') }}"class="nav-item nav-link">School Gallery</a>
            <a href="{{ route('contact') }}"class="nav-item nav-link">Contact Us</a>
            <a href="{{ route('enroll') }}" class="nav-item nav-link">Enrollement</a>
          </div>

              <!-- Slogan -->
              <div class="d-none d-lg-flex flex-column justify-content-center ps-3">
                <h4 class="text-center mb-0">Tumaini academy for good education generations</h4>
              </div>
          </div>
      </nav>
        <!-- Navbar End -->
         <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Enrollement</h1>
              <!--   <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Enroll</li>
                    </ol>
                </nav> -->
            </div>
        </div>
        <!-- Page Header End -->
        <div class="container mt-5">
          <!-- Check if a success message exists in the session -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

        <form method="POST" action="{{ route('student.enroll') }}">
    @csrf
    <div class="card p-4">
        <div class="card-header">
            <h3 class="text-center">Student Enrollement - Tumaini English Medium Academy</h3>
        </div>
        <div class="card-body">
            <!-- Student Info -->
            <h5>Student Information</h5>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="studentName">Full Name</label>
                    <input type="text" class="form-control" name="student_name" id="studentName" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" id="dob" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="gender" id="gender" required>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="nationality">Nationality</label>
                    <select class="form-control" name="nationality" id="nationality" required>
                        <option>Tanzania</option>
                        <option>other</option>
                    </select>
                </div>
            </div>
            
            <hr>
    
            <!-- Parent/Guardian Info -->
            <h5>Parent/Guardian Information</h5>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="guardianName">Guardian's Full Name</label>
                    <input type="text" class="form-control" name="guardian_name" id="guardianName" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="guardianPhone">Phone Number</label>
                    <input type="tel" class="form-control" name="guardian_phone" id="guardianPhone" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="guardianEmail">Email</label>
                    <input type="email" class="form-control" name="guardian_email" id="guardianEmail">
                </div>
                <div class="form-group col-md-6">
                    <label for="relationship">Relationship to Student</label>
                    <input type="text" class="form-control" name="relationship" id="relationship" required>
                </div>
                <div class="form-group col-12">
                    <label for="guardianAddress">Home Address</label>
                    <input type="text" class="form-control" name="guardian_address" id="guardianAddress" required>
                </div>
            </div>
            
            <hr>
    
            <!-- Education Details -->
            <h5>Education Details</h5>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="entryLevel">Entry Level</label>
                    <select class="form-control" name="entry_level" id="entryLevel" required>
                        <option>Kindergarten</option>
                        <option>Primary</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="previousSchool">Previous School (if applicable)</label>
                    <input type="text" class="form-control" name="previous_school" id="previousSchool">
                </div>
            </div>
            
            <hr>
    
            <!-- Health Info -->
            <h5>Health Information</h5>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="allergies">Allergies</label>
                    <input type="text" class="form-control" name="allergies" id="allergies">
                </div>
                <div class="form-group col-md-6">
                    <label for="medicalConditions">Medical Conditions</label>
                    <input type="text" class="form-control" name="medical_conditions" id="medicalConditions">
                </div>
            </div>
            
            <hr>
    
            <!-- Emergency Contact -->
            <h5>Emergency Contact</h5>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="emergencyName">Emergency Contact Name</label>
                    <input type="text" class="form-control" name="emergency_name" id="emergencyName" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="emergencyPhone">Emergency Contact Phone</label>
                    <input type="tel" class="form-control" name="emergency_phone" id="emergencyPhone" required>
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
            <button type="submit" class="btn btn-primary">Enroll</button>
        </div>
    </div>
</form>

        </div>
      
 <!-- Footer Start -->
 <div
 class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn"
 data-wow-delay="0.1s"
>
 <div class="container py-5">
   <div class="row g-4">
     <!-- Get In Touch Section -->
     <div
       class="col-lg-3 col-md-6"
       itemscope
       itemtype="https://schema.org/LocalBusiness"
     >
       <h3 class="text-white mb-4">Get In Touch</h3>
       <address>
         <p class="mb-2">
           <i class="fa fa-map-marker-alt me-3"></i>
           <strong>Branch 1 -</strong>
           <span itemprop="address"
             >Dodoma, Nkuhungu - Police street
             </span
           >
         </p>
         <p class="mb-2">
           <i class="fa fa-map-marker-alt me-3"></i>
           <strong>Branch 2 -</strong>
           <span itemprop="address"
             >another branch of tumaini english medium academy
             </span
           >
         </p>
         <p class="mb-2">
           <i class="fa fa-phone-alt me-3"></i>
           <a
             href="tel:+255689574560"
             class="text-white-50"
             itemprop="telephone"
             >+255689574560</a
           >
         </p>
         <p class="mb-2">
           <i class="fa fa-envelope me-3"></i>
           <a
             href="mailto:tumainiacademy@gmail.com"
             class="text-white-50"
             itemprop="email"
             >tumainiacademy@gmail.com</a
           >
         </p>
       </address>
       <div class="d-flex pt-2">
         <a
           class="btn btn-outline-light btn-social"
           href="https://www.facebook.com/tumaini_english_medium_academy"
           itemprop="sameAs"
         >
           <i class="fab fa-facebook-f"></i>
         </a>
         <a
           class="btn btn-outline-light btn-social"
           href="https://www.instagram.com/tumaini_english_medium_academy/"
           itemprop="sameAs"
         >
           <i class="fab fa-instagram"></i>
         </a>
         <a
                  class="btn btn-outline-light btn-social"
                  href="https://www.twitter.com/tumaini_english_medium_academy/"
                  itemprop="sameAs"
                >
                  <i class="fab fa-twitter"></i>
                </a>
       </div>
     </div>

     <!-- Quick Links Section -->
     <div class="col-lg-3 col-md-6">
       <h3 class="text-white mb-4">Quick Links</h3>
       <a class="btn btn-link text-white-50" href="about.html"
         >About Tumaini's School</a
       >
       <a class="btn btn-link text-white-50" href="contact.html"
         >Contact Information</a
       >
       <a class="btn btn-link text-white-50" href="classes.html"
         >Explore Our Programs</a
       >
       <a class="btn btn-link text-white-50" href="gallery.html"
         >School Events & Activities</a
       >
     </div>

     <!-- Branch 1 Map Section -->
     <div class="col-lg-3 col-md-6">
       <h3 class="text-white mb-4">Branch 1</h3>
       <iframe
       src="https://www.google.com/maps?q=Nkuhungu,Dodoma,Tanzania&output=embed">
         width="100%"
         height="200"
         style="border: 0"
         allowfullscreen=""
         loading="lazy"
         title="Tumaini’s academy Branch 1 Location"
       ></iframe>
     </div>

     <!-- Branch 2 Map Section -->
     <div class="col-lg-3 col-md-6">
       <h3 class="text-white mb-4">Branch 2</h3>
       <iframe
       src="https://www.google.com/maps?q=Nkuhungu,Dodoma,Tanzania&output=embed">
         width="100%"
         height="200"
         style="border: 0"
         allowfullscreen=""
         loading="lazy"
         title="Tumaini’s academy Branch 2 Location"
       ></iframe>
     </div>
   </div>
 </div>

 <!-- Footer Bottom -->
 <div class="container">
   <div class="copyright">
     <div class="row">
       <div class="col-md-12 text-center mb-3 mb-md-0">
         &copy; <span id="year"></span> 
         Tumaini's English Medium Academy School, All Rights Reserved.
         <br />
       </div>
       
       <script>
         document.getElementById("year").textContent = new Date().getFullYear();
       </script>
       
       </div>
     </div>
   </div>
 </div>
</div>

<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
 ><i class="bi bi-arrow-up"></i
></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
</html>
 
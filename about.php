<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Us | GlowCare Skincare</title>

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet"/>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css" /><!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<!-- Floating Cart & Wishlist Icons -->
<div class="floating-icons">
    <a href="#" data-bs-toggle="modal" data-bs-target="#wishlistModal" title="Wishlist">
        <i class="bi bi-heart"></i>
    </a>
    <a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" title="Shopping Cart">
        <i class="bi bi-cart3"></i>
    </a>
</div>

<!-- Wishlist Modal -->
<div class="modal fade" id="wishlistModal" tabindex="-1" aria-labelledby="wishlistModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-end">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Your Wishlist</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>No items in wishlist.</p>
          <!-- You can use PHP/JS here later to show dynamic content -->
        </div>
        <div class="modal-footer">
          <a href="wishlist.html" class="btn btn-outline-primary">Edit Wishlist</a>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Cart Modal -->
  <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-end">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Your Cart</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>No items in cart.</p>
          <!-- Replace this with dynamic product listing -->
        </div>
        <div class="modal-footer">
          <a href="cart.html" class="btn btn-outline-primary">Edit Cart</a>
        </div>
      </div>
    </div>
  </div>
</head>
<body>

  <!-- Navbar -->
  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light shadow fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">BareBelle</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <!-- Search Form with Icon -->
      <form class="d-flex me-3" action="search.php" method="GET">
        <input class="form-control me-2" type="search" name="query" placeholder="Search..." aria-label="Search" style="width: 180px;">
        <button class="btn btn-outline-secondary" type="submit">
          <i class="bi bi-search"></i>
        </button>
      </form>

      <!-- Navigation Links -->
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="productscategories.html">Products</a></li>
        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
      </ul>
    </div>
  </div>
</nav>

  <!-- About Section -->
  <section class="about-section py-5 mt-5">
    <div class="container">
      <!-- Who We Are heading -->
<h2 class="who-we-are-heading text-end mb-5" style ="bottom: 20px;">Who We Are</h2>
      <div class="row align-items-center">
        <div class="col-md-6 mb-4">
          <img src="download.jpeg" class="img-fluid rounded shadow" alt="About GlowCare" />
        </div>
        <div class="col-md-6">
          <p>
            At <strong>GlowCare Skincare</strong>, we are passionate about helping you feel confident in your skin. Our brand was founded with one mission – to create clean, effective, and affordable skincare that celebrates natural beauty. Every product is made with love, tested for purity, and backed by real science.
          </p>
          <p>
            We believe skincare is self-care. That’s why we blend nature’s finest ingredients with dermatological expertise to deliver gentle yet powerful results. Whether you're struggling with acne, dryness, sensitivity, or just want to glow – we’ve got you covered.
          </p>
        </div>
      </div>

      <div class="brand-promise mt-5 rounded shadow-sm">
        <!-- Brand Promise heading -->
<h2 class="brand-promise-heading text-center">Our Brand Promise</h2>

        <div class="row mt-4">
          <div class="col-md-6 col-lg-3 mb-4">
            <div class="promise-box shadow-sm">
              <h5>Cruelty-Free & Vegan</h5>
              <p>No animal testing, ever. 100% plant-powered formulas.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4">
            <div class="promise-box shadow-sm">
              <h5>Clean & Non-Toxic</h5>
              <p>Formulated without harmful chemicals or harsh ingredients.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4">
            <div class="promise-box shadow-sm">
              <h5>Results-Driven</h5>
              <p>Dermatologist-tested formulas that actually work.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4">
            <div class="promise-box shadow-sm">
              <h5>Confidence Through Skincare</h5>
              <p>We empower your natural glow—because skincare is self-care.</p>
            </div>
          </div>
        </div>
      </div>
      
  </section>

  <!-- Footer -->
  <footer class="bg-light py-3">
    <div class="container text-center">
      &copy; 2025 GlowCare Skincare. All rights reserved.
    </div>
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

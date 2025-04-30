<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Minimal App UI</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="detail_style.css" rel="stylesheet">
</head>
<body>
<!-- Fixed Top Bar -->
<section class="detail-top-bar">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-2">
        <a href="index.php" class="back-btn">
          <i class="fas fa-arrow-left"></i>
        </a>
      </div>
      <div class="col-8 text-center">
        <h5 class="page-title mb-0">Creator Details</h5>
      </div>
      <div class="col-2 text-end">
        <button class="add-btn">
          <i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Scrollable Content Area -->
<div class="main-content-wrapper">
  <!-- Creator Profile Section -->
  <section class="creator-profile-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-3">
          <img src="https://m.media-amazon.com/images/M/MV5BMjAxNzUwNjExOV5BMl5BanBnXkFtZTcwNDUyMTUxNw@@._V1_.jpg" 
               class="creator-profile-img" alt="Priyanka Chopra">
        </div>
        <div class="col-9">
          <div class="d-flex align-items-center mb-1">
            <h1 class="creator-name mb-0">Priyanka Chopra</h1>
            <span class="creator-tag">
              <i class="fas fa-star"></i> Celebrity
            </span>
          </div>
          <p class="creator-subtext mb-1">Entertainment, Movie star</p>
          <p class="creator-subtext mb-0">
            <i class="fas fa-map-marker-alt"></i> Mumbai
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Management Section -->
  <section class="management-section">
    <div class="container-fluid">
      <div class="d-flex align-items-center">
        <img src="https://dca.co/wp-content/uploads/2022/07/DCA-LogoWhite.png" 
             class="management-logo" alt="Management">
        <div class="ms-2">
          <p class="mb-0">
            <span class="text-muted">Priyanka Profile is Managed by</span> 
            <strong>Riddhi</strong> <strong>Dharma cornerstore</strong>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Stats Section -->
  <section class="social-stats-section">
    <div class="container-fluid">
      <div class="social-stats-scroll">
        <div class="social-stat">
          <a href="https://instagram.com" target="_blank">
            <i class="fab fa-instagram"></i>
            <span>92.5M</span>
          </a>
        </div>
        <div class="social-stat">
          <a href="https://youtube.com" target="_blank">
            <i class="fab fa-youtube"></i>
            <span>1.05M</span>
          </a>
        </div>
        <div class="social-stat">
          <a href="https://twitter.com" target="_blank">
            <i class="fab fa-twitter"></i>
            <span>1.05M</span>
          </a>
        </div>
        <div class="social-stat">
          <a href="https://facebook.com" target="_blank">
            <i class="fab fa-facebook"></i>
            <span>1.05M</span>
          </a>
        </div>
        <div class="social-stat">
          <a href="https://imdb.com" target="_blank">
            <i class="fab fa-imdb"></i>
            <span>1.05M</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Creator Details Section -->
  <section class="creator-details-section">
    <div class="detail-row">
      <p class="detail-label">Content Quality</p>
      <p class="detail-value">Studio</p>
    </div>
    
    <div class="detail-row">
      <p class="detail-label">Content Language</p>
      <p class="detail-value">Hindi, English</p>
    </div>
    
    <div class="detail-row">
      <p class="detail-label">Category</p>
      <div class="detail-value">
        <span class="category-tag">Entertainment</span>
        <span class="category-tag">Movie Star</span>
      </div>
    </div>
    
    <div class="detail-row">
      <p class="detail-label">About</p>
      <p class="detail-value">
        Priyanka Chopra Jonas is an Indian actress and producer. The winner of the Miss World 2000 pageant, Chopra is one of India's highest-paid actresses and has received numerous accolades, including two National Film Awards and five Filmfare Awards.
        <br><br>
        <strong>Date of Birth - 18th July</strong>
      </p>
    </div>
    
    <div class="detail-row">
      <p class="detail-label">Additional Link</p>
      <div class="detail-value">
        <link href="https://www.instagram.com/priyankachopra/">
           <span class="category-tag">Wikipedia</span>
        </link>
      </div>
    </div>
    
    <div class="detail-row">
      <p class="detail-label">Budget</p>
      <div class="detail-value">
        <div class="budget-row">
          <i class="fab fa-instagram"></i>
          <span>20 Lacs - Reel</span>
          <span>10 Lacs - Story</span>
          <span>30 Lacs - Visit</span>
          <span>18 Lacs - Digital Usage</span>
        </div>
        <div class="budget-row">
          <i class="fab fa-facebook"></i>
          <span>20 Lacs - Reel</span>
          <span>10 Lacs - Story</span>
          <span>30 Lacs - Visit</span>
          <span>18 Lacs - Digital Usage</span>
        </div>
        <div class="budget-row">
          <i class="fab fa-youtube"></i>
          <span>20 Lacs - Reel</span>
          <span>10 Lacs - Story</span>
          <span>30 Lacs - Visit</span>
          <span>18 Lacs - Digital Usage</span>
        </div>
      </div>
    </div>
    
    <div class="detail-row">
      <p class="detail-label">Engagement Rate</p>
      <div class="detail-value">
        <div class="budget-row">
          <i class="fab fa-instagram"></i>
          <span>1M - Avg View</span>
          <span>678K - Avg Likes</span>
          <span>2% - ER</span>
        </div>
        <div class="budget-row">
          <i class="fab fa-facebook"></i>
          <span>1M - Avg View</span>
          <span>678K - Avg Likes</span>
          <span>2% - ER</span>
        </div>
        <div class="budget-row">
          <i class="fab fa-youtube"></i>
          <span>1M - Avg View</span>
          <span>678K - Avg Likes</span>
          <span>2% - ER</span>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Fixed Contact Section -->
<section class="contact-section">
  <div class="container-fluid">
    <h5 class="contact-title">Contact Now</h5>
    <div class="contact-buttons">
      <a href="tel:9987233044" class="contact-btn call-btn">
        <i class="fas fa-phone"></i> Call
      </a>
      <a href="https://wa.me/9987233044" class="contact-btn whatsapp-btn">
        <i class="fab fa-whatsapp"></i> Whatsapp
      </a>
      <a href="mailto:Dhanraj2000@gmail.com" class="contact-btn email-btn">
        <i class="fas fa-envelope"></i> Email
      </a>
    </div>
  </div>
</section>


<link href="detail_directory.css" rel="stylesheet">
<script src="detail_directory.js"></script>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
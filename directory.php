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
  <link href="style.css" rel="stylesheet">
</head>
<body>
  <div class="app-container">
    <!-- SECTION 1: Header -->
    <header class="fixed-header">
      <div class="container-fluid">
        <div class="row align-items-center">
          <!-- Profile Column -->
          <div class="col-9 d-flex align-items-center">
            <div class="profile-pic">
              <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-circle">
            </div>
            <div class="profile-info ms-3">
              <h5 class="user-name mb-0">John Doe</h5>
              <span class="user-email">john.doe@example.com</span>
            </div>
          </div>
          
          <!-- Menu Column -->
          <div class="col-3 text-end">
            <button id="menuBtn" class="btn menu-btn" type="button">
              <i class="fas fa-bars"></i>
            </button>
          </div>
        </div>
      </div>
    </header>

    <!-- Fullscreen Menu -->
    <div id="fullscreenMenu" class="fullscreen-menu">
      <div class="menu-header">
        <h5 class="mb-0">Menu</h5>
        <button id="menuCloseBtn" class="menu-close-btn">
          <i class="fas fa-times"></i>
        </button>
      </div>
      
      <div class="search-container">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search...">
          <button class="btn" type="button"><i class="fas fa-search"></i></button>
        </div>
      </div>
      
      <div class="menu-content">
        <a href="#" class="menu-item">
          <i class="fas fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
        <a href="#" class="menu-item">
          <i class="fas fa-bullhorn"></i>
          <span>Campaign</span>
        </a>
        <a href="#" class="menu-item">
          <i class="fas fa-folder"></i>
          <span>Directory</span>
        </a>
        <a href="#" class="menu-item">
          <i class="fas fa-compass"></i>
          <span>Explore</span>
        </a>
        <div class="menu-item" id="profileToggle">
          <i class="fas fa-user"></i>
          <span>Profile</span>
          <i class="fas fa-chevron-down ms-auto"></i>
        </div>
        <div id="profileSubmenu" class="profile-submenu">
          <a href="#" class="menu-item">
            <i class="fas fa-pen"></i>
            <span>Edit Profile</span>
          </a>
          <a href="#" class="menu-item">
            <i class="fas fa-sign-out-alt"></i>
            <span>Sign Out</span>
          </a>
        </div>
      </div>
    </div>

<section class="directory-section">
  <div class="directory-header mb-4">
    <div class="search-container mb-3">
      <i class="fas fa-search search-icon"></i>
      <input type="text" placeholder="Search creators..." class="search-input">
    </div>
    <div class="filter-buttons">
      <button class="filter-btn"><i class="fas fa-sliders-h"></i> Filter</button>
      <button class="filter-btn">Platform</button>
      <button class="filter-btn">Creator Type</button>
    </div>
  </div>

  <div class="creator-list">
    <div class="creator-card mb-3">
      <div class="row align-items-center">
        <div class="col-2">
          <img src="https://m.media-amazon.com/images/M/MV5BMjAxNzUwNjExOV5BMl5BanBnXkFtZTcwNDUyMTUxNw@@._V1_.jpg" 
               class="creator-profile-img" alt="Creator">
        </div>
        <div class="col-7">
          <div class="d-flex align-items-center">
            <h4 class="creator-name mb-0 me-2">Priyanka Chopra</h4>
            <span class="creator-tag badge bg-warning text-dark">
              <i class="fas fa-star"></i> Celebrity
            </span>
          </div>
          <p class="creator-category text-muted small mb-1">Entertainment</p>
          <p class="creator-stats text-muted small mb-0">
            <i class="fab fa-instagram"></i> 92.5M
          </p>
        </div>
        <div class="col-3 text-end">
          <button class="btn btn-sm btn-outline-secondary add-to-campaign">
            <i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- SECTION 5: Footer -->
    <footer class="fixed-footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-3 text-center">
            <a href="#" class="footer-link">
              <i class="fas fa-bullhorn"></i>
              <span>Campaign</span>
            </a>
          </div>
          <div class="col-3 text-center">
            <a href="directory.php" class="footer-link">
              <i class="fas fa-folder"></i>
              <span>Directory</span>
            </a>
          </div>
          <div class="col-3 text-center">
            <a href="#" class="footer-link">
              <i class="fas fa-compass"></i>
              <span>Explore</span>
            </a>
          </div>
          <div class="col-3 text-center">
            <a href="#" class="footer-link">
              <i class="fas fa-user"></i>
              <span>Profile</span>
            </a>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JS -->
  <script src="script.js"></script>
</body>
</html>
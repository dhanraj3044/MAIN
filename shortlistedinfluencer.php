<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shortlisted Influencers | Zomato Campaign</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="detailcamp.css">
</head>
<body>
    <div class="container py-4">
        <div class="elegant-card">
            <!-- Header Section -->
            <div class="elegant-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2>Shortlisted Influencers</h2>
                        <div class="subtitle">Zomato Summer Food Festival Campaign</div>
                    </div>
                    <div class="status-badge status-active">25 Selected</div>
                </div>
            </div>
            
            <!-- Search and Filter -->
            <div class="elegant-body">
                <div class="directory-search">
                    <i class="fas fa-search"></i>
                    <input type="text" class="form-control form-control-elegant" placeholder="Search influencers...">
                </div>
                
                <div class="d-flex justify-content-between mb-4">
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="filterDropdown" data-bs-toggle="dropdown">
                            <i class="fas fa-filter me-2"></i>Filters
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Followers: High to Low</a></li>
                            <li><a class="dropdown-item" href="#">Followers: Low to High</a></li>
                            <li><a class="dropdown-item" href="#">Engagement Rate</a></li>
                            <li><a class="dropdown-item" href="#">Location: Mumbai</a></li>
                        </ul>
                    </div>
                    
                    <button class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Add New
                    </button>
                </div>
                
                <!-- Influencer Grid -->
                <div class="influencer-grid">
                    <!-- Influencer Card 1 -->
                    <div class="influencer-grid-card">
                        <div class="d-flex align-items-center">
                            <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Influencer" class="influencer-avatar me-3">
                            <div>
                                <div class="influencer-name">Foodie Aditi</div>
                                <div class="influencer-meta">
                                    <span><i class="fab fa-instagram me-1"></i> 42.5K followers</span>
                                </div>
                            </div>
                        </div>
                        <div class="influencer-stats mt-3">
                            <div class="stat-item">
                                <div class="stat-value">4.8%</div>
                                <div class="stat-label">Engagement</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">₹4,000</div>
                                <div class="stat-label">Budget</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">92%</div>
                                <div class="stat-label">Match</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <button class="btn btn-view btn-elegant flex-grow-1 me-2">
                                <i class="far fa-eye me-2"></i>View
                            </button>
                            <button class="btn btn-remove btn-elegant">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Influencer Card 2 -->
                    <div class="influencer-grid-card">
                        <div class="d-flex align-items-center">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Influencer" class="influencer-avatar me-3">
                            <div>
                                <div class="influencer-name">Mumbai Food Guide</div>
                                <div class="influencer-meta">
                                    <span><i class="fab fa-instagram me-1"></i> 38.2K followers</span>
                                </div>
                            </div>
                        </div>
                        <div class="influencer-stats mt-3">
                            <div class="stat-item">
                                <div class="stat-value">5.1%</div>
                                <div class="stat-label">Engagement</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">₹4,500</div>
                                <div class="stat-label">Budget</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">88%</div>
                                <div class="stat-label">Match</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <button class="btn btn-view btn-elegant flex-grow-1 me-2">
                                <i class="far fa-eye me-2"></i>View
                            </button>
                            <button class="btn btn-remove btn-elegant">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Add more influencer cards as needed -->
                    
                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-5">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
</html>
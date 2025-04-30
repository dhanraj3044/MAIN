<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Directory | Influencer Database</title>
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
                <h2>Create New Directory</h2>
                <div class="subtitle">Add influencers to your directory for future campaigns</div>
            </div>
            
            <!-- Directory Content -->
            <div class="elegant-body">
                <!-- Search and Filter -->
                <div class="directory-search">
                    <i class="fas fa-search"></i>
                    <input type="text" class="form-control form-control-elegant" placeholder="Search influencers...">
                </div>
                
                <div class="d-flex justify-content-between mb-4">
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="directoryFilter" data-bs-toggle="dropdown">
                            <i class="fas fa-filter me-2"></i>Filters
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Followers: High to Low</a></li>
                            <li><a class="dropdown-item" href="#">Followers: Low to High</a></li>
                            <li><a class="dropdown-item" href="#">Engagement Rate</a></li>
                            <li><a class="dropdown-item" href="#">By Location</a></li>
                            <li><a class="dropdown-item" href="#">By Category</a></li>
                        </ul>
                    </div>
                    
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addInfluencerModal">
                        <i class="fas fa-plus me-2"></i>Add Influencer
                    </button>
                </div>
                
                <!-- Directory Listing -->
                <div class="directory-card">
                    <div class="d-flex align-items-center">
                        <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Influencer" class="influencer-avatar me-3">
                        <div class="flex-grow-1">
                            <div class="influencer-name">Foodie Aditi</div>
                            <div class="influencer-meta">
                                <span><i class="fab fa-instagram me-1"></i> 42.5K followers</span>
                                <span class="mx-2">•</span>
                                <span><i class="fas fa-map-marker-alt me-1"></i> Mumbai</span>
                                <span class="mx-2">•</span>
                                <span><i class="fas fa-utensils me-1"></i> Food & Beverage</span>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-link text-dark" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="far fa-eye me-2"></i>View</a></li>
                                <li><a class="dropdown-item" href="#"><i class="far fa-edit me-2"></i>Edit</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-link me-2"></i>Connect</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="far fa-trash-alt me-2"></i>Remove</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="directory-card">
                    <div class="d-flex align-items-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Influencer" class="influencer-avatar me-3">
                        <div class="flex-grow-1">
                            <div class="influencer-name">Mumbai Food Guide</div>
                            <div class="influencer-meta">
                                <span><i class="fab fa-instagram me-1"></i> 38.2K followers</span>
                                <span class="mx-2">•</span>
                                <span><i class="fas fa-map-marker-alt me-1"></i> Mumbai</span>
                                <span class="mx-2">•</span>
                                <span><i class="fas fa-utensils me-1"></i> Food & Beverage</span>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-link text-dark" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="far fa-eye me-2"></i>View</a></li>
                                <li><a class="dropdown-item" href="#"><i class="far fa-edit me-2"></i>Edit</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-link me-2"></i>Connect</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="far fa-trash-alt me-2"></i>Remove</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Add more directory cards as needed -->
                
                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-4">
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
    
    <!-- Add Influencer Modal -->
    <div class="modal fade" id="addInfluencerModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Influencer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Influencer Name</label>
                            <input type="text" class="form-control form-control-elegant" placeholder="Enter full name">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Platform</label>
                            <select class="form-select form-control-elegant">
                                <option selected>Instagram</option>
                                <option>YouTube</option>
                                <option>Twitter</option>
                                <option>Facebook</option>
                                <option>TikTok</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Username/Handle</label>
                            <input type="text" class="form-control form-control-elegant" placeholder="@username">
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Follower Count</label>
                                <input type="number" class="form-control form-control-elegant" placeholder="42500">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Engagement Rate</label>
                                <input type="text" class="form-control form-control-elegant" placeholder="4.8%">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select class="form-select form-control-elegant">
                                <option selected>Food & Beverage</option>
                                <option>Fashion</option>
                                <option>Travel</option>
                                <option>Technology</option>
                                <option>Health & Wellness</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Location</label>
                            <input type="text" class="form-control form-control-elegant" placeholder="Mumbai">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Add Influencer</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
</html>
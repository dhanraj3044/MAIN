<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Campaign</title>
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
                <h2>Create New Campaign</h2>
                <div class="subtitle">Fill in the details below to launch a new influencer campaign</div>
            </div>
            
            <!-- Form Section -->
            <div class="elegant-body">
                <form>
                    <!-- Basic Information Section -->
                    <div class="form-section">
                        <h5 class="form-section-title">Basic Information</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Brand Name</label>
                                <input type="text" class="form-control form-control-elegant" placeholder="e.g. Zomato">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Campaign Name</label>
                                <input type="text" class="form-control form-control-elegant" placeholder="e.g. Summer Food Festival">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Agency Name</label>
                                <input type="text" class="form-control form-control-elegant" placeholder="e.g. Peak Marketing">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Point of Contact</label>
                                <input type="text" class="form-control form-control-elegant" placeholder="e.g. Dhanraj">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Contact Number</label>
                                <input type="tel" class="form-control form-control-elegant" placeholder="+91 9876543210">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control form-control-elegant" placeholder="contact@example.com">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Campaign Details Section -->
                    <div class="form-section">
                        <h5 class="form-section-title">Campaign Details</h5>
                        <div class="mb-3">
                            <label class="form-label">Campaign Brief</label>
                            <textarea class="form-control form-control-elegant" rows="4" placeholder="Describe the campaign objectives, expectations, and deliverables"></textarea>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Platform(s)</label>
                                <select class="form-select form-control-elegant" multiple>
                                    <option selected>Instagram</option>
                                    <option>YouTube</option>
                                    <option>Twitter</option>
                                    <option>Facebook</option>
                                    <option>TikTok</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Category</label>
                                <select class="form-select form-control-elegant">
                                    <option selected>Food & Beverage</option>
                                    <option>Fashion</option>
                                    <option>Travel</option>
                                    <option>Technology</option>
                                    <option>Health & Wellness</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Follower Range</label>
                                <select class="form-select form-control-elegant">
                                    <option>10,000 - 50,000 (Micro-influencers)</option>
                                    <option selected>50,000 - 200,000 (Mid-tier)</option>
                                    <option>200,000 - 1,000,000 (Macro-influencers)</option>
                                    <option>1,000,000+ (Mega-influencers)</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Location</label>
                                <input type="text" class="form-control form-control-elegant" placeholder="e.g. Mumbai">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Language(s)</label>
                                <select class="form-select form-control-elegant" multiple>
                                    <option selected>English</option>
                                    <option selected>Hindi</option>
                                    <option>Tamil</option>
                                    <option>Telugu</option>
                                    <option>Bengali</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Campaign Duration</label>
                                <div class="input-group">
                                    <input type="number" class="form-control form-control-elegant" placeholder="4">
                                    <span class="input-group-text">weeks</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Budget Section -->
                    <div class="form-section">
                        <h5 class="form-section-title">Budget & Timeline</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Budget Per Influencer (₹)</label>
                                <input type="number" class="form-control form-control-elegant" placeholder="4000">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Number of Influencers</label>
                                <input type="number" class="form-control form-control-elegant" placeholder="25">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Total Budget (₹)</label>
                                <input type="number" class="form-control form-control-elegant" placeholder="100000" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select form-control-elegant">
                                    <option>Draft</option>
                                    <option selected>Active</option>
                                    <option>In Progress</option>
                                    <option>Completed</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Start Date</label>
                                <input type="date" class="form-control form-control-elegant">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Deadline</label>
                                <input type="date" class="form-control form-control-elegant">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Form Actions -->
                    <div class="d-flex justify-content-between mt-5">
                        <button type="button" class="btn btn-outline-secondary">
                            <i class="fas fa-times me-2"></i>Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>Create Campaign
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
</html>
document.addEventListener('DOMContentLoaded', function() {
    // Enable horizontal scrolling for social stats with mouse/touch
    const socialStats = document.querySelector('.social-stats-scroll');
    
    if (socialStats) {
      let isDown = false;
      let startX;
      let scrollLeft;
  
      // Mouse events
      socialStats.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.pageX - socialStats.offsetLeft;
        scrollLeft = socialStats.scrollLeft;
        socialStats.style.cursor = 'grabbing';
      });
  
      socialStats.addEventListener('mouseleave', () => {
        isDown = false;
        socialStats.style.cursor = 'grab';
      });
  
      socialStats.addEventListener('mouseup', () => {
        isDown = false;
        socialStats.style.cursor = 'grab';
      });
  
      socialStats.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - socialStats.offsetLeft;
        const walk = (x - startX) * 2;
        socialStats.scrollLeft = scrollLeft - walk;
      });
  
      // Touch events
      socialStats.addEventListener('touchstart', (e) => {
        isDown = true;
        startX = e.touches[0].pageX - socialStats.offsetLeft;
        scrollLeft = socialStats.scrollLeft;
      });
  
      socialStats.addEventListener('touchend', () => {
        isDown = false;
      });
  
      socialStats.addEventListener('touchmove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.touches[0].pageX - socialStats.offsetLeft;
        const walk = (x - startX) * 2;
        socialStats.scrollLeft = scrollLeft - walk;
      });
    }
  
    // Add button functionality
    const addButton = document.querySelector('.add-btn');
    if (addButton) {
      addButton.addEventListener('click', function() {
        // Create dropdown menu
        const dropdown = document.createElement('div');
        dropdown.className = 'campaign-dropdown';
        dropdown.innerHTML = `
          <div class="dropdown-item">Add to Campaign</div>
          <div class="dropdown-item">Save to Favorites</div>
          <div class="dropdown-item">Share Profile</div>
        `;
        
        // Position dropdown
        const rect = addButton.getBoundingClientRect();
        dropdown.style.position = 'absolute';
        dropdown.style.top = `${rect.bottom + 5}px`;
        dropdown.style.right = `${window.innerWidth - rect.right}px`;
        
        // Add to DOM
        document.body.appendChild(dropdown);
        
        // Remove on outside click
        function handleClickOutside(e) {
          if (!dropdown.contains(e.target) && e.target !== addButton) {
            document.body.removeChild(dropdown);
            document.removeEventListener('click', handleClickOutside);
          }
        }
        
        document.addEventListener('click', handleClickOutside);
      });
    }
  
    // Prevent body scrolling when dropdown is open
    document.addEventListener('click', function(e) {
      if (e.target.closest('.campaign-dropdown')) {
        e.preventDefault();
      }
    });
  });
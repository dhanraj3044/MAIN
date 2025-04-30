// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Fullscreen menu functionality
    const menuBtn = document.getElementById('menuBtn');
    const menuCloseBtn = document.getElementById('menuCloseBtn');
    const fullscreenMenu = document.getElementById('fullscreenMenu');
    const profileToggle = document.getElementById('profileToggle');
    const profileSubmenu = document.getElementById('profileSubmenu');
    
    // Open menu
    menuBtn.addEventListener('click', function() {
      fullscreenMenu.classList.add('active');
      document.body.style.overflow = 'hidden'; // Prevent body scrolling when menu is open
    });
    
    // Close menu
    menuCloseBtn.addEventListener('click', function() {
      fullscreenMenu.classList.remove('active');
      document.body.style.overflow = ''; // Re-enable body scrolling
    });
    
    // Toggle profile submenu
    profileToggle.addEventListener('click', function() {
      profileSubmenu.classList.toggle('active');
      
      // Toggle the chevron icon
      const chevron = this.querySelector('.fa-chevron-down');
      if (profileSubmenu.classList.contains('active')) {
        chevron.classList.replace('fa-chevron-down', 'fa-chevron-up');
      } else {
        chevron.classList.replace('fa-chevron-up', 'fa-chevron-down');
      }
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
      if (fullscreenMenu.classList.contains('active') && 
          !fullscreenMenu.contains(e.target) && 
          e.target !== menuBtn && 
          !menuBtn.contains(e.target)) {
        fullscreenMenu.classList.remove('active');
        document.body.style.overflow = '';
      }
    });
    
    // Footer active state
    const footerLinks = document.querySelectorAll('.footer-link');
    footerLinks.forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        footerLinks.forEach(item => item.classList.remove('active'));
        this.classList.add('active');
      });
    });
    
    // Set the first footer link as active by default
    if (footerLinks.length > 0) {
      footerLinks[0].classList.add('active');
    }
  });
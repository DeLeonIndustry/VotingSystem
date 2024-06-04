  const mobileMenu = document.getElementById('mobileMenu');
  const mobileMenuButton = document.getElementById('mobileMenuButton');
  const closeMobileMenuButton = document.getElementById('closeMobileMenuButton');
  mobileMenuButton.addEventListener('click', function() {
      mobileMenu.style.display = 'block';
  });
  closeMobileMenuButton.addEventListener('click', function() {
      mobileMenu.style.display = 'none';
  });
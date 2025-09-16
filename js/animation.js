document.addEventListener('scroll', function() {
    const elements = document.querySelectorAll('.animate-left, .animate-right, .animate-fade, .animate-up');
    const windowHeight = window.innerHeight;
    const visibilityRange = 80; // Ajusta este valor según tus necesidades
  
    elements.forEach(element => {
      const position = element.getBoundingClientRect().top;
  
      if (position < windowHeight - visibilityRange && position > visibilityRange) {
        if (!element.classList.contains('visible')) {
          element.classList.add('visible');
        }
      }
      // No eliminamos la clase para que no desaparezca
    });
  });
  
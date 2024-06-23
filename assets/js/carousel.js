document.addEventListener("DOMContentLoaded", function() {
  const track = document.querySelector('.carousel-track');
  const items = document.querySelectorAll('.carousel-part');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');

  let index = 0;
  const totalItems = items.length;
  let itemWidth = items[0].clientWidth; // Ambil lebar item pertama

  prevBtn.addEventListener('click', function() {
    index = (index > 0) ? index - 1 : totalItems - 1;
    updateCarousel();
  });

  nextBtn.addEventListener('click', function() {
    index = (index < totalItems - 1) ? index + 1 : 0;
    updateCarousel();
  });

  function updateCarousel() {
    itemWidth = items[index].clientWidth; // Ambil lebar item saat ini
    const offset = -index * itemWidth;
    track.style.transform = `translateX(${offset}px)`;
  }

  // Memperbarui carousel saat ukuran layar berubah
  window.addEventListener('resize', function() {
    updateCarousel();
  });
});
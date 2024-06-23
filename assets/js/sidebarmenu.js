// custom.js

$(document).ready(function() {
  // Ketika ada yang diklik pada sidebar link
  $('#sidebarnav').on('click', '.sidebar-link', function() {
      // Hapus kelas 'active' dari semua link di sidebar
      $('#sidebarnav').find('.sidebar-link').removeClass('active');
      
      // Tambahkan kelas 'active' pada link yang diklik
      $(this).addClass('active');
  });
});

const form = document.querySelector('form');

form.addEventListener('submit', function(e) {
  e.preventDefault();
    form.submit();
});










$(document).ready(function() {
    $('form').on('submit', function(event) {
      event.preventDefault();
      $.ajax({
        url: 'php/login.php', 
        type: 'POST', 
        data: $('form').serialize(), 
        success: function(response) {
          alert(response); 
        }
      });
    });
  });
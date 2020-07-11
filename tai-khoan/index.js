$(document).ready(function() {
  $('#userInfo').submit(function() {
    var formData = $(this).serialize();
    $.ajax({
      url: 'cap-nhat.php',
      method: 'post',
      data: formData,
      sucess: function(data) {
        location.reload();
      }
    });
  })
});
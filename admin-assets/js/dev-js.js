 var changePassowrdCheck = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
  document.getElementById('message').innerHTML = 'matching';
} else {
  document.getElementById('message').style.color = 'red';
  document.getElementById('message').innerHTML = 'not matching';
}
}

$(document).ready(function() {
  var frm = $('#changePasswordForm');
  frm.submit(function(e){
    e.preventDefault();

    var formData = frm.serialize();
    $.ajax({
      type: frm.attr('method'),
      url: frm.attr('action'),
      data: formData,
      success: function(data){
     
        $('#messagee').html(data).delay(3000).fadeOut(3000);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        $('#messagee').html(textStatus).delay(2000).fadeOut(2000);
      }

    });
  });
});
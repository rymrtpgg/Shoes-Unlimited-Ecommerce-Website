
	$(document).ready(function () {
    
    // Form Start
    $('#form').validate({
      rules: {
        userName: {
          required: true
        },
        password: {
          required: true,
          minlength: 8
        }
      },
      messages: {
        uname: 'Please enter Name.',
        password: {
          required: 'Please enter Password.',
          minlength: 'Password must be at least 8 characters long.',
        }
      },
      submitHandler: function (form) {
        form.submit();
      }
    });
    // Form end

});



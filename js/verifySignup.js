
  $(document).ready(function () {
    
    // Form Start
    $('#forms').validate({
      rules: {

        unameup: {
          required: true,
        },
        emailup: {
          required: true,
        },
        passup: {
          required: true,
          minlength: 8
        },
        conf_passup: {
          required: true,
          minlength: 8
        }
      },
      messages: {
        unameup: 'Please enter Name.',
        passup: {
          required: 'Please enter Password.',
          minlength: 'Password must be at least 8 characters long.',
        }
      },
      submitHandler: function (forms) {
        forms.submit();
      }
    });
    // Form end

});

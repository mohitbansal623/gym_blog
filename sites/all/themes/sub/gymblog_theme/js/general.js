(function($) {
  $(document).ready(function() {
    if ($("#user-account-forms").length) {
      $("#user-account-forms .create-account-btn").click(function() {

        $("#user-account-forms .form-box").hide();
        $("#user-account-forms .register-form").show();
      });

      $("#user-account-forms .login-btn").click(function() {
        $("#user-account-forms .form-box").hide();
        $("#user-account-forms .login-form").show();
      });
    }
  });

})(jQuery);

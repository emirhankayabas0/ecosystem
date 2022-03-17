function send_email(formId) {
  var data = $(formId).serialize();
  $.post(
    api_url + "/send-email",
    data,
    function (response) {
      if (response.error) {
        $("#send-mail-error").hide();
        $("#send-mail-error").show().html(response.error);
      } else {
        $("#send-mail-success").hide();
        $("#send-mail-success").show().html(response.success);
        $(formId + "input," + formId + "textarea").val("");
      }
    },
    "json"
  );
}

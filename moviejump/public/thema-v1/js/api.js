function contact(formId) {
  var data = $(formId).serialize();
  $.post(
    api_url + "/contact",
    data,
    function (response) {
      if (response.error) {
        $("#contact-error-message").hide();
        $("#contact-error-message").show().html(response.error);
      } else {
        $("#contact-error-message").hide();
        $("#contact-success-message").show().html(response.success);
        $(formId + "input," + formId + "textarea").val("");
      }
    },
    "json"
  );
}

function comments(formId) {
  let data = $(formId).serialize();
  $.post(
    api_url + "/comment",
    data,
    function (response) {
      if (response.error) {
        $("#comment-success-message").hide();
        $("#comment-error-message").show().html(response.error);
      } else {
        $("#comment-error-message").hide();
        $("#comment-success-message").show().html(response.success);
      }
    },
    "json"
  );
}

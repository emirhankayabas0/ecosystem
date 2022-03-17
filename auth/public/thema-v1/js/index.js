const showHidePassword = document.getElementById("showHidePassword"),
  inputPassword = document.querySelectorAll("input[type=password]"),
  proposalUsurname = document.querySelectorAll(".proposalUsurname");

showHidePassword.addEventListener("click", () => {
  if (showHidePassword.checked == true) {
    for (let index = 0; index < inputPassword.length; index++) {
      const element = inputPassword[index];
      element.type = "text";
    }
  } else {
    for (let index = 0; index < inputPassword.length; index++) {
      const element = inputPassword[index];
      element.type = "password";
    }
  }
});

$("#proposalUsurname").click(function () {
  $("#registerUsername").val($("#proposalUsurname").text());
  $(".proposalUsurname").hide();
});
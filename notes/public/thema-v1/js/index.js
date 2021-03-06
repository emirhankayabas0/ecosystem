function back() {
  window.location.href = "./";
}

window.onscroll = function (event) {
  let x = window.scrollX;
  let y = window.scrollY;
  if (y > 10) {
    document.querySelector("header.header").classList.add("scroll");
  } else {
    document.querySelector("header.header").classList.remove("scroll");
  }
};

const noteContentTextarea = document.getElementById("note-content");

noteContentTextarea.addEventListener("keyup", (e) => {
  noteContentTextarea.style.height = "40px";
  let scHeight = e.target.scrollHeight;
  noteContentTextarea.style.height = `${scHeight}px`;
});

$("#new-note-form").on("submit", function (e) {
  e.preventDefault();
  const formData = $(this).serialize();
  $.ajax({
    url: $(this).attr("action"),
    type: "POST",
    data: formData,
    success: function (response) {
      var data = JSON.parse(response);
      location.reload();
    },
  });
});

const pinCheckboxInput = document.getElementById("pinCheckboxInput");
let pinİcon = document.querySelector(
  "main.notes .content .tab-content .tab-pane.note .new-note .field .new-note-box .header label.pin-field span.icon"
);
pinCheckboxInput.addEventListener("click", () => {
  if (pinCheckboxInput.checked == true) {
    pinİcon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><path d="M16,9V4l1,0c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H7C6.45,2,6,2.45,6,3v0 c0,0.55,0.45,1,1,1l1,0v5c0,1.66-1.34,3-3,3h0v2h5.97v7l1,1l1-1v-7H19v-2h0C17.34,12,16,10.66,16,9z" fill-rule="evenodd"/></g></svg>`;
  } else {
    pinİcon.innerHTML = `
    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><path d="M14,4v5c0,1.12,0.37,2.16,1,3H9c0.65-0.86,1-1.9,1-3V4H14 M17,2H7C6.45,2,6,2.45,6,3c0,0.55,0.45,1,1,1c0,0,0,0,0,0l1,0v5 c0,1.66-1.34,3-3,3v2h5.97v7l1,1l1-1v-7H19v-2c0,0,0,0,0,0c-1.66,0-3-1.34-3-3V4l1,0c0,0,0,0,0,0c0.55,0,1-0.45,1-1 C18,2.45,17.55,2,17,2L17,2z"/></g></svg>`;
  }
});

const newTodoLabel = document.querySelector(
  "main.notes .content .tab-content .tab-pane.note .new-note .field label.new-todo-label"
);

const newNoteBox = document.querySelector(
  "main.notes .content .tab-content .tab-pane.note .new-note .field .new-note-box"
);

const closeNewNote = document.getElementById("close-new-note");

newTodoLabel.addEventListener("click", () => {
  newTodoLabel.style.display = "none";
  newNoteBox.style.display = "block";
});

closeNewNote.addEventListener("click", () => {
  newTodoLabel.style.display = "flex";
  newNoteBox.style.display = "none";
});

const menuContainer = document.querySelector("main.notes .side-bar");

function openMenu() {
  menuContainer.classList.toggle("show");
}

$(document).load($(window).bind("resize", checkPosition));

function checkPosition() {
  if ($(window).width() < 767) {
    $("main.notes .side-bar").removeClass("show");
  } else {
    $("main.notes .side-bar").addClass("show");
  }
}

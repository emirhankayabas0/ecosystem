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

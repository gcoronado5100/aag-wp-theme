/**
 * Changes the color of the header when the user scrolls down
 */
window.addEventListener("scroll", function () {
  var header = document.querySelector("header > div");
  if (window.scrollY > 50) {
    header.classList.add("scrolled__bar");
  } else {
    header.classList.remove("scrolled__bar");
  }
});

/**
 * Checks if the if the page contains a block with the ID of "contact-form" if it doesn't, it will change the url of the contact link to the about page on the #contact section
 */
const contactBtn = document.querySelector(".contact-btn a");

if (!document.getElementById("contact")) {
  console.log("No contact form found");
  contactBtn.href = "/about#contact";
}

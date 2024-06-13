const contactBlock = document.querySelector("#contact");

if (contactBlock) {
  contactBlock.remove();
  let contactBtn = document.querySelector(".contact-btn a");
  contactBtn.href = "/about-us#contact";
} else {
  console.log("No contact form found");
}

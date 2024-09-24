const registerButton = document.getElementById("register");
const loginButton = document.getElementById("login");
const container = document.getElementById("container");

registerButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});

loginButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
});



const overlayForgotPassword = document.querySelector('.overlay-forgot-password');
const forgotPasswordButton = document.querySelector('.pass-link a');

overlayForgotPassword.style.display = 'none';

forgotPasswordButton.addEventListener('click', function (event) {
  overlayForgotPassword.style.display = 'block';

  event.stopPropagation();
});

document.addEventListener('click', function (event) {
  if (!overlayForgotPassword.contains(event.target)) {
    overlayForgotPassword.style.display = 'none';
  }
});


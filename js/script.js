let navbar = document.querySelector('.header .navbar');
let loginForm = document.querySelector('.login-form');

document.querySelector('#menu-btn').onclick = () => {
  navbar.classList.toggle('active');
  loginForm.classList.remove('active');
}

document.querySelector('#login-btn').onclick = () => {
  loginForm.classList.toggle('active');
  navbar.classList.remove('active');
}

window.onscroll = () => {
  navbar.classList.remove('active');
  loginForm.classList.remove('active');
}

var swiper = new Swiper(".review-slider", {
  spaceBetween: 20,
  centeredSlides: true,
  grabCursor: true,
  autoplay: {
    delay: 7500,
    disableOnInteraction: false,
  },
  loop: true,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    991: {
      slidesPerView: 3,
    },
  },
});

document.addEventListener("DOMContentLoaded", function() {
  // Get the login and registration buttons
  const loginBtn = document.getElementById("login-btn");
  const registerBtn = document.getElementById("register-btn");

  // Function to handle login
  loginBtn.addEventListener("click", function() {
    const email = document.getElementById("login-email").value;
    const password = document.getElementById("login-password").value;
    // Implement login functionality here
    console.log("Login process starts here...");
  });

  // Function to handle registration
  registerBtn.addEventListener("click", function() {
    const email = document.getElementById("register-email").value;
    const password = document.getElementById("register-password").value;
    // Implement registration functionality here
    console.log("Registration process starts here...");
  });
});

// Store session data
var userData = {
  username: "user123",
  email: "user@example.com"
};
localStorage.setItem("userData", JSON.stringify(userData));

// Retrieve session data
var retrievedUserData = JSON.parse(localStorage.getItem("userData"));
console.log(retrievedUserData.username); // Output: user123
console.log(retrievedUserData.email); // Output: user@example.com

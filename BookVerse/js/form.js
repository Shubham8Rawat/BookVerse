document.addEventListener('DOMContentLoaded', function () {
    console.log("Script is running!");

    const loginLinks = document.querySelectorAll('.login-link');
    const registerLink = document.getElementById('register-link');

    const loginContainer = document.getElementById('login-container');
    const registerContainer = document.getElementById('register-container');
    const blurBackground = document.getElementById('blur-background');

    let isLoginFormOpen = false;
    let isRegisterFormOpen = false;

    // Function to open the login form
    function openLoginForm() {
        isLoginFormOpen = true;
        isRegisterFormOpen = false;
        loginContainer.style.display = 'block'; // Change to 'block' to show the login form
        registerContainer.style.display = 'none';
        blurBackground.style.display = 'block';
    }

    // Function to open the register form
    function openRegisterForm() {
        isRegisterFormOpen = true;
        isLoginFormOpen = false;
        registerContainer.style.display = 'block'; // Change to 'block' to show the register form
        loginContainer.style.display = 'none';
        blurBackground.style.display = 'block';
    }

    // Toggle the login form visibility when clicking the login links
    loginLinks.forEach(function(loginLink) {
        loginLink.addEventListener('click', function (event) {
            event.preventDefault();
            console.log("Login link clicked!");
            openLoginForm();
        });
    });

    // Open the register form when clicking the "Signup now" link
    registerLink.addEventListener('click', function (event) {
        event.preventDefault();
        console.log("Register link clicked!");
        openRegisterForm();
    });

    // Close the login or register form when clicking outside the form or login link
    document.addEventListener('click', function (event) {
        if (isLoginFormOpen && !loginContainer.contains(event.target) && !Array.from(loginLinks).includes(event.target)) {
            console.log("Clicked outside login container or login link!");
            isLoginFormOpen = false;
            loginContainer.style.display = 'none';
            blurBackground.style.display = 'none';
        }

        if (isRegisterFormOpen && !registerContainer.contains(event.target) && event.target !== registerLink) {
            console.log("Clicked outside register container or register link!");
            isRegisterFormOpen = false;
            registerContainer.style.display = 'none';
            blurBackground.style.display = 'none';
        }
    });
});

window.addEventListener("scroll", function(){
    var nav = document.querySelector("nav");
    nav.classList.toggle("sticky", this.scrollY > 0)
  });
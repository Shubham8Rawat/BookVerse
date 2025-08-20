// Login Form JavaScript
const loginForm = document.querySelector("#login");
const loginEmailField = loginForm.querySelector(".email");
const loginEmailInput = loginEmailField.querySelector("input");
const loginPasswordField = loginForm.querySelector(".password");
const loginPasswordInput = loginPasswordField.querySelector("input");

loginForm.addEventListener('submit', (e) => {
  e.preventDefault(); // Prevent form submission

  // Check if email and password are blank
  (loginEmailInput.value === "") ? loginEmailField.classList.add("shake", "error") : checkLoginEmail();
  (loginPasswordInput.value === "") ? loginPasswordField.classList.add("shake", "error") : checkLoginPassword();

  setTimeout(() => { // Remove shake class after 500ms
    loginEmailField.classList.remove("shake");
    loginPasswordField.classList.remove("shake");
  }, 500);

  // Define event handlers for input fields
  loginEmailInput.onkeyup = () => { checkLoginEmail(); };
  loginPasswordInput.onkeyup = () => { checkLoginPassword(); };

  function checkLoginEmail() {
    // Check if email is empty
    if (loginEmailInput.value === "") {
      loginEmailField.classList.add("error");
      loginEmailField.classList.remove("valid");
    } else {
      loginEmailField.classList.remove("error");
      loginEmailField.classList.add("valid");
    }
  }

  function checkLoginPassword() {
    // Check if password is empty
    if (loginPasswordInput.value === "") {
      loginPasswordField.classList.add("error");
      loginPasswordField.classList.remove("valid");
    } else {
      loginPasswordField.classList.remove("error");
      loginPasswordField.classList.add("valid");
    }
  }

  // Check if all fields are valid
  if (!loginEmailField.classList.contains("error") && !loginPasswordField.classList.contains("error")) {
    // Perform login action (e.g., submit form or make API call)
    console.log("Login successful!"); // Example: Log success message
    // You can perform further actions here, such as showing a success message or redirecting the user
  }
});




// Register Form JavaScript
const registerForm = document.querySelector("#register");
const uField = registerForm.querySelector(".username");
const uInput = uField.querySelector("input");
const eField = registerForm.querySelector(".email");
const eInput = eField.querySelector("input");
const pField = registerForm.querySelector(".password");
const pInput = pField.querySelector("input");
const cpField = registerForm.querySelector(".confirm-password");
const cpInput = cpField ? cpField.querySelector("input") : null; // Check if cpField is null

registerForm.addEventListener('submit', (e) => {
  e.preventDefault(); // Prevent form submission

  // Check if fields are blank
  (uInput.value === "") ? uField.classList.add("shake", "error") : checkUsername();
  (eInput.value === "") ? eField.classList.add("shake", "error") : checkEmail();
  (pInput.value === "") ? pField.classList.add("shake", "error") : checkPass();
  (cpInput && cpInput.value === "") ? cpField.classList.add("shake", "error") : checkConfirmPass(); // Check if cpInput is null

  setTimeout(() => { // Remove shake class after 500ms
    uField.classList.remove("shake");
    eField.classList.remove("shake");
    pField.classList.remove("shake");
    if (cpField) cpField.classList.remove("shake"); // Check if cpField is null
  }, 500);

  // Define event handlers for input fields
  uInput.onkeyup = () => { checkUsername(); };
  eInput.onkeyup = () => { checkEmail(); };
  pInput.onkeyup = () => { checkPass(); };
  if (cpInput) cpInput.onkeyup = () => { checkConfirmPass(); }; // Check if cpInput is null

  function checkUsername() {
    // Check if username is empty
    if (uInput.value === "") {
      uField.classList.add("error");
      uField.classList.remove("valid");
    } else {
      uField.classList.remove("error");
      uField.classList.add("valid");
    }
  }

  function checkEmail() {
    // Check if email is empty
    if (eInput.value === "") {
      eField.classList.add("error");
      eField.classList.remove("valid");
    } else {
      eField.classList.remove("error");
      eField.classList.add("valid");
    }
  }

  function checkPass() {
    // Check if password is empty
    if (pInput.value === "") {
      pField.classList.add("error");
      pField.classList.remove("valid");
    } else {
      pField.classList.remove("error");
      pField.classList.add("valid");
    }
  }

  function checkConfirmPass() {
    if (cpField) {
      // Check if confirm password matches password
      if (cpInput.value !== pInput.value) {
        cpField.classList.add("error");
        cpField.classList.remove("valid");
      } else {
        cpField.classList.remove("error");
        cpField.classList.add("valid");
      }
    }
  }
  
  
  

  // Check if all fields are valid
  if (!uField.classList.contains("error") && !eField.classList.contains("error") && !pField.classList.contains("error") && (!cpField || !cpField.classList.contains("error"))) { // Check if cpField is null
    // Perform registration action (e.g., submit form or make API call)
    console.log("Registration successful!"); // Example: Log success message
    // You can perform further actions here, such as showing a success message or redirecting the user
  }
});

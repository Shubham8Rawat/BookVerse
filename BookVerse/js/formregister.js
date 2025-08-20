// Register Form JavaScript
const registerForm = document.querySelector("#register");
const uField = registerForm.querySelector(".username");
const uInput = uField.querySelector("input");
const eField = registerForm.querySelector(".email");
const eInput = eField.querySelector("input");
const pField = registerForm.querySelector(".password");
const pInput = pField.querySelector("input");
const cpInput = document.querySelector("#confirm-password");

registerForm.addEventListener('submit', (e) => {
  e.preventDefault(); // Prevent form submission

  // Check if fields are blank
  (uInput.value === "") ? uField.classList.add("shake", "error") : checkUsername();
  (eInput.value === "") ? eField.classList.add("shake", "error") : checkEmail();
  (pInput.value === "") ? pField.classList.add("shake", "error") : checkPass();
  if (cpInput && cpInput.value === "") cpInput.parentElement.parentElement.classList.add("shake", "error"); // Check if cpInput is null

  setTimeout(() => { // Remove shake class after 500ms
    uField.classList.remove("shake");
    eField.classList.remove("shake");
    pField.classList.remove("shake");
    if (cpInput) cpInput.parentElement.parentElement.classList.remove("shake"); // Check if cpInput is null
  }, 500);

  // Define event handlers for input fields
  uInput.addEventListener('keyup', checkUsername);
  eInput.addEventListener('keyup', checkEmail);
  pInput.addEventListener('keyup', checkPass);
  if (cpInput) cpInput.addEventListener('keyup', checkConfirmPass); // Check if cpInput is null

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
    // Check if confirm password matches password
    if (cpInput && cpInput.value !== pInput.value) {
      cpInput.parentElement.parentElement.classList.add("error");
      cpInput.parentElement.parentElement.classList.remove("valid");
    } else {
      cpInput.parentElement.parentElement.classList.remove("error");
      cpInput.parentElement.parentElement.classList.add("valid");
    }
  }
  
  // Check if all fields are valid
  if (!uField.classList.contains("error") && !eField.classList.contains("error") && !pField.classList.contains("error") && (!cpInput || !cpInput.parentElement.parentElement.classList.contains("error"))) { // Check if cpInput is null
    // Perform registration action (e.g., submit form or make API call)
    alert("Registration successful!");
    window.location.href = "index.php"; // Change "index.php" to the desired URL
    registerForm.submit();
  }
});



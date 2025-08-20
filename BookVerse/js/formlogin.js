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

  function checkLoginEmail(){ //checkEmail function
    let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; //pattern for validate email
    if(!eInput.value.match(pattern)){ //if pattern not matched then add error and remove valid class
      eField.classList.add("error");
      eField.classList.remove("valid");
      let errorTxt = eField.querySelector(".error-txt");
      //if email value is not empty then show please enter valid email else show Email can't be blank
      (eInput.value != "") ? errorTxt.innerText = "Enter a valid email address" : errorTxt.innerText = "Email can't be blank";
    }else{ //if pattern matched then remove error and add valid class
      eField.classList.remove("error");
      eField.classList.add("valid");
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
     //window.location.href = "index.php";
    loginForm.submit();
  }
});


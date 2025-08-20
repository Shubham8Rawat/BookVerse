<div class="blur-background" id="blur-background"></div>

<div class="login-container" id="login-container">
  <div class="login-box">
    <!-- Your login form goes here -->
    <div class="wrapper">
      <header>Login Form</header>
      <form action="DBLogin.php" method="post" id="login">
        <div class="field email">
          <div class="input-area">
            <input type="text" name="email" id="login-email" placeholder="Email Address">
            <i class="icon fas fa-envelope"></i>
            <i class="error error-icon fas fa-exclamation-circle"></i>
          </div>
          <div class="error error-txt">Email can't be blank</div>
        </div>
        <div class="field password">
          <div class="input-area">
            <input type="password" name="password" id="login-password" placeholder="Password">
            <i class="icon fas fa-lock"></i>
            <i class="error error-icon fas fa-exclamation-circle"></i>
          </div>
          <div class="error error-txt">Password can't be blank</div>
        </div>
        <div class="pass-txt"><a href="#">Forgot password?</a></div>
        <input type="submit" value="Login">
      </form>
      <div class="sign-txt">Not yet member? <a href="#" id="register-link">Signup now</a></div>
    </div>
  </div>
</div>

<div class="register-container" id="register-container">
  <div class="register-box">
    <div class="wrapper">
      <header>Registration Form</header>
      <form action="DBRegister.php" method="post" id="register">
        <div class="field username">
          <div class="input-area">
            <input type="text" name="name" id="username" placeholder="Username">
            <i class="icon fas fa-user"></i>
            <i class="error error-icon fas fa-exclamation-circle"></i>
          </div>
          <div class="error error-txt">Username can't be blank</div>
        </div>
        <div class="field email">
          <div class="input-area">
            <input type="text" name="email" id="email" placeholder="Email Address">
            <i class="icon fas fa-envelope"></i>
            <i class="error error-icon fas fa-exclamation-circle"></i>
          </div>
          <div class="error error-txt">Email can't be blank</div>
        </div>
        <div class="field password">
          <div class="input-area">
            <input type="password" name="pass" id="password" placeholder="Password">
            <i class="icon fas fa-lock"></i>
            <i class="error error-icon fas fa-exclamation-circle"></i>
          </div>
          <div class="error error-txt">Password can't be blank</div>
        </div>
        <div class="field password">
          <div class="input-area">
            <input type="password" id="confirm-password" placeholder="Confirm Password">
            <i class="icon fas fa-lock"></i>
            <i class="error error-icon fas fa-exclamation-circle"></i>
          </div>
          <div class="error error-txt">Please confirm your password</div>
        </div>
        <!-- <a href="index.php" ></a> -->
        <input type="submit" value="Register" >

      </form>
      <div class="sign-txt">Already a member? <a href="#" class="login-link">Login now</a></div>
    </div>
  </div>
</div>

<script>
    // Function to set a cookie with the current page URL
    function setRedirectCookie() {
        document.cookie = "redirectUrl=" + encodeURIComponent(window.location.href) + "; path=/";
    }

    // Attach setRedirectCookie function to form submission event
    document.getElementById("login").addEventListener("submit", setRedirectCookie);
</script>
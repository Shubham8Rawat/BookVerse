<!doctype html>
<html lang="en">
  <head>
    <title>BookVerse!</title>
    <link rel="stylesheet" href="..\css\main.css">
    <link rel="stylesheet" href="..\css\herocarousel.css">
    <link rel="stylesheet" href="..\css\scroll.css">
    <link rel="stylesheet" href="..\css\form.css">
    <link rel="stylesheet" href="..\css\login.css">
    <link rel="stylesheet" href="..\css\register.css">
    <link rel="stylesheet" href="..\css\Itemcarousel.css">
    <link rel="stylesheet" href="..\css\bookcarousel.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    
    
  </head>
  <body>
    <div class="blur-background" id="blur-background"></div>

    <div class="login-container" id="login-container">
      <div class="login-box">
        <!-- Your login form goes here -->
        <div class="wrapper">
          <header>Login Form</header>
          <form action="#">
            <div class="field email">
              <div class="input-area">
                <input type="text" placeholder="Email Address">
                <i class="icon fas fa-envelope"></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
              </div>
              <div class="error error-txt">Email can't be blank</div>
            </div>
            <div class="field password">
              <div class="input-area">
                <input type="password" placeholder="Password">
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
          <form action="#">
            <div class="field username">
              <div class="input-area">
                <input type="text" placeholder="Username">
                <i class="icon fas fa-user"></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
              </div>
              <div class="error error-txt">Username can't be blank</div>
            </div>
            <div class="field email">
              <div class="input-area">
                <input type="text" placeholder="Email Address">
                <i class="icon fas fa-envelope"></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
              </div>
              <div class="error error-txt">Email can't be blank</div>
            </div>
            <div class="field password">
              <div class="input-area">
                <input type="password" placeholder="Password">
                <i class="icon fas fa-lock"></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
              </div>
              <div class="error error-txt">Password can't be blank</div>
            </div>
            <div class="field password">
              <div class="input-area">
                <input type="password" placeholder="Confirm Password">
                <i class="icon fas fa-lock"></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
              </div>
              <div class="error error-txt">Please confirm your password</div>
            </div>
            <input type="submit" value="Register">
          </form>
          <div class="sign-txt">Already a member? <a href="#" class="login-link">Login now</a></div>
        </div>
      </div>
    </div>

    <nav>
      
      <ul class="logo"><img src="..\\img\\logo.png"></ul>
      <ul>
          <li><a href='index.html'>HOME</a></li>
          <li><a href='#' class="login-link">LOGIN</a></li>
          <li><a href='#'>RECORDS</a></li>
          <li><a href='#'>ABOUT</a></li>
          <li><a href='#'>CONTACT</a></li>
      </ul>
      </nav>
    <main>
      <div class="Herocarousel">
        <div class="sh"></div>
        <!-- slider content goes here -->
        <div class="slider">
          <!-- Individual slides go here -->
          <div class="slide active">
            <img src="..\\img\\imgTulipBook.jpg" alt="Slide 1">
            <div class="info">
              <h2>Slide 1 Title</h2>
              <p>Slide 1 description goes here.</p>
            </div>
          </div>
          <div class="slide">
            <img src="..\\img\\imgLantenBook.jpg" alt="Slide 2">
            <div class="info">
              <h2>Slide 2 Title</h2>
              <p>Slide 2 description goes here.</p>
            </div>
          </div>
          <div class="slide">
            <img src="..\\img\\img1.jpg" alt="Slide 3">
            <div class="info">
              <h2>Slide 3 Title</h2>
              <p>Slide 3 description goes here.</p>
            </div>
          </div>
          <div class="slide">
            <img src="..\\img\\img2.jpg" alt="Slide 4">
            <div class="info">
              <h2>Slide 4 Title</h2>
              <p>Slide 4 description goes here.</p>
            </div>
          </div>
          <div class="slide">
            <img src="..\\img\\img5.jpg" alt="Slide 5">
            <div class="info">
              <h2>Slide 5 Title</h2>
              <p>Slide 5 description goes here.</p>
            </div>
          </div>
          <!-- Add more slides as needed -->
        </div>
        <!-- Navigation buttons -->
        <button class="prev-btn">❮</button>
        <button class="next-btn">❯</button>
        <!-- Slide visibility icons -->
        <div class="navigation-visibility">
          <!-- Slide icons go here -->
          <div class="slide-icon active"></div>
          <div class="slide-icon"></div>
          <div class="slide-icon"></div>
          <div class="slide-icon"></div>
          <div class="slide-icon"></div>
          <!-- Add more slide icons as needed -->
        </div>
      </div>

      <div class="slogan">
        <h1><center>BookVerse: Where Ever Page Unveils a World of Possibilities - Your Gateway to Infinite Stories!</center></h1>
        
      </div>
<div class="sep">
  
</div>
      <!--carousel HTML -->
      <!-- OPT -->
      <div class="category">
        <h2 class="description">Latest Popular Titles</h2>
        <div class="carousel" data-flickity='{ "groupCells": true ,"pageDots": false}'>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFPf7XKreI/2/0/251w/canva-GbLnuadeKPY.jpg">
            </a>
            <div class="item-title">The Untold Stories</div>
          </div>
            
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFVW-UHsTQ/1/0/1003w/canva-3xMlodkflBA.jpg">
            </a>
            <div class="item-title">Garden</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFej89dFQs/1/0/251w/canva-hrfuwvv4TZ0.jpg">
            </a>
            <div class="item-title">Walk with Moths</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EADao-bRSSQ/1/0/251w/canva-BdsnvOus2T4.jpg">
            </a>
            <div class="item-title">Ultimate Book of recipes</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EADangLRoCU/1/0/251w/canva-fAJ9VfHpMUM.jpg">
            </a>
            <div class="item-title">The beauty of nature</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="https://marketplace.canva.com/EAFtPeVVBGc/1/0/251w/canva-sKrd0dW9zY4.jpg">
            </a>
            <div class="item-title">Autumn's Bounty</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 7</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 8</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 9</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 10</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 11</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 12</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 13</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 14</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 15</div>
          </div>
          
      
        </div>
      </div>

      <!-- OPT -->
      <div class="category">
        <h2 class="description">Best Sellers</h2>
        <div class="carousel" data-flickity='{ "groupCells": true ,"pageDots": false}'>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFPf7XKreI/2/0/251w/canva-GbLnuadeKPY.jpg">
            </a>
            <div class="item-title">The Untold Stories</div>
          </div>
            
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFVW-UHsTQ/1/0/1003w/canva-3xMlodkflBA.jpg">
            </a>
            <div class="item-title">Garden</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFej89dFQs/1/0/251w/canva-hrfuwvv4TZ0.jpg">
            </a>
            <div class="item-title">Walk with Moths</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EADao-bRSSQ/1/0/251w/canva-BdsnvOus2T4.jpg">
            </a>
            <div class="item-title">Ultimate Book of recipes</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EADangLRoCU/1/0/251w/canva-fAJ9VfHpMUM.jpg">
            </a>
            <div class="item-title">The beauty of nature</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="https://marketplace.canva.com/EAFtPeVVBGc/1/0/251w/canva-sKrd0dW9zY4.jpg">
            </a>
            <div class="item-title">Autumn's Bounty</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 7</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 8</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 9</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 10</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 11</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 12</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 13</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 14</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 15</div>
          </div>
          
      
        </div>
      </div>

      <!-- OPT -->
      <div class="category">
        <h2 class="description">Action/Adventure</h2>
        <div class="carousel" data-flickity='{ "groupCells": true ,"pageDots": false}'>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFPf7XKreI/2/0/251w/canva-GbLnuadeKPY.jpg">
            </a>
            <div class="item-title">The Untold Stories</div>
          </div>
            
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFVW-UHsTQ/1/0/1003w/canva-3xMlodkflBA.jpg">
            </a>
            <div class="item-title">Garden</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFej89dFQs/1/0/251w/canva-hrfuwvv4TZ0.jpg">
            </a>
            <div class="item-title">Walk with Moths</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EADao-bRSSQ/1/0/251w/canva-BdsnvOus2T4.jpg">
            </a>
            <div class="item-title">Ultimate Book of recipes</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EADangLRoCU/1/0/251w/canva-fAJ9VfHpMUM.jpg">
            </a>
            <div class="item-title">The beauty of nature</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="https://marketplace.canva.com/EAFtPeVVBGc/1/0/251w/canva-sKrd0dW9zY4.jpg">
            </a>
            <div class="item-title">Autumn's Bounty</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 7</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 8</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 9</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 10</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 11</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 12</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 13</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 14</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 15</div>
          </div>
          
      
        </div>
      </div>

      <!-- OPT -->
      <div class="category">
        <h2 class="description">Comedy</h2>
        <div class="carousel" data-flickity='{ "groupCells": true ,"pageDots": false}'>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFPf7XKreI/2/0/251w/canva-GbLnuadeKPY.jpg">
            </a>
            <div class="item-title">The Untold Stories</div>
          </div>
            
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFVW-UHsTQ/1/0/1003w/canva-3xMlodkflBA.jpg">
            </a>
            <div class="item-title">Garden</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFej89dFQs/1/0/251w/canva-hrfuwvv4TZ0.jpg">
            </a>
            <div class="item-title">Walk with Moths</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EADao-bRSSQ/1/0/251w/canva-BdsnvOus2T4.jpg">
            </a>
            <div class="item-title">Ultimate Book of recipes</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EADangLRoCU/1/0/251w/canva-fAJ9VfHpMUM.jpg">
            </a>
            <div class="item-title">The beauty of nature</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="https://marketplace.canva.com/EAFtPeVVBGc/1/0/251w/canva-sKrd0dW9zY4.jpg">
            </a>
            <div class="item-title">Autumn's Bounty</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 7</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 8</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 9</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 10</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 11</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 12</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 13</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 14</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 15</div>
          </div>
          
      
        </div>
      </div>

      <!-- OPT -->
      <div class="category">
        <h2 class="description">Drama</h2>
        <div class="carousel" data-flickity='{ "groupCells": true ,"pageDots": false}'>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFPf7XKreI/2/0/251w/canva-GbLnuadeKPY.jpg">
            </a>
            <div class="item-title">The Untold Stories</div>
          </div>
            
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFVW-UHsTQ/1/0/1003w/canva-3xMlodkflBA.jpg">
            </a>
            <div class="item-title">Garden</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFej89dFQs/1/0/251w/canva-hrfuwvv4TZ0.jpg">
            </a>
            <div class="item-title">Walk with Moths</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EADao-bRSSQ/1/0/251w/canva-BdsnvOus2T4.jpg">
            </a>
            <div class="item-title">Ultimate Book of recipes</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EADangLRoCU/1/0/251w/canva-fAJ9VfHpMUM.jpg">
            </a>
            <div class="item-title">The beauty of nature</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="https://marketplace.canva.com/EAFtPeVVBGc/1/0/251w/canva-sKrd0dW9zY4.jpg">
            </a>
            <div class="item-title">Autumn's Bounty</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 7</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 8</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 9</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 10</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 11</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 12</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 13</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 14</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 15</div>
          </div>
          
      
        </div>
      </div>

      <!-- OPT -->
      <div class="category">
        <h2 class="description">SciFi</h2>
        <div class="carousel" data-flickity='{ "groupCells": true ,"pageDots": false}'>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFPf7XKreI/2/0/251w/canva-GbLnuadeKPY.jpg">
            </a>
            <div class="item-title">The Untold Stories</div>
          </div>
            
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFVW-UHsTQ/1/0/1003w/canva-3xMlodkflBA.jpg">
            </a>
            <div class="item-title">Garden</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFej89dFQs/1/0/251w/canva-hrfuwvv4TZ0.jpg">
            </a>
            <div class="item-title">Walk with Moths</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EADao-bRSSQ/1/0/251w/canva-BdsnvOus2T4.jpg">
            </a>
            <div class="item-title">Ultimate Book of recipes</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EADangLRoCU/1/0/251w/canva-fAJ9VfHpMUM.jpg">
            </a>
            <div class="item-title">The beauty of nature</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="https://marketplace.canva.com/EAFtPeVVBGc/1/0/251w/canva-sKrd0dW9zY4.jpg">
            </a>
            <div class="item-title">Autumn's Bounty</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 7</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 8</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 9</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 10</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 11</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 12</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 13</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 14</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 15</div>
          </div>
          
      
        </div>
      </div>

      <!-- OPT -->
      <div class="category">
        <h2 class="description">Thriller</h2>
        <div class="carousel" data-flickity='{ "groupCells": true ,"pageDots": false}'>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFPf7XKreI/2/0/251w/canva-GbLnuadeKPY.jpg">
            </a>
            <div class="item-title">The Untold Stories</div>
          </div>
            
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFVW-UHsTQ/1/0/1003w/canva-3xMlodkflBA.jpg">
            </a>
            <div class="item-title">Garden</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFej89dFQs/1/0/251w/canva-hrfuwvv4TZ0.jpg">
            </a>
            <div class="item-title">Walk with Moths</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EADao-bRSSQ/1/0/251w/canva-BdsnvOus2T4.jpg">
            </a>
            <div class="item-title">Ultimate Book of recipes</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EADangLRoCU/1/0/251w/canva-fAJ9VfHpMUM.jpg">
            </a>
            <div class="item-title">The beauty of nature</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="https://marketplace.canva.com/EAFtPeVVBGc/1/0/251w/canva-sKrd0dW9zY4.jpg">
            </a>
            <div class="item-title">Autumn's Bounty</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 7</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 8</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 9</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 10</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 11</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 12</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 13</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 14</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 15</div>
          </div>
          
      
        </div>
      </div>

      <!-- OPT -->
      <div class="category">
        <h2 class="description">Educational</h2>
        <div class="carousel" data-flickity='{ "groupCells": true ,"pageDots": false}'>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFPf7XKreI/2/0/251w/canva-GbLnuadeKPY.jpg">
            </a>
            <div class="item-title">The Untold Stories</div>
          </div>
            
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFVW-UHsTQ/1/0/1003w/canva-3xMlodkflBA.jpg">
            </a>
            <div class="item-title">Garden</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EAFej89dFQs/1/0/251w/canva-hrfuwvv4TZ0.jpg">
            </a>
            <div class="item-title">Walk with Moths</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EADao-bRSSQ/1/0/251w/canva-BdsnvOus2T4.jpg">
            </a>
            <div class="item-title">Ultimate Book of recipes</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
                src="https://marketplace.canva.com/EADangLRoCU/1/0/251w/canva-fAJ9VfHpMUM.jpg">
            </a>
            <div class="item-title">The beauty of nature</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="https://marketplace.canva.com/EAFtPeVVBGc/1/0/251w/canva-sKrd0dW9zY4.jpg">
            </a>
            <div class="item-title">Autumn's Bounty</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 7</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 8</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 9</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 10</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 11</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 12</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 13</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 14</div>
          </div>
          <div class="carousel-cell">
            <a href="#"><img class="image"
              src="">
            </a>
            <div class="item-title">Title 15</div>
          </div>
          
      
        </div>
      </div>

  </main>
  <footer>
    <div class="footer-content">
        <div class="footer-section about">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum leo ut eros malesuada, vitae volutpat quam pulvinar.</p>
            <div class="contact">
                <span><i class="fas fa-envelope"></i> example@example.com</span>
                <span><i class="fas fa-phone"></i> +9123456789</span>
            </div>
        </div>
        <div class="footer-section links">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="footer-section social">
            <h2>Follow Us</h2>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
            <p>@Shubham😎</p>
            <p>@Ishpreet😎</p>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; 2024 YourWebsiteName. All rights reserved.
    </div>
  </footer>
  <script src="..\js\slider.js"></script>
  <script src="..\js\formlogin.js" defer></script>
  <!-- <script src="..\js\formregister.js" defer></script> -->
  <script src="..\js\form.js" defer></script>
  <script src="..\js\flickitybookcarousel.js"></script>
  </body>
</html>
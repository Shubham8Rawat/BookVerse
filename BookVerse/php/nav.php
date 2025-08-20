<nav>    
    <ul class="logo"><a href='index.php'><img src="..\\img\\logo.png"></a>
</ul>
   
<ul>
<form action="search.php" method="GET" class="search-form">
    <button type="submit" class="btn-search"><i class="fas fa-search"></i></button>    
    <input type="text" name="query" class="input-search" placeholder="Search books...">
    </form>

        <li><a href='index.php'>HOME</a></li>
        <li><a href='#footer'>ABOUT</a></li>
        <li><a href='#footer'>CONTACT</a></li>
        
        <?php
            if(isset($_SESSION['user_id'])) {
                echo '<li><a href="#" class="upload-link">UPLOAD</a></li>';
                echo '<li><a href="logout.php" class="logout">LOGOUT</a></li>';
                // Add other links for logged-in users, e.g., My Account
            } else {
                echo "<li><a href='#' class='login-link'>LOGIN</a></li>";
                //echo "<li><a href='#' class='register-link'>REGISTER</a></li>"; ill add this later
            }
        ?>
    </ul>
</nav>
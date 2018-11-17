<?php include('server.php'); ?>
<!doctype html>
<html lang="en">
<head>
     <title>Shopping-Website</title> 
    <link rel="stylesheet" href="css/index.css">


</head>
<body>
    <nav>
        <ul class="topnav" id="dropdownClick">
            <li><a href="index.php">Home</a></li>
            <li><a href="">News</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">About</a></li>
            <li class="topnav-right" id="signup"><a href="signup.php">Sign up</a></li>
            <li class="topnav-right" id="signin"><a href="signin.php">Sign In</a></li>            
            <li class="dropdownIcon"><a href="javascript:void(0);" onClick="dropdownMenu()">&#9776;</a></li>
        </ul>
    </nav>
<!-- 
<div>
    <?php if (isset($_SESSION['success'])): ?>
        <div class="error success">
            <h3>
                <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);

                ?>
            </h3>
        </div>
    <?php endif ?>
    <?php if (isset($_SESSION['username'])): ?>
             <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>   
             <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
    <?php endif ?>
</div>
 -->
<!--
    </nav>
    <div id="modal">
        <div id="modal_content">
            
        </div>
    </div>
-->


    
    <div class="container" id="section-1-gradient">
      <div class="row">
        <div class="col-6">
          <div class="leftSide-col">
            <h1 class="large">Crazy Radness</h1>
              <h1 class="large">Made for developers</h1>
          </div>
            <form>
             <div class="leftSide-col">
                <h2>Username</h2>
                 <input type="text" class="inputbox" placeholder="Username" name="username">
                 <h2>Password</h2>
                 <input type="text" class="inputbox" placeholder="Password" name="password">
             </div>
            </form>
        </div>
        <div class="col-6">
          <div class="rightSide-col">
            <div class="videoContainer">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/jtsTAP9uGWw" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>      
    </div>    
    <header>
      <h1 class="section2header">The Shopping Website</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="box">
                    <div class="icon">
                        <img src="img/devslopes.jpg">
                    </div>
                    <label>Chat with me</label>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
            <div class="col-4">
                <div class="box">
                    <div class="icon">
                        <img src="img/devslopes.jpg">
                    </div>
                    <label>Learn to code</label>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
            <div class="col-4">
                <div class="box">
                    <div class="icon">
                        <img src="img/devslopes.jpg">
                    </div>
                    <label>build an empire</label>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button class="learnmore">Learn More</button>
            </div>
        </div>
    </div>
    <hr>
<div class="container">
    <div class="row">
    <div class="col-7">
        <article>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </article>
    </div>
    <div class="col-5">
        <div class="img-icon">
            <img  src="img/laptops.jpg" alt="Laptops">
        </div>
    </div>
        </div>
</div>

    <footer class="footsy">
        <div class="row">
            <div class="col-3 mobileStack">
                <h1>Company</h1>
                <ul>
                    <li>About</li>
                    <li>Blogs</li>
                    <li>Careers</li>
                </ul>
            </div>
            <div class="col-3 mobileStack">
                <h1>Company</h1>
                <ul>
                    <li>About</li>
                    <li>Blogs</li>
                    <li>Careers</li>
                </ul>
            </div>
            <div class="col-3 mobileStack">
                <h1>Company</h1>
                <ul>
                    <li>About</li>
                    <li>Blogs</li>
                    <li>Careers</li>
                </ul>
            </div>
            <div class="col-3 mobileStack">
                <h1>Company</h1>
                <ul>
                    <li>About</li>
                    <li>Blogs</li>
                    <li>Careers</li>
                </ul>
            </div>
        </div>
    </footer>
        <script type="text/javascript" src="js/index.js"></script>

</body>    
</html>
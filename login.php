

<?php 
require 'includes/header.php'
?>
<main>
<link rel="stylesheet" href="css/login.css">
    <div class="bg-cover">
        <div class="container" style="padding-top: 5px;">
            <div id="slides" class="carousel slide" data-ride="carousel" >
                <ol class="carousel-indicators">
                    <li data-target="#slides" data-slide-to="0" class="active"></li>
                    <li data-target="#slides" data-slide-to="1"></li>
                    <li data-target="#slides" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block mx-auto" src="images/phys.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="images/quantum.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="images/galaxy2.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="h-40 center-me">
            <div class="my-auto">
                <from class="form-signin" action="includes/login-helper.php" method="post">
                    <h1 class="h3 mb-3 font-weight-normal" style="color: aliceblue;">Please sign in</h1>
                    <label for="inputEmail" class="sr-only">Username or Email address</label>
                    <input type="text" id="inputEmail" name= "uname" class="form-control" placeholder="Username/ Email address" required
                        autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>
                    <div class="checkbox mb-3" style="margin: 20px;">
                        <label style="color: aliceblue;">
                            <input type="checkbox" value="remember-me" style="margin: left;"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" name="login-submit" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
                </from>
            </div>
        </div>
    </div>
</main>


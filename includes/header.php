<?php
include 'includes/modal.php';
include 'includes/common.php';
?>

<div class="navbar navbar-default navbar-fixed-top">
    
    <div class="container">
        
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">E-Store</a>
        </div>
        
        <div>
            <ul class="nav navbar-nav navbar-right">
                
                <?php
                if(isset($_SESSION['email'])) {
                ?>
                
                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                <li><a href="logout_script.php"><span class="glyphicon-log-out"></span> Logout</a></li>
                
                <?php
                } else {
                ?>
                
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#" data-toggle="modal" data-target="#loginmodal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="about_us.php"><span class="glyphicon glyphicon-th-list"></span> About Us</a></li>
                <li><a href="contact_us.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                
                <?php
                }
                ?>
                
            </ul>
        </div>
        
    </div>
    
</div>
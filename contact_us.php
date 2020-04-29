<?php

include 'includes/common.php';

?>

<!DOCTYPE html>
<html>
    
    <head>
        <title>Contact Us | E-Store.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery-3.5.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            .row_style{
                margin-top:10px;
            }
            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: black;
                color: gray;
                text-align: center;
                padding: 5px 0px 15px 0px;
            }
        </style>
    </head>
    
    <body style="padding-top: 50px;">
        
        <?php
        include 'includes/header.php';
        ?>
        
        <div class="container" style="margin-bottom: 160px;">
            
            <div class="row row_style">
                
                <div class="col-xs-10">
                    <h1 class="title">LIVE SUPPORT</h1>
                    <h3>24 hours | 7 days a week | 365 days a year Live Technical Support</h3><br>
                    <p>E-Store is known worldwide for its technical support and active community support.</p>
                </div>
                <div class="col-xs-2">
                    <img align="right" src="./img/contact.png" alt="contact us">
                </div>
                
            </div>
            
            <div class="row row_style">
                
                <div class="col-xs-9">
                    
                    <div class="contact-form">
                        
                        <h2>Get In Touch</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="POST" action="sendemail.php">
                            
                            <div class="form-group col-xs-9">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="form-group col-xs-9">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group col-xs-9">
                                <textarea type="message" name="message" class="form-control" placeholder="Your Message Here" rows="7" required></textarea>
                            </div>
                            <div class="form-group col-xs-9">
                                <input type="submit" name="suubmit" class="btn btn-primary" value="submit">
                            </div>
                            
                        </form>
                        
                    </div>
                    
                </div>
                
                <div class="col-xs-3">
                    
                    <div class="contact-info">
                        
                        <h2 class="title">Contact Information:</h2>
                        <address>
                            <p>E-Store,</p>
                            <p>Washington,</p>
                            <p>USA</p>
                            <p>Phone: (00) 222 666 444</p>
                            <p>Fax: (000) 000 00 00 0</p>
                            <p>Email: info@mycompany.com</p>
                        </address>
                        
                        <p>Follow on: Facebook, Twitter</p>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
        
    </body>
    
</html>
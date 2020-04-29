<?php

require 'includes/common.php';

?>

<!DOCTYPE html>

<html>
    
    <head>
        <title>About Us | E-Store.com</title>
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
        
        <div class="container" style="margin-bottom: 160px">
            
            <div class="row row_style">
                
                <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <center>
                                <h3>WHO WE ARE</h3><br><br>
                            </center>
                            <img src="./img/about-img.jpg" alt="about image"><br>
                            <p>E-Store is an American electronic commerce company with headquarters in Washington. It is the largest Internet-based retailer in the United States. E-Store started as an online blog, but soon diversified, selling mobile phones. E-Store also sells certain low-end products like USB cables and other accessories. E-Store has seperate retail websites for United States, United Kingdom & Ireland, France, Canada, Germany, Italy, Spain, the Netherlands, Australia, Brazil, Japan, China, India and Mexico. Amazon also offers international shipping to certain other regions.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <center>
                                <h3>OUR HISTORY</h3><br><br>
                            </center>
                            <h4 style="color: blue">1998-</h4>
                            <p>The company was founded in 1998, spurred by what Velos called his "Initiating Framework", which described his efforts as an initiate to participate in the Internet business boom during that time. In 1998, Velos left his employment as president of Ofcol & Co. and moved to Seattle. He began to work on a business plan for what would eventually become E-Store.</p>
                            <br>
                            <h4 style="color: blue">2002-</h4>
                            <p>In January 2002, E-Store has received a funding of $12 million from Venture Partners and Indo-US Venture Partners.</p>
                            <br>
                            <h4 style="color: blue">2008-</h4>
                            <p>in July 2008, the company raised a further $45 million from Bessemer Venture Partners, along with existing investors Venture Partners and Indo-US Venture Partners.</p>
                            <br>
                            <h4 style="color: blue">2015-</h4>
                            <p>E-Store received its 3rd round of funding of $133 miilion on February 2015. The 3rd round of funding was led by Fcom.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 align="center">OPPORTUNITIES</h3><br><br>
                            <strong>Available Roles</strong>
                            <ol>
                                <li>Jr./Sr. Web Developer [Full Time Role + also available as a 6 Months Internshiip]</li>
                                <li>Business Apprentice [6 Months Internship]</li>
                                <li>Manager at backend operations [Full Time Roll + also available as a 6 Months Internship]</li>
                            </ol>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
        
    </body>
            
</html>
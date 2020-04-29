<link href="../css/style.css" rel="stylesheet">

<div class="modal fade" id="loginmodal" role="dialog">
    
    <div class="modal-dialog">
        
        <div class="modal-content">
            
            <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 style="color: white;" class="color"><span class="glyphicon glyphicon-lock"></span> Login</h4>
                
            </div>
            
            <div class="modal-body">
                
                <p>Don't have an account? <a href="./signup.php">Register</a></p>
                
                <form role="form" action="login_submit.php" method="POST">
                    
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="">
                    </div>
                    
                    <?php
                    if(isset($_GET['error'])){
                        echo $_GET['error'];
                    }
                    ?>
                    <br>
                    
                    <button type="submit" class="btn btn-default btn-primary">Login</button>
                    
                </form>
                
            </div>
            
            <div class="modal-footer">
                
                <p class="pull-left"><a href="#">Forgot Password?</a></p>
                
            </div>
            
        </div>
        
    </div>
    
</div>
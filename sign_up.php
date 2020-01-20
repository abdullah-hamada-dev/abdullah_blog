<?php
// Start the session
session_start();

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
    header('Location: index.php'); 
}
require_once('config.php'); 


// If form submitted, insert values into the database.
if (isset($_POST['username']) && isset($_POST['password'])
    && ($_POST['password'] == $_POST['confirm_password'])   && isset($_POST['email'])){
    
    // TODO check username before insert it.

    $sql  = "Insert Into users (username,password,email) VALUES ('".$_POST['username']."','".md5($_POST['password'])."','".$_POST['email']."')";


    $result = new_php_db_query($sql); 
    print($result);
    if ($result) {
            include "header.php";
            ?>


              <div style="margin-bottom:100px;"></div>
            <div class="container">
                    <div class="row">
                        <!-- <div class="col-lg-4">
                            
                        </div> -->
                        <div class="col-lg-12">
                            <div class='form'>
                                <h3>You are registered successfully.</h3>
                                <br/>Click here to <a href='login_style.php'>Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            
            <?php
            include "footer.php";
        }
    }else{
?>
<?php require_once("header.php");  ?>
        

    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/img-01.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" action="" method="post">
                    <span class="login100-form-title">
                        Create New Account
                    </span>

                        <div class="row uniform">
                            <div class="wrap-input100 validate-input" data-validate = "username  Is Required">
                        <input class="input100" type="text" name="username" placeholder="Enter Your Full Name">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                <div class="wrap-input100 validate-input" data-validate = "password">
                        <input class="input100" type="Password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                <div class="wrap-input100 validate-input" data-validate = "confirm_password Is Required">
                        <input class="input100" type="Password" name="confirm_password" placeholder="Confirm Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
            
<!-- 
                                            <div class="wrap-input100 validate-input" data-validate = "Name  is required" >
                                                <input class="input100" type="text" name="name" id="name"  placeholder="Name" />
                                            </div>
                                            <div >
                                                <input type="email" name="email" id="email" value="" placeholder="Email" />
                                            </div>
                                            <div >
                                                <input type="email" name="email" id="email" value="" placeholder="Email" />
                                            </div>
                                            <div >
                                                <input type="email" name="email" id="email" value="" placeholder="Email" />
                                            </div>
                                              <div >
                                                <input type="email" name="email" id="email" value="" placeholder="Email" /> 
                                            </div>-->
                                            <div class="container-login100-form-btn">
                                                  <button type="submit" class="login100-form-btn" > Sign Up </button>
                                                         </div>

                                    
                                    


                

                </form>
            </div>
        </div>
    </div>
    
                            <?php include "footer.php"; ?>
<?php } ?>
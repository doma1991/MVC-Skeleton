<!--<script>    
function login(){
        
        var xmlhttp = new XMLHttpRequest(); // new HTTP request
        xmlhttp.onreadystatechange = function() {  // annonymous function for processing once the request is returned
            if (this.readyState == 4 && this.status == 200) {
                
                document.getElementById("nav1").innerHTML = document.getElementById("myNavbar").innerHTML;

            }
            
        };
        xmlhttp.open('GET', 'layout.php'); // making the HTTP request - function is asigned a key value pair of choice - read by _REQUEST superglobal - and added the strChoice argument
        xmlhttp.send();   // sending the HTTP request
            
        };

</script>-->

<?php
if (isset($ex)) {
    echo "<p>" . $ex->getMessage() . "</p>";
}
?>

<div class="login-container">  
    <h2>Login</h2>    
    <form id="loginForm" name="loginForm" action="?controller=user&action=login" method="post"> 
        <div class="login-text-username">Username:</div>
        <input class="w3-input login-input" type="text" name="username" autofocus required> <br>
        <div class="login-text-password">Password:</div> <div class="forgot-password">Forgot password?</div>
        <input class="w3-input login-input" type="password" name="password" required>
        <div class="remember-me">
            <input type="checkbox" checked="checked" name="remember"> Remember me</div>
        <button type="submit" class="btn btn-primary" onClick="login()">Submit</button> <br>
        <a href="?controller=user&action=registration" class='dont-have-account-register'> Don't have an account?<br>Register</a>
</div>


<?php
if (isset($ex)) {
    echo "<p>" . $ex->getMessage() . "</p>";
}
?>

<div class="login-container">  
    <h2>Login</h2>    
    <form id="loginForm" name="loginForm" action="?controller=user&action=login" method="post"> 
        <div class="login-text-username" id="username-text">Username:</div>
        <input class="w3-input login-input" type="text" name="username" autofocus required> <br>
        <div class="login-text-password">Password:</div> <div class="forgot-password">Forgot password?</div>
        <input class="w3-input login-input" type="password" name="password" required>
        <div class="remember-me">
            <input type="checkbox" checked="checked" name="remember"> Remember me</div>
        <button type="submit" class="btn btn-primary" onClick="login()">Submit</button> <br>
        <a href="?controller=user&action=registration" class='dont-have-account-register'> Don't have an account?<br>Register</a>
</div>
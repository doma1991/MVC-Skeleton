
<div class="login-container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Register</h2>
            </div>
        </div>
        <form id="registrationForm" name="registrationForm" action="?controller=user&action=registration" onsubmit="return checkPassword()" method="POST">
            <div class="row justify-content-center">
                <div class="col-md-3" id="firstName">
                    <p>
                        <label class="login-text-username">First Name:</label>
                        <input class="w3-input login-input" type="text" name="firstName" pattern=^[a-zA-Z][a-zA-Z0-9-_\.]{3,20}$ title="First Name" required autofocus>       
                    </p>  
                </div>
                <div class="col-md-3" id="lastName">
                    <p>
                        <label class="login-text-username">Last Name:</label>

                        <input class="w3-input login-input" type="text" name="lastName" pattern=^[a-zA-Z][a-zA-Z0-9-_\.]{3,20}$ title="Last Name" required>      
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>
                        <label class="login-text-username">E-mail:</label>
                        <input class="w3-input login-input register-long-input" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>
                        <label class="login-text-username">Phone Number:</label>
                        <input class="w3-input login-input register-long-input" type="integer" name="phoneNumber" required>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>
                        <label class="login-text-username">Username:</label>
                        <input class="w3-input login-input register-long-input" type="text" name="username" pattern=^[a-zA-Z][a-zA-Z0-9-_\.]{3,20}$ title="Your username must be at least 3 characters, begin with a letter, and may not contain special characters" required>
                    </p>
                </div>
            </div>
            <div class="row justify-content-center"">
                <div class="col-md-3">
                    <p>
                        <label class="login-text-username">Password:</label>
                        <input class="w3-input login-input" type="password" name="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,20}$" title="Password must be at least 4 characters and must include at least one upper case letter, one lower case letter, and one number." required>
                    </p>
                </div>

                <div class="col-md-3">
                    <p>
                        <label class="login-text-username">Confirm password:</label>
                        <input class="w3-input login-input" type="password" name="confirm-password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,20}$" title="Password must be at least 4 characters and must include at least one upper case letter, one lower case letter, and one number." required>
                    </p>
                </div>
            </div>
                <div class="row justify-content-center"">
                    <div class="col-md-3">

                        <p id="radio-text"> Would you like to be a: </p>
                    </div>
                    <div class="col-md-3">
                        <input class="form-check-input" class="w3-input" type="radio" name="userTypeID" value="blogger">
                        <label><p>Blogger</p></label><br>
                        <input class="form-check-input" class="w3-input" type="radio" name="userTypeID" value="subscriber" checked>
                        <label><p>Subscriber</p></label>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input class="btn btn-primary" type="submit" value="Submit"><br>
                        <a href="?controller=user&action=login" class='dont-have-account-register'> Already have an account?<br>Login</a>
                    </div>
                </div>
        </form>
    </div>
</div>

<script>
function checkPassword()
{
    $password = document.forms["registrationForm"]["password"].value;  
    $confirmation = document.forms["registrationForm"]["confirm-password"].value;
    if($password !== $confirmation)
    {
        alert("Passwords do not match"); 
        return false;
    }
    else
    {
        return true;
    }
     
}
</script>
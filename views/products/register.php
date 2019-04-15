<p>Complete our short form to register as a new blogger:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    
    <h2>Register</h2>
</div>
    <p>
        <input class="w3-input" type="text" name="userName" required autofocus>
        <label>User Name</label>
    </p>
        <p>
        <input class="w3-input" type="text" name="password" required>
        <label>Password</label>
    </p>
    
            <p>
        <input class="w3-input" type="text" name="email" required>
        <label>E-mail</label>
    </p>
    
            <p>
        <input class="w3-input" type="integer" name="phoneNumber" required>
        <label>Phone Number</label>
    </p>
    
            <p>
        <input class="w3-input" type="integer" name="userTypeID" required>
        <label>User Type</label>
    </p>
            
  <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000"
         />

  <input type="file" name="myUploader" class="w3-btn w3-pink" />
  <p>
    <input class="w3-btn w3-pink" type="submit" value="Add User">
  </p>
</form>

    <h3 style="margin-top: 50px; text-align: center">Update your profile</h3>
    <div class="paddedBlock">
        <form action="?controller=user&action=updateProfile&userID=<?php echo $user->userID; ?>" method="POST" class="w3-container" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label">First name:</label>
                        <input class="form-control" type="text" name="firstName" autofocus value="<?= $user->firstName?>"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Last name:</label>
                        <input class="form-control" type="text" name="lastName" value="<?= $user->lastName?>"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Username:</label>
                         <input class="form-control" type="text" name="username" value="<?= $user->username; ?>" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email address:</label>
                         <input class="form-control" type="text" name="email" value="<?= $user->email; ?>" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Phone number:</label>
                         <input class="form-control" type="text" name="phoneNumber" value="<?= $user->phoneNumber; ?>" />
                    </div>
                    
                    <p><br><br>
                        <input class="btn btn-primary" type="submit" value="Save all changes"/>
                    </p>
                    </form>
                    </div>
                   









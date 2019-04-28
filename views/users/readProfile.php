
<div class='container'>
    
<h2 style='text-align: center; margin-top:50px'> My profile: </h2>
<img style='width: 150px; height: 150px; margin-left: 480px; margin-top: 20px' src="views/images/dogProfile.png" alt=""/>

<div style='text-align: center; margin-top: 20px'>
<span style='color: #495057; font-size: 25px'><?php echo $user->firstName; ?>
   <?php echo $user->lastName; ?></span>
<p style='color: #495057'><?php echo $user->username; ?></p>
<p style='color: #495057'><?php echo $user->email; ?></p>
<p style='color: #495057'><?php echo $user->phoneNumber; ?></p>
</div>

<div class="row justify-content-between" style="width: 18rem;">
                 <div class="col-xs-4">
                <a href='?controller=user&action=updateProfile&userID=<?php echo $user->userID; ?>'>
           <button style="margin-left: 525px" type="submit" class="btn btn-primary readAll-buttons">Update</button>
               </a> 
                 </div>
</div>
</div>

<div class="container cards-container">
    <div class="row">
        <div class="col">
            <h3>Your search results:</h3>
        </div>
    </div>
</div>

           <?php 
           if(isset ($_SESSION['userID'])) {?> 
<div class="container">
    <div class="row  justify-content-left"> 
        <?php foreach($posts as $post) { ?>
        <div class="col-md-3 cards-container">
            <div class="row">
            <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src='views/images/posts/<?php echo $post->postImage ?>' alt="Photo of <?php echo $post->title; ?>">
                <div class="card-body">
                    <p class="card-text"><?php echo $post->title; ?></p>
                </div>
            </div></a>
            </div>
        
       <div class="row justify-content-left">
           
           <div class="col-xs-4 view-btn">
               <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>
           <button type="submit" class="btn btn-primary readAll-buttons">View</button>
               </a>
           </div>

           <div class="col-xs-4">
               <a href='?controller=post&action=update&id=<?php echo $post->id; ?>'>
           <button type="submit" class="btn btn-primary readAll-buttons">Update</button>
               </a>
           </div>
           <div class="col-xs-4">
               <a href='?controller=post&action=delete&id=<?php echo $post->id; ?>'>
           <button type="submit" class="btn btn-primary readAll-buttons">Delete</button>
               </a>
           </div>
       </div>
        </div> 
           <?php }  ?>
    </div>
   
</div>
        
           <?php } else {  ?>
 <div class="container">
    <div class="row  justify-content-left"> 
        <?php foreach($posts as $post) { ?>
        <div class="col-md-3 cards-container">
            <div class="row">
            <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src='<?php echo $post->postImage ?>' alt="Photo of <?php echo $post->title; ?>">
                <div class="card-body">
                    <p class="card-text"><?php echo $post->title; ?></p>
                </div>
            </div></a>
            </div>
        
       <div class="row justify-content-left">
           
           <div class="col-xs-4 view-btn">
               <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>
           <button type="submit" class="btn btn-primary readAll-buttons">View</button>
               </a>
           </div>       
       </div>
        </div>
        <?php } ?>
    </div>
 </div>
   <?php } ?>
    



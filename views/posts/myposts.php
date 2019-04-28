<div class="container cards-container text-center" style="margin-top:50px;"> <!--cards container -->
    <div class="row">
        <div class="col-md-10">
            <h3>Your posts:</h3> 
        </div>
        <div class="col-md-2">
        <a href='?controller=post&action=create'>
        <button class="btn">Add new</button>
        </a>
        </div>
        
            <?php
           
            if (!isset($myPosts)) {
                echo  "<div class='col-10'><p>Item not found.</p>";
                ?>
            </div>
        </div>
    </div>


<?php } else {
    ?>
</div>
</div>

    <div class ="container cards-container">
        <div class="row">
            <?php foreach ($myPosts as $post) { ?>
                <div class="col-md-3 cards-container">
                    <div class="row">
                    <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src='views/images/posts/<?php echo $post->postImage ?>' alt="<?php echo $post->postImage?>"> <!-- CHECK IMAGE LINKS CONNECTION -->
                            <div class="card-body">
                                <p class="card-text"><?php echo $post->title; ?></p>
                            </div>
                        </div>
                    </div></a>
                        <div class="row justify-content-between" id="cards-buttons" style="width: 18rem;">
                            <div class="col-xs-4">
                               <a href='?controller=post&action=update&id=<?php echo $post->id; ?>'>
           <button type="submit" class="btn btn-primary readAll-buttons">Update</button>
               </a> 
                            </div>
                            <div class="col-xs-4 col-">
                              <a href='?controller=post&action=delete&id=<?php echo $post->id; ?>'>
           <button type="submit" class="btn btn-primary readAll-buttons">Delete</button>
               </a>  
                            </div>
                        </div>
                </div> 


            <?php } ?>
        </div>
    </div>
<?php } ?>
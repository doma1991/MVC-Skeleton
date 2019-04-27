<div class="container cards-container"> <!--cards container -->
    <div class="row">
        <div class="col-12" style="margin-top:50px; margin-bottom:20px; text-align: center">
            <h3>Your search results:</h3> 
        </div>
        
            <?php
           
            if (!isset($posts)) {
                echo  "<div class='col-12'><p>Item not found.</p>";
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
            <?php foreach ($posts as $post) { ?>
                <div class="col-md-3 cards-container">
                    <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src='views/images/posts/<?php echo $post->postImage ?>' alt="<?php echo $post->postImage?>"> <!-- CHECK IMAGE LINKS CONNECTION -->
                            <div class="card-body">
                                <p class="card-text"><?php echo $post->title; ?></p>
                            </div>
                        </div></a>
                </div>        


            <?php } ?>
        </div>
    </div>
<?php } ?>
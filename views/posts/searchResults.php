<div class="container cards-container"> <!--cards container -->
    <div class="row">
        <div class="col" style="margin-top:50px; margin-bottom:50px; text-align: center">
            <h3>Your search results:</h3>
        </div>
    </div>
    <?php 
    if (!isset($posts)) {
        echo "<p>Item not found.</p>";
    }
    else {
    
    foreach ($posts as $post) { ?>
        <div class="row">
            <div class="col-md-3">
                <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src='views/images/posts/<?php echo $post->postImage ?>' alt=""> <!-- CHECK IMAGE LINKS CONNECTION -->
                        <div class="card-body">
                            <p class="card-text"><?php echo $post->title; ?></p>
                        </div>
                    </div></a>
            </div>
        <?php } ?>
    </div>
    <?php } ?>
</div>
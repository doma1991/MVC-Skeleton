<div class="container cards-container">
    <div class="row">
        <div class="col" style="margin-top:50px; margin-bottom:20px; text-align: center">
            <h3>Explore all posts:</h3>
        </div>
    </div>
</div>



<div class="container">
    <div class="row  justify-content-left"> 
        <?php foreach ($posts as $post) { ?>
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
            </div> 
        <?php } ?>
    </div>
</div>









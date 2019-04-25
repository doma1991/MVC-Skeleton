<p>Here is a list of all posts:</p>

<div class="container">
    <div class="row"> 
        <?php foreach($posts as $post) { ?>
        <div class="col-md-3">
            <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="views\images\posts\Greenwich.jpg" alt="Photo of <?php echo $post->title; ?>">
                <div class="card-body">
                    <p class="card-text"><?php echo $post->title; ?></p>
                </div>
            </div></a>
        </div>
 <?php } ?>
    </div>
   
</div>


<?php foreach($posts as $post) { ?>
  <p>
    //<?php echo $post->title; ?> &nbsp; &nbsp;
    <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>See post information</a> &nbsp; &nbsp;
    
    //<?PHP if(isset ($_SESSION['userID'])) {?> 
    <a href='?controller=post&action=delete&id=<?php echo $post->id; ?>'>Delete post</a> &nbsp; &nbsp;
    <a href='?controller=post&action=update&id=<?php echo $post->id; ?>'>Update post</a> &nbsp;
<?php } }?>
  </p>


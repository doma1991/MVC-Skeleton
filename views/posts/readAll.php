
<div class="container" id="cards-container"> 
    <div class="row">
        <div class="col">
            <h3>View all posts:</h3>
        </div>
    </div>
    <?php foreach ($posts as $post) { ?>
        <div class="row">
            <div class="col-md-3">
                <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'> <!-- READALL? -->
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo 'views\images\posts\ . $post->title .jpeg' ?>" alt=""> 
                        <div class="card-body">
    <p class="card-text"><?php echo $post->title; } ?></p>
                        </div>
                    </div></a>
            </div> 
   
<p>Here is a list of all posts:</p>

<?php foreach($posts as $post) { ?>
  <p>
    <?php echo $post->title; ?> &nbsp; &nbsp;
    <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>See post information</a> &nbsp; &nbsp;
    
    <?PHP if(isset ($_SESSION['userID'])) {?> 
    <a href='?controller=post&action=delete&id=<?php echo $post->id; ?>'>Delete post</a> &nbsp; &nbsp;
    <a href='?controller=post&action=update&id=<?php echo $post->id; ?>'>Update post</a> &nbsp;
    <?PHP }?>
  </p>


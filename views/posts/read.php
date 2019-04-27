<div id="home">
    <div class="landing-text">
        <div class="row">
        <h2><?php echo $post->title; ?></h2>
        <div id="share-buttons">     
        <!-- Twitter -->
        <a href="https://twitter.com/share?url=http://localhost:8000/index.php?controller=post&action=readAll" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
        </a>
            <!-- Facebook -->
        <a href="http://www.facebook.com/sharer.php?u=http://localhost:8000/index.php?controller=post&action=readAll" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
         <!-- Reddit -->
        <a href="http://reddit.com/submit?url=http://localhost:8000/index.php?controller=post&action=readAll" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
        </a>
        </div>
        </div>
        <div class="row">
        <h4><?php echo $post->username; ?></h4>
        </div>
    </div>
</div>
<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-sm6">
                <p><?php echo $post->content; ?></p>
                <a class="btn btn-default btn-lg"><?php echo $post->tag; ?></a>

            </div>

            <div class="col-sm-4"> 

                <?php
                $file = 'views/images/posts/' . $post->postImage;

                if(file_exists($file)){
                $img = "<img src='$file' width='150' />";
                echo $img;
                }
                else
                {
                echo "<img src='views/images/posts/' width='150' />";
                }
  ?>

                </div>

                </div>
                </div>
                </div>
              
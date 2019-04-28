<div class="padding">
    <div class="container">
        <div class="row">

            <div class="col-sm-8">

                <h2><?php echo $post->title; ?></h2>
            
                <h5 id="post-body"><?php echo $post->username; ?></h5>
                <p id="post-body"><?php echo $post->content; ?></p>
      
                <a id="post-tag" class="btn btn-default btn-lg" ><?php echo $post->tagName; ?></a>
            </div>    


            <div class="row">
                <div class="col-sm-4"> 
                    <img id="post-pic" <?php
                    $file = 'views/images/posts/' . $post->postImage;
                    if (file_exists($file)) {
                        $img = "<img src='$file' width='150' />";
                        echo $img;
                    } else {
                        echo "<img src='views/images/posts/' width='150' />";
                    }?>
                        >
                                                         
             
                    <a id="date"><?php echo $post->date; ?></a>
                   
                </div>
            </div>
        </div>
    </div>
</div>



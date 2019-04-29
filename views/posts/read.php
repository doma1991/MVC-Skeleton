<div class="container">
    <div class="row" id="read-page">
        <div class="col-8">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php echo $post->title; ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h5 id="username"><?php echo $post->username; ?></h5>
                </div>
            </div>

            <div class="row" id="content-row">
                <div class="col-12">
                    <p id="post-body"><?php echo $post->content; ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a href="?controller=post&action=findTag&tag=<?php echo $post->tag; ?>"><button id="post-tag" class="btn btn-default" ><?php
                        switch ($post->tag) {
                            case '1':
                                echo "FAMILY";
                                break;
                            case '2':
                                echo "CHRISTMAS";
                                break;
                            case '3':
                                echo "EASTER";
                                break;
                            case '4':
                                echo "OUTDOORS";
                                break;
                            case '5':
                                echo "INDOORS";
                                break;
                            case '6':
                                echo 'CHEAP';
                                break;
                            case '7':
                                echo "LONDON";
                        }
                        ?>

                        </button></a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-12">
                    <img <?php
                    $file = 'views/images/posts/' . $post->postImage;
                    if (file_exists($file)) {
                        $img = "<img id='image' src='$file' width='350' height='250'";
                        echo $img;
                    } else {
                        echo "<img id='image' src='views/images/posts/' width='350' height='250'";
                    }
                    ?> >
                </div>
            </div>
            <div class="row" id="date-row">
                <div class="col-md-7">
                    <a id="date"><?php echo $post->date; ?></a>
                </div>
            
<!--            <div class="row">-->
                    <div class="col-md-5">

                        <!-- Twitter -->
                        <a href="https://twitter.com/share?url=http://localhost:8000/index.php?controller=post&action=readAll" target="_blank">
                            <img class="share-buttons" src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
                        </a>
                        <!-- Facebook -->
                        <a href="http://www.facebook.com/sharer.php?u=http://localhost:8000/index.php?controller=post&action=readAll" target="_blank">
                            <img class="share-buttons" src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
                            <!-- Reddit -->
                            <a href="http://reddit.com/submit?url=http://localhost:8000/index.php?controller=post&action=readAll" target="_blank">
                                <img class="share-buttons" src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
                            </a>

                    </div>
            </div>
<!--                </div>-->
        </div>
    </div>
</div>

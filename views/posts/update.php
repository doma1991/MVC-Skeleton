<center><h3 style="margin-top: 50px">Update your post</h3></center>
    <div class="paddedBlock">
        <form action="" method="POST" class="w3-container" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label"><h6>Title:</h6></label>
                        <input class="form-control" type="text" name="title" autofocus value="<?= $post->title; ?>"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="content"><h6>Content</h6></label>
                        <textarea name="content" id="contentid"><?= $post->content; ?></textarea>
                    </div>
            <center>
                    <div class="form-group">
                        <label class="control-label"><h6>Tag:</h6></label>
                        <select name="tag">
                                 <option value="1">Family</option>
                            <option value="2">Christmas</option>
                            <option value="3">Easter</option>
                            <option value="4">Outdoors</option>
                            <option value="5">Indoors</option>
                            <option value="6">Cheap</option>
                            <option value="7">London</option>
                        </select>

                    </div>
                    <br><br><br>
                    <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
                    <?php
                    $file = 'views/images/posts/' . $post->postImage;
                    if (file_exists($file)) {
                        $img = "<img src='$file' width='300' />";
                        echo $img;
                    } else {
                        echo "<img src='views/images/posts/' width='300' />";
                    }
                    ?>
                    <br><br><br>
                    <input type="file" name="myUploader" class="btn btn-primary" />
                    <p><br><br>
                        <input class="btn btn-primary" type="submit" value="Save all changes" />
                    </p>
            </center>
                    </form>
                    </div>
                   










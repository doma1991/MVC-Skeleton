<div>
    <h3>Add new post</h3>

</div>
<div class="paddedBlock">
    <form>
    <form action="" method="POST" class="w3-container" enctype="multipart/form-data">
        <p><h5>Fill in the following form to create a new post:</h5></p>
    <div class="form-group">
        <label class="control-label"><p><h6>Title of your post: </h6></p></label>
        <input class="form-control" type="text" name="title" autofocus/>
    </div>
    <div class="form-group">
        <label class="control-label" for="contentid"><p><h6>Content of your post:</h6></p></label>
        <textarea id="contentid"><?= $post->content; ?></textarea>
    </div>
    <div class="form-group">
        <label class="control-label"><p><h6>Tag:</h6></p></label>
        <input class="form-control" type="text" name="tag"/>
    </div><br>
    <center>
        <div>
      <input type="hidden" 
               name="MAX_FILE_SIZE" 
             value="10000000"
             />

      <input type="file" name="myUploader" class="btn btn-primary" />
      <p><br>
      <input class="btn btn-primary" type="submit" value="Add Post">
      </p>
    </div>
        </center>
    </form>
</div>
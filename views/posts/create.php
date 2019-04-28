<div><center>
    <br>
    <h3 style="align-text: center">Add new post</h3>
    </center>
</div>
<div class="paddedBlock">
    <form action="?controller=post&action=create" method="POST" class="w3-container" enctype="multipart/form-data">
    <div class="form-group">
        <label class="control-label"><p><h6>Title of your post: </h6></p></label>
        <input class="form-control" type="text" name="title" autofocus/>
    </div>
    <div class="form-group">
        <label class="control-label" for="content"><p><h6>Content of your post:</h6></p></label>
        <textarea type="text" id="contentid" name="content"></textarea>
    </div>
        <center>
    <div class="form-group">

        <label class="control-label">Tag:</label>
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
    <div>

      <input type="hidden" 
               name="MAX_FILE_SIZE" 
             value="10000000"
             />

      <input type="file" name="myUploader" class="btn btn-primary" />
      <p><br>
      <input class="btn btn-primary" type="submit" value="Submit">
      </p>
    </div>
        </center>
    </form>
</div>
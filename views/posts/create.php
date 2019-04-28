<div>
    <br>
    <h3 style="align-text: center">Add new post</h3>
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
    <div class="form-group">

        <label class="control-label">Tag:</label>
       <select name="tag">
                            <option value="outdoors">Outdoors</option>
                            <option value="easter">Easter</option>
                            <option value="indoors">Indoors</option>
                            <option value="cheap">Cheap</option>
                            <option value="london">London</option>
                            <option value="family">Family</option>
                        </select>
        <input class="form-control" type="submit" name="tag"/>
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
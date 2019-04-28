<!--<script>    
function login(){
        
        var xmlhttp = new XMLHttpRequest(); // new HTTP request
        xmlhttp.onreadystatechange = function() {  // annonymous function for processing once the request is returned
            if (this.readyState == 4 && this.status == 200) {
                
                document.getElementById("a").innerHTML = this.responseText;

            } else {
                document.getElementById("a").innerHTML = "no response";
            }
            
        };
        xmlhttp.open('GET', 'empty.php?ok=a'); // making the HTTP request - function is asigned a key value pair of choice - read by _REQUEST superglobal - and added the strChoice argument
        xmlhttp.send();   // sending the HTTP request
            
        };

</script>-->


<div class="container" id="home-page-top-container"> <!--page heading-->
    <div class="row">
        <div class="col-10" style='margin-top:30px'>
            <h1>Discover amazing things to do in London...</h1>
        </div>
        <div class="col-xs-1"></div>
    </div>
</div>

<div class="container" id="search-bar-container"> <!-- search bar-->
    <form action="?controller=post&action=searchResults" method="POST" enctype="multipart/form-data">   
        <div class="form-row">
            <div class="col-10">
                <input class="w3-input search-box" type="text" name="title" placeholder="search here..." required autofocus>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary" value="search">Search</button>
                <p><span id="a"></span></p>
            </div>
        </div>
    </form>   
</div> 
     <?php 
        require_once('models/post.php');
        $posts = Post::topStories(); //relates in Line 15 in model/product - therefore instantiates new product class            
        shuffle($posts);
     ?>
<div class="container" id="cards-container"> <!--cards container -->
    <div class="row">
        <div class="col">
            <h3>Top stories</h3>
        </div>
    </div>
    <div class="row">
                <?php foreach (array_slice($posts, 1, 3) as $post) {  ?>
        <div class="col-md-3">
            <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src='views/images/posts/<?php echo $post->postImage ?>' alt="<?php echo $post->postImage?>">
                <div class="card-body">
                    <p class="card-text"><?php echo $post->title; ?></p>
                </div>
            </div></a>
        </div>
        <?php  }; ?>
        <div class="col-md-3 align-self-end">
            <a href='?controller=post&action=readAll'>
       <button type="submit" class="btn btn-primary" id="homepage-view-btn">View all</button>  
            </a>
        </div>
    </div>
</div>


            <?php     
            if (isset($_SESSION['userID'])) {          
                ?>
<div class="container" id="cards-container"> <!--cards container -->
    <div class="row">
        <div class="col">
            <h3>Your favourites</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <a href='?controller=post&action=read&id=12'>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="views\images\posts\42nd Street The Musical.jpg" alt="42nd Street The Musical">
                <div class="card-body">
                    <p class="card-text">42nd Street The Musical</p>
                </div>
            </div></a>
        </div>
        <div class="col-md-3">
             <a href='?controller=post&action=read&id=13'>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="views\images\posts\Tower of London.jpg" alt="Tower of London">
                <div class="card-body">
                    <p class="card-text">Tower of London</p>
                </div>
            </div>
             </a>
        </div>
        <div class="col-md-3">
             <a href='?controller=post&action=read&id=14'>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="views\images\posts\De Havilland Aircraft Museum.jpg" alt="De Havilland Aircraft Museum">
                <div class="card-body">
                    <p class="card-text">De Havilland Aircraft Museum</p>
                </div>
            </div>
             </a>
        </div>
    </div>
</div>
                <?php
            } else {}
                ?>       

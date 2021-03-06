<?php

//namespace controller{
//    include "..\autoload.php";
//    spl_autoload_register(function($Name) {
//    $filePath = "$Name.php";
//    $macFilePath = str_replace('\\', '/', $filePath);
//    require_once '../' . $macFilePath;   
//    });
//    use models\post;

class PostController {

    public function readAll() {
        // we store all the posts in a variable
        $posts = Post::all(); //relates in Line 15 in model/product - therefore instantiates new product class
        require_once('views/posts/nav.php');
        require_once('views/posts/readAll.php'); //includes view file to display the readAll
        
    }

    public function read() {
        // we expect a url of form ?controller=posts&action=show&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database
        if (!isset($_GET['id'])) // if ID not set then error 
            return call('pages', 'error');

        try {
            // we use the given id to get the correct post
            $post = Post::find($_GET['id']); // similar to readAll - get ID and display in viewer
            require_once('views/posts/nav.php');
            require_once('views/posts/read.php');
            
        } catch (Exception $ex) { //AMEND - to return getMessage, getLine for the back end
            return call('pages', 'error');
        }
    }

    public function create() {
        // we expect a url of form ?controller=products&action=create
        // if it's a GET request display a blank form for creating a new product
        // else it's a POST so add to the database and redirect to readAll action
        if ($_SERVER['REQUEST_METHOD'] == 'GET') { //if server method is GET, then allowed to create
            require_once('views/posts/nav.php');
            require_once('views/posts/create.php');
            
        } else {
            Post::add($_POST['title'], $_POST['content'], $_POST['tag']); //otherwise it's an add function and therefore create new entry
            $posts = Post::all(); //$products is used within the view
            require_once('views/posts/nav.php');
            require_once('views/posts/readAll.php');
            
        }
    }
    
    const InputKey = 'myUploader'; //linked to the 'myuploader' form - knows where to get file from

    public function update() {

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (!isset($_GET['id']))
                return call('pages', 'error');

            // we use the given id to get the correct product
            $post = Post::find($_GET['id']);

            require_once('views/posts/nav.php');
            require_once('views/posts/update.php');
            
        }
        else {
            $id = $_GET['id'];
            if (isset($_FILES) && !empty($_FILES[self::InputKey]['name'])) {
                $imageName = $_POST['title'];
            } else {
                $imageName = null;
            }
            Post::update($id, $_POST['title'], $_POST['content'], $imageName, $_POST['tag']);

            $posts = Post::all();
            require_once('views/posts/nav.php');
            require_once('views/posts/myposts.php');
            
        }
    }

    public function delete() {
        Post::remove($_GET['id']);

        $posts = Post::all();
        require_once('views/posts/nav.php');
        require_once('views/posts/readAll.php');
        
    }

  
    
    public function searchResults() {
//          if (isset($_GET['search'])) {
          $posts = Post::search($_POST['title']);

         require_once('views/posts/nav.php');
         require_once('views/posts/searchResults.php');
       
//          }
//          else {echo "problems";}
    }
    
    public function myPosts() {
        
            try {
                $myPosts = Post::myPosts($_SESSION['userID']);
                require_once('views/posts/nav.php');
                require_once('views/posts/myposts.php'); //go to the homepage
                
              
                
            } catch (Exception $ex) {
                require_once('views/posts/nav.php');
                require_once('views/users/login.php'); //if user doesn't exist, stay in login to enter data again   
                
            }
    }
    
    public function findTag(){
         $posts = Post::findTag($_GET['tag']); // similar to readAll - get ID and display in viewer
            require_once('views/posts/nav.php');
            require_once('views/posts/searchTag.php');
    }
            
}
    
       // public function favourites() {
        // we expect a url of form ?controller=posts&action=show&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database
//        try {
//            // we use the given id to get the correct post
//            $post = Post::find($_GET['id']); // similar to readAll - get ID and display in viewer
//            require_once('views/posts/nav.php');
//            require_once('views/posts/read.php');
//            
//        } catch (Exception $ex) { //AMEND - to return getMessage, getLine for the back end
//            return call('pages', 'error');
//        }
//    }
//}


//public function topStories() {
//            $posts = Post::topStories(); //relates in Line 15 in model/product - therefore instantiates new product class
//            
//        $topList1 = array_rand($posts);
//        $topList2 = array_rand($posts);
//        $topList3 = array_rand($posts);
//        $randomTopList = array($topList1, $topList2, $topList3);
//            
//        require_once('views/posts/nav.php');
//        require_once('views/pages/home.php'); 
//}
//}

        
        
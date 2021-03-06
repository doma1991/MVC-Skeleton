<?php

class UserController {
   
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') { //calls the login form if the user hasn't submitted any data
            require_once('views/posts/nav.php');
            require_once('views/users/login.php');
            
        } else {
            try {
                $loggedInUser = User::login($_POST['username'], $_POST['password']); //if the user has submitted data (password + username), it calls the login function in the models to check if the user exists in the database   
                $_SESSION['userID'] = $loggedInUser->userID;
                
                require_once('views/posts/nav.php');
                require_once('views/pages/home.php'); //go to the homepage
                
              
                
            } catch (Exception $ex) {
                require_once('views/posts/nav.php');
                require_once('views/users/login.php'); //if user doesn't exist, stay in login to enter data again   
                
            }
        }
    }
    
     public function logout() {
        session_destroy();
        require_once('views/posts/navTwo.php');
        require_once('views/pages/homeTwo.php');
    }

    public function registration() {
         if ($_SERVER['REQUEST_METHOD'] == 'GET') {
             require_once('views/posts/nav.php');
             require_once('views/users/registration.php');
        } else {
            try {
                //fetch user type
               $userType = User::userTypeForRegistration($_POST['userTypeID']);
                $loggedInUser = User::registration($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['username'], $_POST['password'], $_POST['phoneNumber'], $userType);
                $_SESSION['userID'] = $loggedInUser->userID;
                require_once('views/posts/nav.php');
                require_once('views/pages/home.php'); //go to the homepage
                
                             
            } catch (Exception $ex) {
                require_once('views/posts/nav.php');
                require_once('views/users/registration.php');
                
            }
        }
     
    }
    
      public function home() {
        $loggedInUser = User::findUserById($_SESSION['userID']);   
      require_once('views/posts/nav.php');          
      require_once('views/pages/home.php');
      
    }
    
    public function readProfile() {
        if (!isset($_GET['userID']))
            return call('pages', 'error');
        try {
            $user = User::readProfile($_GET['userID']);
            require_once('views/posts/nav.php');
            require_once('views/users/readProfile.php');
            
            
        } catch (Exception $ex) {
            return call('pages', 'error');
        }
    }
     
    
   public function updateProfile(){

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (!isset($_GET['userID']))
                return call('pages', 'error');
  
            $user = User::readProfile($_GET['userID']);
            

            require_once('views/posts/nav.php');
            require_once('views/users/updateProfile.php');
            
        }
        else {
            $userID = $_GET['userID'];
            User::updateProfile($userID, $_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['username'], $_POST['phoneNumber']);

           $user = User::readProfile($userID);
           require_once('views/posts/nav.php');
           require_once('views/users/readProfile.php');
          
        }
   }
   
   
//    public function myPosts() {
//        
//            try {
//                $myPosts = User::myPosts($_SESSION['userID']);
//                require_once('views/posts/nav.php');
//                require_once('views/pages/myPosts.php'); //go to the homepage
//                
//              
//                
//            } catch (Exception $ex) {
//                require_once('views/posts/nav.php');
//                require_once('views/users/login.php'); //if user doesn't exist, stay in login to enter data again   
//                
//            }
//        
//    }
}


        
    
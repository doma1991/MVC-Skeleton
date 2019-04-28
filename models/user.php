<?php

class User {
    public $userID;
    public $firstName;
    public $lastName;
    public $email;
    public $username;
    public $password;
    public $phoneNumber;
    public $userTypeID;

    public function __construct($userID, $firstName, $lastName, $email, $username, $password, $phoneNumber, $userTypeID) {
        $this->userID = $userID;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->phoneNumber = $phoneNumber;
        $this->userTypeID = $userTypeID;
    }

   public static function login($username, $password) {
        $db = Db::getInstance();
        $req = $db->prepare("SELECT * FROM user WHERE username=:username and password=:password");
        $req->execute(array('username' => $username, 'password' => $password)); 
        $loggedInUser = $req->fetch(); 
        if ($loggedInUser) { 
            
            return new User($loggedInUser['userID'], $loggedInUser['firstName'], $loggedInUser['lastName'], $loggedInUser['email'], $loggedInUser['username'], $loggedInUser['password'], $loggedInUser['phoneNumber'], $loggedInUser['userTypeID']);
        
         
        } else {
          
            throw new Exception('Username or password is incorrect');
        }

    }
    
    public static function userTypeForRegistration($userTypeOption) {
        $db = Db::getInstance();
        $req = $db->prepare("SELECT * FROM user_type WHERE userTypeName=:userTypeOption");
        $req->execute(array('userTypeOption' => $userTypeOption)); 
        $returnUserType = $req->fetch(); 
        if ($returnUserType) { 
            
            return $returnUserType['userTypeID'];
         
        } else {
          
            throw new Exception('Invalid user type');
        }
    }
    
    public static function findUserById($userID) {
        $db = Db::getInstance();
        $req = $db->prepare("SELECT * FROM user WHERE userID=:userID");
        $req->execute(array('userID' => $userID)); 
        $loggedInUser = $req->fetch(); 
         if ($loggedInUser) { 
            
            return new User($loggedInUser['userID'], $loggedInUser['firstName'], $loggedInUser['lastName'], $loggedInUser['email'], $loggedInUser['username'], $loggedInUser['password'], $loggedInUser['phoneNumber'], $loggedInUser['userTypeID']);
        
         
        } else {
          
            throw new Exception('Username or password is incorrect');
        }

    }
 
    
    public static function registration($firstName, $lastName, $email, $username, $password, $phoneNumber, $userTypeID) {
        $db = Db::getInstance();
        $req = $db->prepare("INSERT INTO user (firstName, lastName, email, username, password, phoneNumber, userTypeID) VALUES (:firstName, :lastName, :email, :username, :password, :phoneNumber, :userTypeID)");
        $req->execute(array('firstName' => $firstName, 'lastName' => $lastName, 'email' => $email, 'username' => $username, 'password' => $password, 'phoneNumber' => $phoneNumber, 'userTypeID' => $userTypeID)); 
        
        $req = $db->prepare("SELECT * FROM user WHERE username=:username and password=:password");
        $req->execute(array('username' => $username, 'password' => $password)); 
        $user = $req->fetch(); 
        
        if ($user) { 
            
            return new User($user['userID'], $user['firstName'], $user['lastName'], $user['email'], $user['username'], $user['password'], $user['phoneNumber'], $user['userTypeID']);
        
         
        } else {
          
            throw new Exception('Username or password is incorrect');
        }

    }
    
    
    public static function readProfile($userID) {
        $db = Db::getInstance();
        $userID = intval($userID);
        $req = $db->prepare('SELECT userID, firstName, lastName, email, username, password, phoneNumber, userTypeID FROM user WHERE userID = :userID');
        $req->execute(array('userID' => $userID));
        $user = $req->fetch();
        
        if ($user) {
            return new User($user['userID'], $user['firstName'], $user['lastName'], $user['email'], $user['username'], $user['password'], $user['phoneNumber'], $user['userTypeID']);
        } else {
            throw new Exception('User does not exist');
        }
    }
    
    
      public static function updateProfile($userID, $firstName, $lastName, $email, $username, $phoneNumber) {
        $db = Db::getInstance();
        $req = $db->prepare("Update user set firstName=:firstName, lastName=:lastName, email=:email, username=:username, phoneNumber=:phoneNumber WHERE userID=:userID");
        $req->bindParam(':userID', $userID);
        $req->bindParam(':firstName', $firstName);
        $req->bindParam(':lastName', $lastName);
        $req->bindParam(':email', $email);
        $req->bindParam(':username', $username);
        $req->bindParam(':phoneNumber', $phoneNumber);    
        $req->execute();
        
    }

     
 
 
    
//    public static function myPosts($userID) {
//        $db = Db::getInstance();
//        $req = $db->prepare("SELECT p.postID, p.title, p.tagID, p.content, p.date, p.postImage, u.username "
//                . " FROM user as u inner JOIN user_post as UP on u.userID=up.userID inner JOIN post as p "
//                . "on up.postID=p.postID WHERE u.userID = :userID");
//        $req->bindParam(':userID', $userID);
//        $req ->execute();
//        $posts = [];
//        foreach ($req->fetchAll() as $blogPost) { 
//            array_push($posts, new Post($blogPost['postID'], $blogPost['title'], $blogPost['tagID'], $blogPost['content'], $blogPost['date'], $blogPost['postImage'], $blogPost['username']));
//        }
        
//        if (empty($posts)) {
//            return null;
//        } else {
//            return $posts;
//        }
//    }
}
    


?>
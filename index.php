<?php 

  class User {

    public $username;
    private $email ;

    public function __construct($username, $email){
        $this->username = $username;
        $this->email = $email;
    }

    public function addFriend(){
    
      return "$this->username just added a new friend";
    }
    //getters / class methods
    public function getEmail(){
        return $this->email ;
    }

    //setters
    public function setEmail($email){
        if (strpos($email, '@') > -1 ){
            $this->email = $email;
        }
    }

  }
  class AdminUser extends User {
      public $level;

      public function __construct( $username, $email, $level){
          $this->level = $level;
          parent::__construct($username, $email);
      }
  }
  

  $userOne = new User('titan', 'titan@swift.com');
  $userTwo = new User('sphinx', 'sphinx@swift.com');
  $userThree = new AdminUser('gypsy', 'gypsy@swift.com', 8);

  echo $userThree->username . '<br/>';
  echo $userThree->getEmail(). '<br/>';
  echo $userThree->level ;

  


?>

<html lang="en">
<head>
  <title>PHP OOP</title>
</head>
<body>
  
</body>
</html>
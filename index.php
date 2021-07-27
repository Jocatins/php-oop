<?php 

  class User {

    public $username;
    protected $email ;
    public $role = 'member';

    public function __construct($username, $email){
        $this->username = $username;
        $this->email = $email;
    }

    public function addFriend(){
    
      return "$this->username just added a new friend";
    }
    public function message(){
        return "this email - $this->email sent a message";
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
      public $role = 'admin';
      public function __construct( $username, $email, $level){
          $this->level = $level;
          parent::__construct($username, $email);
      }
      public function message(){
        return "this admin email - $this->email sent a message";
    }
  }
  

  $userOne = new User('titan', 'titan@swift.com');
  $userTwo = new User('sphinx', 'sphinx@swift.com');
  $userThree = new AdminUser('gypsy', 'gypsy@swift.com', 8);


  echo $userTwo->role . '<br/>' ;
  echo $userThree->role . '<br/>';

  echo $userOne->message() . '<br/>';
  echo $userThree->message() . '<br/>';

  

  


?>

<html lang="en">
<head>
  <title>PHP OOP</title>
</head>
<body>
  
</body>
</html>
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
  

  $userOne = new User('titan', 'titan@swift.com');
  $userTwo = new User('sphinx', 'sphinx@swift.com');

  $userOne->setEmail('jocatins@gypsyplanet.com') . '<br/>';


  echo $userOne->getEmail();
  echo $userTwo->getEmail();


?>

<html lang="en">
<head>
  <title>PHP OOP</title>
</head>
<body>
  
</body>
</html>
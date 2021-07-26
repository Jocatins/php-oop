<?php 

  class User {

    public $username;
    public $email ;

    public function __construct($username, $email){
        $this->username = $username;
        $this-> email = $email;
    }

    public function addFriend(){
      //return "added a new friend";
      return "$this->username just added a new friend";
    }

  }

  $userOne = new User('titan', 'titan@swift.com');
  $userTwo = new User('sphinx', 'sphinx@swift.com');

  echo $userOne->username . '<br>';
  echo $userOne->email . '<br>';
  echo $userOne->addFriend() . '<br>';


  echo $userTwo->username . '<br>';
  echo $userTwo->email . '<br>';

  //print_r(get_class_vars('User'));
  print_r(get_class_methods('User'));


?>

<html lang="en">
<head>
  <title>PHP OOP</title>
</head>
<body>
  
</body>
</html>
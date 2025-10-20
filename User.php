<?php
 /*
 Class & Object
 - Class is a blueprint that u can create object from
 -Object is a member in the main Application
 -Class has properties
 - Varibale inside class = property
 - Variable outside class = variable
 - [ -> ] = object operator
 - [ class ] = Class keyword
 - [ new ] = New Object keyword
 - [private, public, protected] = visibility markers
 Apple
 - Class = Apple blueprint Design
 - Object = Iphones that china made
 - Application = Apple Store
web application
- Class =  code to Add new member
- Object = the members
- Application = web application registration

web app message
- Class = code to send new message
-object= the messages
-application= web app message

Blog Sytem
- Class = code to send new Post, Article, News, Information
-object= Post, Article, News, Information
-application= Blog system
*/
 class User {
    // Properties
    private $name ='Stranger'; //default values
    private $email = 'stranger@email.com';
    private $age ='20';

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
     public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age = $age;
    }

    public function getInitials(){
        return strtoupper(substr($this->name,0,2));
    }

 }
/*
 $currentUser = new User();
 $currentUser->setName('Ahmed');
 $currentUser->setEmail('test@email.com');
 $currentUser->SetAge('32');
 echo '<pre>';
 var_dump($currentUser->getName());
 echo '</pre>';

  $nextUser = new User();
   $nextUser->name='Adam';
 $nextUser->email='test@email.com';
 $nextUser->age='12';
 echo '<pre>';
 var_dump($nextUser);
 echo '</pre>';

   $strangerUser = new User();

 echo '<pre>';
 var_dump($strangerUser);
 echo '</pre>';*/
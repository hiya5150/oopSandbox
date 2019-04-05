<?php

class User {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name=$name;
        $this->age=$age;
        echo " ". __CLASS__." instantiated"."<br>";
    }
	//called when no other references to a certain object. used for cleanup, closing connections et
    public function __destruct() {
        echo " destructor ran...";
    }
    public function SayHello() {
        return $this->name . " Says Hello";
    }

}
$user1=new User("Malkie", 20);
$user2=new User("Miri", 47);
echo $user1->name;


<?php

    class User {
        public $name="Heidi ";
        public function SayHello() {
            return $this->name." Says Hello";
        }
    }
$user1=new User();
    $user1->name="Heidi";
//echo $user1->name;
echo$user1->SayHello();
$user2=new User();
$user2->name="Afriem";
echo "<br>";
echo $user2->name;
echo "<br>";
echo$user2->SayHello();

    ?>
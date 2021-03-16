<?php
class User
{
    public $name, $age;
    
    function getInfo()
    {
        echo "სახელი: $this->name ; ასაკი: $this->age <br>";
    }
}
 
$user = new User;
$user->name="Tom"; // თვისება $name-ის მინიჭება
$user->age=30; // თვისება $age-ის მინიჭება
$user->getInfo(); // getInfo() მეთოდის გამოძახება
print_r($user);
?>
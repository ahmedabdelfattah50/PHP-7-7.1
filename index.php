<?php 

// ====================== First PHP 7 ======================

// ---------- 1- to know the version of php 
// phpinfo();
// echo phpversion();

// ---------- 2- Depracated features  

/*
class user {
    public static function getUser() {
        return "Ahmed Abdel-Fattah";
    }
}

$user = new user;
// echo $user->user();
// echo $user::getUser();
*/

// ---------- 3- call funtion
/*
class user {
    public $name = "Ahmed Abdel-Fattah",    
           $password = '123';
    
    public function access(){
        echo "Your name is: {$this->name}, and your password is: {$this->password}";
    }   
}
*/
// ##### run the code as an object
// $conText = new user;
// $conText->access();

// ##### run the code by call function
/*
$conText = function(){
    $this->access();
};

$conText->call(new user);
*/

// ---------- 4- null qualless operator

// the shortest statment of if....else      (this without default value)
/*
$value = (5>2) ? "5 is greater than 2" : "2 is greater than 5";
echo "<h2>" . $value . "</h2>";

$value = $_GET['name'] ? $_GET['name'] : "Ahmed";
echo "<h2>" . $value . "</h2>";
*/

// the null qualless operator      (this give a default value without the else value)

/*
$value = $_GET['name'] ?? "Moahmed";
echo "<h2>" . $value . "</h2>";
*/

// ---------- ((( 7 )))

/*
// use funtion in a class from another page
require_once "test.php";
$obj = new Order;
$obj -> sayHello();
*/


// ---------- 8- character escaping 

// echo htmlentities("∞");
// echo "\u{221E}";        // this by using the hexa decimal number ####


// ---------- 9- primitive type dectaration

/*
function typeHint(int ...$num) {        // this is beigging an array but still int
    // echo $num;
    echo "<pre>" . print_r($num , true) . "</pre>";
}

typeHint(25 , 82 , 70);
*/

// ---------- 10- space shape operator (<=>)

/*
$numbers = [15 , 2 , 7 , 18 , 90 , 70 , 13];

// I want to sort the $numbers array 

usort( $numbers , function($first , $second){
    // the tradiational way
    
    // if($first == $second) {
    //     return 0;
    // } else if($first > $second) {
    //     return 1;
    // } else {
    //     return -1;
    // }
    

    // the best and shortest way
    return $first <=> $second;
});

echo "<pre>" . print_r($numbers , true) . "</pre>"; 
*/

// ---------- 11- session options

/*
// the tradational way 
echo ini_get('session.name') . "<br>";

// this for set a cache_limiter to the session
ini_set('session.cache_limiter' , "Ahmed");

echo ini_get('session.cache_limiter');
*/

// ---------- 12- new features on funtions

/*
// random funtions
echo random_int(1 , 10);

// random binary function
echo bin2hex(random_bytes(20));
*/

// ---------- 13

/*
$subject = "a b C D A M B d";

preg_replace_callback_array(array(
    '~[a]+~i'   => function ($match) { echo "<pre>" . print_r($match , true) . "</pre>"; },
    '~[D]+~'    => function ($match) { echo "<pre>" . print_r($match , true) . "</pre>"; },
    '~[B]+~i'   => function ($match) { echo "<pre>" . print_r($match , true) . "</pre>"; },
), $subject , -1 , $numberOfMatches);

// this used to get the first value it search for it 
// ), $subject , 1 , $numberOfMatches);

echo $numberOfMatches;
*/

// ---------- 14 Errors with try and catch 

// ---------- 15  

/*
echo intdiv(8,3) . "<br>";
echo 8/3;
*/

// ================================= PHP 7.1 =================================

/*
// ---------- 2  

// res = 2
echo 1 + "1a";

// res = 1
echo 1 + "a1";

// res = 1
echo "1a" + "1a";
*/

// ---------- 3

/*
class User {
    public $name;

    public function getName() : ? string {
        return $this->name;
    }
}

$obj = new User;

// $obj->name = "Ahmed";        // when this value is empty the (?) in the function will solve it 

echo $obj->getName();
*/

// check user ID from the datbase with his current login ID in the system

/*
class user {
    public $id;
} 

class post {
    public $name,
           $user_ID;

    public function postOwneredBy(? user $owner){
        if ($owner === null) {
            return "Error The user == null";
        } else {
            // return boolean value (0 or 1) 
            return $owner->id === $this->user_ID;
        }
    }
}

$obj_user = new user;
$obj_post = new post;

$obj_user = null;

echo $obj_post->postOwneredBy($obj_user);
*/

// ---------- 4 

/*
$data = ["Ahmed" , 21 , 'red'];         // popular array 
list($name , $age , $color) = $data;        // this is a list
[$name , $age , $color] = $data;        // without list 
*/

/*
$data = ["name" => "Ahmed" , "age" => 21 , "color" => 'red'];         // key array 
list("name" => $name , "age" => $age , "color" => $color) = $data;        // this is a list
["name" => $name , "age" => $age , "color" => $color] = $data;        // without list 

echo "Your name is : " . $name . " and your age is : " . $age . ", your color is : " . $color;
*/

// ---------- 5

// constant visibility 
/*
class juice {
    public $sugerPerstage = "70%";
}

class orange extends juice {
    public function getTheAmount() {
        return $this->sugerPerstage;
    }
}

$orange = new orange;

echo $orange->getTheAmount();
*/

// ---------- 7

// new features on error method (try ... catch)
/*
function grow(int $age){
    return $age;
}
*/
// the old one in php 5 

/*
try {
    grow("Ahmed");
} catch(TypeError $e) {
    echo $e->getMessage();
} catch(Error $e) {
    echo $e->getMessage();
} catch(Exception $e) {
    echo $e->getMessage();
}
*/

// the new one

/*
try {
    grow("Ahmed");
} 

catch(TypeError | Error | Exception $e) {
    echo $e->getMessage();
}
*/

// ---------- 8 
/*
class User {

    public function getData($name){
        return "Your name is : " . $name;
    }

}

$user = new User;

try {
    $user->getData();
} 

catch (ArgumentCountError $e) {
    echo $e->getMessage();
}*/

// ---------- 9

/*
class User {
    public $name;

    public function getName() {
        $x = 'this';
        $$x = $this->name;
    
        var_dump($$x);
    }
}

$user = new User;


try {
    $user->getName();
} catch (Error $e) {
    echo "<h2 style='color:#fff; border-radius: 50px ; background:#f50; padding: 10px 20px;'>" . $e->getMessage() . " because it is saved in the PHP</h2>";
}
*/

// ---------- 11

/*
$num = rand(0,40);
echo $num;
if ($num == 40) {
    echo "<br>True It is 40";
}
*/

// echo mt_rand(0,40);

/*
$colors = array(
    'red',
    'green',
    'yellow'
);
*/

/*
echo "<pre>";
    print_r($colors);
echo "</pre>";
*/

// var_dump();
// echo array_rand($colors) . "<br>The value is : " . $colors[array_rand($colors)];

/*
$colors = array(
    'R' => 'red',
    'G' => 'green',
    'Y' => 'yellow'
);

$item = array_rand($colors);
echo $item . "<br>The value is : " . $colors[$item];
*/

/*
$name = "Ahmed Abdel-Fattah Abdel-Moaty Ahmed";

if (strpos($name , "Ahmed", -10)) {
    echo "Yes";
} else {
    echo "No";
}
*/
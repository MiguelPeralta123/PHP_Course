<?php

// 1. Printing
//echo "Hello world"

// 2. Variables
//$number = 10;
//echo $number

// 3. Data types
//$string = "Hello world";
//echo $string;
//$integer = 2;
//echo $integer;
//$float = 2.5;
//echo $float;
//$array = ["Miguel", "Peralta", 1, 2];
//var_dump($array);

// 4. Operators
//echo true && true;
//echo true || false;

// 5. Conditionals
// If
/*$value = "4";
if ($value == 1) {
    echo "one";
}
elseif ($value == 2) {
    echo "two";
}
else {
    echo "unknown";
}*/

// Switch
/*$value = "4";
switch ($value) {
    case '1':
        echo "one";
        break;
    case '2':
    case '3':
        echo "two or three";
        break;    
    default:
        echo "unknown";
        break;
}*/

// Ternary operator
/*$value = 2;
echo ($value === 2) ? "two" : "unknown";*/

// 6. Loops
// For
/*for ($i = 0; $i < 10; $i++) {
    echo "$i<br>";
}*/

// While
/*$index = 0;
while ($index < 10) {
    echo "$index<br>";
    $index++;
}*/

// Do while
/*$index = 0;
do {
    echo "$index<br>";
    $index++;
} while ($index < 10)*/

// Foreach
/*$names = ["Roberto", "Miguel", "José", "Vanessa"];
foreach ($names as $key => $name) {
    echo "$key. $name<br>";
}*/

// 7. Match
/*$number = 5;
$result = match (5) {
    $number => "five",
    default => "unknown",
};
echo $result;*/

/*$number = 4;
$result = match (true) {
    $number == 1 => "one",
    $number == 2, $number == 3 => "two or three",
    default => "unknown",
};
echo $result;*/

// 8. Project 1.- Finding job candidates
// Given an array of people, count the number of adults and children. Then, count the number of people who match the job requirements (whose ages are between 22 and 30).
/*$people = [
    ['name' => 'Joseph', 'age' => 25],
    ['name' => 'Sarah', 'age' => 5],
    ['name' => 'Anne', 'age' => 18],
    ['name' => 'Pratham', 'age' => 23],
    ['name' => 'Simon', 'age' => 30],
    ['name' => 'Amir', 'age' => 28],
    ['name' => 'Sabrina', 'age' => 22],
    ['name' => 'Rana', 'age' => 24],
    ['name' => 'Meet', 'age' => 21],
    ['name' => 'Vitto', 'age' => 24],
    ['name' => 'Rachel', 'age' => 9],
    ['name' => 'Tom', 'age' => 3],
];
$adults = 0;
$children = 0;
$candidates = [];
foreach ($people as $person) {
    if ($person['age'] >= 18) {
        $adults++;
        if ($person['age'] >= 22 && $person['age'] <= 30) {
            $candidates[] = $person;
        }
    }
    else {
        $children++;
    }
}
echo "The number of adults is $adults<br>";
echo "The number of children is $children<br>";
echo "The candidates that match the job requirements are:<br>";
foreach ($candidates as $candidate) {
    echo "- $candidate[name]<br>";
}*/

// 9. Break
/*$names = ['Miguel', 'Alex', 'Chema', 'Orlando'];
foreach ($names as $name) {
    echo "$name<br>";
    if ($name == 'Miguel') {
        echo "$name is in the list";
        break;
    }
}*/

// 10. Continue
/*$numbers = [3, 300, 1485, 781, 15, 1744, 5411, 72, 875];
foreach ($numbers as $number) {
    if ($number % 3 == 0) {
        echo "$number is not included<br>";
        continue;
    }
    echo "$number<br>";
}*/

// 11. PHP loop and conditional inside HTML
// Go to the end of this file, after the PHP closing tag

// 12. Strtotime
// Returns a timestamp, which is the number of seconds since January 1st, 1970. It´s quite flexible
/*echo strtotime('today') . '<br>';
echo strtotime('yesterday') . '<br>';
echo strtotime('2 days ago') . '<br>';
echo strtotime('16 dec 2023') . '<br>';
echo strtotime('december 16 2023') . '<br>';
echo strtotime('12/16/2023') . '<br>';
// If the date is not valid, returns false
var_dump(strtotime('hello world'));*/

// 13. Date
// Returns the date in a specific format. Date takes two parameters, the format and the timestamp (optional)
/*echo 'Year/month/day<br>';
echo date('y-m-d') . '<br>';
echo 'Day/month/year<br>';
echo date('d-m-y') . '<br>';
echo 'Day/month/year with timestamp<br>';
echo date('d-m-y', strtotime('yesterday')) . '<br>';
echo date('d-m-y', strtotime('3 weeks ago')) . '<br>';
echo date('d-m-y', strtotime('october 13 2023')) . '<br>';
echo 'Only year<br>';
echo date('y') . '<br>';
echo 'Only month<br>';
echo date('m') . '<br>';
echo 'Only day<br>';
echo date('d') . '<br>';
echo 'Day name<br>';
echo date('D') . '<br>';
echo 'Full day name<br>';
echo date('l') . '<br>';*/

// 14. Project 2.- Age in days
/*$currentDate = 'today';
$birthDate = 'september 26 1999';
$ageInSeconds = strtotime($currentDate) - strtotime($birthDate);
$ageInDays = round($ageInSeconds / 60 / 60 / 24);
if ($ageInDays >= 0) {
    echo "The person born in <b>$birthDate</b> is <b>$ageInDays</b> days old now";
}
else {
    echo "The date of birth <b>$birthDate</b> is not valid";
}*/

// 15. Files
// Open
// fopen takes two parameters, the file path and the open mode (r for reading, w for writting and a for appending)
//$file = fopen('./example.txt', 'a');

// Read
// rgets reads the next line in the file
/*$line = fgets($file);
while ($line) {
    echo $line . '<br>';
    $line = fgets($file);
}*/

// Write
/*fwrite($file, "Hello world" . PHP_EOL);
fwrite($file, "This text has been created from code" . PHP_EOL);
fwrite($file, "This is a new line" . PHP_EOL);*/

// Append
/*fwrite($file, "This is another line" . PHP_EOL);
fwrite($file, "These lines are being appended" . PHP_EOL);
fwrite($file, "The previous content remains and the new lines are added" . PHP_EOL);*/

// Close
//fclose($file);

// 16. CSV files
// Open
//$file = fopen('./example.csv', 'r');

// Read
// fgetcsv returns an array with the comma-separated values of each line
/*$line = fgetcsv($file);
while ($line) {
    $id = $line[0];
    $value = $line[1];
    echo "$id - $value<br>";
    $line = fgetcsv($file);
}*/

// Write
// fputcsv creates a new line in the csv file. It takes the file and an array as parameters
/*fputcsv($file, ['1', 'Facebook']);
fputcsv($file, ['2', 'Youtube']);*/

// Append
/*fputcsv($file, ['3', 'Whatsapp']);
fputcsv($file, ['4', 'Twitter']);
fputcsv($file, ['5', 'Linkedin']);*/

// Close
//fclose($file);

// 17. JSON
// json_decode converts a json into an array
/*$json = '{
    "websites": {
        "Google": "https://www.google.com.mx/",
        "YouTube": "https://www.youtube.com/",
        "Facebook": "https://www.facebook.com/"
    }
}';
$array = json_decode($json, true);
$websites = $array["websites"];
foreach ($websites as $name => $link) {
    echo "$name: $link<br>";
}*/

// json_encode converts an array into a json
/*$array = [
    "websites" => [
        "Google" => "https://www.google.com.mx/",
        "YouTube" => "https://www.youtube.com/",
        "Facebook" => "https://www.facebook.com/"
    ]
];
$json = json_encode($array);
print($json);*/

// 18. XML
/*$xml = '<?xml version="1.0" encoding="UTF-8" ?>
<accounts>
    <account type="Google">https://www.google.com.mx/</account>
    <account type="YouTube">https://www.youtube.com/</account>
    <account type="Facebook">https://www.facebook.com/</account>
</accounts>';*/

// Reading an XML with DOMDocument
// Create a DOM element and load it with the XML
/*$dom = new DOMDocument();
$dom->loadXML($xml);
// Create an array with the nodes of type "account"
$accounts = $dom->getElementsByTagName('account');
foreach ($accounts as $account) {
    // Get the attribute and node values
    $name = $account->getAttribute('type');
    $link = $account->nodeValue;
    echo "$name: $link<br>";
}*/

// Reading an XML with SimpleXMLElement
// SimpleXMLElement converts an XML element into an array where each node is an element
/*$accounts = new SimpleXMLElement($xml);
foreach ($accounts as $account) {
    $name = $account['type'];
    $link = $account;
    echo "$name: $link<br>";
}*/

// Creating an XML with SimpleXMLElement
/*$accounts = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8" ?><accounts></accounts>');
$accounts->addChild('account', 'https://www.google.com.mx/')->addAttribute('type', 'Google');
$accounts->addChild('account', 'https://www.youtube.com/')->addAttribute('type', 'YouTube');
$accounts->addChild('account', 'https://www.facebook.com/')->addAttribute('type', 'Facebook');
$xml = $accounts->asXML();
echo $xml;*/

// 19. Project 3.- Parse data
// Given an array, show the age of the selected person and then create a csv file with the data
/*$data = '{
    "Roberto": 26,
    "Miguel": 24,
    "Jose": 19,
    "Vanessa": 17
}';
$value = 'Miguel';
// Return age
$array = json_decode($data, true);
foreach ($array as $name => $age) {
    if ($name == $value) {
        echo $age;
        break;
    }
}
// Create CSV
$file = fopen('exercise3.csv', 'w');
foreach ($array as $name => $age) {
    fputcsv($file, [$name, $age]);
}
fclose($file);*/

// 20. Include
// Import another file. If the file has an error PHP throws a warning and ignores it
// include imports the file as many times as you want
/*include "./example.php";
echo "Hello from file 1<br>";
include "./example.php";*/

// include_once imports the file only one time
/*include_once "./example.php";
echo "Hello from file 1<br>";
include_once "./example.php";*/

// 21. Require
// Import another file. If the file has an error PHP throws an error and stops the server
// require imports the file as many times as you want
/*require "./example.php";
echo "Hello from file 1<br>";
require "./example.php";*/

// require_once imports the file only one time
/*require_once "./example.php";
echo "Hello from file 1<br>";
require_once "./example.php";*/

// 22. Project 4.- Convert HTML into PHP
// Given an HTML project, convert it into a dynamic PHP website
// Open the small business project within this folder
// http://localhost/php_course/small_business

// 23. Functions
//       name(arguments)                   : return data-type
/*function add(int $num1 = 0, int $num2 = 0) : int {
    return $num1 + $num2;
}
echo 'Add function result without parameters: ';
echo add() . '<br />';
echo 'Add function result with parameters: ';
echo add(2, 3);*/

// 24. Project 5.- Distance calculator (mathematical)
// Create a function to calculate the distance between two places given the latitude and longitude
/*
Steps:
1. Calculate the difference of longitudes
2. Convert it to radians
3. Calculate its cosine
4. Convert both latitudes to radians
5. Calculate their sines and cosines
6. All sines multiplied plus all cosines multiplied
7. Convert to km by calculating its arc cosine
8. Multiply by the radius of earth in km
9. Return the distance in kilometers
*/
/*function calculateDistance(float $lat1 = 0, float $lon1 = 0, float $lat2 = 0, float $lon2 = 0) : float {
    $lonDif = $lon2 - $lon1;
    $lonDifRad = deg2rad($lonDif);
    $lonDifRadCos = cos($lonDifRad);

    $lat1Rad = deg2rad($lat1);
    $lat2Rad = deg2rad($lat2);

    $lat1RadSin = sin($lat1Rad);
    $lat1RadCos = cos($lat1Rad);
    $lat2RadSin = sin($lat2Rad);
    $lat2RadCos = cos($lat2Rad);
    
    $dist = $lat1RadSin * $lat2RadSin + $lonDifRadCos * $lat1RadCos * $lat2RadCos;
    $distArcCos = acos($dist);
    $radiusOfEarth = 6364.963;
    $distInKm = $distArcCos * $radiusOfEarth;
    return $distInKm;
}

$place1 = [
    'name' => 'Paris',
    'lat' => 48.864716,
    'lon' => 2.349014
];
$place2 = [
    'name' => 'Berlin',
    'lat' => 52.520008,
    'lon' => 13.404954
];
// Calculating the distance between Paris and Berlin
$distance = calculateDistance($place1['lat'], $place1['lon'], $place2['lat'], $place2['lon']);
echo 'The distance between ' . $place1['name'] . ' and ' . $place2['name'] . ' is ' . $distance . ' kilometers';*/

// 25. Isset
/*$string = 'Hello world';
$emptyString = '';
$zero = 0;
$boolean = false;
$null = null;

echo 'Hello world<br />isset: ';
var_dump(isset($string));
echo '<br />""<br />isset: ';
var_dump(isset($emptyString));
echo '<br />0<br />isset: ';
var_dump(isset($zero));
echo '<br />false<br />isset: ';
var_dump(isset($boolean));
echo '<br />null<br />isset: ';
var_dump(isset($null));*/

// 26. Empty
/*$string = 'Hello world';
$emptyString = '';
$zero = 0;
$boolean = false;
$null = null;

echo 'Hello world<br />empty: ';
var_dump(empty($string));
echo '<br />""<br />empty: ';
var_dump(empty($emptyString));
echo '<br />0<br />empty: ';
var_dump(empty($zero));
echo '<br />false<br />empty: ';
var_dump(empty($boolean));
echo '<br />null<br />empty: ';
var_dump(empty($null));*/

// 27. Forms
// Go to the end of this file, after the PHP closing tag

// 28. Project 6.- Contact form
// Create a form and store the user name and the date in a json object
// Go to the end of this file, after the PHP closing tag

// 29. Cookies
// Create
//           name    content                 expiration date
//setcookie('test', 'this is a test cookie', time() + 60 * 60 * 24 * 30);
// Update
//setcookie('test', 'this is an updated test cookie', time() + 60 * 60 * 24 * 30);
// Delete
//setcookie('test', 'this cookie has expired', time() - 60);
// Read
/*if (isset($_COOKIE['test'])) {
    echo $_COOKIE['test'];
}
else {
    echo 'No cookies set';
}*/

// 30. Sessions (open session_example.php to see the current session status)
// Indicate that you will use sessions
//session_start();
// Create
//$_SESSION['test_session'] = 'this is a test session';
// Update
//$_SESSION['test_session'] = 'this is an updated test session';
// Delete
// All
//session_unset();
//session_destroy();
// One
//unset($_SESSION['test_session']);

// 31. Array functions
// Filter
/*$array = [
    'usa' => 'english',
    'canada' => 'english',
    'mexico' => 'spanish',
    'spain' => 'spanish',
    'france' => 'french',
    'japan' => 'japanese',
];*/
/* array_filter takes an array, a callback function and the filter mode as arguments. 0 (default) takes the value, ARRAY_FILTER_USE_KEY takes the key and ARRAY_FILTER_USE_BOTH takes both */
/*$filtered_array = array_filter($array, function($value, $key) {
    return $value == 'spanish' || $key == 'japan';
}, ARRAY_FILTER_USE_BOTH);
print_r($filtered_array);*/

// Merge
/* array_merge merges two arrays and returns a new one. If the indexes are numbers, all the items will be kept. If the indexes are strings, the last one with the same index will be kept */
/*$array_a = [
    'best friend' => 'alex',
    'good friend' => 'maria',
    'friend' => 'chema'
];
$array_b = [
    'best friend' => 'cota',
    'good friend' => 'ana',
    'friend' => 'majo'
];
$merged_array = array_merge($array_a, $array_b);
print_r($merged_array);*/

// Map
// Loops through an array and allows to execute a function on each item. Returns a new array
/*$array = ['iphone', 'motorola', 'samsung', 'huawei'];
$mapped_array = array_map(function($item) {
    return 'brand: ' . $item;
}, $array);
print_r($mapped_array);*/

// Chunk
// Splits an array into an array of arrays. You must specify the array, the lenght of each new array and if you want to keep the key names
/*$array = [
    'usa' => 'english',
    'canada' => 'english',
    'mexico' => 'spanish',
    'france' => 'french',
    'japan' => 'japanese',
];
$chunked_array = array_chunk($array, 2, true);
print_r($chunked_array);*/

// Search
// Searches for a specific value and returns the first occurence
/*$array = [
    'usa' => 'english',
    'canada' => 'english',
    'mexico' => 'spanish',
    'france' => 'french',
    'japan' => 'japanese',
];
$key = array_search('spanish', $array);
echo $key;*/

// Replace
// Takes two arrays as arguments and merges them. If a key is in both arrays, keeps the value of the second one
/*$array = [
    'canada' => 'english',
    'mexico' => 'spanish',
    'france' => 'french',
];
$array_2 = [
    'canada' => 'french',
    'mexico' => 'spanish',
    'japan' => 'japanese',
];
$replaced_array = array_replace($array, $array_2);
print_r($replaced_array);*/

// Sort
// There are several methods to sort an array. They don´t create a new array, but modify the original
/*$array = [
    'usa' => 'english',
    'canada' => 'english/french',
    'mexico' => 'spanish',
    'france' => 'french',
    'japan' => 'japanese',
    'chine' => 'chinese'
];*/
// Sort by value in descending order. Delete the keys
//sort($array);
// Sort by value in ascending order. Delete the keys
//rsort($array);
// Sort by key in descending order. Keep the keys
//ksort($array);
// Sort by key in ascending order. Keep the keys
//krsort($array);
// Sort by value in descending order. Keep the keys
//asort($array);
// Sort by value in ascending order. Keep the keys
//arsort($array);
//print_r($array);

// Unique (remove duplicated values)
/*$array = ['javascript', 'python', 'java', 'c#', 'python', 'c#'];
$unique_array = array_unique($array);
print_r($unique_array);*/

// Combine
/* Takes two arrays as arguments and creates a new one. The first array will be the keys and the second will be the values. The lenght of keys and values must be the same or it will return an error*/
/*$keys = ['x', 'y', 'z'];
$values = ['javascript', 'python', 'c#'];
$combined_array = array_combine($keys, $values);
print_r($combined_array);*/

// Reduce
// Converts the array into a single value by aplying an operation. Takes an array, a callback function and an optional initial value
/*$array = [1, 2, 3, 4, 5];
$sum = array_reduce($array, function($carry, $value) {
    return $carry * $value;
}, 1);
echo $sum;*/

// Another option is to use the built-in operational methods, but array_reduce is more flexible
/*$result = array_sum($array);
$result = array_product($array);
echo $result;*/

// Flip
// Converts the keys into values and the values into keys
/*$array = ['english', 'spanish', 'french'];
$flipped_array = array_flip($array);
print_r($flipped_array);*/

// Difference
// Takes two arrays as arguments. Returns the items that are in the first one but not in the second
/*$array_a = [
    1 => 'a',
    2 => 'b',
    3 => 'c',
    4 => 'd'
];
$array_b = [
    1 => 'c',
    2 => 'd',
    5 => 'e',
    6 => 'f'
];*/
// Based on the values
//$diff_array = array_diff($array_a, $array_b);
// Based on the keys
//$diff_array = array_diff_key($array_a, $array_b);
// Based on both
//$diff_array = array_diff_assoc($array_a, $array_b);
//print_r($diff_array);

// Intersect
// Takes two arrays as arguments. Returns the items that are in both arrays
/*$array_a = [
    1 => 'a',
    2 => 'b',
    3 => 'c',
    4 => 'd'
];
$array_b = [
    1 => 'c',
    2 => 'd',
    5 => 'e',
    6 => 'f'
];*/
// Based on the values
//$diff_array = array_intersect($array_a, $array_b);
// Based on the keys
//$diff_array = array_intersect_key($array_a, $array_b);
// Based on both
//$diff_array = array_intersect_assoc($array_a, $array_b);
//print_r($diff_array);

// Change key case
// Adjust the case format of the array keys
/*$array = [
    'spanish' => 'fluent',
    'ENGLISH' => 'advanced',
    'fReNcH' => 'basic'
];
$changedKeyCaseArray = array_change_key_case($array);
print_r($changedKeyCaseArray);*/

// Array to string / string to array
/*$array = ['this', 'array', 'is', 'also', 'a', 'string'];
// Implode takes a separator and an array and creates a string
$string = implode(' ', $array);
//echo $string;
// Explode takes a separator and a string and creates an array
$new_array = explode(' ', $string);
print_r($new_array);*/

// 32. String functions
/*$text = 'this is a sample text';

// Uppercase
$uppercased_text = strtoupper($text);

// Lowercase
$lowercased_text = strtolower($uppercased_text);

// Uppercase first letter of the string
$firstLetterUppercased = ucfirst($lowercased_text);

// Uppercase first letter of each word
$firstLetterOfEachWordUppercased = ucwords($firstLetterUppercased);

// Clean up extra spaces
$text = '   this   is   another   sample   text   ';
$trimmed_text = trim($text);

// New line
// Convert \n to <br>
$nl_text = $trimmed_text . "\nthis is the second line";
$br_text = nl2br($nl_text);

// Remove tags
// Remove html tags from a string
$no_tags_text = strip_tags($br_text);

echo $no_tags_text;*/

// 33. New string functions (PHP 8)
/*$text = 'PHP is a powerful language';
$word = 'PHP';
// Contains
var_dump(str_contains($text, $word));
// Starts with
var_dump(str_starts_with($text, $word));
// Ends with
var_dump(str_ends_with($text, $word));*/

// 34. Classes
/*class Person {
    // Attributes
    private string $name;
    private int $yearBorn;

    // Constructor
    public function __construct(string $name, int $yearBorn)
    {
        $this->name = $name;
        $this->yearBorn = $yearBorn;
    }

    // Methods
    public function getName() {
        return $this->name;
    }
    public function calculateAge() {
        return (int) date('Y') - $this->yearBorn;
    }
}

// 35. Objects
$person1 = new Person('Miguel', 1999);
$name = $person1->getName();
$age = $person1->calculateAge();
echo "$name is $age years old";*/

// 36. Inheritance
/*class Vehicle {
    public int $passengers;

    protected function move() {
        echo "the vehicle is moving";
    }
}
class Car extends Vehicle {
    public int $seats;

    public function turnOn() {
        echo "the car is on";
    }
    public function turnOff() {
        echo "the car is off";
    }
    public function start() {
        $this->move();
    }
}
$mustang = new Car();
$mustang->start();
$mustang_passengers = $mustang->passengers = 4;
echo "<br>The car has $mustang_passengers passengers";*/

// 37. Namespace
// Allows to declare/import two or more classes with the same name in the same file
// Go to the files book.php and movie.php to check the code
/*require_once 'namespace/book.php';
require_once 'namespace/movie.php';
// Both book.php and movie.php have a class "MyClass", but they´re in different namespaces
$book = new Book\MyClass();
$movie = new Movie\MyClass();
$book->rent();
$movie->rent();*/

// 38. Static
// Allows to use a class without creating an object
/*class Person {
    // As no objects will be created, the attributes can be private
    private static string $name = 'Miguel';
    // Declate the function as static
    public static function sayHello() {
        // Use self::$name instead of this->name
        echo 'Hello, my name is ' . self::$name;
    }
}
Person::sayHello();*/

// 39. Method chaining
// Call a method after another - $person->setName()->setAge()->introduce()
/*class Person {
    private string $name;
    private int $age;
    
    public function setName($name) {
        $this->name = $name;
        return $this;
    }
    public function setAge($age) {
        $this->age = $age;
        return $this;
    }
    public function introduce() {
        echo "Hello!, my name is $this->name and I am $this->age years old";
    }
}
$person = new Person();
$person->setName('Miguel')->setAge(24)->introduce();*/

// 40. Interfaces
// Define a structure with some methods
/*interface PersonInterface {
    // Must be public and don´t implement anything, only be defined
    public function sayHello();
}
interface Developer {
    public function code();
}
// Add it to the classes to force them to implement this structure
class Person implements PersonInterface, Developer {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }
    public function sayHello() {
        echo "Hello, my name is Miguel<br>";
    }
    public function code() {
        echo "I am writing code<br>";
    }
}
$person = new Person('Miguel');
$person->sayHello();
$person->code();*/

// 41. Constant
// Variables that cannot change. By convention their name is uppercased
/*class Person {
    const NAME = 'Miguel';
    // This would throw an error
    //NAME = 'Jesus';
}
// Use Class::CONST_NAME to access it
echo Person::NAME;*/

// 42. Abstract class
// Define a structure with some attributes and methods (they can be public or private)
/*abstract class Person {
    protected string $name;

    // This method can be overwritten
    public function setName(string $name) {
        $this->name = $name;
    }
    // This method MUST be overwritten
    abstract protected function sayHello();
}
// Using an abstract class
class Student extends Person {
    public function sayHello() {
        echo "Hi, my name is $this->name";
    }
}
$student = new Student();
$student->setName('Miguel');
$student->sayHello();*/

// 43. Trait
// It´s like a class, but cannot be instantiated
/*trait Person {
    public function speak() {
        echo "Hello, I´m a person<br>";
    }
}
trait Developer {
    public function code() {
        echo "Hello, I´m coding<br>";
    }
}
// Inherit from several traits using the keyword "use"
class Student {
    use Person;
    use Developer;
}
$student = new Student();
$student->speak();
$student->code();*/

// 44. Null safe operator (PHP 8)
/*class Home {
    public $address = 'Hermosillo';
}
class Person {
    public ?Home $home = null;
}

$person = new Person();
// This line throws an error because $home is null
//echo $person->home->address;
// To avoid this, use ? to verify first if $person and $home are not null
echo $person?->home?->address;*/

// 45. Contructor property promotion (PHP 8)
// Declare attributes as constructor parameters
/*class Person {
    // Declare the variable adding the access modifier. You can also add a default value
    public function __construct(private string $name = 'default', private int $age = 20)
    {
        // Don´t need to use $this keyword to access the variables
        if ($name == 'default') {
            echo 'You haven´t changed the name<br>';
        }
        else {
            echo 'You have changed the name<br>';
        }
    }
    public function introduce() {
        echo "Hi, my name is $this->name and I am $this->age years old<br>";
    }
}
$defaultPerson = new Person();
$defaultPerson->introduce();
$defaultPerson = new Person('Miguel', 24);
$defaultPerson->introduce();*/

// 46. Regular expressions
// Match
// Search for matches, returns an array
/*$string = 'hello world, hello udemy';
$pattern = '/hello/';
// preg_match returns the first occurrence of a string or null. preg_match_all returns all the occurrences or null
if (preg_match($pattern, $string, $matches)) {
    print_r($matches);
}
else {
    echo 'No matches found';
}*/

// Replace
// Search and replace in a string or array
/*$string = 'hello world, hello udemy';
$pattern = '/hello/';
$replacement = 'hi';
// Replaces all occurrences by default, but you can modify this adding the number of replacements at the end
$newString = preg_replace($pattern, $replacement, $string, 1);
echo $newString;*/

// 47. Project 7.- Router
// Go to the index.php file in the folder "project_7"

// 48. Validating and sanitizing
// Validate flags return true or false (FILTER_VALIDATE_URL, FILTER_VALIDATE_INT, etc.)
/*$string = 'test@gmail.com';
if (filter_var($string, FILTER_VALIDATE_EMAIL)) {
    echo 'The format is valid';
} else {
    echo 'The format is not valid';
}*/

// Sanitize flags return a new variable (FILTER_SANITIZE_URL, FILTER_SANITIZE_NUMBER_INT, etc.)
/*$string = 't/est  @g/mail.co m';
$sanitized_string = filter_var($string, FILTER_SANITIZE_EMAIL);
echo $sanitized_string;*/

// 49. Database (using PDO)
// Create a connection
//$pdo = new PDO('mysql:host=localhost;dbname=php_course', 'root', '123');

// Insert
/*$affected_rows = $pdo->exec('INSERT INTO example (name) VALUES ("Cota")');
$last_id = $pdo->lastInsertId();
echo "$affected_rows row(s) affected with id $last_id";*/

// Transactions (run a set of queries, if one of them fails, all changes are reverted)
/*$pdo->beginTransaction();
$affected_rows = $pdo->exec('INSERT INTO example (name) VALUES ("Roberto")');
$affected_rows = $pdo->exec('INSERT INTO example (name) VALUES ("Jose")');
$affected_rows = $pdo->exec('INSERT INTO example (name) VALUES ("Vanessa")');
$pdo->commit();*/

// Use "prepare" to make your queries safer and avoid SQL injection
/*$name = 'Jesus';
// Create a query and use "?" for variables
$statement = $pdo->prepare('INSERT INTO example (name) VALUES (?)');
// Bind values to the statement. "1, $name" means that the first "?" will be replaced with the value of $name
$statement->bindValue(1, $name);
// Execute will convert the values to strings, avoiding any SQL injection
$rows_affected = $statement->execute();
echo "$rows_affected row(s) affected";*/

// Update
/*$id = 1;
$name = 'Jesus Miguel';
$statement = $pdo->prepare('UPDATE example SET name=? WHERE id=?');
$statement->bindValue(1, $name);
$statement->bindValue(2, $id);
$rows_affected = $statement->execute();
echo "$rows_affected row(s) affected";*/

// Delete
/*$id = 7;
$statement = $pdo->prepare('DELETE FROM example WHERE id=?');
$statement->bindValue(1, $id);
$rows_affected = $statement->execute();
echo "$rows_affected row(s) affected";*/

// Select
/*$id = 3;
// Fetch all records or use WHERE to filter
$statement = $pdo->prepare('SELECT * FROM example');
//$statement = $pdo->prepare('SELECT * FROM example WHERE id=?');
//$statement->bindValue(1, $id);
$statement->execute();
// fetchAll returns an array of records. "PDO::FETCH_ASSOC" means that the array will be associative
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $row) {
    echo $row["name"] . "<br>";
}*/

// 50. Run command lines
/*exec('whoami', $output, $result_code);
echo 'Output:<br>';
var_dump($output);
echo '<br>Result Code:<br>';
var_dump($result_code);*/

// 51. Run Python files
/*$name = 'miguel';
// escapeshellcmd converts a string into a safe to run command
$command = escapeshellcmd("python ./say_hello.py $name");
exec($command, $output, $result_code);
echo $output[0];*/

// 52. Curl
// Send requests to apis
/*$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => 'https://jsonplaceholder.typicode.com/todos',
    CURLOPT_TIMEOUT => 30,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HEADER => []
]);
$response = curl_exec($curl);
curl_close($curl);*/

?>

<!-- 11. PHP loop and conditional inside HTML -->
<!--<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP inside HTML</title>
    </head>
    <body>
        <?php //$names = ['Pratham', 'Simon', 'Amir', 'Vitto', 'Oliver'] ?>
        <h1>Names</h1>
        <ul>
            <?php //foreach ($names as $name) : ?>
                <?php //if ($name != 'Simon') : ?>
                    <li>
                        <?php //echo $name ?>
                    </li>
                <?php //endif ?>
            <?php //endforeach ?>
        </ul>
    </body>
</html>-->

<!-- 27. Forms -->
<!--<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forms</title>
    </head>
    <body>
        <h1>Print name</h1>
        <form method="POST">
            <input type="text" name="name" placeholder="type your name" />
            <input type="submit" value="Send" />
        </form>
        <?php
            /*if (!empty($_POST['name'])) {
                $name = $_POST['name'];
                echo '<h3>Hello ' . $name . '!</h3>';
            }
            else {
                echo '<h3>Hello strange!</h3>';
            }*/
        ?>
    </body>
</html>-->

<!-- 28. Project 6.- Contact form -->
<!--<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact form</title>
    </head>
    <body>
        <h1>Contact form</h1>
        <form method="POST">
            <input type="text" name="name" placeholder="name" />
            <input type="text" name="email" placeholder="email" />
            <input type="text" name="message" placeholder="message" />
            <input type="submit" value="Submit" />
        </form>
        <?php
            /*if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
                $array = [
                    "name" => $_POST['name'],
                    "email" => $_POST['email'],
                    "message" => $_POST['message'],
                    "date" => date('d-m-y h:i:s')
                ];
                $json = json_encode($array);
                echo $json;
            }
            else {
                echo 'All fields are required';
            }*/
        ?>
    </body>
</html>-->
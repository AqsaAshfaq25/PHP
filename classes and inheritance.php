<?php
// 1. Create a class called "Person" that has properties for first name, last name, and age. Add
// methods for getting and setting each of these properties.

echo "<h4>1) Output Of Person Class:</h4>";
class person{
 public $F_Name, $L_Name, $Age;

 function __construct($F_Name, $L_Name, $Age){
    $this->F_Name=$F_Name; 
    $this->L_Name=$L_Name;      
    $this->Age=$Age;      
 }
 function getdata(){
    echo $this->F_Name."<br>";
    echo $this->L_Name."<br>";
    echo $this->Age."<br>";
 }
}
$person= new person("Aqsa","Ashfaq",21);
$person->getdata();

// 2. Create another class called "Employee" that inherits from the "Person" class. 
// Add a property for the employees job title and a method for getting and setting it.

class employee extends person{
    public $jobtitle;

    function __construct($jobtitle){
        $this->jobtitle=$jobtitle;
    }
    function getdata(){
        echo $this->jobtitle."<br>";
    }
}
$employee = new employee("Project Manager");
$employee->getdata();
// echo "<br>";

// 3. Create a class called "Car" that has properties for make, model, year, and color. 
// Add methods for getting and setting each of these properties.

echo "<h4>2) Output Of Car Class:</h4>";
class car{
    public $model, $year, $color;

    function __construct($model, $year, $color){
        $this->model=$model;
        $this->year=$year;
        $this->color=$color;
    }
    function getdata(){
        echo $this->model."<br>";
        echo $this->year."<br>";
        echo $this->color."<br>";
    }
}
$car = new car("Honda CR-V",2023,"gray");
$car->getdata();
// echo "<br>";

// 4. Create a class called "BankAccount" that has properties for the account balance and owner. 
// Add methods for depositing and withdrawing money from the account.

echo "<h4>3) Output Of BankAccount Class:</h4>";
class BankAccount{
    public $BankBalance = 0, $owner;

    function __construct($owner){
        $this->owner = $owner;
    }
    function getdata(){
        echo $this->owner."<br>";
    }
    function deposite($deposite){
        $this->BankBalance += $deposite;
    }
    function withdraw($withdraw){
        $this->BankBalance -= $withdraw;
    }

    function getBalance()
    {
        echo $this->BankBalance;
    }
}
$BankBalance = new  BankAccount("Sana");
$BankBalance->getdata();
$BankBalance->deposite(1000);
$BankBalance->getBalance();
$BankBalance->withdraw(700);
// $BankBalance->getBalance();

// 5. Create a class called "Rectangle" that has properties for the length and width. 
// Add methods for calculating the area and perimeter of the rectangle.

echo "<h4>4) Output Of Rectangle Class:</h4>";
class Rectangle{
    public $length, $width, $area, $perimeter;

    function __construct($length ,$width){
        $this->length=$length;
        $this->width=$width;
    }
    function getarea($length,$width){
        $this->area=bcmul($length,$width);
      }
      function getperimeter($length,$width){
        $this->length=$length;
        $this->width=$width;
        $this->perimeter=2*($length+$width);
      }
    function getdata1(){
        echo "~ Area Of Rectangle with length = "  .$this->length . " &  width = " .$this->width .  " is " . $this->area.".<br>";
    }
    function getdata2(){
        echo "~ Perimeter Of Rectangle with length = "  .$this->length . " &  width = " .$this->width .  " is " . $this->perimeter.".";
    }
}
$Rectangle = new Rectangle(14,36);
$Rectangle->getarea(14,36);
$Rectangle->getdata1(); 
$Rectangle->getperimeter(20,76);
$Rectangle->getdata2(); 

?>
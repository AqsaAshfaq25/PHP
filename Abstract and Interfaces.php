<?php 
// 1. Create an abstract class called "Shape" that has an abstract method called "calculateArea".
// Then, create concrete classes for different shapes such as "Rectangle", "Triangle", and "Circle",
// that implement the "calculateArea" method.

echo "<h4>1) Output Of Abstract Class of Shape:</h4>";
abstract class Shape{
    public $length,$width,$height,$base,$pie,$radius;

    abstract function calculateArea($length,$width);
}

class Rectangle extends Shape{
    function calculateArea($length,$width){
        $this->length=$length;
        $this->width=$width;
        $this->area=bcmul($length,$width);
    }
    function getdata1(){
        echo "~ Area Of Rectangle with length = "  .$this->length . " &  width = " .$this->width .  " is " . $this->area.".<br>";
    }
    
}
class Triangle extends Shape{
    function calculateArea($height,$base){
        $this->height=$height;
        $this->base=$base;
        $this->AreaofCircle=($height*$base)/2;
    }
    function getdata2(){
        echo "~ Area Of Triangle with height = "  .$this->height . " &  base = " .$this->base .  " is " . $this->AreaofCircle.".<br>";
    }
}
class Circle extends Shape{
    function calculateArea($pie,$radius){
        $this->pie=$pie;
        $this->radius=$radius;
        $this->AreaofCircle=2*$pie*$radius;
    }
    function getdata3(){
        echo "~ Area Of Circle with pie = "  .$this->pie . " &  radius = " .$this->radius .  " is " . $this->AreaofCircle.".<br>";
    }
}
$rectangle = new Rectangle(24,15);
$rectangle->calculateArea(24,15);
$rectangle->getdata1();

$triangle = new Triangle(14,36);
$triangle->calculateArea(14,36);
$triangle->getdata2();

$triangle = new Circle(3.141,20);
$triangle->calculateArea(3.141,20);
$triangle->getdata3();

// 2. Create an interface called "PaymentMethod" that defines methods for making a payment, such as 
// "pay" and "getPaymentDetails". Then, create concrete classes for different payment methods such as 
// "CreditCard", "DebitCard", and "PayPal", that implement the "PaymentMethod" interface.

echo "<h4>2) Output Of Interface Class of PaymentMethod:</h4>";
interface PaymentMethod{
    function pay($pay);
    function getPaymentDetails($CardHolderName,$CardNumber,$ExpDate,$CVV,$Country);
}
class CreditCard implements PaymentMethod{
    function pay($pay){
    $this->pay=$pay;
    }
    function getPaymentDetails($CardHolderName,$CardNumber,$ExpDate,$CVV,$Country){
        $this->CardHolderName=$CardHolderName;
        $this->CardNumber=$CardNumber;
        $this->ExpDate=$ExpDate;
        $this->CVV=$CVV;
        $this->Country=$Country;
    }
    function show1(){
        echo $this->pay."<br>";
        echo $this->CardHolderName."<br>";
        echo $this->CardNumber."<br>";
        echo $this->ExpDate."<br>";
        echo $this->CVV."<br>";
        echo $this->Country."<br>";
    }
}
$CreditCard= new CreditCard();
$CreditCard->pay("Paid 3450 PKR through Credit Card.");
$CreditCard->getPaymentDetails("Ali","4242 4242 4242 4242","04/23","422","Pakistan");
$CreditCard->show1();
echo "<br>";

class DebitCard implements PaymentMethod{
    function pay($pay){
    $this->pay=$pay;
    }
    function getPaymentDetails($CardHolderName,$CardNumber,$ExpDate,$CVV,$Country){
        $this->CardHolderName=$CardHolderName;
        $this->CardNumber=$CardNumber;
        $this->ExpDate=$ExpDate;
        $this->CVV=$CVV;
        $this->Country=$Country;
    }
    function show2(){
        echo $this->pay."<br>";
        echo $this->CardHolderName."<br>";
        echo $this->CardNumber."<br>";
        echo $this->ExpDate."<br>";
        echo $this->CVV."<br>";
        echo $this->Country."<br>";
    }
}
$DebitCard= new DebitCard();
$DebitCard->pay("Paid 3450 PKR through Debit Card.");
$DebitCard->getPaymentDetails("Ayesha","7853 7853 7853 7853","06/24","732","Pakistan");
$DebitCard->show2();
echo "<br>";

class PayPal implements PaymentMethod{
    function pay($pay){
    $this->pay=$pay;
    }
    function choose($methods,$DebitCard,$CreditCard){
        $this->methods=$methods;
        $this->DebitCard=$DebitCard;
        $this->CreditCard=$CreditCard;
    }
    function getPaymentDetails($CardHolderName,$CardNumber,$ExpDate,$CVV,$Country){
        $this->CardHolderName=$CardHolderName;
        $this->CardNumber=$CardNumber;
        $this->ExpDate=$ExpDate;
        $this->CVV=$CVV;
        $this->Country=$Country;
    }
    function show3(){
        echo $this->pay."<br>";
        echo $this->methods."<br>";
        echo $this->DebitCard."<br>";
        echo $this->CreditCard."<br>";
        echo $this->CardHolderName."<br>";
        echo $this->CardNumber."<br>";
        echo $this->ExpDate."<br>";
        echo $this->CVV."<br>";
        echo $this->Country."<br>";
    }
}
$PayPal= new PayPal();
$PayPal->pay("Paid 3450 PKR through PayPal.");
$PayPal->choose("Choose Payment Method In PayPal:","1) DebitCard","2) CreditCard");
$PayPal->getPaymentDetails("Usman","9512 9512 9512 9512","10/23","155","Pakistan");
$PayPal->show3();


// 3. Create an abstract class called "Animal" that has properties for the animal"s name, age, and 
// species. Then, create concrete classes for different animals such as "Dog", "Cat", and "Horse",
// that inherit from the "Animal" class.

echo "<h4>3) Output Of Abstract Class of Animal:</h4>";
abstract class Animal{
    public $name, $age, $species;

    abstract function Animal($name, $age, $species);
}
class Dog extends Animal{
    function Animal($name, $age, $species){
        $this->name=$name;
        $this->age=$age;
        $this->species=$species;
    }
    function data1(){
        echo $this->name."<br>";
        echo $this->age."<br>";
        echo $this->species."<br>";
    }
}
class Cat extends Animal{
    function Animal($name, $age, $species){
        $this->name=$name;
        $this->age=$age;
        $this->species=$species;
    }
    function data2(){
        echo $this->name."<br>";
        echo $this->age."<br>";
        echo $this->species."<br>";
    }
}
class Horse extends Animal{
    function Animal($name, $age, $species){
        $this->name=$name;
        $this->age=$age;
        $this->species=$species;
    }
    function data3(){
        echo $this->name."<br>";
        echo $this->age."<br>";
        echo $this->species."<br>";
    }
}
echo "<h5>Output Of Dog Class.</h5>";
$Dog = new Dog();
$Dog->Animal("German Shepherd."," 12-13 years old.","Canis lupus familiaris.");
$Dog->data1();

echo "<h5>Output Of Cat Class.</h5>";
$Cat = new Cat();
$Cat->Animal("Himalayan Cat."," 9-15 years old.","Species of Persian and Siamese.");
$Cat->data2();

echo "<h5>Output Of Horse Class.</h5>";
$Horse = new Horse();
$Horse->Animal("Blazer horse."," 25 – 30 years old.","Oldenberg.");
$Horse->data3();


// 4. Create an interface called "Vehicle" that defines methods for getting the vehicle"s details, such
// as "getMake", "getModel", and "getYear". Then, create concrete classes for different vehicles
// such as "Car", "Truck", and "Motorcycle", that implement the "Vehicle" interface.

echo "<h4>4) Output Of Interface Class of Vehicle:</h4>";
interface Vehicle{
    function VehicleDetails($getMake,$getModel,$getYear);
}
class Car implements Vehicle{
    function VehicleDetails($getMake, $getModel, $getYear){
        $this->getMake=$getMake;
        $this->getModel=$getModel;
        $this->getYear=$getYear;
    }
    function show(){
        echo $this->getMake."<br>";
        echo $this->getModel."<br>";
        echo $this->getYear."<br>";
    }
}
echo "<h5>Output Of Car Class.</h5>";
$car = new car();
$car->VehicleDetails("Civic Sedan.","2023 Model.","Made Since 1972.");
$car->show();

class Truck implements Vehicle{
    function VehicleDetails($getMake, $getModel, $getYear){
        $this->getMake=$getMake;
        $this->getModel=$getModel;
        $this->getYear=$getYear;
    }
    function show(){
        echo $this->getMake."<br>";
        echo $this->getModel."<br>";
        echo $this->getYear."<br>";
    }
}
echo "<h5>Output Of Truck Class.</h5>";
$Truck = new Truck();
$Truck->VehicleDetails("ISUZU F Series Truck.","2023 Model.","Made Since 1970.");
$Truck->show();

class Motorcycle implements Vehicle{
    function VehicleDetails($getMake, $getModel, $getYear){
        $this->getMake=$getMake;
        $this->getModel=$getModel;
        $this->getYear=$getYear;
    }
    function show(){
        echo $this->getMake."<br>";
        echo $this->getModel."<br>";
        echo $this->getYear."<br>";
    }
}
echo "<h5>Output Of Motorcycle Class.</h5>";
$Motorcycle = new Motorcycle();
$Motorcycle->VehicleDetails("BMW M1000RR Motorcycle.","2023 Model.","Made In September 2020");
$Motorcycle->show();



// 5. Create an abstract class called "Employee" that has properties for the employee"s name, job
// title, and salary. Then, create concrete classes for different types of employees such as
// "FullTimeEmployee", "PartTimeEmployee", and "FreelanceEmployee", that inherit from the "Employee" class.

echo "<h4>5) Output Of Abstract Class of Employee:</h4>";
abstract class Employee{

    public $name, $Jobtitle, $salary;

    abstract function employee($name, $Jobtitle, $salary);
}
class FullTimeEmployee extends Employee{
    function employee($name, $Jobtitle, $salary){
        $this->name=$name;
        $this->Jobtitle=$Jobtitle;
        $this->salary=$salary;
    }
    function showdata(){
        echo $this->name."<br>";
        echo $this->Jobtitle."<br>";
        echo $this->salary."<br>";
    }
}
class PartTimeEmployee extends Employee{
    function employee($name, $Jobtitle, $salary){
        $this->name=$name;
        $this->Jobtitle=$Jobtitle;
        $this->salary=$salary;
    }
    function showdata(){
        echo $this->name."<br>";
        echo $this->Jobtitle."<br>";
        echo $this->salary."<br>";
    }
}
class FreelanceEmployee extends Employee{
    function employee($name, $Jobtitle, $salary){
        $this->name=$name;
        $this->Jobtitle=$Jobtitle;
        $this->salary=$salary;
    }
    function showdata(){
        echo $this->name."<br>";
        echo $this->Jobtitle."<br>";
        echo $this->salary."<br>";
    }
}
$FullTimeEmployee = new FullTimeEmployee();
echo "<h5>Full Time Employee.</h5>";
$FullTimeEmployee->employee("Farhan Khalid.","Web Designer.","45,917 PKR per month.");
$FullTimeEmployee->showdata();

$PartTimeEmployee = new PartTimeEmployee();
echo "<h5>Part Time Employee.</h5>";
$PartTimeEmployee->employee("Maham Fareed.","Marketing Coordinator."," 37,845 PKR per month.");
$PartTimeEmployee->showdata();

$FreelanceEmployee = new FreelanceEmployee();
echo "<h5>Freelancer Employee.</h5>";
$FreelanceEmployee->employee("Syed Bilal.","Project Manager.","46,198 PKR per month.");
$FreelanceEmployee->showdata();

?>
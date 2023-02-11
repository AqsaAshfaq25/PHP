<?php 

// 1) What is a class in php?

// A class is a user-defined data type which includes local variables(known as properties) and
// local methods which can be use as many times as we want. And class act as a blueprint or template 
// for the creation of object(means detailed plan of object). A class is created by using the keyword 
// 'class', followed by the class name and a pair of curly brackets({}). In which properties and methods
//  go inside the bracket of the class and the class name should not contain any spaces.


//  Following is a basic syntax of a class in php:

class book #book is the name of a class.
{
    // Properties
    public $name,$pages,$author,$price;
    // Methods  
    function set_data($name,$pages,$author,$price){
        $this->name=$name;
        $this->pages=$pages;
        $this->author=$author;
        $this->price=$price;
    }

    function getdata(){
        echo $this->name."<br>";
        echo $this->pages."<br>";
        echo $this->author."<br>";
        echo $this->price."<br>";
    }

}

// 2) How do you create an object from a class in PHP?

// Once a class is defined, any number of objects can be created for the class type. To create an object
//  from a class we have to use a 'new' operator.

// Following is a basic syntax to create an object in php:

$book=new book();
$book->set_data("Bang-e-Dara","295 pages","Dr Alama Muhammad Iqbal","400 Rs/-");
$book->getdata();

echo "<br>";


// 3) What is a constructor in PHP and when is it called?

// Constructors are the blueprints for object creation providing values for member functions and 
// member variables. A constructor is usually declared as public and named as  '__construct'. 
// This method should always start with two underscores(__). The __construct() method will be called
//  automatically when an object is created for the class.

// Following is a __construct() method in a class in php:

class perfume{
    public $Name,$Brand,$Category,$Price;
   // syntax:
    function __construct($Name,$Brand,$Category,$Price) #declare construtor function
    {
      $this->Name=$Name; 
      $this->Brand=$Brand;      
      $this->Category=$Category;      
      $this->Price=$Price;
    }
}

    $perfume=new perfume("POUR FEMME","J.","Floral Fruity","4,500.00 Rs/-");
    print_r($perfume); 
    echo "<br><br>"; 


    // 4) What is a destructor in PHP and when is it called?

    // A Destructor is a function used for deleting the object instance that was created by a constructor
    //  for a given class, A destructor is called when an object is to be removed or has gone out of scope.
    // As with constructor, a destructor too should start with two underscores(__).If an object contains
    // __destruct() method, it will be also called automatically by php at the end of the script.

    // Following is a __destruct() method in a class in php:

    
    class House {
        public $name,$color;

        function __construct($name, $color) {
            $this -> name = $name;
            $this -> color = $color;
        }
        function __destruct() #to deleting the object use __destruct() function
        {
            echo "<br><br>";
            echo "The color of the {$this -> name} is {$this -> color}";
        }
     }
     $blackHouse = new House("John's House", "black");


    // 5) How do you access properties of an object in PHP?

    // To access an object property we have to use "$this->" property. The pseudo-variable "$this" is 
    // available inside any class method when that method is called from within an object context. 
    // "$this" is the value of the calling object. Or if you have an object in another object you just
    //  have to use multiple of it "->" to get to your object property .
    
    // following is a syntax to access a property of an object:

    class city {
        public $name,$country;
        function set_data($name, $country) {
            // syntax
            $this -> name = $name; #that's how we access the properties of an object
            $this -> country = $country; 
        }
        function getdata(){
            echo $this->name."<br>";
            echo $this->country."<br>";
        }
     }
     $city=new city();
     $city->set_data("New York ;","America");
     $city->getdata();
     
     echo "<br>";
     

// 6) How do you call methods of an object in PHP?

// To call any method of an object instantiated from a class (with statement new), you need to “point” 
// to it. From the outside you just use the resource created by the new statement. Inside any object 
// PHP created by new, saves the same resource into the "$this" variable. So, inside a class you MUST
//  point to the method by "$this".It's kind of the way of dealing with objects in PHP. 

// syntax
class tree
{
function fruit()
{
echo "we get fruits from a tree.";
}
}

$mango= new tree;

$mango->fruit(); # We invoke this fruit() method on the $mango object using "->" in between the object 
                # and the method.

// echo "<br><br>"

// 7) What is the difference between a constructor and a destructor in PHP?

// A constructor helps in initialization of an object, i.e., it allocates memory to an object. 
// On the other hand, a destructor deletes the created constructor when it is of no use which means it
//  deallocates the memory of an object. So, This is the difference between of both methods


// 8) Can a class have multiple constructors in PHP?

// PHP does not support function signatures like Java, so you can't write multiple __construct()
// functions with different signatures. But in somehow we can use it as far as usage is concerned, 
// using different techniques, you may call multiple constructors using parent child relation.


// 9) Can a class have multiple destructors in PHP?

// Well, the simple answer is, 'NO' Multiple constructors can be exist in a class. But Only one 
// Destructor can exist in a class. Another unique feature of it is that even if the script has stopped
//  its execution with the help of an 'exit()' command, the destructor will still be called.This exit() 
// command will not allow the leftover shutdown methods from quitting.


// 10) What is the syntax for creating a constructor method in PHP?

// Constructors are the very basic building blocks that define the future object and its nature.
// Note: The constructor is defined in the public section of the Class. Even the values to properties
//  of the class are set by Constructors.

// Following is a syntax for creating a constructor method in PHP:

class Someclass{
 #properties
 public $objectProperty; #Objects properties of class will coming here  ;

 #syntax
 function __construct($objectProperty){ # The constructor is called when object is created.The same  
                                       # objects will also come inside the __construct method brackets.
        // echo "In constructor, ";
        $this->objectProperty = $objectProperty;
    }
}
$obj = new Someclass("new object name will set inside here");
    


// 11) What is the syntax for creating a destructor method in PHP?

// In PHP, you use the public keyword, then function, then __destruct () to construct a destructor method.
//  The word destruct () has two underscores (__). function __destruct ().And remember that after declare
//  the construction method then the destruction method will be declare.

class shoe{
    public $name,$color;
  
    function __construct($name) {
      $this->name = $name;
    }
    function __destruct() # so, here is the syntax for creating a destructor method!
    {
      echo "Nike {$this->name} are very comfortable.";
    }
  }
  
  $sandals = new shoe("sandals");
  
echo "<br><br>"


// 12) Can you pass arguments to a constructor in PHP?

// Constructors can accept the arguments, in which case, when the new statement is written, you also need
//  to send the constructor arguments for the parameters.

// 13) How do you destroy an object in PHP?

// Using the PHP __destruct() function, we can delete an object. So with the PHP __destruct() function, 
// putting the object that we want to delete as the parameter to this function, we can delete this object.

// 14) Can you create an object without calling the constructor in PHP?

// De-Serialization creates objects without calling constructors. We can use the same mechanism to create
//  objects at will, without ever calling their constructors.

// 15) What is the purpose of using a constructor in PHP?

// The purpose of using the constructor is to force this data to be given to the object at instantiation 
// time and disallow any objects without such data. The benefit of this approach is that you don’t have to
//  call setter methods later on to initialize the object's properties after an object is created. So if
//   you think that an object must have a few properties set, a constructor method is the way to go.

// 16) What is the purpose of using a destructor in PHP?

// The purpose of using a destructor in php if we want to delete or destruct an object then we use 
// destructor or a destructor method always started after the constructor method A destructor is called 
// when the object is destructed/deleted or the script is stopped or exited.  

?>
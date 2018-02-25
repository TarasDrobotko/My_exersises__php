<?php
/*class Student {
    
    public $name;
    public $results;
    
    function __construct($name, array $results) {
        echo '<br>Student ' . $name . ':';
        foreach($results as $subject=>$item) { 
          echo '<br>'. $subject . ': ' . $item;
        }
        echo '<hr>';
    }
}

$student1 = new Student('John', array('math'=> 3, 'biology'=> 4));
$student2 = new Student('Mary', array('math'=> 4, 'biology'=> 4));
$student2 = new Student('Mark', 1);*/
/*abstract class Human {
    
    abstract public function printHello();
}

class Student extends Human {
    public function printHello($name="Nick") {
        echo "Hello, student $name";
    }
    
}

$student1 = new Student;
$student1->printHello("Олег");*/

interface Vehicle {
    
    public function info();
}

interface Car extends Vehicle {
    public function drive();
}

interface Boat extends Vehicle {
    public function swim();
}

class Audi implements Car {
    public function info() {
        echo "<br> Audi is a German automobile manufacturer.";
    }
    public function drive() {
        echo "<br>Audi drives!";
    }
}
$audi1 = new Audi;
$audi1->info();
$audi1->drive();
?>




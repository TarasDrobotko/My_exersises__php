<?php
class User {
    protected $name;
    protected $age;
    
    public function setName($name) {
        $this->name = $name;
    }
            
    public function getName() {
        return $this->name;
    }
            
    public function setAge($age) {
         $this->age = $age;
    }
    
    public function getAge() {
        return $this->age;
    }
}

class Worker extends User {
 private $salary;
 
 public function setSalary($salary) {
         $this->salary = $salary;
    }
    
    public function getSalary() {
        return $this->salary;
    }
}

class Student extends User {
    private $stipend;
    private $course;
    
    public function setStipend($stipend) {
        $this->stipend = $stipend;
    }
    
    public function getStipend() {
        return $this->stipend;
    }
    
    public function setCourse($course) {
        $this->course = $course;
    }
    
    public function getCourse() {
        return $this->course;
    }
}

$worker_ivan = new Worker();
	$worker_ivan->setSalary(1000);
	$worker_ivan->setName('Іван'); //метод родителя
	$worker_ivan->setAge(25); //метод родителя
        
$worker_vasya = new Worker();
	$worker_vasya->setSalary(2000);
	$worker_vasya->setName('Вася'); //метод родителя
	$worker_vasya->setAge(26); //метод родителя
        
echo $worker_ivan->getSalary() + $worker_vasya->getSalary();


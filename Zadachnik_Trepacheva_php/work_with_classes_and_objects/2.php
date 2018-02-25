<?php
class Worker {
    private $name;
    private $age;
    private $salary;
    
   public function  setName($name) {
       $this->name = $name;
   }
   
   public function getName() {
       return $this->name;
   }
   
   public function setAge($age) {
       if ($this->checkAge($age)) {
        $this->age = $age;
       }
   }
   public function getAge() {
       return $this->age;
   }
   public function setSalary($salary) {
       $this->salary = $salary;
   }
   public function getSalary() {
       return $this->salary;
   }
   private function checkAge($age) {
      if($age <= 100 and $age >= 1) 
          return true;
   else 
       return false;
   }
}

$ivan = new Worker();
$ivan->setAge(25);
$ivan->setName('Іван');
$ivan->setSalary('1000');
$vasya = new Worker();
$vasya->setAge(260);
$vasya->setName('Вася');
$vasya->setSalary('2000');

echo $ivan->getAge() .'<br>';
echo $vasya->getAge(). '<br>';
echo $ivan->getAge() + $vasya->getAge(). '<br>';
echo $ivan->getSalary() + $vasya->getSalary();

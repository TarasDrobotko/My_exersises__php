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

class Driver extends Worker {
    private $driver_experience;
    private $driver_category;
    
   public function setDriverExperience($driver_experience) {
         $this->driver_experience = $driver_experience;
    }
    
    public function getDriverExperience() {
        return $this->driver_experience;
    } 
    
    public function setDriverCategory($driver_category) {
         $this->driver_category = $driver_category;
    }
    
    public function getDriverCategory() {
        return $this->driver_category;
    } 
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


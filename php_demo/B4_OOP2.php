<?php
    class Person{
        private $name;
        private $age;
        public function __construct($name, $age){
            $this ->name=$name;
            $this ->age=$age;
        }
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this -> name=$name;
        }

        public function getAge(){
            return $this->age;
        }
        public function setAge($age){
            $this -> name=$age;
        }

        public function __toString(){
            return 'Name: '.$this->name.'<br>'.'age: '.$this->age.'<br>';
        }
    }

    // $person1 = new Person('Duc', 24);
    // echo $person1;

    class Student extends Person {
        private $GPA;
        public function getGPA(){
            return $this ->GPA;
        }
        public function setGPA($GPA){
            $this->GPA=GPA;
        }
    }
    class Teacher extends Person {
        private $number;
        public function getnumber(){
            return $this ->number;
        }
        public function setnumber($number){
            $this->number=number;
        }
    }
    $student = new student ('Duc', 24);
    // $student->setGPA(8.5);
    echo $student;
    echo '<br>';
    $teacher = new teacher ('Truong', 43);
    echo $teacher;
?>
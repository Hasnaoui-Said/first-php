<?php
    
    class Car{

        // atribuutes proprieties
        public $name ;
        private $horse ;
        protected $acceleration ;
        private $motor = 'Normal' ;
        // Constructeurs
        public function __construct($name, $horse, $acceleration){
            $this->name = $name;
            $this->horse = $horse;
            $this->acceleration = $acceleration;
        }
        // Methodes

        public function acceleration(){
            $this->acceleration +=10;
        }

        public function getName(){
            return $this->name;
        }
        // Destuct
        // public function __destruct(){
        //     echo "<br/>$this->name removed ";
        // }
        // clone
        public function __clone(){
            echo "<br/>$this->name Cloned ";
        }
        public function setName($name){
            $this->name = $name;
        }

        public function getHorse(){
            return $this->horse;
        }
        public function setHorse($horse){
            $this->Horse = $horse;
        }
        public function getAcceleration(){
            return $this->acceleration;
        }
        public function setAcceleration($acceleration){
            $this->acceleration = $acceleration;
        }
        public function getMotor(){
            return $this->motor;
        }
        public function setMotor($motor){
            $this->motor = $motor;
        }
        public function message(){
            return "This Car Name is : $this->name, acceleration in $this->acceleration";
        }

    }
    // print_r(get_class_vars('Car'));
    // print_r(get_class_methods('Car'));
    $car_1 = new Car("Audi", 230, 0);
    $car_2 = new Car("Audi", 560, 0);

    // accees au parr public
    // echo $car_1->name .'<br/>';
    // echo $car_1->horse .'<br/>';
    // echo $car_1->acceleration .'<br/>';

    // echo get_class($car_1);
    // $car_1->acceleration = 500;
    $car_1->setAcceleration(500);
    // $car_1->acceleration();
    // echo $car_1->getName() .'<br/>';
    // echo $car_1->getHorse() .'<br/>';
    // echo $car_1->getAcceleration() .'<br/>';

    class Suv extends Car {
        private $offRoad;

        // la rodifinition (Overriding Proprietes et Mehods)
        private $motor = 'Hybrid' ;
        public function __construct($name, $horse, $acceleration, $offRoad){
            $this->offRoad = $offRoad;
            parent::__construct($name, $horse, $acceleration);
        }
        public function getOffRoad(){
            return $this->offRoad;
        }
        public function setOffRoad($offRoad){
            $this->offRoad = $offRoad;
        }
        public function message(){
            return "This Suv Name is : $this->name, acceleration in $this->acceleration";
        }
    }

    $quattro = new Suv("Mercides", 320, 0, 5);
    $quattro->setAcceleration(190);
    $quattro->setName('Ferari');
    echo $quattro->message();
    // echo $quattro->getAcceleration();

    // Clone Destruct
    // unset($car_1);
    // unset($car_2);
    // unset($quattro);

    // clone = copy un object
    $car_3 = clone $car_1;

?>
        <?php
        class Dog{
        public $numLegs = 4;
        public $name;
        public function __construct($name){
            $this->name = $name;
        }
        public function bark(){
            return "Woof!";
        }
        public function greet(){
            return "Woof.. Woof.. My name is " . $this->name . " Woof!!";
        }
        }
        $dog1 = new Dog('Barker');
        $dog2 = new Dog('Amigo');
        echo $dog1->bark() . "<br>";
        echo $dog2->greet();
        ?>

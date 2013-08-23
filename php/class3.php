        <?php
        class person {
            public $isAlive = true;
            public $firstname;
            public $lastname;
            public $age; 
        public function __construct($firstname, $lastname, $age) {
    	$this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        }
        public function greet() {
        return "Hello, my name is " . $this->firstname . "  " . $this->lastname . ". Nice to meet you :-) ";
        }
        }
        $teacher = new person('boring','12345',12345);
        $student = new person('Nilux','opensource',30);
        echo $teacher->isAlive . "<br>";
        echo $student->age . "<br>";
        echo $teacher->greet(). "<br>";
        echo $student->greet(). "<br>"
        ?>

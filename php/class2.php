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
        }
        
        $teacher = new person('boring','12345',12345);
        $student = new person('Nilux','opensource',30);
        
        echo $teacher->isAlive . "<br>";
        echo $student->age;
        ?>

<?php
class person {
	public $isAlive = true;
        public $firstname;
        public $lastname;
        public $age;
            
        }
        $teacher = new person($isAlive);
        $student = new person();
        
        echo $teacher->isAlive;
        ?>

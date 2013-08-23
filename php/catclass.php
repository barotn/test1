        <?php
          // Your code here
        class cat{
            public $isAlive = true;
            public $numLegs = 4;
            public $name;
        public function __construct($name){
            $this->name = $name;
        }
        public function meow(){
            return "Meow meow";
        }
        }
        $cat1 = new cat('CodeCat');
        echo $cat1->meow();
        ?>

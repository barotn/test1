      <?php
        class Vehicle {
          public function honk() {
            return "HONK HONK!";
          }
        }
        // Add your code below!
        class Bicycle extends Vehicle {
          public function honk() {
            return "Beep beep!";
            } 
        }
        $bicycle = new Bicycle();
        if (method_exists ($bicycle, "honk")){
            echo $bicycle->honk();
        }
      ?>

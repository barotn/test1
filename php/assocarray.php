      <?php    
        $food = array('pizza', 'salad', 'burger');
        $salad = array('lettuce' => 'with',
                   'tomato' => 'without',
                   'onions' => 'with');
    
      // Looping through an array using "for".
      // First, let's get the length of the array!
      $length = count($food);
    
      // Remember, arrays in PHP are zero-based:
      for ($i = 0; $i < $length; $i++) {
        echo $food[$i] . '<br />';
      }
    
      echo '<br /><br />I want my salad:<br />';
    
      // Loop through an associative array using "foreach":
      foreach ($salad as $ingredient=>$include) {
        echo $include . ' ' . $ingredient . '<br />';
      }
    
      echo '<br />';
    
      // Create your own array here and loop
      // through it using foreach!
        $sports = array('Cricket' => 'play', 
        'Badminton' => 'play', 
        'Tennis' => 'Don\'t play');
      echo '<br />I Like to play : <br />';
      foreach ($sports as $sport=>$play) {
          echo $play .' '. $sport . '<br />'; 
          
      }

      ?>

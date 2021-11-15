<HTML>
  
   <BODY>
     
      <?php
      
        // a

        $array[0] = "Patata";
        $array[1] = "Jamón";
        $array[2] = "Demacia";
        $array[4] = "Pakete";
        $array[6] = "Mamerto";

        // b

        $array[] = "Extra";

        // c

        echo $array[7];

        // d

        echo "<br>Cantidad de elementos en el array: ", count($array);

        // e

        echo "<br>", var_dump($array);

        // f

        asort($array);

        // g

        echo "<br>", var_dump($array);

        // h

        echo "<br>",current($array);
        echo "<br>",next($array);
        echo "<br>",next($array);
        echo "<br>",next($array);
        echo "<br>",next($array);
        echo "<br>",next($array);

      ?>
     
   </BODY>

</HTML>
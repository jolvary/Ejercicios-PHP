<HTML>
  
   <BODY>
     
      <?php
      
        // a
      
        $contactos["Flaré"] = "721-621-302";
        $contactos["Resmu"] = "281-418-769";
        $contactos["Carlos"] = "420-241-873";
        $contactos["Brucé"] = "706-719-523";
        $contactos["Acandipola"] = "769-189-331";
        $contactos["Joan"] = "584-698-213";

        // b

        echo "<br>El número de Acandipola es: ", $contactos["Acandipola"];

        // c

        echo "<br>El número de elementos en el array es de: ", count($contactos);

        // d

        echo "<br>", var_dump($contactos);

        // e

        asort($contactos);

        // f

        echo "<br>", var_dump($contactos);

        // g

        echo "<br>",current($contactos);
        echo "<br>",next($contactos);
        echo "<br>",next($contactos);
        echo "<br>",next($contactos);
        echo "<br>",next($contactos);
        echo "<br>",next($contactos);

      ?>
     
   </BODY>

</HTML>
<HTML>
  
   <BODY>
     
      <?php
      
        // a

        $notas["Flaré"]["EIE"] = "1";
        $notas["Flaré"]["ASO"] = "7";
        $notas["Flaré"]["PAR"] = "6";
        
        $notas["Resmu"]["EIE"] = "8";
        $notas["Resmu"]["ASO"] = "4";
        $notas["Resmu"]["PAR"] = "9";

        $notas["Carlos"]["EIE"] = "4";
        $notas["Carlos"]["ASO"] = "7";
        $notas["Carlos"]["PAR"] = "3";

        // b

        echo "<br>La nota de Flaré en ASO es de: ", $notas["Flaré"]["ASO"];

        // c

        echo "<br>Hay un total de: ", count($notas), " alumnos.";
        echo "<br><br>Hay un total de: ", count($notas["Flaré"]), " módulos.";

        // d

        echo var_dump($notas);
        
      ?>
     
   </BODY>

</HTML>
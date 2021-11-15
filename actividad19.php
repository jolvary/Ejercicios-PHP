<HTML>
  
  <BODY>
    
       <?php
     
        $sexo = "Mujer";
        $edad = 14;

        echo "¿Qué es?: ";
        if ($edad < 18)
            if ($sexo == "Mujer")
                echo "Es una chica.";
            elseif ($sexo == "Hombre")
                echo "Es un chico.";
                
        elseif ($edad >= 18)
            if ($sexo == "Mujer")
                echo "Es una mujer.";
            elseif ($sexo == "Hombre")
                echo "Es un hombre.";

       ?>
    
  </BODY>

</HTML>
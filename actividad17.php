<HTML>
  
   <BODY>
     
        <?php
      
        $sexo = "Hombre";
        $altura = 178;
        $edad = 23;

        if (($sexo == "Hombre" && $altura > 170 and $edad < 40) || ($sexo == "Mujer" and $altura > 165 and $edad < 40)) {
            echo "Estás admitido en la policía.";
        }
        else {
            echo "No estás admitido en la policía.";
        }

        ?>
     
   </BODY>

</HTML>
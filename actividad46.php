<HTML>
  
   <BODY>
     
      <?php

        function tiempo($ayer,$hoy) {

            $mañana = $hoy;

            if (($ayer == "SOL" and $hoy == "LLUVIA") or ($ayer == "LLUVIA" and $hoy == "SOL")) {

                $mañana = "NUBLADO";

            }

            return $mañana;

        }

        echo tiempo("SOL", "NUBLADO"), "\n";
        echo tiempo("NUBLADO","NUBLADO"), "\n";
        echo tiempo("LLUVIA","SOL"), "\n";
        echo tiempo("NUBLADO","LLUVIA"), "\n";
        echo tiempo("SOL","NUBLADO"), "\n";
        echo tiempo("SOL","SOL"), "\n";
        echo tiempo("SOL","LLUVIA"), "\n";

      ?>
     
   </BODY>

</HTML>


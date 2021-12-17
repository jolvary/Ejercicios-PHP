<HTML>
  
   <BODY>
     
      <?php

        function primo($num) {

            $nump = TRUE;

            for ($i=2;$i<$num;$i++) {

                if ($num % $i == 0) {

                    $nump = FALSE;
                    break;

                }

            }

            return $nump;

        }

        if ( primo(7) ) {
            echo "El número es primo.";
        }
        else {
            echo "El número no es primo.";
        }

        echo "\n\n";

        if ( primo(9) ) {
            echo "El número es primo.";
        }
        else {
            echo "El número no es primo.";
        }
        
        //echo primo(34), "\n";
        //echo primo(87), "\n";
        //echo primo(91), "\n";
        //echo primo(13), "\n";
        //echo primo(243), "\n";

      ?>
     
   </BODY>

</HTML>
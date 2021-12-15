<HTML>
  
   <BODY>
     
      <?php

        function primo($num) {

            $nump = "El número $num es primo";

            for ($i=2;$i<$num;$i++) {

                if ($num % $i == 0) {

                    $nump = "El número $num no es primo";
                    break;

                }

            }

            return $nump;

        }

        echo primo(7), "\n";
        echo primo(9), "\n";
        echo primo(34), "\n";
        echo primo(87), "\n";
        echo primo(91), "\n";
        echo primo(13), "\n";
        echo primo(243), "\n";

      ?>
     
   </BODY>

</HTML>
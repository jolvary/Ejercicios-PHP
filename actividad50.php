<HTML>
  
   <BODY>
     
      <?php

        function esvocal($str) {

            if (preg_match_all('/[aeiouAEIOU]/i',$str)) {

                echo "Es una vocal.";
            
            } else {

                echo "Es una consonante.";

            }

        }

        function vocal($str) {

            echo "La cadena introducida tiene un total de ", preg_match_all('/[aeiou]/i',$str,$vocales);

        }

        echo esvocal("P"), "\n";
        echo esvocal("a"), "\n";
        echo esvocal("T"), "\n";
        echo esvocal("A"), "\n";
        echo esvocal("t"), "\n";
        echo esvocal("a"), "\n";
        echo esvocal("S"), "\n";

        echo vocal("patata"), "\n";
        echo vocal("demacia"), "\n";
        echo vocal("esternocleidomastoideo"), "\n";
        echo vocal("asqueroso"), "\n";
        echo vocal("noxus"), "\n";
        echo vocal("jamon"), "\n";
        echo vocal("tortilla"), "\n";

      ?>
     
   </BODY>

</HTML>
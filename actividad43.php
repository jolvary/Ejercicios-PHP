<HTML>
  
   <BODY>
     
      <?php

        function vocal($str) {

            $vocal = 0;

            for ($i=0;$i<strlen($str);$i++) {
                switch($str[$i]) {
                    case 'a':
                    case 'e':
                    case 'i':
                    case 'o':
                    case 'u':
                        $vocal++;
            
                    }
            }

            return $vocal;

        }

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
<!DOCTYPE html>
     <html>
       <body>
          <?php
              $temp = array('Outubro' => 27, 'Novembro' => 28, 'Dezembro' => 19);

              foreach($temp as $chaves => $valor) {
                  echo "A temperatura média de $chave foi de $valor graus<br />";
              }
           ?>
       </body>
     </html>
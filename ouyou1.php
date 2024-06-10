<!DOCTYPE html>
<html lang='ja'>
 <head>
  <meta charset="UTF-8" />
  <title>web開発第三回目</title>
 </head>
 <body>
    <div>
        <?php
           

            $hazime = date('Y-m-d');
            
            
            $owari = date('Y-m-d', strtotime('+1 year', strtotime($hazime)));
            
            
            for ($date = strtotime($hazime); $date <= strtotime($owari); $date = strtotime('+1 day', $date)) {
                echo date('m/d', $date) . "\n";
            }
            
        
        ?>
    </div>
 </body>
</html>

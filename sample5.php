<!DOCTYPE html>
<html lang='ja'>
 <head>
  <meta charset="UTF-8" />
  <meta name="title" content="web開発4回目" />
 </head>
 <body>
  <div>
    <?php
        for($i=100; $i >= 1; $i--) {
            if($i % 2 == 0)
            {
                print($i. "<br>");
            } else {
                print("");
            }
        }
    ?>
 </body>
</html>

<!DOCTYPE html>
<html lang='ja'>
 <head>
  <meta charset="UTF-8" />
  <meta name="title" content="web開発4回目" />
 </head>
 <body>
  <div>
    <?php
        $sum = ((100 * 2) + 1000 + (200 * 2));
        print("合計金額(税抜)".$sum."<br>");
        print("合計金額(税込)".$sum * 1.08);
    ?>
 </body>
</html>

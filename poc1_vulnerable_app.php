<?php
header("Content-Security-Policy: default-src 'self'; object-src 'none'; script-src 'none'; base-uri 'none'; style-src 'unsafe-inline'; img-src *;");
?>
<!doctype html>
<meta charset=utf-8>
 <head>
     <title>Home - Internal web page</title>
 </head>
 <body>
     Hello Administrator,
     <p>Important updates</p>
     <div><?=$_GET['note']?></div>
 </body>
</html>

<?php
header("Content-Security-Policy: default-src 'self'; object-src 'none'; script-src 'none'; base-uri 'none'; style-src 'unsafe-inline'; img-src *;");
?>

<html>
<head>
    <title>CSS target exfil</title>
</head>
    <body>
        Hello, <?=$_GET['user'];?>
        <div>
            <h3>Recovery codes</h3>
            <div>
              <b>Put these in a safe spot.</b>
              If you lose your device and don't have the recovery codes you will lose access to your account.
            </div>    
        <ul>
            <li>Currant</li>
            <li>Blueberry</li>
            <li>Banana</li>
            <li>Blackberry</li>
            <li>Cherry</li>
            <li>Bilberry</li>            
        </ul>
        </div>
    </body>
</html>

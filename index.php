<?php
require_once 'lib/colrorgapi.php';
$colrapi = new colrorgapi();
$randcolor = $colrapi->randColor(30);
?>

<html>
    <head>
        <meta title="test">
    </head>
    <body style="margin: 0">
        <?php foreach ($randcolor as $value): ?>
            <div style="background-color:#<?php echo $value; ?>;display:block;width:100%;height:3.2%">
            </div>
        <?php endforeach; ?>
    </body>
</html>
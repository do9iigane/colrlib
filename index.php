<?php
require_once 'lib/colrorgapi.php';
$colrapi = new colrorgapi();
$color = $colrapi->getColor('rand',10);
$latest = $colrapi->getColor('latest');

?>

<html>
    <head>
        <meta title="test">
    </head>

    <body style="margin: 0">
        <?php foreach ($color as $value): ?>
            <div style="background-color:#<?php echo $value; ?>;display:block;width:100%;height:10%">
            </div>
        <?php endforeach; ?>
    </body>
</html>
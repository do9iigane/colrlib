<?php
require_once 'lib/colrorgapi.php';
$colrapi = new colrorgapi();
$color = $colrapi->getColor('rand',30);
$latest = $colrapi->getColor('latest');

var_dump($latest);

?>

<html>
    <head>
        <meta title="test">
    </head>

    <body style="margin: 0">
        <!--
        <?php foreach ($randcolor as $value): ?>
            <div style="background-color:#<?php echo $value; ?>;display:block;width:100%;height:3.2%">
            </div>
        <?php endforeach; ?>
        -->
    </body>
</html>
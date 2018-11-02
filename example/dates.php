<?php

require __DIR__ . '/../vendor/autoload.php';

use BrazilianHelper\DateHelper;
?>

<html>
    <head>
        <meta name="charset" content="utf8">
        <title>Brazilian Helpers by andrebian</title>
    </head>

    <body>
        <h2>Dates</h2>
        <a href="/">Back</a>

        <h4>Importing</h4>
        <pre style="background: #eee;padding:10px">namespace SeuNamespace;

BrazilianHelper\DateHelper;
        </pre>

        <h4>Example 1 - Day of week name by its number</h4>
        <pre style="background: #eee;padding:10px">DateHelper::getDayName( date('w') );</pre>
        <?php var_dump( date('w') ); ?>
        <?php var_dump( DateHelper::getDayName(date('w')) ); ?>

        <br />
        <br />
        <h4>Example 2 - Short name for day of week by its number</h4>
        <pre style="background: #eee;padding:10px">DateHelper::getDayShortName( date('w') );</pre>
        <?php var_dump( date('w') ); ?>
        <?php var_dump(DateHelper::getDayShortName( date('w') )); ?>

        <br />
        <br />
        <h4>Example 3 - Day of week name by its short name</h4>
        <pre style="background: #eee;padding:10px">DateHelper::getDayName( date('D') ));</pre>
        <?php var_dump(date('D')); ?>
        <?php var_dump(DateHelper::getDayName( date('D') )); ?>

        <br />
        <br />
        <br />
        <br />
    </body>
</html>
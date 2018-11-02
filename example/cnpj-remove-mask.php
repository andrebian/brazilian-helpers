<?php

require __DIR__ . '/../vendor/autoload.php';

use Andrebian\BrazilianHelpers\Filters\RemoveCnpjMaskFilter;
?>

<html>
    <head>
        <meta name="charset" content="utf8">
        <title>Brazilian Helpers by andrebian</title>
    </head>

    <body>
        <h2>CNPJ - Remove mask</h2>
        <a href="/">Back</a>

        <h4>Importing</h4>
        <pre style="background: #eee;padding:10px">namespace SeuNamespace;

use Andrebian\BrazilianHelpers\Filters\RemoveCnpjMaskFilter;
        </pre>

        <h4>Example 1 - Remove mask</h4>
        <pre style="background: #eee;padding:10px">
$filter = new RemoveCnpjMaskFilter();
$cnpj = '89.646.170/0001-51';

$output = $filter->filter($cnpj);</pre>
        <?php
        $filter = new RemoveCnpjMaskFilter();
        $cnpj = '89.646.170/0001-51';

        $output = $filter->filter($cnpj);
        var_dump($output);
        ?>
    </body>
</html>
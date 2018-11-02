<?php

require __DIR__ . '/../vendor/autoload.php';

use Andrebian\BrazilianHelpers\Filters\RemoveCpfMaskFilter;
?>

<html>
    <head>
        <meta name="charset" content="utf8">
        <title>Brazilian Helpers by andrebian</title>
    </head>

    <body>
        <h2>CPF - Remove mask</h2>
        <a href="/">Back</a>

        <h4>Importing</h4>
        <pre style="background: #eee;padding:10px">namespace SeuNamespace;

use Andrebian\BrazilianHelpers\Filters\RemoveCpfMaskFilter;
        </pre>

        <h4>Example 1 - Remove mask</h4>
        <pre style="background: #eee;padding:10px">
$filter = new RemoveCpfMaskFilter();
$cpf = '123.456.789-01';

$output = $filter->filter($cpf);</pre>
        <?php
        $filter = new RemoveCpfMaskFilter();
        $cpf = '123.456.789-01';

        $output = $filter->filter($cpf);
        var_dump($output);
        ?>

        <br />
        <br />
        <br />
        <br />
    </body>
</html>
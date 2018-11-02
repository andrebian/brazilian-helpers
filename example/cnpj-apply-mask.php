<?php

require __DIR__ . '/../vendor/autoload.php';

use Andrebian\BrazilianHelpers\Filters\ApplyCnpjMaskFilter;
?>

<html>
    <head>
        <meta name="charset" content="utf8">
        <title>Brazilian Helpers by andrebian</title>
    </head>

    <body>
        <h2>CNPJ - Apply mask</h2>
        <a href="/">Back</a>

        <h4>Importing</h4>
        <pre style="background: #eee;padding:10px">namespace SeuNamespace;

use Andrebian\BrazilianHelpers\Filters\ApplyCnpjMaskFilter;
        </pre>

        <h4>Example 1 - Apply mask</h4>
        <pre style="background: #eee;padding:10px">
$filter = new ApplyCnpjMaskFilter();
$cnpj = '60989182000105';

$output = $filter->filter($cnpj);</pre>
        <?php
        $filter = new ApplyCnpjMaskFilter();
        $cnpj = '60989182000105';

        $output = $filter->filter($cnpj);
        var_dump($output);
        ?>

        <h4>Example 2 - Apply mask with zerofill</h4>
        <pre style="background: #eee;padding:10px">
$filter = new ApplyCnpjMaskFilter();
$cnpj = '6098918000110';

$output = $filter->filter($cnpj);</pre>
        <?php
        $filter = new ApplyCnpjMaskFilter();
        $cnpj = '6098918000110';

        $output = $filter->filter($cnpj);
        var_dump($output);
        ?>
    </body>
</html>
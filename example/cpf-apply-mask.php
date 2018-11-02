<?php

require __DIR__ . '/../vendor/autoload.php';

use Andrebian\BrazilianHelpers\Filters\ApplyCpfMaskFilter;
?>

<html>
    <head>
        <meta name="charset" content="utf8">
        <title>Brazilian Helpers by andrebian</title>
    </head>

    <body>
        <h2>CPF - Apply mask</h2>
        <a href="/">Back</a>

        <h4>Importing</h4>
        <pre style="background: #eee;padding:10px">namespace SeuNamespace;

use Andrebian\BrazilianHelpers\Filters\ApplyCpfMaskFilter;
        </pre>

        <h4>Example 1 - Apply mask</h4>
        <pre style="background: #eee;padding:10px">
$filter = new CPFMaskFilter();
$cpf = '12345678901';

$output = $filter->filter($cpf);</pre>
        <?php
        $filter = new ApplyCpfMaskFilter();
        $cpf = '12345678901';

        $output = $filter->filter($cpf);
        var_dump($output);
        ?>

        <h4>Example 2 - Apply mask with zerofill</h4>
        <pre style="background: #eee;padding:10px">
$filter = new CPFMaskFilter();
$cpf = '1234567890';

$output = $filter->filter($cpf);</pre>
        <?php
        $filter = new ApplyCpfMaskFilter();
        $cpf = '1234567890';

        $output = $filter->filter($cpf);
        var_dump($output);
        ?>


        <br />
        <br />
        <br />
        <br />
    </body>
</html>
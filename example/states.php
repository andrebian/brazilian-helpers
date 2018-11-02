<?php

require __DIR__ . '/../vendor/autoload.php';

use Andrebian\BrazilianHelpers\Helpers\StateHelper as BrazilianStates;

?>
<html>
    <head>
        <meta name="charset" content="utf8">
        <title>Brazilian Helpers by andrebian</title>
    </head>
    
    <body>
        <h2>Brazilian states</h2>
        <a href="/">Back</a>
        
        <h4>Importing</h4>
        <pre style="background: #eee;padding:10px">namespace App;

use Andrebian\BrazilianHelpers\Helpers\StateHelper as BrazilianStates;
        </pre>
        
        <h4>Example 1 - Array</h4>
        <pre style="background: #eee;padding:10px">BrazilianStates::getStates();</pre>
        <?php var_dump( BrazilianStates::getStates() ); ?>
        
        <br />
        <h4>Example 2 - State by short name</h4>
        <pre style="background: #eee;padding:10px">BrazilianStates::getStateName('PR');
BrazilianStates::getStateName('MG');</pre>
        <?php echo BrazilianStates::getStateName('PR'); ?>
        <br />
        <?php echo BrazilianStates::getStateName('MG'); ?>
        
        <br />
        <h4>Example 3 - Short name by state name</h4>
        <pre style="background: #eee;padding:10px">BrazilianStates::getStateShortName('São Paulo');
BrazilianStates::getStateShortName('Paraná');</pre>
        <?php echo BrazilianStates::getStateShortName('São Paulo'); ?>
        <br />
        <?php echo BrazilianStates::getStateShortName('Paraná'); ?>
        
        <br />
        
        <h4>Example 4 - Select options</h4>
        <pre style="background: #eee;padding:10px;">BrazilianStates::getHtmlForSelectElement();</pre>
        
        <?php var_dump( wordwrap(BrazilianStates::getHtmlForSelectElement(), 100) ); ?>
        <br />
        <select name="uf">
            <option value="">-- Selecione --</option>
            <?php echo BrazilianStates::getHtmlForSelectElement(); ?>
        </select>
        
        <br />
        <br />
        <br />
    </body>
</html>
<?php
header('Content-Type: text/html; charset=utf-8');

require '../vendor/autoload.php'; 

use BrazilianHelper\StateHelper as BrazilianStates;

?>
<html>
    <head>
        <title>Brazilian Helpers by andrebian</title>
    </head>
    
    <body>
        <h2>Estados brasileiros</h2> 
        <a href="/">Voltar</a>
        
        <h4>Declarando o uso do Helper</h4>
        <pre style="background: #eee;padding:10px">namespace SeuNamespace;

use BrazilianHelper\StateHelper as BrazilianStates;
        </pre>
        
        <h4>Exemplo 1 - Obtendo um array de estados</h4>
        <pre style="background: #eee;padding:10px">BrazilianStates::getStates();</pre>
        <?php var_dump( BrazilianStates::getStates() ); ?>
        
        <br />
        <h4>Exemplo 2 - Obtendo o nome de um estado a partir de uma UF</h4>
        <pre style="background: #eee;padding:10px">BrazilianStates::getStateName('PR');
BrazilianStates::getStateName('MG');</pre>
        <?php echo BrazilianStates::getStateName('PR'); ?>
        <br />
        <?php echo BrazilianStates::getStateName('MG'); ?>
        
        <br />
        <h4>Exemplo 3 - Obtendo a UF a partir de nome</h4>
        <pre style="background: #eee;padding:10px">BrazilianStates::getStateShortName('São Paulo');
BrazilianStates::getStateShortName('Paraná');</pre>
        <?php echo BrazilianStates::getStateShortName('São Paulo'); ?>
        <br />
        <?php echo BrazilianStates::getStateShortName('Paraná'); ?>
        
        <br />
        
        <h4>Exemplo 4 - Obtendo estados como opções para um select</h4>
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
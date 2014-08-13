<?php 
header('Content-Type: text/html; charset=utf-8');

require '../vendor/autoload.php'; 

use BrazilianStatesHelper\BrazilianStatesHelper;
?>
<html>
    <head>
        <title>Brazilian States Helper by andrebian</title>
    </head>
    
    <body>
        <h2>Brazilian States by <a href="https://github.com/andrebian">andrebian</a></h2> 
        
        <h4>Declarando o uso do Helper</h4>
        <pre>namespace SeuNamespace;

use BrazilianStatesHelper\BrazilianStatesHelper;
        </pre>
        
        <h4>Exemplo 1 - Obtendo um array de estados</h4>
        <pre>BrazilianStatesHelper::getStates()</pre>
        <?php var_dump( BrazilianStatesHelper::getStates() ); ?>
        
        <br />
        <h4>Exemplo 2 - Obtendo o nome de um estado a partir de uma UF</h4>
        <pre>BrazilianStatesHelper::getStateName('PR');
BrazilianStatesHelper::getStateName('MG');</pre>
        <?php echo BrazilianStatesHelper::getStateName('PR'); ?>
        <br />
        <?php echo BrazilianStatesHelper::getStateName('MG'); ?>
        
        <br />
        <h4>Exemplo 3 - Obtendo a UF a partir de nome</h4>
        <pre>BrazilianStatesHelper::getStateShortName('São Paulo');
BrazilianStatesHelper::getStateShortName('Paraná');</pre>
        <?php echo BrazilianStatesHelper::getStateShortName('São Paulo'); ?>
        <br />
        <?php echo BrazilianStatesHelper::getStateShortName('Paraná'); ?>
        
        <br />
        
        <h4>Exemplo 4 - Obtendo estados como opções para um select</h4>
        <pre>BrazilianStatesHelper::getOptions();</pre>
        
        <?php var_dump( wordwrap(BrazilianStatesHelper::getOptions(), 100) ); ?>
        <br />
        <select name="uf">
            <option value="">-- Selecione --</option>
            <?php echo BrazilianStatesHelper::getOptions(); ?>
        </select>
        
        <br />
        <br />
        <br />
    </body>
</html>
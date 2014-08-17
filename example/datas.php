<?php
header('Content-Type: text/html; charset=utf-8');

require '../vendor/autoload.php'; 

use BrazilianHelper\DateHelper;
?>

<html>
    <head>
        <title>Brazilian Helpers by andrebian</title>
    </head>
    
    <body>
        <h2>Datas</h2> 
        <a href="/">Voltar</a>
        
        <h4>Declarando o uso do Helper</h4>
        <pre style="background: #eee;padding:10px">namespace SeuNamespace;

BrazilianHelper\DateHelper;
        </pre>
        
        <h4>Exemplo 1 - Obtendo o nome completo do dia através do dia da semana em formato numérico</h4>
        <pre style="background: #eee;padding:10px">DateHelper::getDayName( date('w') );</pre>
        <?php var_dump( date('w') ); ?>
        <?php var_dump( DateHelper::getDayName(date('w')) ); ?>
        
        <br />
        <br />
        <h4>Exemplo 2 - Obtendo o nome abreviado do dia através do dia da semana em formato numérico</h4>
        <pre style="background: #eee;padding:10px">DateHelper::getDayShortName( date('w') );</pre>
        <?php var_dump( date('w') ); ?>
        <?php var_dump(DateHelper::getDayShortName( date('w') )); ?>
        
        <br />
        <br />
        <h4>Exemplo 3 - Obtendo o nome completo do dia através do dia da semana em formato string</h4>
        <pre style="background: #eee;padding:10px">DateHelper::getDayName( date('D') ));</pre>
        <?php var_dump(date('D')); ?>
        <?php var_dump(DateHelper::getDayName( date('D') )); ?>
        
        <br />
        <br />
        <br />
        <br />
    </body>
</html>
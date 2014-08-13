
#Brazilian States

##Baixando

Em seu composer.json adicione a seguinte linha em `require`:

```"andrebian/brazilian-states-helper" : "dev-master" ```


##Utilizando

####Declarando o uso do Helper

```php
namespace SeuNamespace;

use BrazilianStatesHelper\BrazilianStatesHelper;
```        

####Exemplo 1 - Obtendo um array de estados


```php

BrazilianStatesHelper::getStates();

// Saída

array (size=25)
    'AC' => string 'Acre' (length=4)
    'AL' => string 'Alagoas' (length=7)
    'AP' => string 'Amapá' (length=6)
    'AM' => string 'Amazonas' (length=8)
    'BA' => string 'Bahia' (length=5)
    'CE' => string 'Ceará' (length=6)
    'DF' => string 'Distrito Federal' (length=16)
    'ES' => string 'Espírito Santo' (length=15)
    'GO' => string 'Goiás' (length=6)
    'MA' => string 'Maranhão' (length=9)
    'MT' => string 'Mato Grosso' (length=11)
    'MS' => string 'Mato Grosso do Sul' (length=18)
    'MG' => string 'Minas Gerais' (length=12)
    'PA' => string 'Pará' (length=5)
    'PB' => string 'Paraíba' (length=8)
    'PR' => string 'Paraná' (length=7)
    'PE' => string 'Pernambuco' (length=10)
    'PI' => string 'Piauí' (length=6)
    'RJ' => string 'Rio de Janeiro' (length=14)
    'RN' => string 'Rio Grande do Norte' (length=19)
    'RS' => string 'Rio Grande do Sul' (length=17)
    'RO' => string 'Roraima' (length=7)
    'SC' => string 'Santa Catarina' (length=14)
    'SP' => string 'São Paulo' (length=10)
    'TO' => string 'Tocantins' (length=9)
    
```

####Exemplo 2 - Obtendo o nome de um estado a partir de uma UF


```php

BrazilianStatesHelper::getStateName('PR');
BrazilianStatesHelper::getStateName('MG');

// Saída
Paraná
Minas Gerais
```

####Exemplo 3 - Obtendo a UF a partir de nome


```php

BrazilianStatesHelper::getStateShortName('São Paulo');
BrazilianStatesHelper::getStateShortName('Paraná');

// Saída
SP
PR
```

####Exemplo 4 - Obtendo estados como opções para um select

```php

BrazilianStatesHelper::getOptions();

//Saída
'<option value="AC">Acre</option><option value="AL">Alagoas</option><option
value="AP">Amapá</option><option value="AM">Amazonas</option><option
value="BA">Bahia</option><option value="CE">Ceará</option><option value="DF">Distrito
Federal</option><option value="ES">Espírito Santo</option><option value="GO">Goiás</option><option
value="MA">Maranhão</option><option value="MT">Mato Grosso</option><option value="MS">Mato Grosso
do Sul</option><option value="MG">Minas Gerais</option><option value="PA">Pará<'... (length=949)

```





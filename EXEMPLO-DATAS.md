#Exemplos de utilização de datas

####Declarando o uso do Helper

```php
namespace SeuNamespace;

use BrazilianHelper\DateHelper;
```        

####Exemplo 1 - Obtendo o nome completo do dia através do dia da semana em formato numérico


```php

DateHelper::getDayName(date('w'));

// Saída
// string 'Domingo' (length=7)

```

####Exemplo 2 - Obtendo o nome abreviado do dia através do dia da semana em formato numérico


```php

DateHelper::getDayShortName( date('w') );

// Saída
// string 'Dom' (length=3)

```

####Exemplo 3 - Obtendo o nome completo do dia através do dia da semana em formato string


```php

DateHelper::getDayName( date('D') )

// Saída
// string 'Domingo' (length=7)

```
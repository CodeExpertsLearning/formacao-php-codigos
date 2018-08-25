#Exemplo

1 - Criem um projeto;

2 - Separar os codigos em namespaces
dentro do contexto escolhido;

3 - Mapeiem as classes de vocês
com autoload usando o composer.

Esqueleto abaixo:

Diretório base de códigos: src/

# composer.json
```
{
  "autoload": {
      "psr-4": {
         "": "src/"
      }
}
```

4 - Por fim, quero a utilização 
dessas classes criadas em um index.php


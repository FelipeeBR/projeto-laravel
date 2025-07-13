# Full Stack Web Developer – TEST

## Objetivo:

Utilize o PHP e preferencialmente os frameworks Symfony ou Laravel para desenvolver um sistema que auxilie no controle de uma fazenda de bovinos.

## Requisitos Funcionais:

● Cadastro, Edição, Deleção, Listagem e Visualização do gado da fazenda, manipulando os seguintes dados:

- Código: código da cabeça de gado;
- Leite: número de litros de leite produzido por semana;
- Ração: quantidade de alimento ingerida por semana - em quilos;
- Peso: peso do animal em quilos;
- Nascimento: data de nascimento do animal.

● Pode haver apenas um animal vivo com o mesmo código.

● Relatório de animais para abate, sendo que, um animal pode ser enviado para abate 
quando atinge alguma das seguintes condições:

- Possui mais de 05 anos de idade;
- Produza menos de 40 litros de leite por semana;
- Produza menos de 70 litros de leite por semana e ingira mais de 50 quilos de ração por dia;
- Possui peso maior que 18 arrobas.

● Utilize o item anterior para mandar os animais para o abate (o sistema só permite o abate de animais que se enquadre em pelo menos uma das condições citadas no item anterior);

● Relatório de animais abatidos;

● Relatório da quantidade total de leite produzido por semana (Tela inicial);

● Relatório da quantidade total de ração necessária por semana (Tela inicial);

● Relatório da quantidade total de animais que tenham até 1 ano de idade e que consumam mais de 500Kg de ração por semana (Tela inicial).

## Requisitos de sistema:

● De modo geral, códigos de regras de negócio que ficam nos controllers, não são reaproveitados por outros controllers. O que gera a necessidade da repetição de 
código (má prática). Visando permanecer nas boas práticas, utilize a tática de criação de services para centralização de regras, que poderão ser reutilizadas em vários 
controllers e demais partes do sistema.

● Paginação e ordenação dos registros em tela;

## Pontos extras:

● Docker
● Padronização de commits



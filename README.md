# Full Stack Web Developer – LARAVEL

## Tecnologias Utilizadas
- Laravel 12
- MySQL
- Docker
- PHPUnit
- Bootstrap

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

● Criar funções customizadas no repository para buscas mais elaboradas no BD;

● Responsividade.

## Pontos extras:

● Docker

● <a href="https://dev.to/tadeubdev/por-que-padronizar-commits-e-algo-importante-1al" target="_blank">Padronização de commits</a>

● Testes unitários com PHPUnit

● Bootstrap

## Testes Unitários

Teste unitário na camada services em que verifica se a data de nascimento é menor que a atual.
```
public function test_create_gado_excessao_data() {
    $this->expectException(\Exception::class);
    $this->expectExceptionMessage("Data de nascimento não pode ser maior que a data atual.");

    $repository = new GadoRepository();
    $service = new GadoService($repository);

    $service->createGado(
        [
            'codigo' => 'GADO_0001',
            'leite' => '1000',
            'racao' => '1000',
            'peso' => '1000',
            'data_nascimento' => now()->addDays(1)->toDateString(),
        ]
    );
}
```
Teste unitário na camada services para validar se o codigo é único.
```
public function test_create_gado_excessao_codigo() {
    $this->expectException(\Exception::class);
    $this->expectExceptionMessage("Código já cadastrado.");

    $repository = new GadoRepository();
    $service = new GadoService($repository);

    $service->createGado(
        [
            'codigo' => 'GADO_0001',
            'leite' => '1000',
            'racao' => '1000',
            'peso' => '1000',
            'data_nascimento' => now()->subDays(1)->toDateString(),
        ]
    );
}
```

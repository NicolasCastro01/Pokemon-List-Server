<h1 align="center">PokeHub | Server</h1>

<p align="center" margin-top="25px" >
  <img alt="GitHub top language" src="https://img.shields.io/github/languages/top/NicolasCastro01/Pokemon-List-Server?color=purple">
</p>

## Sobre o projeto

O intuito do projeto é criar uma aplicação de armazenamento de dados dos pokemons disponibilizados pela [PokeAPI](https://pokeapi.co).

## Tecnologias e ferramentas utilizadas

- [Laravel](https://laravel.com/docs/10.x/)
- [PHP](https://www.php.net)
- [PHPUnit](https://phpunit.de)
- [MySQL](https://www.mysql.com)

## Arquitetura e padrões de projeto

A aplicação foi desenvolvida utilizando os padrões de projeto Clean Architecture e Repository Pattern. A aplicação foi desenvolvida utilizando a arquitetura limpa.

### Arquitetura limpa

A escolha da arquitetura limpa se deu pela facilidade de manutenção e escalabilidade do projeto. A arquitetura limpa é composta por 3 camadas principais: camada de apresentação, camada de domínio e camada de dados. A camada de apresentação é responsável por toda a parte visual da aplicação, a camada de domínio é responsável por toda a regra de negócio e a camada de dados é responsável por toda a parte de acesso a dados.

### DDD (Domain Driven Design)

O DDD é um padrão de projeto que visa a separação de responsabilidades entre as camadas da aplicação. O DDD é composto por 4 camadas principais:

- Camada de aplicação: responsável por toda a parte da regra de negócio da aplicação.
- Camada de domínio: responsável por toda a parte de entidades dando suporte a camada de aplicação.
- Camada de infraestrutura: responsável por toda a parte de acesso a dados.
- Camada de apresentação: responsável por toda a parte visual da aplicação.

### Repository Pattern

O Repository Pattern é um padrão de projeto que visa a simplificação de acesso a dados. O Repository Pattern é composto por um arquivo `Repository` que possui todos os método de acesso a dados relacionado aquele contexto. Exemplo: quero acessar dados relacionado a entidade "Pokemon", então crio um arquivo chamado "PokemonRepository". Observação: é importante que todos os métodos do repositório sejam o mais simples possível para evitar o acomplamento.


## Como executar o projeto

### Pré-requisitos

- [PHP](https://www.php.net)
- [Composer](https://getcomposer.org/download/)
- [MySQL](https://www.mysql.com)

### Variáveis de ambiente
- Deve ser preenchido os dados do banco de dados para a devida conexão no arquivo `.env`

### Instalação

#### Clonar o repositório

```bash
$ git clone https://github.com/NicolasCastro01/Pokemon-List-Server.git
```

#### Instalar as dependências

```bash
$ cd Pokemon-List-Server
$ composer update
$ composer install
$ php artisan key:generate
```

#### Rodar migrations
```bash
$ php artisan migrate
```

#### Rodar seeders
- Irá criar a conta: email: "teste@verum.com" e senha: "teste2024".
```bash
$ php artisan db:seed
```

#### Executar o projeto

```bash
$ php artisan serve --host 0.0.0.0 --port 3001
```

### Executar os testes

```bash
$ php artisan test
```

## Considerações finais

A aplicação contém 2 telas principais que são: a tela de login, onde é possível efetuar a autênticação do usuário e a tela home, onde é possível visualizar os pokemóns armazenados no banco local, buscar novos pokemóns no [PokeAPI](https://pokeapi.co) e importá-los para o banco local.
A aplicação contém 2 rotas principais que são:

- GET /api/pokemon/all -> Lista todos os pokemons importados do [PokeAPI](https://pokeapi.co) para o banco de dados local.
- POST /api/pokemon/import -> Importa os dados do pokemón para o banco de dados local.
  - body: 
    ```
    {
      name: 'charmander',
      image_url: 'http://localhost/img/charmander_default.png'
    }
    ```

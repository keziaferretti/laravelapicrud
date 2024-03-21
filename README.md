# Laravel CRUD API

Esta é uma aplicação Laravel que fornece uma API CRUD simples para gerenciar registros de usuários com nome e email.

## Como usar

1. **Instalação**

   - Clone este repositório:
     ```
     git clone https://github.com/seu_usuario/sua_app.git
     ```

   - Navegue até o diretório do projeto:
     ```
     cd sua_app
     ```

   - Instale as dependências do composer:
     ```
     composer install
     ```

   - Copie o arquivo de ambiente:
     ```
     cp .env.example .env
     ```

   - Gere a chave de aplicativo:
     ```
     php artisan key:generate
     ```

2. **Configuração do Banco de Dados**

   - Configure suas credenciais de banco de dados no arquivo `.env`.

   - Execute as migrações para criar as tabelas no banco de dados:
     ```
     php artisan migrate
     ```

3. **Executar o Servidor**

   - Inicie o servidor Laravel:
     ```
     php artisan serve
     ```

   - Acesse a API em http://localhost:8000/api/users

## Rotas da API

- `GET /api/users`: Retorna todos os usuários.
- `GET /api/users/{id}`: Retorna um usuário específico.
- `POST /api/users`: Cria um novo usuário.
- `PUT /api/users/{id}`: Atualiza um usuário existente.
- `DELETE /api/users/{id}`: Exclui um usuário existente.

## Tecnologias utilizadas

- Laravel
- PHP
- MySQL (ou outro banco de dados de sua escolha)

## Contribuindo

Contribuições são bem-vindas! Sinta-se à vontade para abrir uma issue ou enviar um pull request.

## Licença

Este projeto é licenciado sob a Licença MIT. Consulte o arquivo [LICENSE](LICENSE) para obter mais detalhes.
![put api](https://github.com/keziaferretti/laravelapicrud/assets/99621696/ee5302a0-cac6-4b40-8e8d-dbce6d6d5fb8)![get api](https://github.com/keziaferretti/laravelapicrud/assets/99621696/f5838e58-5530-49d2-8351-4a39b9781576)

![create api](https://github.com/keziaferretti/laravelapicrud/assets/99621696/3816bb1f-d6bf-4206-9c6a-00c28b2a4e5e)
![delete api](https://github.com/keziaferretti/laravelapicrud/assets/99621696/157e8559-9545-4b08-ac67-f6647240f17b)






# Aloha Produtos - Projeto Laravel (skeleton)

Este repositório contém um **skeleton** de projeto Laravel preparado para a atividade prática.
**Obs:** O diretório `vendor/` não está incluído. Após baixar:

## Passos para rodar localmente

1. Tenha PHP >= 8.1 e Composer instalados.
2. No terminal, na pasta do projeto, rode:
   ```bash
   composer install
   ```
3. Configure o arquivo `.env`:
   ```bash
   cp .env.example .env
   ```
   - Edite `.env` e defina `DB_CONNECTION=sqlite`  
   - Defina `DB_DATABASE` para o caminho absoluto do arquivo `database/database.sqlite`
4. Crie o arquivo sqlite:
   ```bash
   mkdir -p database
   touch database/database.sqlite
   ```
5. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```
6. Rode as migrations:
   ```bash
   php artisan migrate
   ```
7. Execute os testes:
   ```bash
   php artisan test
   # ou
   ./vendor/bin/phpunit
   ```

## O que está incluído

- `app/Models/Product.php` - Model Eloquent.
- `app/Http/Controllers/ProductController.php` - controller com `index()` e `store()`.
- `app/Services/ProductService.php` - serviço com método `total()` que soma lista de produtos.
- `database/migrations/2025_11_01_000000_create_products_table.php` - migration.
- `routes/api.php` - rotas API para produtos.
- `tests/Unit/ProductServiceTest.php` - teste unitário que valida o cálculo do total.
- `composer.json`, `.env.example`, `.gitignore`, `README.md`.

Se quiser, eu posso ajustar o método `total()` para usar outra assinatura (ex.: somar apenas prices sem quantity). Só avisar.

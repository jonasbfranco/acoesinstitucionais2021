# COMANDOS PARA EXECUTAR DEPOIS DE CLONAR O PROJETO

```shell
- $ composer install
- $ php -r "copy('.env.example', '.env');"
	ou
- $ @php -r "file_exists('.env') || copy('.env.example', '.env');"
- $ php artisan key:generate
    (configurar o arquivo .env, linha = DB_DATABASE=laravel_do_zero)
- $ php artisan migrate
```

### Configure o arquivo .env

```php
- DB_DATABASE=laravel_do_zero
```

### Criar os Model

```php
- $ php artisan make:model Funcionario
- $ php artisan make:model Video
```

### Criar os Controller

```php
- $ php artisan make:controller PalestrasController
- $ php artisan make:controller VideoController
```

### Criar o Controller Blog (pagina estatica)

```php
- $ php artisan make:controller Site/BlogController --invokable
```

### Migrations

## Verificar status das migrations

```php
- $ php artisan migrate:status
```

### Criar a Migration Funcionarios (controlar login)

```php
- $ php artisan make:migration create_videos_table
- $ php artisan make:migration create_confirmacaos_table


- $ php artisan make:migration create_funcionarios_table
ou determinar nome da tabela
- $ php artisan make:migration create_funcionar_table --table=funcionarios
```

### Criar campo especifico em uma tabela

```php
- $ php artisan make:migration add_nomecompleto_to_funcionarios_table

inserir os campos no arquivo criado
exemplo
$table->string('nomecompleto');

inserir campos para deletar também
exemplo
$table->dropColumn('nomecompleto');
```

### Apagar e recriar as migrations

```php
- $ php artisan migrate:fresh
```

### Erro ao criar as migrations

```php
Resumindo as colunas do tipo string do Laravel vem com default 255 o que faz com que o tamanho exceda ao tamnho maxímo para o indíce, vá até sua migration e troque o lenght do campo com chave unique para 191 ou para o tamanho que preferir, por exemplo:

$table->string('email', ['length' => 191])->unique();

Você pode adicionar no seu arquivo AppServiceProvider.php dentro do método boot() a seguinte instrução para seu campo string ficar default e não precisar declarar em toda migration o tamanho do campo string:

Schema::defaultStringLength(191);
```

## Site definicao migrations

https://blog.especializati.com.br/criar-tabelas-laravel-migrations/

### Entrar no Tinker para testara conexao com o banco laravel_do_zero (criado no MySQL)

```php
- $ php artisan tinker
- $ DB::connection()->getPdo();
```

## Leitura Flex Box

https://developer.mozilla.org/pt-BR/docs/Web/CSS/CSS_Flexible_Box_Layout/Aligning_Items_in_a_Flex_Container

-   $ php artisan make:controller FuncionarioController
-   $ php artisan make:model funcionario


### php.ini
post_max_size=6G
upload_max_filesize=4G
memory_limit = 8G



### Laravel doc

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

```shell
$ sudo apt install php8.0-fpm -y
```

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

```

```

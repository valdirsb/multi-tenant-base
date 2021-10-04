<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Instalação

- clone o repositório
```bash
git clone https://github.com/valdirsb/multi-tenant-base
```
- instalar as dependencias
```bash
composer install
```
- Copie o arquivo .env.example e renomeie para .env
- altere as configurações de banco de dados no arquivo .env

```bash
php artisan key:generate
```
- Migrar o banco de dados

```bash
php artisan migrate
```

- Ligar o servidor
```bash
php artisan serve
```


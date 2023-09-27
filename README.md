<div style="display:flex; align-items: center">
  <h1 style="position:relative; top: -6px" >Library App</h1>
</div>

### Table of Contents

-   [Getting Started](#getting-started)
-   [Migration and Seeding Database](#migration)
-   [Development](#development)

#

## Getting Started

1\. Clone Library repository:

```sh
git clone https://github.com/emetreve/library-laravel-app.git
```

2\. Run _composer install_ in order to install all the dependencies.

```sh
composer install
```

3\. You will need to install all the JS dependencies as well:

```sh
npm install
```

4\. And finally, do not forget to run the following command in order to build resources (for Tailwind):

```sh
npm run dev
```

#

## Migration and Seeding Database

Migrate and seed the database:

```sh
php artisan migrate --seed
```

## Development

Run development server by executing:

```sh
  php artisan serve
```

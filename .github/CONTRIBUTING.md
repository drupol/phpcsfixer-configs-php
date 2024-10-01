# CONTRIBUTING

We're using [Github Actions](https://github.com/drupol/phpcsfixer-configs-php/actions) as a continuous integration system.

For details, see [`workflows`](./.github/workflows).

We're using [`grumphp/grumphp`](https://github.com/phpro/grumphp) to drive the development.

Run

```bash
./vendor/bin/grumphp run
```

to run all the tests.

## Coding Standards

We are using [`drupol/php-conventions`](https://github.com/drupol/php-conventions) to enforce coding standards.

Run

```bash
./vendor/bin/grumphp run
```

to automatically detect/fix coding standard violations.

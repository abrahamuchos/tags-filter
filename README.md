## Tags filter

Tag filter, developed under the TDD methodology. For testing and guidance purposes only.

This project only covers basic aspects of TDD and seeks only to test certain development methods and see their viability.

<img src="/docs/images/tags-with-laravel-screenshot-1.png" alt="drawing" width="auto"/>


## ✅ Features

- Show tags
- Add tags
- Delete tags
- Unit and Feature tests

## ⚙️ Tech Stack

- Laravel 11.9
- Postgre 14.12
- Tailwindcss 3.4.4
- Vite 5.0
- phpunit 11.0.1


## 💾 Installation

Install and run

1. Clone and move to folder
```bash
$ git clone git@github.com:abrahamuchos/invoice-api.git
$ cd invoice-api
```

2. Install dependecies
```bash
$  composer install
```

3. Create a copy of the `.env.example` file and rename it to `.env`. Next, configure the necessary environment variables.

4. Generate an application key by running `php artisan key:generate`.

5. Run `php artisan migrate` to create the database tables.

6. Run `php artisan db:seed` to create dummy data and admin user.

7. Run `php artisan serve` to start the Laravel development server.
## 🔣 Environment Variables

To run this project, you will need to add the following environment variables to your .env file

```
DB_HOST= <YOUR_HOST>
DB_PORT= <YOUR_POST>
DB_DATABASE= <YOUR_DATABASE_NAME>
DB_USERNAME= <YOUR_USERNAME>
DB_PASSWORD= <YOUR_PASS>
```

## 🧪 Tests
To run all the tests

```bash
 $ php artisan test
```

To run a specific test
```bash
 $ php artisan test --filter test_name_example
```

## 🧑‍💻 Authors

- [@abrahamuchos](https://github.com/abrahamuchos)
- [Contact mail](mailto:j.abraham29@gmail.com)


## 📄 License

[MIT](https://choosealicense.com/licenses/mit/)

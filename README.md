# LMS-TekQuora

Laravel application with an isolated LMS UI area (`/lms`, `lms.*` routes) and portable Blade/CSS bundle under `lms-ui-portable-bundle/`.

## Local setup

1. Copy `.env.example` to `.env` and configure `APP_KEY`, database, and mail as needed.
2. `composer install`
3. `php artisan key:generate`
4. `php artisan migrate` (ensure MySQL has the target database and `sessions` table if using database sessions)
5. `php artisan serve`

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

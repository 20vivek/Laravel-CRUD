# Laravel CRUD Application

A Laravel web application that lets users **create, read, update and delete** <!-- TODO: what does it manage? e.g. students, products, tasks --> records, built with PHP, Laravel and MySQL using the MVC pattern.

<!-- TODO: add 2-3 screenshots or a short GIF at docs/ and link them below. This is the single biggest upgrade. -->
![Home page](docs/screenshot-home.png)

## Features

- Create, view, edit and delete <!-- TODO: entity name --> records
- <!-- TODO: only list what is really built, e.g. form validation -->
- <!-- TODO: e.g. pagination / search / flash messages / login -->
- MySQL database managed with Laravel migrations and Eloquent ORM

## Tech Stack

- **Backend:** PHP, Laravel
- **Database:** MySQL
- **Frontend:** Blade templates, HTML, CSS, JavaScript (Vite)
- **Tools:** Composer, npm, Git

## Getting Started

### Prerequisites

- PHP 8.2+ <!-- TODO: check your composer.json for the required PHP version -->
- Composer
- Node.js and npm
- MySQL

### Installation

```bash
git clone https://github.com/20vivek/Laravel-CRUD.git
cd Laravel-CRUD

composer install
npm install && npm run build

cp .env.example .env
php artisan key:generate
```

Create an empty MySQL database, then set your credentials in `.env`:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Set up the tables, then start the app:

```bash
php artisan migrate
php artisan serve
```

Open http://127.0.0.1:8000 in your browser.

<!-- Alternative if you keep backup.sql: import it into your database instead of running migrate. -->

## Routes

<!-- TODO: replace with your real routes. Run `php artisan route:list` to see them. -->

| Method | URI | Action |
| ------ | --- | ------ |
| GET | `/items` | List all records |
| GET | `/items/create` | Show create form |
| POST | `/items` | Store a new record |
| GET | `/items/{id}/edit` | Show edit form |
| PUT | `/items/{id}` | Update a record |
| DELETE | `/items/{id}` | Delete a record |

## Project Structure

```
app/         Models and controllers
database/    Migrations (and seeders)
resources/   Blade views, CSS and JS
routes/      Web routes
```

## Author

**Vivek Kumar Sahu**
[LinkedIn](https://www.linkedin.com/in/vivek-k-sahu) | [GitHub](https://github.com/20vivek)

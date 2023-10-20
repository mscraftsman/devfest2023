# devfest 2023

This project is built using Laravel/Blade/Tailwind CSS. Please follow the instructions below to set up and run it on your local machine.

## Prerequisites

Before you clone the repository, ensure you have the following software installed on your machine.

-   PHP
-   PHP Composer
-   Node.js (comes with npm)
-   SQLite

Ensure you have SQLite installed as this project uses SQLite instead of MySQL for easier setup and minimal configuration.

## Clone Instructions

```bash
git clone git@github.com:mscraftsman/devfest2023.git
```

## Install Dependencies

1. Install all necessary PHP dependencies.

```bash
composer install
```

2. Install all necessary Node.js dependencies.

```bash
npm install
```

## Setting Up Laravel

1. Copy the `.env.example` file provided by laravel to `.env` in the project root. This file contains application settings, including database connection settings.

```bash
cp .env.example .env
```

2. Generate a unique application key using the artisan command-line tool provided by laravel.

```bash
php artisan key:generate
```

## Database Configuration (SQLite)

1. Create a new SQLite database file in the `storage` directory of the project (if it doesn't exist).

```bash
mkdir storage/database
touch storage/database/database.sqlite
```

2. Update the `.env` file in the project root to use the SQLite database by setting the DB_CONNECTION variable.

```bash
DB_CONNECTION=sqlite
DB_DATABASE=absolute/path/to/devfest2023/storage/database/database.sqlite
```

Replace `absolute/path/to/devfest2023` with the correct path to your database directory.

3. Run the database migrations to create the necessary tables in the database.

```bash
php artisan migrate
```

## Database Data Setup

This project utilizes the `Serionize API` to retrieve data concerning the event's agenda and its speakers. It involves programmatically accessing the API, likely with tools such as `curl`, to request the necessary data. Once retrieved, the data must be stored locally within the application's `storage/database` directory, specifically under the filenames `agenda.json` and `speakers.json`.

## Compiling Assets

Compile the assets using the npm command-line tool.

```bash
npm run dev
```

Or, for production:

```bash
npm run build
```

## Running the Application

1. Run the application using the artisan command-line tool provided by laravel.

```bash
php artisan serve
```

2. Open the application in your browser by visiting the URL provided `http://localhost:8000` by the artisan command-line tool.

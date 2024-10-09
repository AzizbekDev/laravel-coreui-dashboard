# Laravel CoreUI Dashboard

This project is a Laravel-based dashboard that integrates the CoreUI admin template for a robust, responsive, and efficient backend management system. This guide provides detailed instructions to set up the project on your local environment.

## Table of Contents
- [Installation](#installation)
  - [Clone from GitHub](#clone-from-github)
  - [Laravel Configuration](#laravel-configuration)
  - [NPM Configuration](#npm-configuration)
  - [Run Migrations](#run-migrations)
  - [Run Seeders](#run-seeders)
  - [Run Project](#run-project)
- [Accessing the Dashboard](#accessing-the-dashboard)
  - [Login Credentials](#login-credentials)

## Installation

Follow these steps to install the project on your local machine:

## Clone from GitHub

1. Open your terminal, and run the following command to clone the repository to your local machine:

    ```bash
        git clone https://github.com/your-repo/laravel-coreui-dashboard.git
    ```
2. After cloning, navigate into the project directory:

    ```bash
        cd laravel-coreui-dashboard
    ```
## Laravel Configuration
3. Copy the `.env.example` file to create a new `.env` file for environment-specific settings:

    ```bash
        cp .env.example .env
    ```
4. Generate the application encryption key, which Laravel uses to secure session and other encrypted data:
    
    ```bash
        php artisan key:generate
    ```
5. Open the `.env` file in your preferred editor (e.g., `nano`, `vim`, or any text editor) and configure the following settings:

    - `APP_NAME`: Set the name of your application.
    - `DB_CONNECTION`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD`: Update these to match your local database settings.

    Example configuration in `.env`:
    
    ```dotenv
        APP_NAME=LaravelCoreUIDashboard
        DB_CONNECTION=mysql
        DB_DATABASE=laravel_coreui_dashboard
        DB_USERNAME=root
        DB_PASSWORD=yourpassword
    ```
## NPM Configuration
6. Install the required Node.js dependencies by running:

    ```bash
        npm install
    ```
7. Once the dependencies are installed, compile the frontend assets using Laravel Mix:

    ```bash
        npm run dev
    ```
    If you are preparing the project for production, run:

    ```bash
        npm run prod
    ```
## Run Migrations
8. Run the following command to migrate the database and create the necessary tables:

    ```bash
        php artisan migrate
    ```

## Run Seeders
9. Seed the database with initial data by running:

    ```bash
        php artisan db:seed
    ```
This will populate the database with default data, such as user roles and permissions.

## Run Project

10. Finally, start the Laravel development server:

    ```bash
        php artisan serve
    ```
By default, the server will be available at: http://127.0.0.1:8000

## Accessing the Dashboard

Once the project is running, open your browser and navigate to the dashboard at: http://127.0.0.1:8000/dashboard

## Login Credentials

Use the following credentials to log in:

 - Email: `admin@admin.com`
 - Password: `password`

 
## Notes:
Your Laravel CoreUI dashboard should now be up and running! If you need to make further customizations, refer to the Laravel and CoreUI documentation.

- Replace `your-repo` with the actual GitHub repository URL.
- The login credentials provided are the defaults as per the seeders, but you can modify them as needed.

This `README.md` file provides complete and clear instructions for setting up and running the project. Let me know if you want further customizations!
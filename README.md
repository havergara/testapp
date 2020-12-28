## Installation
To use this, please follow the following steps:

Clone the repository to your servers htdocs directory

    git clone git@github.com:gothinkster/laravel-realworld-example-app.git

Open the .env file located at the root directory of the cloned folder with your text editor and make the following necessary configuration

    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password

Switch to the app directory

    cd this_app_location

Run the database migrations (**Make sure to set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the app at http://localhost:8000

---

## Testing the API

After starting the local development server, the api can be accessed at

    http://localhost:8000/api/projects

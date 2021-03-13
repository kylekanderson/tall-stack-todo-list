# TALL Stack To-Do List
![application screenshot](/screenshots/todo_list.png)

A simple to-do list built using the TALL stack.

## Installation
To install and run the application, first clone the repository:

    git clone https://github.com/kylekanderson/tall-stack-todo-list.git
    
Then, install the application dependencies:

    cd tall-stack-todo-list
    composer install && npm install
Next, setup a .env file with the correct information for your database instance (there is an .env.example file included, which can be used as a starting point).
Once your .env file is configured, you can perform your database migrations and seeding:

    php artisan migrate
    php artisan db:seed

Finally, use Laravel Mix to compile your assets and run a development server for the application:

    npm run dev
    php artisan serve


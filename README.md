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

## Features
New tasks can be added to the task list by entering a description and pressing 'Enter' or clicking on the 'Add' button. Tasks are assigned to the 'To-Do' category by default. For each of the tasks in the 'To-Do' category, clicking on the checkbox next to the task will mark it as complete and move it to the 'Completed' list in real-time. 

The app also supports in-place editing of tasks. To do this, simply double-click on a task and you will have the ability to edit the description of the task in-place (navigating away from the field via clicking or pressing either 'Enter' or 'Escape' will commit your changes to persistent storage). 

There is also some basic validation in place to ensure task descriptions are not empty.


### About
	Application: Task Manager, a laravel 5.4 basic crud application
	Used MySql Database,Ubuntu 16.04, tested locally(127.0.0.1)


### Setup
	Download the project folder, setup the database in mysql or edit the .env file (set DB_DATABASE,DB_USER,DB_PASSWORD accordingly)

	run:
	composer update
	php artisan migrate

### Routes/How To Use
	
	Home Page/All Task = http://127.0.0.1/task
		This route will provide the list of tasks, ordered by id in ascending order.With Edit & Delete Button for each task item.
		Usage: *Home* Button

	New task           = http://127.0.0.1:8000/task/create
		This route will provide a view to create new task with name and description
		Usage: *New Task* Button

	Edit task          = http://127.0.0.1:8000/task/{id}/edit
		This route will provide a view to update a task
		Usage: *Edit* Button with each Task Item



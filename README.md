# TaskQueue

TaskQueue is a simple and efficient Todo List application built with Laravel. It allows users to add, update, and delete tasks to keep track of their daily activities.

## Features

- Add new tasks
- Mark tasks as completed
- Delete tasks
- Responsive design using Bootstrap
- Font Awesome icons for better UI/UX

## Installation

Follow these steps to set up the project locally.

### Prerequisites

- PHP >= 8.0
- Composer
- MySQL or SQLite (or any other database supported by Laravel)
- Node.js and NPM (for Laravel Mix)

### Steps

1. **Clone the repository:**

    ```bash
    git clone https://github.com/TheAhsanFarabi/TaskQueue.git
    cd TaskQueue
    ```

2. **Install dependencies:**

    ```bash
    composer install
    npm install
    ```

3. **Create a copy of the `.env` file:**

    ```bash
    cp .env.example .env
    ```

4. **Generate an application key:**

    ```bash
    php artisan key:generate
    ```

5. **Set up your database:**

    Update your `.env` file with your database credentials. For example:

    ```ini
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=taskqueue
    DB_USERNAME=root
    DB_PASSWORD=password
    ```

6. **Run migrations:**

    ```bash
    php artisan migrate
    ```

7. **Build the assets:**

    ```bash
    npm run dev
    ```

8. **Serve the application:**

    ```bash
    php artisan serve
    ```

    Your application should now be running at `http://localhost:8000`.

## Usage

- **Add a new task:** Use the input field at the top of the page to enter a new task and click the "Add" button.
- **Mark a task as completed:** Click the checkbox next to a task to mark it as completed or not completed.
- **Delete a task:** Click the "Delete" button next to a task to remove it from the list.

## Contributing

If you would like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes.
4. Commit your changes (`git commit -m 'Add some feature'`).
5. Push to the branch (`git push origin feature-branch`).
6. Create a new Pull Request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

## Acknowledgements

- [Laravel](https://laravel.com/)
- [Bootstrap](https://getbootstrap.com/)
- [Font Awesome](https://fontawesome.com/)


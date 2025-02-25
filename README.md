# Gym Management Web Application

This repository contains a fully-featured Gym Management Web Application built using PHP and XAMPP, with a relational database configured through phpMyAdmin. The application is designed to streamline gym operations by providing an intuitive interface for admin and user management, trainer selection, and gym registration.

## Features

- **Admin and User Panels:**
  - Admin panel for managing users, trainers, and gym registrations.
  - User panel for selecting trainers and managing their profiles.

- **Trainer Selection:**
  - Users can choose their preferred trainers from an available list.
  - Simplified and efficient trainer allocation system.

- **Gym Registration:**
  - Easy and fast gym registration process for new users.

## Technologies Used

- **Backend:** PHP
- **Database:** phpMyAdmin (MySQL)
- **Server:** XAMPP

## Installation

1. Clone this repository:
    ```bash
    git clone https://github.com/yourusername/gym-management.git
    ```

2. Start the XAMPP server and ensure Apache and MySQL are running.

3. Import the database:
    - Open phpMyAdmin.
    - Create a new database (e.g., `gym_management`).
    - Import the provided SQL file into the database.

4. Configure the database connection in your PHP files:
    ```php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gym_management";
    ```

5. Navigate to the project directory and run the application in your browser:
    ```
    http://localhost/gym-management
    ```

## Usage

- Admin Login:
  - Access the admin panel to manage users, trainers, and gym information.

- User Registration and Login:
  - Users can register, log in, and choose their preferred trainers.

- Trainer Form Entry:
  - Users can fill out a trainer form to select and manage their desired trainers.

## Contributing

Contributions are welcome! Please open an issue or submit a pull request with your changes.

## License

This project is licensed under the MIT License.

---

Feel free to reach out with any questions or feedback!


## Screenshots
### Login Page
![login page](/images/login.png)
### Members registration page
![Members registration page](/images/member.png)
